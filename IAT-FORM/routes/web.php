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

Route::get('/intro', 'IntroController@index');

Route::resource('tests', 'TestController')->only([
    'create', 'store'
]);;

Route::resource('questions', 'QuestionController')->only([
    'create', 'store'
]);;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/fin', function () {
    return view('fin');
});
