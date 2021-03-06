<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\meeting;
use App\User;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        return view('user/home');
    }
}
