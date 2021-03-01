<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //
    protected $table = "bill_detail";

     public function products(){
    	return $this->belongsTo('App\Product','product_id','id');
    }

    public function bill(){
    	return $this->belongsTo('App\BillDetail','bill_id','id');
}
