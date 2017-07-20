<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $table="Administrators";
    protected $fillable=['Rut','Nombre','Local'];

   public function roles(){
   	return $this->hasMany('App\Role');
   }
    
}
