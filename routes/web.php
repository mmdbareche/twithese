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

Route::get('/', 'PagesController@accueil');

Route::get('accueil', 'PagesController@accueil');

Route::get('login', 'PagesController@login');

Route::get('fonctionnalites', 'PagesController@fonctionnalites');

Route::get('contact', 'PagesController@contact');

Route::get('theses', 'ThesesController@index');
