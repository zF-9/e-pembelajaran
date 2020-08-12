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

    public function search_querries() {
        $search_tag = request('keyword_search');
        $search_category = request('choices-single-defaul');

        //priority goes to keyword search dulu baru check kalau ada category selected atau tidak 
        $existing_post = DB::table('galleries')->join('posts','posts.id','galleries.post_id')
        ->Where('paperwork_title', 'like', '%'.$search_tag.'%') 
        ->orWhere('category', $search_category)
        ->get();
    
        //dd([$search_tag,$search_category]);
        //dd($existing_post);

        return view('list-course', ['posting'=>$existing_post]);
    }
}
