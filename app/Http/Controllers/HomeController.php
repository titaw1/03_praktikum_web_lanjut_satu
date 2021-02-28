<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     return 'Selamat Datang';
    // }
    public function home() {
        $data = array (
            'name' => 'Halaman Home',
            'url' => '<a href="https://www.educastudio.com">https://www.educastudio.com</a>'
        );
        return view('home',$data);
       }
    }
