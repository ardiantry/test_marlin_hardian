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

/*Route::get('/', function () {
    return view('welcome');
   // Route::get('contents', 'ContentsController@index');
});
Route::get('home', function(){
    return 'Hello world! Halo semuanya, selamat belajar Laravel.';
});
//Route::get('contents', 'ContentsController@index');

Auth::routes();

 Route::get('/', 'HomeController@index')->name('home');
*/
 Route::group(['namespace' => 'soalmarlin'], function () {

			Route::get('/', 'SoalMarlinController@soal2');
			Route::post('cek', 'SoalMarlinController@ceksoal');
			Route::post('cekongkir', 'SoalMarlinController@cekongkir');
	});