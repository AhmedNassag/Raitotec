<?php

namespace App\Http\Requests\Dashboard\CustomersService;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomersServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'whatsapp' => 'required|numeric'/*|regex:/(01)[0-9]{9}/|unique:customersservices,phone*/,
            'phone'    => 'required|numeric|'/*|unique:customersservices,phone*/,
        ];
    }


    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'whatsapp.required' => 'رقم التليفون مطلوب',
            'whatsapp.numeric'  => 'رقم التليفون يجب أن يكون رقم',
            // 'whatsapp.unique' => 'رقم التليفون موجود بالفعل مسبقاً',
            'whatsapp.regex'    => 'رقم التليفون يجب أن يبدأ 01',
            'phone.required'    => 'رقم التليفون مطلوب',
            'phone.numeric'     => 'رقم التليفون يجب أن يكون رقم',
            // 'phone.unique'    => 'رقم التليفون موجود بالفعل مسبقاً',
        ];
    }
}
