<?php

namespace App\Services;

use App\Http\Requests\RequestTransaction;
use App\Models\Application;
use App\Models\ApplicationKey;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class TransactionService
{
    public function transaction(RequestTransaction $request)
    {
        try {
            $applicationKey = ApplicationKey::where('key', $request->header('App-Key'))->first();
            $application = Application::with('businessCategoryType.applicationTransactionUrl', 'config')->where('id', $applicationKey->application_id)->first();
            $urls = $this->extractTransactionUrls($application);
            $currency = $application->config->currency;
            $productName = $application->product_name;
            $productProfileName = $application->product_profile_name;
            $shippingMethod = $application->is_use_shipping_method ? "YES" : "NO";
            $productCategory = $application->businessCategoryType->first()->transaction_type;
            $data = [
                'urls'               => $urls,
                'currency'           => $currency,
                'productName'        => $productName,
                'productProfileName' => $productProfileName,
                'shippingMethod'     => $shippingMethod,
                'productCategory'    => $productCategory
            ];

            $response = $this->sendPaymentRequest($request, $data);
            if ($response['status'] != 'FAILED') {
                $application->transaction()->create([
                    'total_amount'      => $request->total_amount,
                    'tran_id'           => $request->tran_id,
                    'cus_name'          => $request->cus_name,
                    'cus_email'         => $request->cus_email,
                    'cus_add1'          => $request->cus_add1,
                    'cus_add2'          => $request->cus_add2,
                    'cus_city'          => $request->cus_city,
                    'cus_state'         => $request->cus_state,
                    'cus_postcode'      => $request->cus_postcode,
                    'cus_country'       => $request->cus_country,
                    'cus_phone'         => $request->cus_phone,
                    'cus_fax'           => $request->cus_fax,
                    'shipping_method'   => $data['shippingMethod'],
                    'ship_name'         => $request->ship_name,
                    'ship_add1'         => $request->ship_add1,
                    'ship_add2'         => $request->ship_add2,
                    'ship_city'         => $request->ship_city,
                    'ship_state'        => $request->ship_state,
                    'ship_postcode'     => $request->ship_postcode,
                    'ship_country'      => $request->ship_country,
                    'value_a'           => $request->value_a,
                    'value_b'           => $request->value_b,
                    'value_c'           => $request->value_c,
                    'value_d'           => $request->value_d,
                ]);
            }
        }catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }

        return $response;
    }

    private function extractTransactionUrls($application): array
    {
        $applicationTransactionUrls = $application->businessCategoryType->first()->applicationTransactionUrl;

        $urls = [
            'success' => '',
            'fail' => '',
            'cancel' => '',
            'ipn' => '',
        ];

        foreach ($applicationTransactionUrls as $url) {
            switch ($url->category) {
                case 'success':
                    $urls['success'] = $url->url;
                    break;
                case 'fail':
                    $urls['fail'] = $url->url;
                    break;
                case 'cancel':
                    $urls['cancel'] = $url->url;
                    break;
                case 'ipn':
                    $urls['ipn'] = $url->url;
                    break;
            }
        }

        return $urls;
    }

    private function sendPaymentRequest(RequestTransaction $request, $data)
    {
        $client = new Client();

        $postData = [
            'store_id'          => env('SSLC_STORE_ID'),
            'store_passwd'      => env('SSLC_STORE_PASSWORD'),
            'total_amount'      => $request->total_amount,
            'currency'          => $data['currency'],
            'tran_id'           => $request->tran_id,
            'success_url'       => $data['urls']['success'],
            'fail_url'          => $data['urls']['fail'],
            'cancel_url'        => $data['urls']['cancel'],
            'ipn_url'           => $data['urls']['ipn'],
            'product_name'      => $data['productName'],
            'product_profile'   => $data['productProfileName'],
            'product_category'  => $data['productCategory'],
            'cus_name'          => $request->cus_name,
            'cus_email'         => $request->cus_email,
            'cus_add1'          => $request->cus_add1,
            'cus_add2'          => $request->cus_add2 ? $request->cus_add2 : '',
            'cus_city'          => $request->cus_city,
            'cus_state'         => $request->cus_state ? $request->cus_state : '',
            'cus_postcode'      => $request->cus_postcode ? $request->cus_postcode : '',
            'cus_country'       => $request->cus_country,
            'cus_phone'         => $request->cus_phone ? $request->cus_phone : '',
            'cus_fax'           => $request->cus_fax ? $request->cus_fax : '',
            'shipping_method'   => $data['shippingMethod'],
            'ship_name'         => $request->ship_name ? $request->ship_name : '',
            'ship_add1'         => $request->ship_add1 ? $request->ship_add1 : '',
            'ship_add2'         => $request->ship_add2 ? $request->ship_add2 : '',
            'ship_city'         => $request->ship_city ? $request->ship_city : '',
            'ship_state'        => $request->ship_state ? $request->ship_state : '',
            'ship_postcode'     => $request->ship_postcode ? $request->ship_postcode : '',
            'ship_country'      => $request->ship_country ? $request->ship_country : '',
            'value_a'           => $request->value_a ? $request->value_a : '',
            'value_b'           => $request->value_b ? $request->value_b : '',
            'value_c'           => $request->value_c ? $request->value_c : '',
            'value_d'           => $request->value_d ? $request->value_d : '',
        ];

        try {
            $response = $client->request('POST', 'https://sandbox.sslcommerz.com/gwprocess/v4/api.php', [
                'form_params' => $postData
            ]);

            $body = $response->getBody()->getContents();
            $decodedBody = json_decode($body, true);

            return $decodedBody;
        } catch (GuzzleException $exception) {
            return $exception->getMessage();
        }
    }
}
