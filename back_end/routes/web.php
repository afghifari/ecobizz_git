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
    $posts = $user->timelines;
    return view('profile', [ 'user' => $user, 'posts' => $posts]);
});

Route::get('user/{id}/edit', function($id) {
    $user = App\User::find($id);
    return view('edit', ['user' => App\User::find($id)]);
});

Route::post('user/{id}/edit', function($id) {
    return request()->all();
});

Route::post('user/{id}/timeline', function($id) {
    $post = new App\TimelinePost;
    $post->user_id = $id;
    $post->message = request()->timeline_post;
    $post->save();
    return Redirect::back();
});


Route::post('/uploadPicExample', function() {
    $user = App\User::first();
    $image = request()->file('photo');
    $user->uploadPhoto($image);
    return $user;
});

Route::get('/forum', function() {
    $forums = App\Forum::all();
    return view('forum', ['forums' => $forums ]);
});

Route::get('/forum/{id}', function($id) {
    $forum = App\Forum::find($id);
    $threads = $forum->threads;
    return view('topik', ['threads' => $threads, 'forum' => $forum ]);
});

Route::get('/thread/{id}', function($id) {
    $thread = App\Thread::find($id);
    $posts = $thread->posts;
    return view('thread', [ 'thread' => $thread,'posts' => $posts ]);
});

Route::post('/thread/{id}', function($id) {
    $post = new App\ForumPost;
    $post->thread_id = $id;
    $post->owner_id = request()->user_id;
    $post->content = request()->comment;
    $post->save();
    return Redirect::back();
});

Route::get('/new', function () {
    return view('newthread');
});