<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        if (auth()->check() && Auth::user()->roles->name == 'Admin') {
            return Redirect('/admin');
        } elseif (auth()->check() && Auth::user()->roles->name == 'Driver') {
            return Redirect('/driver');
        } else {
            abort(404);
        }
    }
}
