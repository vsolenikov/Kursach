<?php

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

Auth::routes();



Route::get('/home', 'EventController@index')->name('home');
Route::get('/login', function (){
    return view('auth.login');
})->name('login');
Route::get('/register', function (){
    return view('auth.register');
})->name('register');
Route::get('/about', function (){
    return view('about');
})->name('about');

Route::get('/register_event', function (){
    return view('add_event');
});
Route::post('/add', 'EventController@create')->name('add-event');

