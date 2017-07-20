<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
     protected $table= "ingredients";
    protected $fillable=['id','Nombre','Cantidad'];

    public function coffee(){
    	return $this->belongToMany('App\Coffee','id_coffe');
    }
}
