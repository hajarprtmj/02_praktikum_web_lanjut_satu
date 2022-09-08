<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function halo(){
        return('Halo Dunia!');
    }
}
