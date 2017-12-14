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


Route::get('/list', function () {
    return view('list');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/form','PostController@create')->name('form');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/User', 'UserController@index'); //permet de revenir en arrière

Route::get('/User/{id}', 'UserController@view'); //afficher un utilisateur

Route::get('/User/{id}/edit', 'UserController@edit'); //Modifier un utilisateur

Route::post('User/{id}/update', 'UserController@update');//Mettre à jour un utilisateur