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

Route::get('/backend', 'BackendController@index');

Route::post('/questions', 'BackendController@createQuestion');
Route::get('/questions/view/{question}', 'BackendController@viewQuestion');
Route::get('/questions/deactivate/{question}', 'BackendController@deactivate');
