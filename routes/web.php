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

Route::view('home', 'welcome');

Route::get('login', array('uses' => 'Auth\SessionController@showLogin'))->name("login");

Route::post('login', array('uses' => 'Auth\SessionController@doLogin'))->name("login");

Route::get('logout', array('uses' => 'Auth\SessionController@doLogout'));

Route::get('register', array('uses' => 'Auth\RegisterController@showRegister'))->name("register");

Route::post('register', array('uses' => 'Auth\RegisterController@register'))->name("register");