<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'FrontController@index');
Route::get('/elibrary', 'LibraryController@index');

Route::get('elibrary/list', 'LibraryController@json');

Route::get('/elibrary/login', 'AuthController@login')->name('login');
Route::post('/elibrary/postlogin', 'AuthController@dologin');

Route::get('/elibrary/dashboard', 'LibraryController@dashboard');

//Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {


    Route::get('/siswa', 'SiswaController@index');
    Route::post('/siswa/create', 'SiswaController@create');
    Route::get('/siswa/{id}/edit', 'SiswaController@edit');
    Route::post('/siswa/{id}/update', 'SiswaController@update');
    Route::get('/siswa/{id}/delete', 'SiswaController@destroy');
    Route::get('/siswa/{id}/profil', 'SiswaController@profil');
    Route::get('/siswa/excel', 'SiswaController@excel')->name('excel');
    Route::get('/siswa/pdf','SiswaController@generatePDF');
    Route::post('/siswa/import_excel', 'SiswaController@import_excel');


//guest
Route::post('/guest/create', 'GuestController@create');
//});

Route::group(['middleware' => ['auth', 'checkRole:siswa,admin']], function () {
    Route::get('/dashboard', 'PageController@index');
});

Route::get('/logout', 'AuthController@logout');

Route::get('my-form','HomeController@myform');
Route::post('my-form','HomeController@myformPost')->name('my.form');
Route::get('barcode', 'HomeController@barcode');

