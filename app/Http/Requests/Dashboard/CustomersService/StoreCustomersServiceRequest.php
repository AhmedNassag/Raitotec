<?php

namespace App\Http\Requests\Dashboard\CustomersService;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomersServiceRequest extends FormRequest
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
            'whatsapp' => 'required|numeric|unique:customersservices,whatsapp',
            'phone'    => 'required|numeric|unique:customersservices,phone',
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
            'whatsapp.required' => 'رقم الواتس مطلوب',
            'whatsapp.numeric'  => 'رقم الواتس يجب أن يكون رقم',
            'whatsapp.unique'   => 'رقم الواتس موجود بالفعل مسبقاً',
            'whatsapp.regex'    => 'رقم الواتس يجب أن يبدأ 01',
            'phone.required'    => 'رقم التليفون مطلوب',
            'phone.numeric'     => 'رقم التليفون يجب أن يكون رقم',
            'phone.unique'      => 'رقم التليفون موجود بالفعل مسبقاً',
        ];
    }
}
