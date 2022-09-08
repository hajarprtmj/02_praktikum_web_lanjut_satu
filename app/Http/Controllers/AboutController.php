<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return 'Nama : Muhammad Hajar Priatmaja <br>
                NIM : 1941720224';
    }
}
