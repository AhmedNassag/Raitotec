<?php

namespace App\Http\Requests\Dashboard\ServiceStep;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceStepRequest extends FormRequest
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
            'content_ar.required' => 'المحتوى بالعربية مطلوب',
	    'content_en.required' => 'المحتوى بالإنجليزية مطلوب',
            'photo.required'      => 'الصورة مطلوبة',
        ];
    }
}
