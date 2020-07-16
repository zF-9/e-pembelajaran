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

        $new_post->date_course = request('');
        $new_post->category = request('category');
        $new_post->location = request('location');
        $new_post->organizer = request('location');
        $new_post->paperwork_title = request('pw_name');
        $new_post->paperwork_file = request('pw_upload');
        $new_post->paperwork_desc = request('pw_desc');
        $new_post->note_title = request('note_name');
        $new_post->note_file = request('note_upload');
        $new_post->note_desc = request('note_desc');
        $new_post->gallery_title = request('gallery_name');
        $new_post->gallery_file = request('gallery_upload');
        $new_post->gallery_desc = request('gallery_desc');
        $new_post->user_id = auth()->user()->id;
        
        $new_post->save();

        return Redirect()->route('/');
    }

    public function update_profile() {
        $sessions = auth()->user()->id;
        //$edit_author = User::where($sessions, '=', 'id');

        User::where('id', '=', $sessions)->update([ 
            'jawatan'=>request(''),
            'gred'=>request(''),
            'agensi'=>request(''),
            'alamat'=>request(''),
        ]);

        /*$edit_author->jawatan = request('');
        $edit_author->gred = request('');
        $edit_author->agensi = request('');
        $edit_author->alamat = request('');
        $edit_author->user_id = auth()->user()->id;

        $edit_author->save();*/

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
            $user->update(); //save()
        }
        return Redirect::back();
    }

}
