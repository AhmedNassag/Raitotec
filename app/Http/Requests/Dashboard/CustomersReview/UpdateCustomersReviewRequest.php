<?php

namespace App\Http\Requests\Dashboard\CustomersReview;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomersReviewRequest extends FormRequest
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
            'user_name_ar' => 'required',
            'user_name_en' => 'required',
            'content_ar'   => 'required',
            'content_en'   => 'required',
            'photo'        => 'nullable|file',
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
            'user_name_ar.required' => 'اسم العميل بالعربية مطلوب',
            'user_name_en.required' => 'اسم العميل بالإنجليزية مطلوب',
            'content_ar.required'   => 'المحتوى بالعربية مطلوب',
            'content_en.required'   => 'المحتوى بالإنجليزية مطلوب',
        ];
    }
}
