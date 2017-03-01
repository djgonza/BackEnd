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
