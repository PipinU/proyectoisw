<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
       protected $table= "records";
       protected $fillable=['id','id_order','detalle'];

       public function orders(){
       	return $this->belongTo('App\Order','id_order');
       }
}
