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

Route::get('/home', 'HomeController@index')->name('home');


////// usertypes routes /////
Route::get('/create/usertype','UserTypesController@create');
Route::post('/create/usertype','UserTypesController@store');
Route::get('/usertype', 'UserTypesController@index');
Route::post('/update/usertype/{id}','UserTypesController@update');
Route::get('/edit/usertype/{id}','UserTypesController@edit');
Route::delete('/delete/usertype/{id}','UserTypesController@destroy');
/////////////////////////

////// uers routes /////
Route::get('/create/user','UsersController@create');
Route::post('/create/user','UsersController@store');
Route::get('/indeviduals', 'UsersController@indexuser');
Route::get('/workers', 'UsersController@indexworker');
Route::get('/operations', 'UsersController@indexoperation');
Route::post('/update/user/{id}','UsersController@update');
Route::get('/edit/user/{id}','UsersController@edit');
Route::delete('/delete/user/{id}','UsersController@destroy');
/////////////////////////

////// requests routes /////
Route::get('/create/request','RequestsController@create');
Route::post('/create/request','RequestsController@store');
Route::get('/request', 'RequestsController@index');
Route::post('/update/request/{id}','RequestsController@update');
Route::get('/edit/request/{id}','RequestsController@edit');
Route::delete('/delete/request/{id}','RequestsController@destroy');
/////////////////////////

////// requests states routes /////
Route::get('/create/requests-state','RequestStatesController@create');
Route::post('/create/requests-state','RequestStatesController@store');
Route::get('/requests-state', 'RequestStatesController@index');
Route::post('/update/requests-state/{id}','RequestStatesController@update');
Route::get('/edit/requests-state/{id}','RequestStatesController@edit');
Route::delete('/delete/requests-state/{id}','RequestStatesController@destroy');
/////////////////////////