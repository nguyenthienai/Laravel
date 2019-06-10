<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function typeproduct()
    {
	    	return $this->belongsTo('App\TypeProduct', 'type_products','id','type_id');
    }

      public function bill()
    {
    	return $this->belongsToMany('App\Bill');
    }
}
