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
 
 Route::get('/', ['middleware'=>'auth','as' => 'raiz', function() {
    $user =  Auth::user();
    return view('index', ['user' => $user ]);
 }]);


 Route::get('logout'  ,['as' => 'logout', function(){
     Auth::logout();
     return Redirect::to('/');
 }]);
 
 //Rotulos acesso apenas Admin
 Route::group( ['middleware' => ['auth','acl'], 'prefix'=>'rotulo'] , function()
 {
     Route::get('',['as'=>'rotulo', 'uses'=>'RotuloController@index']);

     Route::get('show-All',['as' => 'rotulo.showAll', 'uses' => 'RotuloController@showAll']);
    
     Route::get('create',['as' => 'rotulo.create', 'uses' => 'RotuloController@create']);

     Route::get('{id}/show',['as'=>'rotulo.show','uses'=>'RotuloController@show']);
    
     Route::get('{id}/edit',['as' =>'rotulo.edit', 'uses' => 'RotuloController@edit']);

     Route::put('{id}/edit',['as' =>'rotulo.edit', 'uses' => 'RotuloController@update']);

     Route::get('{id}/del',['as'=>'rotulo.del','uses'=> 'RotuloController@destroy']);

     Route::post('store',['as'=>'rotulo.store', 'uses'=>'RotuloController@store']);
             
 });
 //Rotas para Hospedes index e create
 Route::group(['middleware' => 'auth' , 'prefix' => 'hospede'] , function() {
     Route::get('', ['as' => 'hospede', 'uses' => 'HospedeController@index']);
     Route::get('create', ['as' => 'hospede.create', 'uses' => 'HospedeController@create']);
     Route::get('validaHospede/{nome}',['as'=> 'hospede.verificaNome', 'uses' => 'HospedeController@verificaSeExistePorNome'] );
     Route::post('store',['as' => 'hospede.store', 'uses' => 'HospedeController@store']);
 });
 
 //Rotas de controles protegidos por login...
Route::group(['middleware' => 'auth'], function()
{
    Route::get('validaUser/{nome}','HostelController@verificaSeExistePorNome');
    Route::resource('hostels','HostelController');
    
    //Rotas para Hospedes index e create

});

Route::get('teste',function()
{
    return \ListaNegra\Hospede::all();
        
});