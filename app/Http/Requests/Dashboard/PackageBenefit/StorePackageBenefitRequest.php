<?php

namespace App\Http\Requests\Dashboard\PackageBenefit;

use Illuminate\Foundation\Http\FormRequest;

class StorePackageBenefitRequest extends FormRequest
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
            'name_ar'    => 'required',
            'name_en'    => 'required',
            'package_id' => 'required',
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
            'name_ar.required'    => 'الإسم بالعربية مطلوب',
            'name_en.required'    => 'الإسم بالإنجليزية مطلوب',
            'package_id.required' => 'اسم الباقة مطلوب',
        ];
    }
}
