<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

    public function billdetail()
    {
    	return $this->hasMany('App\BillDetail');
    }
}
