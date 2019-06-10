<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name','category_id','description','unitprice','promotionprice','unit','image','status','hot'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
