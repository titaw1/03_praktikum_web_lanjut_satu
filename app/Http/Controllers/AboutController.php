<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return view('program', ['url' => '<a href="https://www.educastudio.com/about-us">
        https://www.educastudio.com/about-us</a>']);
    }
}
