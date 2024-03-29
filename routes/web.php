<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio', function() {
    return view('portfolio');
});



Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});


Route::get('/single-project', function() {
    return view('single-project');
});

/*Route::get('/single-post', function() {
    return view('single-post');
});*/



/*Route::get('/demo-log', function() {
    return view('auth/login-demo');
})->name('log-reg');*/

Route::get('/blog', function() {
    return view('blog');
});

Route::get('/search', function() {
    return view('searchbar-minimalist');
});

Route::get('/upload', function() {
    return view('upload-paperwork');
});

Route::get('/gallery-setup/{post_no}', function() {
    return view('upload-gallery');
})->name('gallery_setup');

/*Route::get('/profile', function() {
    return view('profile-demo-1');
});*/



/*Route::get('/profile-card', function() {
    return view('profile-card');
});*/        



/*Route::get('/test_fx', function() { 
    $ldate = date('Y-m-d H:i:s');
    dd($ldate);
});*/

//Route::get('/profile_fx', 'AuthorController@paperwork_tiles');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home-page', 'HomeController@home_screen')->name('homepage');
Route::get('/profile', 'AuthorController@profile_page')->name('profilepage');
Route::post('/uploadPost', 'AuthorController@upload_post');
Route::post('/uploadGallery', 'AuthorController@upload_gallery')->name('upload_gallery');
Route::get('/categories', 'AuthorController@categories')->name('category');
Route::get('/list-course', 'AuthorController@paperwork_tiles');
Route::get('/list-course-by-category/{category}', 'AuthorController@post_by_categories');
Route::post('/updateAvatar', 'AuthorController@update_avatar');
Route::post('/updateProfile', 'AuthorController@update_profile');
Route::get('/{data}/gallery', 'AuthorController@gallery_tiles')->name('gallery');
Route::get('/post/{post_id}', 'AuthorController@single_article')->name('article');

Route::post('/search_scope', 'HomeController@search_querries');

