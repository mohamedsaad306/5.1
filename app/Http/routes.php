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


Route::get('contact/create', 
  ['as' => 'contact1', 'uses' => 'AboutController@create']);


Route::get('contact/dosmt', 
  ['as' => 'contact2', 'uses' => 'AboutController@dosmt']);

Route::get('sayhello/{name}',
	['uses'=>'AboutController@sayhello']);

Route::get('home',function(){
	return view('masterlayout');
});
Route::get('canidates/home','CanidatesController@index');
Route::get('canidates/addnew','CanidatesController@create');
Route::get('canidates/view','CanidatesController@view');

Route::post('canidates/store','CanidatesController@store');