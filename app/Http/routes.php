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
Route::get('login',function(){
    return view('auth/login');
});


//Rotas para login de usuario
Route::controllers([
 'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
 ]);
 
 Route::get('/', ['middleware'=>'auth', function() {

    return view('layout/layout');
    
 }]);
 
 Route::get('logout' , function(){
     Auth::logout();
     return Redirect::to('/');
 });
 
 
 //Rotas de controles protegidos por login...
Route::group(['middleware' => 'auth'], function()
{
    Route::resource('hostels','HostelController');
    
});