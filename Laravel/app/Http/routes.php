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

use App\Actividad;


Route::get('/', function () {
    //return view('welcome');
    $actividades = Actividad::all();
    return view("actividades", ["actividades"=>$actividades]);
});

Route::get('balance', 'ControllerBalance@list');

Route::get('hola', 'ControllerList@store');

Route::post('/hola', 'ControllerList@store');

/*Route::get("actividades", function () {
	return view("actividades", ["actividades"=>Actividad::all()]);
});*/
