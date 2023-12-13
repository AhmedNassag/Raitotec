<?php

namespace App\Http\Requests\Dashboard\ProgramAbility;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgramAbilityRequest extends FormRequest
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
            'title_ar' => 'required',
            'title_en' => 'required',
            'photo'    => 'required|file',
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
            'content_ar.required' => 'المحتوى بالعربية مطلوب',
            'photo.required'      => 'الصورة مطلوبة',
        ];
    }
}