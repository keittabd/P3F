<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halaman_loginController extends Controller
{
    public function index(){
        return view('halaman_login');
    }
}
