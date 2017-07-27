<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Post;
use Auth;

class HomeController_1 extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $data = DB::table('users')->get();

        return view('pages.homepage')->with(['profiles' => $data]);
    }

    public function about() {

        // $data = DB::table('users')->get();

        return view('pages.about_us');
    }

    function fimage(Request $r) {

        if (isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"] == UPLOAD_ERR_OK) {
            ############ Edit settings ##############
            $UploadDirectory = storage_path() . '/photos'; //specify upload directory ends with / (slash)
            ##########################################

            /*
              Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini".
              Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit
              and set them adequately, also check "post_max_size".
             */

            //check if this is an ajax request
            if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {

                die();
            }


            //Is file size is less than allowed size.
            if ($_FILES["FileInput"]["size"] > 5242880) {
                die("File size is too big!");
            }

            //allowed file type Server side check
            switch (strtolower($_FILES['FileInput']['type'])) {
                //allowed file types
                case 'image/png':
                case 'image/gif':
                case 'image/jpeg':
                case 'image/pjpeg':
                case 'text/plain':
                case 'text/html': //html file
                case 'application/x-zip-compressed':
                case 'application/pdf':
                case 'application/msword':
                case 'application/vnd.ms-excel':
                case 'video/mp4':
                    break;
                default:
                    die('Unsupported File!'); //output error
            }

            $files = $r->file("FileInput");
            $ext = $r->file("FileInput")->getClientOriginalExtension();
            $filename = 'image' . date('YMDHis') . '.' . $ext;
            $files->move($UploadDirectory, $filename);
            $this->insert_image($filename, $r);
        }
    }

    function insert_image($filename, $r) {
        $today = date("Y-m-d H:i:s");
        $user = Auth::user()->id;
        $caption = $r->status;
        DB::Insert("INSERT INTO `images` ( `image`, `user_id`, `created_at`, `updated_at`,`caption`) VALUES ( '$filename', '$user', '$today', '$today','$caption')");
    }

    function insert_video($filename, $r) {
        $today = date("Y-m-d H:i:s");
        $user = Auth::user()->id;
        $caption = $r->vstatus;

        DB::Insert("INSERT INTO `videos` ( `video`, `user_id`, `created_at`, `updated_at`,`caption`) VALUES ( '$filename', '$user', '$today', '$today','$caption')");
    }

    function fvideo(Request $r) {
      


        if (isset($_FILES["VideoInput"]) && $_FILES["VideoInput"]["error"] == UPLOAD_ERR_OK) {
            ############ Edit settings ##############
            $UploadDirectory = storage_path() . '/videos'; //specify upload directory ends with / (slash)
            ##########################################

            /*
              Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini".
              Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit
              and set them adequately, also check "post_max_size".
             */

            //check if this is an ajax request
            if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {

                die();
            }


            //Is file size is less than allowed size.
            if ($_FILES["VideoInput"]["size"] > 40242880) {
                die("File size is too big!");
            }

            //allowed file type Server side check
            switch (strtolower($_FILES['VideoInput']['type'])) {
                //allowed file types
                case 'video/mp4':
                case 'video/mkv':
                case 'video/MKV':
                case 'video/flv':
                case 'video/wmv':
                case 'video/mov':
                case 'video/3gp':
                case 'video/ogg':
                case 'video/avi':
                case 'video/amv':
                case 'video/mpg':
                case 'video/mpeg':
                case 'video/m4v':
                    break;
                default:
                    die('Unsupported File!'); //output error
            }


            $files = $r->file("VideoInput");
            $ext = $r->file("VideoInput")->getClientOriginalExtension();
            $filename = 'video' . date('YMDHis') . '.' . $ext;
            $files->move($UploadDirectory, $filename);
            $this->insert_video($filename, $r);
        } else {
            die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
        }
    }

    function post_story(Request $r) {

        //Save Text Stories


        $text = $r->status;
        $today = date("Y-m-d H:i:s");
        $user = Auth::user()->id;
        DB::table('text')->insert(['value' => $text, 'user_id' => $user, 'date_added' => $today]);
        // DB::Insert("INSERT INTO `videos` ( `video`, `user_id`, `created_at`, `updated_at`,`caption`) VALUES ( '$NewFileName', '$user', '$today', '$today','$caption')");
//        DB::transaction(function (Request $r) {
//            
//        }, 3);
    }

}
