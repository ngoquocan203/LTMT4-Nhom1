<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = "bills";

     public function bill_detail(){
    	return $this->hasMany('App\BillDetail','bill_id','id');
    }

    public function customers(){
    	return $this->belongTo('App\Customer','customer_id','id');
}
}
