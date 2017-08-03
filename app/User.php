<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;


class User extends Model  implements AuthenticatableContract {
    use Authenticatable;
    protected $table="users";


    protected $fillable = [
        'name','phone','address','rol','username','password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function orders(){
        return $this->hasMany('App\Order');
    }
}
