<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class RequestAppRegister extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(Request $request): array
    {
        if ($request->isMethod('post')) {
            $key = 'required|string|unique:application_keys,key';
        }else {
            $key = 'nullable';
        }
        return [
            'application.name' => 'required|string',
            'application.contact_person_name' => 'required|string',
            'application.contact_person_email' => 'required|email',
            'application.country' => 'required|string',
            'application.business_type_name' => 'required|string',
            'application.is_use_shipping_method' => 'required|boolean',
            'application.product_name' => 'required|string',
            'application.product_profile_name' => 'required|string',
            'application_key.key' => $key,
            'config.currency' => 'required|string',
            'business_category_types.*.transaction_type' => 'required|string',
            'business_category_types.*.transaction_urls.*.category' => 'required|string|in:success,fail,cancel,ipn',
            'business_category_types.*.transaction_urls.*.url' => 'required|url',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors(); // Get the list of validation errors

        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors in your request',
            'errors' => $errors->messages(),
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}



