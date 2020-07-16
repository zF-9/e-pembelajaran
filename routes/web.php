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

Route::get('/list-course', function() {
    return view('list-course-demo1');
});

Route::get('/demo-log', function() {
    return view('auth/login-demo');
})->name('log-reg');

Route::get('/blog', function() {
    return view('blog');
});

Route::get('/search', function() {
    return view('searchbar-minimalist');
});

Route::get('/upload', function() {
    return view('upload-paperwork');
});

Route::get('/profile', function() {
    return view('profile-demo-1');
});

Route::get('/profile-card', function() {
    return view('profile-card');
});

Route::post('/updateAvatar', 'AuthorController@update_avatar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
