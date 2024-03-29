<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
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
            'name'=>'unique:categories,name|min:2'
        ];
    }

    public function messages()
    {
        return [
            'name.unique'   =>'Tên danh mục đã bị trùng !',
            'name.min'      =>'Tên danh mục quá ngắn!'
        ];
    }
}
