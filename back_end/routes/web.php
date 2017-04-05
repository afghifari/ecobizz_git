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

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('user/{id}', function($id) {
    $user = App\User::find($id);

    $password = $user->password;

    $user->fill(request()->all);

    if ($password != $user->password) {
        $user->password = bcrypt($user->password);
    }

    $user->uploadPhoto($user->profile_picture);
    $user->uploadOrganizationChart($user->organization_structure);
    $user->save();
    return view('profile', [ 'user' => $user]);
});

//link profil
Route::get('user/{id}', function($id) {
    $user = App\User::find($id);
    return view('profile', [ 'user' => $user]);
});

Route::post('/uploadPicExample', function() {
    $user = App\User::first();
    $image = request()->file('photo');
    $user->uploadPhoto($image);
    return $user;
});

Route::get('/forum', function() {
    return view('forum');
});