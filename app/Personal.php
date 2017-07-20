<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
     protected $table= "personals";
       protected $fillable=['Rut','Nombre','id_role'];

       public function orders(){
       	return $this->hasMany('App\Order','id_order');
       }
       public function role(){
       	return $this->belongTo('App\Role','id_role');
       }
}
