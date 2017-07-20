<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coffe extends Model
{
    protected $table='coffes';
    protected $fillable=['id','Nombre','Precio'];

    public function orders(){
    	return $this->hasMany('App\Order','id_order');
    }
    public function ingredients(){
    	return $this->belongToMany('App\Ingredient','id_ingredient');
    }
}
