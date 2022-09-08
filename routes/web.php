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


Route::get('/halo', 'App\Http\Controllers\WelcomeController@halo'); 

Route::get('/', function() {
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return 'Nama : Muhammad Hajar Priatmaja <br> NIM : 1941720224 <br> Kelas : TSA WEB A';
});

Route::get('/articles/{id}', function($id) {
    return 'Halaman Artikel dengan id ' . $id;
});


