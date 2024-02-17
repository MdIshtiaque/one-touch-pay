<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class RequestTransaction extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'total_amount' => 'required|numeric|min:0',
            'tran_id' => 'required|unique:transactions,tran_id',
            'cus_name' => 'required|string',
            'cus_email' => 'required|email',
            'cus_add1' => 'required|string',
            'cus_add2' => 'nullable|string',
            'cus_city' => 'required|string',
            'cus_state' => 'nullable|string',
            'cus_postcode' => 'nullable|string',
            'cus_country' => 'required|string',
            'cus_phone' => 'required|string',
            'cus_fax' => 'nullable|string',
            'ship_name' => 'nullable|string',
            'ship_add1' => 'nullable|string',
            'ship_add2' => 'nullable|string',
            'ship_city' => 'nullable|string',
            'ship_state' => 'nullable|string',
            'ship_postcode' => 'nullable|string',
            'ship_country' => 'nullable|string',
            'value_a' => 'nullable|string',
            'value_b' => 'nullable|string',
            'value_c' => 'nullable|string',
            'value_d' => 'nullable|string',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors(); // Get the list of validation errors

        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors in your request',
            'errors' => $errors->getMessages(),
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
