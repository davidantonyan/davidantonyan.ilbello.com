<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix'=>'admin','namespace' => 'Admin','middleware' => ['web']],function (){
    Route::group(['prefix'=>'auth','namespace'=>'Auth'],function (){
        Route::get('/login',[
            'as' => 'admin.login',
            'uses'=>'AuthController@showLoginForm'
        ]);
        Route::post('/login',[
            'uses'=>'AuthController@login'
        ]);
        Route::get('/logout',[
            'uses'=>'AuthController@logout'
        ]);
    });

    Route::group(['prefix'=>'dashboard','namespace'=>'Dashboard'],function (){
        Route::get('/',[
            'as' => 'admin.dashboard',
            'uses' => 'DashboardController@showDashboard'
        ]);
    });

});

Route::auth();

Route::get('/home', 'HomeController@index');
