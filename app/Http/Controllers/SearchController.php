<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use DB;
use App\Post;
use Auth;
/**
 * Description of TalentFinder
 *
 * @author Poxy
 */
class SearchController extends Controller {
    
    public function __construct() {
       
        
    }
    
    
    function index(Request $r){
        $keyword = $r->keyword;
        if(!$keyword){
            return redirect()->route('/');
        }
        $result = User::where(DB::raw("CONCAT(fname,' ',lname) "),'LIKE',"%{$keyword}%")
                ->orWhere('fname','LIKE',"%{$keyword}%")
                ->join('profiles','profiles.user_id','=','users.id')->get();       
       return view('pages.search')->with('talents',$result);
    }
    
}
