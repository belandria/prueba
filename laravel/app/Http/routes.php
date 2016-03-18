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

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
Route::get("direccion", "PruebaController@index");

Route::group(['middleware' => ['web']], function () {
    //
});
Route::get('prueba', function(){
    return "oK";
});

Route::get('nombre/{nombre}', function($nombre){
    return "Quien te gusta? : ".$nombre;
});
Route::get('edad/{edad}', function($edad){
    return "Un numero? : ".$edad;
});
Route::get('edad2/{edad?}', function($edad = 20){
    return "eres marico si o no?: ".$edad;
});
Route::get("direccion", function() {

    return View("vista");

});
