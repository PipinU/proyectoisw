<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $table="clients";
    protected $fillable=['Rut','Nombre'];

    public function orders(){
    	return $this->hasMany('App\Order','id_order');
    }
}
