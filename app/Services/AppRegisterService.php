<?php

namespace App\Services;


use App\Http\Requests\RequestAppRegister;
use App\Models\Application;
use App\Models\ApplicationKey;
use App\Models\BusinessCategoryType;
use Exception;
use Illuminate\Support\Facades\DB;

class AppRegisterService
{
    public function appRegister(RequestAppRegister $request)
    {
        try {
            DB::beginTransaction();
            $application = Application::create([
                "name"                      => $request->application['name'],
                "contact_person_name"       => $request->application['contact_person_name'],
                "contact_person_email"      => $request->application['contact_person_email'],
                "country"                   => $request->application['country'],
                "business_type_name"        => $request->application['business_type_name'],
                "is_use_shipping_method"    => $request->application['is_use_shipping_method'],
                "product_name"              => $request->application['product_name'],
                "product_profile_name"      => $request->application['product_profile_name']
            ]);

            $application->applicationKey()->create([
                "key" => $request->application_key['key']
            ]);

            $application->applicationConfig()->create([
                'currency' => $request->config['currency']
            ]);

            foreach ($request->business_category_types as $transaction) {
                $businessCategoryType = $application->businessCategoryType()->create([
                    'transaction_type' => $transaction['transaction_type'],
                ]);

                foreach ($transaction['transaction_urls'] as $transactionUrl) {
                    $businessCategoryType->applicationTransactionUrl()->create([
                        'category'  => $transactionUrl['category'],
                        'url'       => $transactionUrl['url'],
                    ]);
                }
            }
            DB::commit();
        }catch (Exception $exception) {
            DB::rollBack();
            throw new Exception('Something went wrong : '. $exception->getMessage());
        }

        return $application;
    }

    public function appEdit(RequestAppRegister $request): void
    {
        try {
            DB::beginTransaction();
            $applicationId = ApplicationKey::where('key', $request->header('App-Key'))->first();
            $applicationId = Application::with('applicationKey', 'applicationConfig', 'businessCategoryType.applicationTransactionUrl')->whereId($applicationId->application_id)->first();
            $applicationId->update([
                "name"                      => $request->application['name'],
                "contact_person_name"       => $request->application['contact_person_name'],
                "contact_person_email"      => $request->application['contact_person_email'],
                "country"                   => $request->application['country'],
                "business_type_name"        => $request->application['business_type_name'],
                "is_use_shipping_method"    => $request->application['is_use_shipping_method'],
                "product_name"              => $request->application['product_name'],
                "product_profile_name"      => $request->application['product_profile_name']
            ]);

            $applicationId->applicationConfig()->update([
                'currency' => $request->config['currency']
            ]);
            $existingTypes = BusinessCategoryType::where('application_id', $applicationId->id)->get();
            foreach ($existingTypes as $type) {
                $type->delete();
            }

            foreach ($request->business_category_types as $transaction) {
                $businessCategoryType = $applicationId->businessCategoryType()->create([
                    'transaction_type' => $transaction['transaction_type'],
                ]);

                foreach ($transaction['transaction_urls'] as $transactionUrl) {
                    $businessCategoryType->applicationTransactionUrl()->create([
                        'category'  => $transactionUrl['category'],
                        'url'       => $transactionUrl['url'],
                    ]);
                }
            }
            DB::commit();
        }catch (Exception $exception) {
            DB::rollBack();
            throw new Exception($exception->getMessage());
        }
    }
}
