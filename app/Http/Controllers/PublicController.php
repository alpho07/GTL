<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use DB;
use Auth;

/**
 * Description of UserController
 *
 * @author Poxy
 */
class PublicController extends Controller {

    function __construct() {
        
    }

    function index($id) {
        return redirect('view_profile2/'.$id);
      
        $user_id = $id;

        $user_details = User::find($id);
        
        $profile_details = Profile::where('user_id', $id)->get();
        $stories = $this->story_tables("text", $user_id);
        $videos = $this->story_tables("videos", $user_id);
         return redirect('view_profile2/'.$id);
       // return view('pages.profile')->with(['details' => $user_details, 'profiles' => $profile_details, 'user_id' => $id, 'stories' => $stories, 'videos' => $videos]);
    }
    function index2($id) {

        $user_id = $id;
        $friends = Auth::user()->friends();
        $user_details = User::find($id);
        $profile_details = Profile::where('user_id', $id)->get();
        $stories = $this->story_tables("text", $user_id);
        $videos = $this->story_tables("videos", $user_id);
        
        return view('pages.profile2')->with(['details' => $user_details, 'profiles' => $profile_details, 'user_id' => $id, 'stories' => $stories, 'videos' => $videos,'friends'=>$friends]);
    }
    
    
     function friends($id) {

        $user_id = $id;

        $user_details = User::find($id);
        $profile_details = Profile::where('user_id', $id)->get();
        $stories = $this->story_tables("text", $user_id);
        $videos = $this->story_tables("videos", $user_id);
        
        return view('pages.friends')->with(['details' => $user_details, 'profiles' => $profile_details, 'user_id' => $id, 'stories' => $stories, 'videos' => $videos]);
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
