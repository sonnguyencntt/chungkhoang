<?php

namespace App\Http\Requests\Manage\Blog;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'hinhanh' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
            'tieude' => 'required|max:100',
            'noidung' => 'required',
            'iddanhmuc' => "required"
        ];
    }
    public function messages()
    {
        return [
            'hinhanh.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
            'hinhanh.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
            'required' => 'Trường :attribute không được để trống',
            'unique' => 'Đã tồn tại trong danh sách',
            'tieude.max' => "Nội dung không quá 100 kí tự"
        ];
    }
}
