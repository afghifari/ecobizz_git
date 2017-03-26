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
    return view('home');
});

Auth::routes();

Route::post('/login', function() {
    return request()->all();
});

Route::post('/register', function() {
    return request()->all();
});

Route::post('user/{id}', function($id) {
    return request()->all();
});

//link profil
Route::get('user/{id}', function($id) {
    return App\User::find($id);
});

Route::post('/uploadPicExample', function() {
    $user = App\User::first();
    $image = request()->file('photo');
    $user->uploadPhoto($image);
    return $user;
});

Route::get('/home', 'HomeController@index');
