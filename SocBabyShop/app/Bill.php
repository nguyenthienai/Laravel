<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
	protected $fillable =['customer_id','dateorder','total','note'];
    public function billdetail()
    {
    	return $this->hasMany('App\BillDetail','bill_id','id');
    }

      public function customer()
    {
    	return $this->belongsTo('App\Customer','customer_id','id');
    }
}
