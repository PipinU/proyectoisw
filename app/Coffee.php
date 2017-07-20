<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $table='coffees';
    protected $fillable=['id','Nombre','Precio'];

    public function orders(){
    	return $this->hasMany('App\Order','id_order');
    }
    public function ingredients(){
    	return $this->belongToMany('App\Ingredient','id_ingredient');
    }
}
