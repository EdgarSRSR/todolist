<?php

use Illuminate\Support\Facades\Route;

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

// задачи
Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/create', 'TaskController@create');

Route::get('/tasks/{task}/edit', 'TaskController@edit');

Route::post('/tasks/create', 'TaskController@store');

Route::put('/tasks/{task}/complete', 'TaskController@complete')->name('nametask.complete');

Route::delete('/tasks/{task}/incomplete', 'TaskController@complete')->name('nametask.complete');

Route::delete('/tasks/{task}/delete', 'TaskController@delete')->name('nametask.delete');


// пользоватедь
Route::get('/users', 'UserController@index')->name('user.index');

Route::get('/users/create', 'UserController@create');

Route::get('/users/{user}/edit', 'UserController@edit');

Route::post('/users/create', 'UserController@store');

Route::patch('/users/{user}/update', 'UserController@update')->name('user.update');

Route::delete('/users/{user}/delete', 'Userontroller@delete')->name('user.delete');

// подзадачи
Route::get('/subtasks', 'SubTaskController@index');

Route::get('/subtasks/create', 'SubTaskController@create');

Route::get('/subtasks/{subtask}/edit', 'SubTaskController@edit');

Route::post('/subtasks/create', 'SubTaskController@store');

Route::put('/Subtasks/{subtask}/complete', 'SubTaskController@complete')->name('namesubtask.complete');

Route::delete('/subtasks/{subtask}/incomplete', 'SubTaskController@complete')->name('namesubtask.complete');

Route::delete('/subtasks/{subtask}/delete', 'SubTaskController@delete')->name('namesubtask.delete');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
