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

Route::get('/buy', 'HedgeController@buy');
Route::post('/submit_order', 'HedgeController@submit_order');

Route::get('/work', function(){

   echo "hello";

});

Route::get('/login', 'HedgeController@login');
Route::post('/signin', 'HedgeController@signin');

Route::get('/register', 'HedgeController@register');
Route::post('/register-post', 'HedgeController@register-post');
