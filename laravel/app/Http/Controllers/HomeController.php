<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $posts = DB::table('posts')->get();
            return view('home')->with(['user' => $user, 'posts' => $posts]);
        } else {
            $posts = DB::table('posts')->get();
            return view('home')->with('posts', $posts);
        }
    }
    public function ComingSoon()
    {
        return view('comingsoon');
    }
}
