<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('home');
    }
}