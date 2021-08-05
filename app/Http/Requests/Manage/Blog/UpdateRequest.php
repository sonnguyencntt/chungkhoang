<?php

namespace App\Http\Requests\Manage\Blog;

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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tieude' => 'required|max:100',
            'noidung' => 'required',
            'iddanhmuc' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Trường :attribute không được để trống',
            'tieude.max' => "Nội dung không quá 100 kí tự"
        ];
    }
}
