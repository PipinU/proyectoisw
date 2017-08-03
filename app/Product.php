<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table="products";
    
    protected $fillable = [
       'nombre','descripcion','precio', 
    ];
    
    public function users(){
        return $this->belongsTo('App\User');
    }
     public function orders(){
        return $this->belongsToMany('App\Order');
    }
}
