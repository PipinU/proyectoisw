<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
        protected $table= "roles";
       protected $fillable=['id','id_administrator','nombre'];

       public function administrator(){
       	return $this->belongTo('App\Administrator','id_administrator');
       }
       public function personals(){
       	return $this->hasMany('App\Personal','id_personal');
       }
}
