<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        return view('home');
    }

    public function profile()
    {

        //$user = User::all();
        $user = Auth::user();
        //You need to call posts to retrieve records without the ()
        $posts = $user->posts;
        //dd($posts);
        return view('profile',['posts'=> $posts]);
    }
}
