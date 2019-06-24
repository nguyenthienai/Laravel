<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name','category_id','description','unitprice','promotionprice','unit','image','status','hot'];

    public function category()
    {
    	return $this->belongsTo('App\Category','category_id','id');
    }

    public function billdetail()
    {
    	return $this->hasMany('App\BillDetail','product_id','id');
    }

     public function comment()
    {
    	return $this->hasMany('App\Comment','product_id','id');
    }
}
