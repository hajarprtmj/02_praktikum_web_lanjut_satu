<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nama : Muhammad Hajar Priatmaja <br>
                NIM : 1941720224';
    }

    public function articles($id){
        return 'Halaman Artikel denga ID ' .$id;
    }
}
