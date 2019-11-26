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
        if(auth()->user()->isAdmin==1){
            return redirect('my-admin-account');
        } else {
            $posts = Post::all();
            return view('myAccount.index', \compact('posts'));
        }
    }
    

    public function newPost()
    {
        return view('myAccount.posts.create');
    }
}
