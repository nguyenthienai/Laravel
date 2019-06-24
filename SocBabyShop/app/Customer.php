<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','email','phone','address'];

      public function bill()
    {
    	return $this->hasMany('App\Bill','customer_id','id');
    }
}
