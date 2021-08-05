<?php

namespace App\Http\Requests\Manage\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'id_tai_khoan' => "required",
            'ho_va_ten' => "required",
            'sdt' => 'required',
            'email' => "required|email",
        ];
    }

    public function messages()
    {
        return [
            'email.required' => "Vui lòng nhập Email",
            "email.email" => "Email không đúng định dạng",
            'phone.required' => "Vui lòng nhập Email",

            "ho_va_ten" => "Vui lòng nhập họ và tên",
        ];
    }
}
