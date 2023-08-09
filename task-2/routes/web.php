<?php

// use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo/create', 'App\Http\Controllers\TodoController@create');

Route::get('/todo', 'App\Http\Controllers\TodoController@index');

Route::get('/todo/{id}', 'App\Http\Controllers\TodoController@find');

