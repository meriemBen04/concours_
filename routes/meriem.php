<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;



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






Route::get('/password',function(){ dd(Hash::make('ADMIN')); }); 
//should be deleted later

// Route::get('login', 'Auth\GestionnaireLoginController@showLoginForm')->name('gestionnaire.login');
// Route::post('/gestionnaire/login', 'Auth\GestionnaireLoginController@login')->name('gestionnaire.login.submit');
// Route::get('/gestionnaire', 'GestionnaireController@index')->name('gestionnaire.home');






