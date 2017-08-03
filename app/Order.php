<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";
    
    protected $fillable = [
       'nombre_cli','fecha','total', 
    ];
    
    public function users(){
        return $this->belongsTo('App\User');
    }
     public function products(){
        return $this->belongsToMany('App\Product');
    }
}
