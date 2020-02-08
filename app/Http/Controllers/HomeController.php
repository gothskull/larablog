<?php

namespace App\Http\Controllers;

use App\Project;
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

    public function login()
    {
        return view('auth.login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $titulo = 'Escritorio';
        return view('home',compact('titulo'));
    }

    
}
