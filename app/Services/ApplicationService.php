<?php

namespace App\Services;

use App\Models\Application;
use App\Models\ApplicationKey;
use Exception;
use Illuminate\Http\Request;


class ApplicationService
{
    public function getApplication(Request $request): array
    {
        try {
            $applicationKey = ApplicationKey::where('key', $request->header('App-Key'))->first();
            $application = Application::with('businessCategoryType.applicationTransactionUrl', 'config')->where('id', $applicationKey->application_id)->first();
            $data = $this->mapdata($application);
        }catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
        return $data;
    }

    private function mapdata(Application $application): array
    {
        $responseData = [
            'application' => [
                'name'                      => $application->name,
                'contact_person_name'       => $application->contact_person_name,
                'contact_person_email'      => $application->contact_person_email,
                'country'                   => $application->country,
                'business_type_name'        => $application->business_type_name,
                'is_use_shipping_method'    => $application->is_use_shipping_method,
                'product_name'              => $application->product_name,
                'product_profile_name'      => $application->product_profile_name,
            ],
            'config' => [
                'currency' => $application->config->currency,
            ],
            'business_category_types' => $application->businessCategoryType->map(function ($type) {
                return [
                    'transaction_type' => $type->transaction_type,
                    'transaction_urls' => $type->applicationTransactionUrl->map(function ($url) {
                        return [
                            'category'  => $url->category,
                            'url'       => $url->url,
                        ];
                    })->toArray(),
                ];
            })->toArray(),

        ];

        return $responseData;
    }
}
