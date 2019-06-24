<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'image'         =>'image',
            'name'          =>'min:2',
            'unit'          =>'min:2',
            'description'   =>'min:2',
            'unitprice'     =>'numeric|min:0',
            'promotionprice'=>'numeric|min:0'
        ];
    }
    public function messages()
    {
        return [
            'image.image'=>'Vui lòng chọn đúng định dạng file ảnh !',
            'name.min'=>'Tên sản phẩm quá ngắn!',
            'unit.min'=>'Đơn vị tính quá ngắn!',
            'description.min'=>'Mô tả sản phẩm quá ngắn!',
            'unitprice.numeric'=>'Giá sản phẩm phải là số!',
            'promotionprice.numeric'=>'Giá khuyến mãi phải là số!',
            'unitprice.min'=>'Giá sản phẩm phải lớn hơn 0!',
            'promotionprice.min'=>'Giá khuyến mãi phải lớn hơn 0!'
        ];
    }
}
