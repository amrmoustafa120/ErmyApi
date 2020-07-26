<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });




Route::post('registerapi', 'UsersController@registerapi');
Route::post('login', 'UsersController@login');

Route::middleware('auth:api')->group( function () {
    Route::post('/usertype', 'UserTypesController@index');
    Route::post('/create/usertype','UserTypesController@store');
    Route::post('/update/usertype/{id}','UserTypesController@update');
    Route::post ('/delete/usertype/{id}','UserTypesController@destroy');

    Route::post('/userrequests', 'RequestsController@userrequests');
    Route::post('/userstore', 'RequestsController@userstore');
});