<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCustomerRequest extends FormRequest
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
            'name'=>'min:2',
            'phone'=>'numeric|min:10|max:12',
            'address'=>'min:2'
        ];
    }
     public function messages()
    {
        return [
            'name.min'      =>'Tên quá ngắn !',
            'phone.numeric' =>'Số điện thoại phải nhập số!',
            'phone.min'     =>'Số điện thoại ít nhất phải 10 số!',
            'phone.max'     =>'Số điện thoại vượt quá 13 số!',
            'address.min'   =>'Địa chỉ quá ngắn'
        ];
    }
}
