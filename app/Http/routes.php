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


    Route::resource('product','ProductsController');
        Route::get('user/{id}/destroy',[
            'uses'=> 'ProductsController@destroy',
            'as'=>'admin.product.destroy'
            ]);
        
   });
//-------Ruta Cajero---------
Route::group(['prefix'=>'cajero'],function(){
    Route::get('/',function(){
        return view('cajero.index');
    });
    Route::resource('order','OrdersController');
    Route::get('order/{id}/destroy',[
        'uses' => 'OrdersController@destroy',
        'as' => 'cajero.order.destroy'
        ]);

Route::resource('product_order','ProductOrderController');
    Route::get('product_order/{order_id}/{product_id}/destroy',[
        'uses'=>'ProductOrderController@destroy',
        'as'=>'cajero.product_order.destroy'
    ]); 





});





Route::get('/', 'Auth\AuthController@getLogin')->name('login');
Route::post('login', 'Auth\AuthController@postLogin')->name('login');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout');


Route::get('/home', 'HomeController@index');
