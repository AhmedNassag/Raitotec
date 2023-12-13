<?php

namespace App\Http\Requests\Dashboard\ProgramPackage;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProgramPackageRequest extends FormRequest
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
            'title_ar'       => 'required',
            'title_en'       => 'required',
            'monthly_price'  => 'required',
            'annually_price' => 'required',
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
            'title_ar.required'       => 'العنوان بالعربية مطلوب',
            'title_en.required'       => 'العنوان بالإنجليزية مطلوب',
            'monthly_price.required'  => 'السعر الشهري مطلوب',
            'annually_price.required' => 'السعر السنوي مطلوب',
        ];
    }
}
