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
use Intervention\Image\ImageManagerStatic;

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
        $new_post->organizer = request('organizer');

        //paperwork
        $new_post->paperwork_title = request('pw_name');
        $new_post->paperwork_desc = request('pw_desc');
        $file_paperwork = $request->file('pw_upload');
        $originalname_paper = $file_paperwork->getClientOriginalName();
        $new_post->paperwork_file = $file_paperwork->storeAs('/storage/paperwork', $originalname_paper);

        //Notes
        $new_post->note_title = request('note_name');
        $new_post->note_desc = request('note_desc');
        $file_note = $request->file('note_upload');
        $originalname_note = $file_note->getClientOriginalName();
        $new_post->note_file = $file_note->storeAs('/storage/notes', $originalname_note);

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
                $name_file = $image->getClientOriginalName();               
                $gallery_path = public_path('/storage/galleries/'. $name_file);  
                Image::make($image)->resize(700, 500)->save($gallery_path);
                $data_imgs[] = $name_file;              
            }
        }

        $gallery = new Gallery(); 
        $gallery->filename=json_encode($data_imgs);
        $gallery->post_id = $new_post->id;
        
        $gallery->save();      
        //dd([$gallery,$new_post]);
        return Redirect()->route('category');
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
        return view('list-course', ['posting'=>$all_post]);
    }

    public function post_by_categories($niche) {
        $niche_post = DB::table('posts')->where('category', $niche)->join('galleries','galleries.post_id','posts.id')->get();

        //dd($niche_post);
        return view('list-course-by-category', ['postings'=>$niche_post]);
    }

    public function single_article($post_id) {
        $post_d = DB::table('posts')->where('id', $post_id)->first();
        $post_array = collect($post_d);
        $x = $post_array->get('user_id');
        $user_d = DB::table('users')->where('id', $x)->first();

        $img_tiles = Gallery::where('post_id', $post_id)->first();
        //dd($post_id);
        return view('post-single', ['post_data'=>$post_d, 'user_data'=>$user_d, 'image_tiles'=>$img_tiles]);
    }


    public function gallery_tiles($post_id) {
        $tiles = DB::table('galleries')->where('post_id', $post_id)->get();
        $course_name = Post::where('id', $post_id)->first();

        return view('gallery', ['pics' => $tiles, 'course' => $course_name]);
    }

    public function categories() {
        $ctg = DB::table('posts')->join('galleries','galleries.post_id','posts.id')->get();

        $ctg_main = collect($ctg->groupBy('category'));
        $ctg_side = $ctg->groupBy('category'); // in blade pass foreach {{ x }} {{ $ctg_side->count() }}

        $latest_post = collect($ctg);

        return view('categories', ['content'=>$ctg_main, 'side_content'=>$ctg_side, 'latest'=>$latest_post]);
    }

}
