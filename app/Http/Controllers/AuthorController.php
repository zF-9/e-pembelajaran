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

class AuthorController extends Controller
{
    public function upload_post(Request $request) {
        $new_post = new Post;

        $Todate = date('Y-m-d H:i:s');

        $new_post->date_publish = $Todate; 
        $new_post->date_start = request('date_course_start');
        $new_post->date_end = request('date_course_end');
        $new_post->category = request('category');
        $new_post->location = request('location');
        $new_post->organizer = request('location');

        //paperwork
        $new_post->paperwork_title = request('pw_name');
        $new_post->paperwork_desc = request('pw_desc');
        $file = $request->file('pw_upload');
        $originalname = $file->getClientOriginalName();
        $new_post->paperwork_file = $file->storeAs('public/paperwork', $originalname);
        //$new_post->paperwork_file = request()->file('pw_upload')->store('public/paperwork');

        //Notes
        $new_post->note_title = request('note_name');
        $new_post->note_desc = request('note_desc');
        $file = $request->file('note_upload');
        $originalname = $file->getClientOriginalName();
        $new_post->note_file = $file->storeAs('public/notes', $originalname);
        //$new_post->note_file = request()->file('note_upload')->store('public/notes');

        //galleries
        $new_post->gallery_title = request('gallery_name');
        $new_post->gallery_desc = request('gallery_desc');
        //$file = $request->file('gallery_upload');
        //$originalname = $file->getClientOriginalName();
        //$new_post->gallery_file = $file->storeAs('public/galleries', $originalname);
        //$new_post->gallery_file = request()->file('gallery_upload')->store('public/galleries');

        $new_post->user_id = auth()->user()->id;
        $new_post->save();

        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        if($request->hasfile('filename')) //filename refers to input name that took the file
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/storage/galleries/', $name);  // path: '/storage/galleries/'
                $data[] = $name;  
            }
        }
        $gallery = new Gallery(); //Form() refers to model name signifies table migration
        $gallery->filename=json_encode($data);
        $gallery->post_id = $new_post->id;
        //dd($new_post->id);
        
        $gallery->save();        
        

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
        $personal_post = Post::where('user_id', '=', $sessions)
                        ->join('galleries','galleries.post_id','posts.id')
                        ->get();

        //dd($personal_post->pluck('gallery_file'));
        //dd($personal_post);
        //dd($personal_post[0]->filename);

        /*foreach ($personal_post as $pics){
            $images = json_decode($pics->filename,true); 
            if(is_array($images) && !empty($images))
                foreach($images as $img){
                    $card_bg = $img;
                }
        }*/
        //dd($imgs);

        return view('profile-page', ['post'=>$personal_post, ]);
    }

    public function paperwork_tiles() {
        $all_post = DB::table('posts')->join('galleries','galleries.post_id','posts.id')->get();
        //collect(Post::all()->join('galleries','galleries.post_id','posts.id'));
        //dd($all_post);
        return view('list-course', ['posting'=>$all_post]);
    }

    public function single_article($post_id) {
        // fetch using parameter (id) - join post and user table
        $post_d = DB::table('posts')->where('id', $post_id)->first();
        $post_array = collect($post_d);
        $x = $post_array->get('user_id');
        $user_d = DB::table('users')->where('id', $x)->first();

        $gallery = DB::table('galleries')->where('post_id', $post_id)->first();
        //$data = collect($post_d->merge($user_d));
        //$x = $post_d->get('user_id');
        //dd($data);
        //dd($post_d);

        //collect random new entry 

        return view('post-single', ['post_data'=>$post_d, 'user_data'=>$user_d, 'gallery'=>$gallery]);
    }

    public function gallery_tiles($post_id) {
        $tiles = DB::table('galleries')->where('post_id', $post_id)->get();
        //dd($tiles);
        return view('gallery-demo', ['pics' => $tiles]);
    }

}
