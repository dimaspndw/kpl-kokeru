<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('welcome');
    }

    public function admin()
    {
        return view('SBAdmin/dashboard');
    }

    public function cs()
    {
        return view('SBAdmin/panel');
    }
}
