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

Route::get('user', 'UserController@getUser');

Route::get('user/add','UserController@getAddUser');
Route::post('user/add', 'UserController@postAddUser');

Route::get('user/edit/{idUser}', 'UserController@getEditUser');
Route::post('user/edit/{idUser}', 'UserController@postEditUser');

Route::get('user/delete/{idUser}', 'UserController@deleteUser');
Route::get('search', 'UserController@searchUser');





