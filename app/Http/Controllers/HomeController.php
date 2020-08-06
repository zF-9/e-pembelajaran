<?php

namespace App\Http\Controllers;

use DB;
use Image;
use App\User;
use App\Post;
use App\Gallery;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;


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
        //return view('home');
        return Redirect()->route('homepage');
    }

    public function home_screen() {
        $galleries_preview = DB::Table('galleries')->join('posts','posts.id','galleries.post_id')->get();
        return view('index-new',['previews' => $galleries_preview]);
    }
}
