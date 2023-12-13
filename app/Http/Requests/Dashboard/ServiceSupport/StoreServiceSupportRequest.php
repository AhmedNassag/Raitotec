<?php

namespace App\Http\Requests\Dashboard\ServiceSupport;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceSupportRequest extends FormRequest
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
            'title_ar'   => 'required',
            'title_en'   => 'required',
            'content_ar' => 'required',
            'content_en' => 'required',
            'photo'      => 'required|file',
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
            'title_ar.required'   => 'العنوان بالعربية مطلوب',
	    'title_en.required'   => 'العنوان بالإنجليزية مطلوب',
            'content_ar.required' => 'المحتوى بالعربية مطلوب',
	    'content_en.required' => 'المحتوى بالإنجليزية مطلوب',
            'photo.required'      => 'الصورة مطلوبة',
        ];
    }
}
