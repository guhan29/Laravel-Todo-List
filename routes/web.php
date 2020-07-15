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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', 'TodoController@index');
Route::get('/todos/{id}/edit', 'TodoController@edit');
Route::get('/todos/{id}/delete', 'TodoController@delete');
Route::get('/todos/{id}/toggle', 'TodoController@toggle');
Route::post('/todos/{id}/update', 'TodoController@update')->name('todos.update');
Route::get('/todos/toggle_all', 'TodoController@toggle_all');
Route::get('/todos/delete_completed','TodoController@delete_completed');
Route::get('/todos/delete_all', 'TodoController@delete_all');
Route::post('/todos/create', 'TodoController@create');