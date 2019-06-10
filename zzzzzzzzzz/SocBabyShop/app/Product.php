<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function billdetail()
    {
    	return $this->hasMany('App\BillDetail');
    }

    public function typeproduct()
    {
    	return $this->belongsTo('App\TypeProduct');
    }
}
