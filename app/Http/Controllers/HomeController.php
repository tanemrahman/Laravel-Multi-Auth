<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    public function redirectUser() {
        if(auth()->user()->hasRole('admin')) {
            return redirect()->route('site.url');
        } elseif (auth()->user()->hasRole('seller')) {
            return redirect()->route('site.url');
        } else {
            return redirect()->route('site.url');
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
