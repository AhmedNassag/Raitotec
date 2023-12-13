<?php

namespace App\Http\Requests\Site\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'name'        => 'required',
            'email'       => 'required',
            'phone'       => 'required',
            'description' => 'required',
            'service_id'  => 'required',
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
            'content_ar.required'  => 'الإسم مطلوب',
            'content_en.required'  => 'البريد الإلكترونى مطلوب',
            'video.required'       => 'الوصف مطلوبة',
            'video.required'       => 'نوع الخدمة مطلوبة',
        ];
    }
}
