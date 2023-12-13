<?php

namespace App\Http\Requests\Dashboard\CompanyInformation;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyInformationRequest extends FormRequest
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
            'brief_ar'   => 'required',
            'brief_en'   => 'required',
            'address_ar' => 'required',
            'address_en' => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'whatsapp'   => 'required',
            'twitter'    => 'required',
            'facebook'   => 'required',
            'youtube'    => 'required',
            'instagram'  => 'required',
            'linkedin'   => 'required',
            'snapchat'   => 'required',
            'googleplay' => 'required',
            'appstore'   => 'required',
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
            'brief_ar.required' => 'النبذة بالعربية مطلوب',
            'brief_en.required' => 'النبذة بالإنجليزية مطلوب',
            'address_ar.required' => 'العنوان بالعربية مطلوب مطلوب',
            'address_en.required' => 'العنوان بالإنجليزية مطلوب',
            'email.required' => 'البريد الإلكترونى مطلوب',
            'phone.required'    => 'رقم التليفون مطلوب',
            'whatsapp.required' => 'رقم الواتس مطلوب',
            'twitter.required' => 'رابط تويتر مطلوب',
            'facebook.required' => 'رابط فيس بوك مطلوب',
            'youtube.required' => 'رابط يوتيوب مطلوب',
            'instagram.required' => 'رابط إنستجرام مطلوب',
            'linkedin.required' => 'رابط لينكد إن مطلوب',
            'snapchat.required' => 'رابط سناب شات مطلوب',
            'googleplay.required' => 'رابط جوجل بلاي مطلوب',
            'appstore.required' => 'رابط آب ستور مطلوب',
            'photo.required'        => 'الصورة مطلوبة',
        ];
    }
}
