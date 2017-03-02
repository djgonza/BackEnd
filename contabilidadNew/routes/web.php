<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//List Entrys
Route::get('/entry', 'EntryController@index');
//Insert Entry
Route::get('/entry/insert', 'EntryController@create');
Route::post('/entry/insert', 'EntryController@store');
//Update Entry
Route::get('/entry/edit/{id?}', 'EntryController@edit');
Route::post('/entry/update/{id?}', 'EntryController@update');
//Remove Entry
Route::get('/entry/remove/{id?}', 'EntryController@destroy');
//Filter Entrys
Route::post('/entry', 'EntryController@getFilteredEntrys');
//List Concepts
Route::get ('/concept', 'ConceptController@index');
//Insert Concepts
Route::post('/concept/insert', 'ConceptController@store');
//Edit Concepts
Route::get ('/concept/edit/{id?}', 'ConceptController@edit');
Route::post ('/concept/edit/{id?}', 'ConceptController@update');
//Remove Concepts
Route::get ('/concept/remove/{id?}', 'ConceptController@destroy');
//Get Grafics
Route::get ('/grafics', 'GraficsController@index');
