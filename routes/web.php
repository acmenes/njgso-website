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
    // return('Welcome to the NJGSO website');
});

Route::get('/about', function () {
    // return view('about');
    return('We are not a sandwich.');
});

Route::get('/contact', function (){
    // return view('contact');
    return('Contact us');
});

Route::get('/events', function(){
    // return view('events');
    return('Events');
});

Route::get('blog', function(){
    // return view('blog');
    return('blog');
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
    // return ('List of arrangements');
});
