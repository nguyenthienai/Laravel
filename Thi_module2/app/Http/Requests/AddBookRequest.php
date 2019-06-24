<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBookRequest extends FormRequest
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
            'name'      =>'unique:books,name',
            'quantity'  =>'digits_between:0,99999999999',
            'xb'        =>'required|date|before_or_equal:today'
        ];
    }

    public function messages()
    {
        return [
            'name.unique'=>'Tên sách đã bị trùng !',
            'quantity.digits_between'=>'Số lượng không được là số âm!',
            'xb.before_or_equal'=>'Ngày xuất bản quá với ngày hiện tại!'
        ];
    }
}
