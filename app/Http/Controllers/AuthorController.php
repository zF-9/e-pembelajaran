<?php

namespace App\Http\Controllers;

use DB;
use Image;
use App\User;
use App\Post;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

class AuthorController extends Controller
{
    public function upload_post() {
        $new_post = new Post;

        $Todate = date('Y-m-d H:i:s');

        $new_post->date_publish = $Todate; 
        $new_post->date_start = request('date_course_start');
        $new_post->date_end = request('date_course_end');
        $new_post->category = request('category');
        $new_post->location = request('location');
        $new_post->organizer = request('location');
        $new_post->paperwork_title = request('pw_name');
        $new_post->paperwork_file = request()->file('pw_upload')->store('public/paperwork');
        $new_post->paperwork_desc = request('pw_desc');
        $new_post->note_title = request('note_name');
        $new_post->note_file = request()->file('note_upload')->store('public/notes');
        $new_post->note_desc = request('note_desc');
        $new_post->gallery_title = request('gallery_name');
        $new_post->gallery_file = request()->file('gallery_upload')->store('public/galleries');
        $new_post->gallery_desc = request('gallery_desc');
        $new_post->user_id = auth()->user()->id;
        
        $new_post->save();

        //return Redirect()->route('/');
        return Redirect::back();
    }

    public function update_profile() {
        $sessions = auth()->user()->id;

        User::where('id', '=', $sessions)->update([ 
            'name'=>request('fullname'),
            'email'=>request('email'),
            'jawatan'=>request('position'),
            'gred'=>request('gred'),
            'agensi'=>request('dept'),
            'alamat'=>request('address'),
        ]);
        return Redirect::back();
    }

    public function update_avatar(Request $request){
        $id = Auth::User()->id;

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar'); 
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $path = public_path('storage/profile_img/' . $filename );
            Image::make($avatar)->resize(300, 300)->save( $path );

            $user = Auth::User();
            $user->avatar = $filename;
            $user->update(); 
        }
        return Redirect::back();
    }

    public function profile_page() {
        $sessions = auth()->user()->id;
        $personal_post = Post::where('user_id', '=', $sessions)->get();
        return view('profile-page', ['post'=>$personal_post]);
    }

    public function paperwork_tiles() {
        $all_post = Post::all();
        dd($all_post);
    }

}
