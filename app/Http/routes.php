<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'admin'],function(){    
    Route::get('/', function () {
    return view('admin.index');
    });
    Route::resource('user','UsersController');
    Route::get('user/{id}/destroy',[
        'uses'  =>  'UsersController@destroy',
        'as'    =>  'admin.user.destroy'
    ]);

   Route::get('user/{id}/edit',[
        'uses'=>'UsersController@edit',
        'as'=>'admin.user.edit'
    ]); 


    Route::resource('ingredient','IngredientsController');
        Route::get('user/{id}/destroy',[
            'uses'=> 'IngredientsController@destroy',
            'as'=>'admin.ingredient.destroy'
            ]);
});
Route::get('login', 'Auth\AuthController@getLogin')->name('login');
Route::post('login', 'Auth\AuthController@postLogin')->name('login');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout');


Route::get('/home', 'HomeController@index');
