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

Route::get('/home-page', function() {
    return view('index-new');
})->name('homepage');

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/single-project', function() {
    return view('single-project');
});

Route::get('/single-post', function() {
    return view('single-post');
});

Route::get('/list-course', 'AuthorController@paperwork_tiles');

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

/*Route::get('/profile', function() {
    return view('profile-demo-1');
});*/

Route::get('/profile', 'AuthorController@profile_page');

/*Route::get('/profile-card', function() {
    return view('profile-card');
});*/        



/*Route::get('/test_fx', function() { 
    $ldate = date('Y-m-d H:i:s');
    dd($ldate);
});*/

//Route::get('/profile_fx', 'AuthorController@paperwork_tiles');

Auth::routes();

Route::get('/categories', 'AuthorController@categories')->name('category');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/updateAvatar', 'AuthorController@update_avatar');
Route::post('/updateProfile', 'AuthorController@update_profile');
Route::post('/uploadPost', 'AuthorController@upload_post');
Route::get('/{data}/gallery', 'AuthorController@gallery_tiles')->name('gallery');
Route::get('/{post_id}', 'AuthorController@single_article')->name('article');

