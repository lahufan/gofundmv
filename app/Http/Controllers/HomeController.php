<?php

namespace App\Http\Controllers;

use App\Post;
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
    public function index()
    {
        return view('home');
    }

    public function myAccount()
    {
        $posts = Post::all();
        return view('myAccount.index', \compact('posts'));
    }

    public function myAdminAccount()
    {
        return view('myAdminAccount.index');
    }

    

    public function newPost()
    {
        return view('myAccount.posts.create');
    }
}
