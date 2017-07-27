<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use DB;

/**
 * Description of UserController
 *
 * @author Poxy
 */
class UserController extends Controller {

    function __construct() {
        $this->middleware('auth');
    }

    function profile() {
        $user_id = Auth::user()->id;
        $user_details = User::find($user_id);
           $stories = $this->story_tables("text", $user_id);
        $videos = $this->story_tables("videos", $user_id);
        $profile_details = Profile::where('user_id', $user_id)->get();
        return view('pages.profile')->with(['details' => $user_details, 'profiles' => $profile_details,'stories' => $stories, 'videos' => $videos]);
    }

    function pub_profile($id) {
        $user_details = User::find($id);
        $profile_details = Profile::where('user_id', $id)->get();
        return view('pages.profile')->with(['details' => $user_details, 'profiles' => $profile_details]);
    }

    function editprofile() {
        $id = Auth::user()->id;
        $user_details = User::find($id);
        $profile_details = Profile::where('user_id', $id)->get();
        return view('pages.editprofile ')->with(['details' => $user_details, 'profiles' => $profile_details]);
    }

    function updateProfile(Request $r) {
        $user_id = Auth::user()->id;

        $destinationPath = 'avatars';

        if ($_FILES['avatar']['tmp_name'] == '') {

            DB::table('users')
                    ->where('id', $user_id)
                    ->update(['fname' => $r->fname,
                        'lname' => $r->lname,
                        'country' => $r->country,
                        'email' => $r->email,
                        'tags' => $r->tags
            ]);
        } else {
            $file = $r->file('avatar')->store($destinationPath);
            $new = explode("/", $file);
            DB::table('users')
                    ->where('id', $user_id)
                    ->update(['fname' => $r->fname,
                        'lname' => $r->lname,
                        'country' => $r->country,
                        'email' => $r->email,
                        'avatar' => $new[1],
                        'tags' => $r->tags
            ]);
        }

        DB::table('profiles')
                ->where('user_id', $user_id)
                ->update(['occupation' => $r->occupation,
                    'company' => $r->company,
                    'city' => $r->city,
                    'website' => $r->website,
                    'facebook' => $r->facebook,
                    'instagram' => $r->instagram,
                    'twitter' => $r->twitter,
                    'pinterest' => $r->pinterest,
                    'about_me' => $r->about_me,
                    'description' => $r->description
        ]);


        return redirect('profile')->with(['message' => 'Update Successful']);
    }

    function logout() {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

    function auth(Request $r) {

        echo $r->email;
    }

    function changepass(Request $r) {



        $user_id = Auth::user()->id;

        $user_details = User::find($user_id);
        $user_details->password = bcrypt($r->newpassword);
        $user_details->save();


        return redirect('editprofile')->with(['message' => 'Password updated succesfully']);
    }
    
    
       function story_tables($table_name, $user_id) {
        if ($table_name == "videos") {
            $story = DB::Select("Select * from $table_name where user_id=$user_id ORDER BY id DESC");
        } else {
            $story = DB::Select("SELECT * FROM(SELECT a.id as id ,a.image,a.caption,a.user_id ,  'image' as story_type , a.created_at FROM `images` a UNION SELECT b.id as id ,' ' as image, b.value as caption ,b. user_id,  'text' as story_type , b.date_added as created_at  from text b) res where res.user_id='$user_id' ORDER BY res.created_at desc");
        }

        return $story;
    }

}
