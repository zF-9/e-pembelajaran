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

        //Notes
        $new_post->note_title = request('note_name');
        $new_post->note_desc = request('note_desc');
        $file = $request->file('note_upload');
        $originalname = $file->getClientOriginalName();
        $new_post->note_file = $file->storeAs('public/notes', $originalname);

        //galleries
        $new_post->gallery_title = request('gallery_name');
        $new_post->gallery_desc = request('gallery_desc');
        $new_post->user_id = auth()->user()->id;
        $new_post->save();

        //multiple file upload on galleries table
        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        if($request->hasfile('filename')) 
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/storage/galleries/', $name);  
                $data[] = $name;  
            }
        }
        $gallery = new Gallery(); 
        $gallery->filename=json_encode($data);
        $gallery->post_id = $new_post->id;
        
        $gallery->save();        
        
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

        return view('profile-page', ['post'=>$personal_post, ]);
    }

    public function paperwork_tiles() {
        $all_post = DB::table('posts')->join('galleries','galleries.post_id','posts.id')->get();
        //collect(Post::all()->join('galleries','galleries.post_id','posts.id'));
        //dd($all_post);
        return view('list-course', ['posting'=>$all_post]);
    }

    public function single_article($post_id) {
        $post_d = DB::table('posts')->where('id', $post_id)->first();
        $post_array = collect($post_d);
        $x = $post_array->get('user_id');
        $user_d = DB::table('users')->where('id', $x)->first();

        $gallery = DB::table('galleries')->where('post_id', $post_id)->first();
        return view('post-single', ['post_data'=>$post_d, 'user_data'=>$user_d, 'gallery'=>$gallery]);
    }

    public function gallery_tiles($post_id) {
        $tiles = DB::table('galleries')->where('post_id', $post_id)->get();
        return view('gallery-demo', ['pics' => $tiles]);
    }

    public function categories() {
        $ctg = DB::table('posts')->join('galleries','galleries.post_id','posts.id')->get();
        //->groupBy('category')); // {{ }}

        $ctg_main = collect($ctg->groupBy('category'));
        $ctg_side = $ctg->groupBy('category'); // in blade pass foreach {{ x }} {{ $ctg_side->count() }}

        //$randomizor = array_random($ctg_main, 1);
        //$random_post = Post::orderBy(\DB::raw('RAND()'))->get();

        //dd($ctg_side);
        /*foreach($ctg_side as $key => $ctg_data){
            //dd($ctg_data);
            foreach($ctg_data as $key => $x){
                dd($x->filename);
            }
        }*/

        //return $ctg_side;
        $latest_post = collect($ctg);
        //dd($latest_post[0]->filename);

        return view('categories', ['content'=>$ctg_main, 'side_content'=>$ctg_side, 'latest'=>$latest_post]);
    }

}
