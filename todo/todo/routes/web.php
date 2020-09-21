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



// START 
Route::get('/view',[
    'uses' => 'TodoController@show',
    'as'   => 'view'
]);
Route::get('/delete/{id}',[
    'uses' => 'TodoController@destroy',
    'as'   => 'delete'
]);
Route::get('/add',[
    'uses' => 'TodoController@add',
    'as'   => 'add'
]);
Route::post('formSubmit',[
    'uses' => 'TodoController@store',
    'as'   => 'formSubmit'
]);
Route::get('/edit/{id}',[
    'uses' => 'TodoController@edit',
    'as'   => 'edit'
]);
Route::post('update',[
    'uses' => 'TodoController@update',
    'as'   => 'update'
]);