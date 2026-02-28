<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   // Home page
    public function index()
    {
        return view('website.home');
    }

    // Services page
    // public function contact()
    // {
    //     return view('website.contact');
    // }
}
