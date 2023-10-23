<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use app\Http\Controllers\P_manage_Controller;
// use app\HomePage;

class P_manage_Controller extends Controller
{
    function Home(){
        return view('HomePage');
    }
    function About(){
        return view('AboutPage');
    }
    function Contact(){
        return view('ContactPage');
    }
}
