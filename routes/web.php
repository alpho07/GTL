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
Auth::routes();

Route::get('/', ['uses' => 'HomeController@index']);

Route::get('/afterlogout', function () {
    return view('pages.homepage');
});

Route::get('/alert',function(){
    return redirect('/')->with(['info'=>'You have logged in']);
});




Route::post('/register', ['uses' => 'Auth\RegisterController@create', 'as' => 'register']);
Route::post('/simpleupload', ['uses' => 'HomeController@fimage', 'as' => 'simpleupload']);
Route::post('/uvideo', ['uses' => 'HomeController@fvideo', 'as' => 'uvideo']);
Route::post('/uvideo2', ['uses' => 'HomeController_1@fvideo', 'as' => 'uvideo2']);
Route::post('/post', ['uses' => 'HomeController@post_story', 'as' => 'post']);
Route::get('/profile', ['uses' => 'UserController@profile', 'as' => 'profile']);
//Route::get('/profile1/{id}', ['uses' => 'PublicController@index', 'as' => 'viewprofile']);
Route::get('/profile/{id}/{name}', ['uses' => 'PublicController@index2', 'as' => 'viewprofile']);
Route::get('/friends/{id}/{name}', ['uses' => 'PublicController@friends', 'as' => 'viewfriends']);
Route::get('/myfriends/{id}/{name}', ['uses' => 'PublicController@friends', 'as' => 'myfriends']);

Route::get('/tags/{id}', ['uses' => 'TagsController@tag', 'as' => 'tags']);
Route::get('/editprofile', ['uses' => 'UserController@editprofile', 'as' => 'editprofile']);
Route::post('/editprofile', ['uses' => 'UserController@updateprofile', 'as' => 'updateprofile']);
Route::post('/changepass', ['uses' => 'UserController@changepass', 'as' => 'changepass']);
Route::get('/logout', ['uses' => 'UserController@logout', 'as' => 'logout']);
Route::get('/about', ['uses' => 'HomeController@about', 'as' => 'about']);

Route::get('/home', 'HomeController@index');
Route::get('/find', ['uses'=>'SearchController@index', 'as'=>'find.talent']);

Route::get('/progress', function() {
    session_start();
    $key = ini_get("session.upload_progress.prefix") . "myForm";
    if (!empty($_SESSION[$key])) {
        $current = $_SESSION[$key]["bytes_processed"];
        $total = $_SESSION[$key]["content_length"];
        echo $current < $total ? ceil($current / $total * 100) : 100;
    } else {
        echo 100;
    }
});

Route::get('/getLogo/{img}', function($image = null) {
    $path = storage_path() . '/logos/' . $image;
    if (file_exists($path)) {
        return Response::download($path);
    }
});

Route::get('/getImages/{img}', function($image = null) {
    $path = storage_path() . '/app/avatars/' . $image;
    if (file_exists($path)) {
        return Response::download($path);
    }
});
Route::get('/getStoryImages/{img}', function($image = null) {
    $path = storage_path() . '/photos/' . $image;
    if (file_exists($path)) {
        return Response::download($path);
    }
});
Route::get('/getStoryVideos/{video}', function($video = null) {
    $path = storage_path() . '/videos/' . $video;
    if (file_exists($path)) {
        return Response::download($path);
    }
});


