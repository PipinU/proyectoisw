<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
      protected $table= "orders";
    protected $fillable=['id','descripcion','fecha','Hora','id_client','id_coffe','id_personal','monto'];

    public function client(){
    	return $this->belongsTo('App\Client','id_client');
    }
    public function coffe(){
    	return $this->belongsTo('App\Coffee','id_coffe');
    }
    public function personal(){
    	return $this->belongsTo('App\Personal','id_personal');
    }
    public function records(){
        return $this->hasMany('App\Record','id_record');
    }

   
}
