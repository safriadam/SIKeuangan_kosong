<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('dashboard', function () {
    return view('dashboard'); 
});

Route::get('anggaran',function() {
	return view('anggaran.index');
});

Route::get('anggaran/create',function() {
	return view('anggaran.create');
});

Route::post('anggaran/search','AnggaranController@search');

Route::resource('anggaran','AnggaranController');
Route::resource('realisasi','RealisasiController');
Route::resource('pemasukan','PemasukanController');
Route::resource('laporan','LaporanController');

Route::auth();


// route::get('auth/login',function(){
	
// 	return view('auth.login');
// });

// route::Post('auth/login',function(){

// 	return view('dashboard');
// });

// route::get('auth/register',function(){
	
// 	return view('auth.register');
// });


Route::get('/', 'HomeController@index');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
