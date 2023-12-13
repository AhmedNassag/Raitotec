<?php

namespace App\Http\Requests\Dashboard\AboutUs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsRequest extends FormRequest
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
            'content_ar' => 'required',
            'content_en' => 'required',
            'video'      => 'required',
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
            'content_ar.required'  => 'المحتوى بالعربية مطلوب',
            'content_en.required'  => 'المحتوى بالإنجليزية مطلوب',
            'content_en.required'  => 'رابط الفيديو مطلوب',
        ];
    }
}
