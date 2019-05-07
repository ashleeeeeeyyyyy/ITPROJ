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

//Login Module Routes
Route::get('/', 'LoginController@index');
Route::post('/login/checkLogin', 'LoginController@checklogin');
Route::get('/login/successlogin', 'LoginController@successlogin');
Route::get('/login/logout', 'LoginController@logout');

//User Registration Module Routes
Route::get('/register', function(){
    return view('/register');
});

Route::get('/register', 'RegisterController@register');
Route::post('/register', 'RegisterController@register');

//Reservation Module Routes
Route::get('/user/reservation/confirmation', function(){
    return view('user/reservation/confirmation');
});

Route::get('/user/reservation/dashboard', function(){
    return view('user/reservation/dashboard');
});

Route::get('/user/reservation/history', function(){
    return view('user/reservation/history');
});

Route::get('/user/reservation/reports', function(){
    return view('user/reservation/reports');
});

Route::get('/user/reservation/reservation', function(){
    return view('user/reservation/reservation');
});

Route::get('/user/reservation/reservation2', function(){
    return view('user/reservation/reservation2');
});

Route::get('/user/reservation/settings', function(){
    return view('user/reservation/settings');
});

