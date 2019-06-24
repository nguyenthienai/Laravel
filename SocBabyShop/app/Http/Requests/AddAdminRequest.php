<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAdminRequest extends FormRequest
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
            'name'      =>'min:2',
            'email'     =>'unique:users,email|email',
            'password'  =>'min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.min'      =>'Tên quá ngắn!',
            'email.unique'  =>'Email này đã được đăng ký !',
            'email.email'   =>'Email không đúng định dạng!',
            'password.min'  =>'Mật khẩu quá ngắn!'
        ];
    }
}
