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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/events', function(){
    return view('events');
});

Route::get('blog', function(){
    return view('blog');
});

### MEMBER ROUTES ###

Route::post('/register', function(){
    return ('registered!');
});

Route::get('/members/login', function(){
    return view('login');
});

Route::get('/members/arrangements', function(){
    return view('arrangements');
});
