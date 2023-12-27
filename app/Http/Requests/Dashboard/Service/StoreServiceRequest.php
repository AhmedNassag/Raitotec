<?php

namespace App\Http\Requests\Dashboard\Service;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'first_title_ar'    => 'required|unique:services,first_title_ar',
            'first_content_ar'  => 'required',
            'first_title_en'    => 'required|unique:services,first_title_en',
            'first_content_en'  => 'required',
            'second_title_ar'   => 'required',
            'second_content_ar' => 'required',
            'second_title_en'   => 'required',
            'second_content_en' => 'required',
            'photo'             => 'required|file',
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
            'first_title_ar.required'    => 'العنوان الأول بالعربية مطلوب',
            'first_content_ar.required'  => 'المحتوى الأول بالعربية مطلوب',
            'first_title_en.required'    => 'العنوان الأول بالإنجليزية مطلوب',
            'first_content_en.required'  => 'المحتوى الأول بالإنجليزية مطلوب',
            'second_title_ar.required'   => 'العنوان الثانى بالعربية مطلوب',
            'second_content_ar.required' => 'المحتوى الثانى بالعربية مطلوب',
            'second_title_en.required'   => 'العنوان الثانى بالإنجليزية مطلوب',
            'second_content_en.required' => 'المحتوى الثانى بالإنجليزية مطلوب',
            'photo.required'             => 'صورة المدونة مطلوبة',
        ];
    }
}
