<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us', ['url' => '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>']);

    }
}
