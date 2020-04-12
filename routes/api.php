<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/user', function () {

    $user = [
      'user_name' => 'edgar',
      'password' => 'fakepasswordlol'
    ];
    return $user;
});

Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/subtasks', 'SubTaskController@index');
Route::post('/subtask', 'SubTaskController@store');
Route::delete('/subtask/{subtask}', 'SubTaskController@destroy');
