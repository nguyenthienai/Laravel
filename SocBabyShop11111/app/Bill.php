<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

    public function product()
    {
    	return $this->belongsToMany('App\Product');
    }
}
