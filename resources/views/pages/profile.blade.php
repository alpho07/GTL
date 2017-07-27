@extends('_layout')
@section('content')
<div id="content-block">
    <div class="container be-detail-container">
       
        <div class="row">
             <div class="row">
            @if(Auth::check())
            <div class="alert alert-info"><i class="fa fa-exclamation-circle"></i> Waiting for {{$details['fname']}} to accept your friend request </div>
           @else
           @endif
        </div>
            <div class="col-xs-12 col-md-4 left-feild ">
                <div class="be-user-block style-3 card">
                    <div class="be-user-detail">
                        <a class="be-ava-user style-2" href="blog-detail-2.html">
                            <img src="{{url("getImages/".$details['avatar'])}}" alt=""> 
                        </a>
                        @if(Auth::check())
                        @endif
                        @if(Auth::check())
                        <a href="{{route('editprofile')}}" class="be-ava-left btn color-1 size-2 hover-1"><i class="fa fa-edit"></i>Edit</a>

                        @else
                        <a class="be-ava-left btn color-1 size-2 hover-1"><i class="fa fa-plus"></i>Follow</a>
                        <div class="be-ava-right btn btn-message color-4 size-2 hover-7">
                            <i class="fa fa-envelope-o"></i>message
                            <div class="message-popup">
                                <div class="message-popup-inner container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                            <i class="fa fa-times close-button"></i>
                                            <h5 class="large-popup-title">Send Message To {{$details['fname']."  ".$details['lname']}}</h5>
                                            <div class="form-group">
                                                <textarea class="form-input" required="" placeholder="Your text"></textarea>
                                            </div>

                                            <a class="btn btn-right color-1 size-1 hover-1">send message</a>	
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <p class="be-use-name">{{$details['fname']."  ".$details['lname']}}</p>
                        <div class="be-user-info">
                            {{$details['country']}}
                        </div>
                        <div class="be-text-tags style-2">
                            <?php
                            $tags = explode(",", $details['tags']);
                            ?>
                            @foreach($tags as $t)
                            <a href="{{url('/tags').'/'.$t}}">{{$t}}</a>,
                            @endforeach


                        </div>
                        <div class="be-user-social">							
                            <a class="social-btn color-1" target="_blank" href="{{ $profiles[0]->facebook}}"><i class="fa fa-facebook"></i></a>
                            <a class="social-btn color-2" target="_blank" href="{{ $profiles[0]->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a class="social-btn color-3" target="_blank" href="{{ $profiles[0]->plus}}"><i class="fa fa-google-plus"></i></a>
                            <a class="social-btn color-4" target="_blank" href="{{ $profiles[0]->pinterest}}"><i class="fa fa-pinterest-p"></i></a>
                            <a class="social-btn color-5" target="_blank" href="{{ $profiles[0]->instagram}}"><i class="fa fa-instagram"></i></a>
                            <a class="social-btn color-6" target="_blank" href="{{ $profiles[0]->linkedin}}"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <a class="be-user-site" href="{{ $profiles[0]->website}}"><i class="fa fa-link"></i>    {{ $profiles[0]->website}}</a>
                    </div>
                    <div class="be-user-statistic">
                        <div class="stat-row clearfix"><i class="stat-icon icon-views-b"></i> Projects views<span class="stat-counter">218098</span></div>
                        <div class="stat-row clearfix"><i class="stat-icon icon-like-b"></i>Appreciations<span class="stat-counter">14335</span></div>
                        <div class="stat-row clearfix"><i class="stat-icon icon-followers-b"></i>Followers<span class="stat-counter">2208</span></div>
                        <div class="stat-row clearfix"><i class="stat-icon icon-following-b"></i>Following<span class="stat-counter">0</span></div>
                    </div>
                </div>
                <div class="be-desc-block card">
                    <div class="be-desc-author">
                        <div class="be-desc-label">About Me</div>

                        <div class="be-desc-text">

                            {{ $profiles[0]->about_me}}

                        </div>
                    </div>
                    <div class="be-desc-author">
                        <div class="be-desc-label">My Values</div>
                        <div class="clearfix"></div>
                        <div class="be-desc-text">
                            {{ $profiles[0]->description}}

                        </div>
                    </div>
                    <div class="be-desc-author">
                        <div class="be-desc-label">My Skills</div>
                        <div class="clearfix"></div>
                        <div class="be-desc-text">

                            {{ $profiles[0]->about_me}}
                        </div>
                    </div>
                </div>										
            </div>
            <div class="col-xs-12 col-md-8">
               
                <div class="row col-md-12">
                    <style>

                        h1 {
                            color: #444;
                            text-align: center;
                            text-shadow: 1px 1px #FFF;
                        }

                        #new_status {
                            background-color: #FFF;
                            border-radius: 5px;
                            box-shadow: 1px 0 10px #AAA;
                            font-family: 'Helvetica Neaue', 'Helvetica', sans-serif;
                            margin-top: 1rem;
                            padding: 0;
                        }

                        #post_header {
                            border-bottom: solid #E8E8E8 1px;
                            margin: 0 2%;
                            padding: 0.65rem 0;
                            width: 95.75%;
                        }
                        #post_header li {
                            display: inline-block;
                        }
                        #post_header a {
                            font-size: 1.2rem;
                            padding: 1rem 0;
                            text-decoration: none;
                        }
                        #post_header li+li {
                            border-left: solid #E8E8E8 1px;
                        }
                        #post_header li:first-child a {
                            padding: 0 1rem 0 0;
                        }
                        #post_header li:nth-child(2) a {
                            padding: 0 1rem;
                        }
                        #post_header li:last-child a {
                            padding: 0 0 0 1rem;
                        }
                        #post_header .glyphicon {
                            margin-right: 0.5rem;
                        }

                        #post_content {
                            margin: 0 2%;
                            padding: 0;
                            width: 95.75%;
                        }
                        #post_content img {
                            border: solid #DDD 1px;
                            margin: 1.25rem 0;
                            padding: 0;
                        }
                        #post_content .textarea_wrap {
                            cursor: text;
                        }
                        #post_content textarea {
                            border: 0;
                            margin: 0rem 0 0.5rem 0;
                            outline: 0;
                            padding: 2.5rem 0 0 1.25rem;
                            resize: none;
                        }

                        #post_footer {
                            border-top: solid #E8E8E8 1px;
                            line-height: 3rem;
                            padding: 0 2% 0 3%;
                        }
                        #post_footer .navbar-nav {
                            padding: 0;
                        }
                        #post_footer .navbar-nav li {
                            display: inline-block;
                        }
                        #post_footer .navbar-nav a {
                            display: block;
                            padding: 2rem 1.25rem 2.2rem 1.25rem;
                        }
                        #post_footer .navbar-nav .glyphicon {
                            line-height: 0;
                        }
                        #post_footer :not(.btn) .glyphicon {
                            color: #999;
                        }
                        #post_footer div {
                            padding: 0;
                            text-align: right;
                        }
                        #post_footer .btn {
                            border-radius: 2px;
                            font-size: 1.2rem;
                            font-weight: bold;
                            line-height: 2.2rem;
                            margin-top: 0.75rem;
                            padding: 0 0.75rem;
                            vertical-align: middle;
                        }
                        #post_footer .btn-default {
                            color: #666;
                            margin-right: 0.5rem;
                        }
                        #post_footer .btn-default .glyphicon {
                            color: #666;
                            margin-right: 0.5rem;
                        }
                        #post_footer .caret {
                            color: #666;
                            margin-left: 0.5rem;
                        }
                        #post_footer .btn-primary {
                            background-color: #4e69a2;
                            padding: 0 2rem;
                        }
                    </style>




                    <div class="col-xs-12 col-sm-12 card" id="">
                        <ul class="navbar-nav col-xs-12" id="post_header" role="navigation">
                            <li><a href="#"><span class="glyphicon glyphicon-pencil"></span>Update Status</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-picture"></span>Add Photos/Video</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-th"></span>Create Photo Album</a></li>
                        </ul>
                        <div class="col-xs-12" id="post_content">
                            <img alt="profile picture" class="col-xs-1" src="{{url("getImages/".$details['avatar'])}}"       >
                            <div class="textarea_wrap"><textarea class="col-xs-11" placeholder="What's on your mind?"></textarea></div>
                        </div>
                        <div class="col-xs-12" id="post_footer">
                            <ul class="navbar-nav col-xs-7">
                                <li><a href="#" data-toggle="modal" data-target="#postModal"><span class="glyphicon glyphicon-camera color-1 "></span></a></li>
                                <li><a href="#"  data-toggle="modal" data-target="#postFilm"><span class="glyphicon glyphicon-film"></span></a></li>
<!--                                <li><a href="#"><span class="glyphicon glyphicon-sunglasses"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a></li>-->
                            </ul>
                            <div class="col-xs-5">
<!--                                <button class="btn btn-default"><span class="glyphicon glyphicon-cog"></span>Custom<span class="caret"></span></button>-->
                                <button class="btn color-1 size-5 hover-1">Post</button>
                            </div>
                        </div>
                    </div>

                </div>
      

                @if(Auth::check() && Auth::user()->id == Request::segment(2))
                @php
                $style ='margin-top: 50px;'
                @endphp
                @elseif(Auth::check() && Auth::user()->id !== Request::segment(2))
                @php
                $style ='margin-top: 0px;'
                @endphp
                @else
                @php
                $style ='margin-top: 0px;'
                @endphp
                @endif
                <div class="row col-md-12 BELOW card"  style="{{$style}} padding: 40px;">

                    <div class="tab-wrapper style-1" >
                        <div class="tab-nav-wrapper " >
                            <div  class="nav-tab  clearfix">
                                <div class="nav-tab-item active">
                                    <span>Stories</span>
                                </div>
                                <div class="nav-tab-item ">
                                    <span>Videos</span>
                                </div>
                                <div class="nav-tab-item ">
                                    <span>Photos</span>
                                </div> 
                                <div class="nav-tab-item ">
                                    <span>Insights</span>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="tabs-content clearfix">
                            <div class="tab-info active"> 
                                <div class="row">
                                    <ul class="timeline">
                                        @php $i=1; @endphp
                                        @foreach($stories as $s)
                                        @if(($i % 2)==0)
                                        <li class="timeline-inverted">
                                            @else
                                        <li>
                                            @endif

                                            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="{{ $s->created_at  }}" id=""></i></a></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    @if(  $s->story_type == 'image' )
                                                    <img class="img-responsive" style="width: 100%; height: 100%;" src="{{url("getStoryImages/".$s->image)}}" />
                                                    @else

                                                    @endif


                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        {{$s->caption }}
                                                    </p>

                                                </div>

                                                <div class="timeline-footer">
                                                    <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                                    <a><i class="glyphicon glyphicon-share"></i></a>
                                                    <a class="pull-right">Comment</a>
                                                </div>
                                            </div>
                                        </li>
                                        @php $i++;@endphp
                                        @endforeach



                                    </ul>

                                </div>
                            </div>
                            <div class="tab-info">
                                <div class="row">
                                    @foreach($videos as $v)

                                    @php
                                    $exte = explode('.',$v->video);
                                    $final = end($exte);                                   
                                    @endphp
                                    <div class="col-ml-12 col-xs-6 col-sm-4">

                                        <div class="be-post">
                                            <a href="#" class="be-img-block">
                                            </a>
                                           

                                            <video style="width: 100%; height: 180px;" controls>
                                                <source src="{{url("getStoryVideos/".$v->video)}}" type="video/{{$final}}">
                                                Your browser does not support HTML5 video.
                                            </video>

                                            <div class="author-post">
                                              <a href="#" class="be-post-title">{{$v->caption}}</a>
                                            </div>
                                            <div class="info-block">
                                                <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                                <span><i class="fa fa-eye"></i> 789</span>
                                                <span><i class="fa fa-comment-o"></i> 20</span>
                                            </div>
                                        </div>									
                                    </div>
                                    @endforeach


                                </div>
                            </div>
                            <div class="tab-info">
                                <div class="row">
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">Wisdom For My Children, Life Lessons Through</a>

                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">Créations Namale</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>												
                                            </div>
                                        </div>										
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">Crossfit : 15.4 Open Workout</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazine</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">Stay Ahead Series</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">Face</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">Promoção Facas Extra</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">Tropicalia</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">tomorrow</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post style-4">
                                            <a href="blog-detail-2.html" class="be-img-block">
                                            </a>
                                            <a href="blog-detail-2.html" class="be-post-title">Racing Queensland</a>
                                            <div class="author-post clearfix">
                                                <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                            </div>
                                        </div>									
                                    </div>																											
                                </div>                                                                 
                            </div>
                            <div class="tab-info">
                                <div class="collection">
                                    <h3 class="menu-article">Creative Ideas</h3>
                                    <div class="collection-header">
                                        <span><i class="fa fa-user"></i>by <a href="blog-detail-2.html">Leigh Taylor</a> </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                        <span><i class="fa fa-eye"></i> 789</span>
                                    </div>

                                </div>
                                <div class="collection">
                                    <h3 class="menu-article">Creative Agency</h3>
                                    <div class="collection-header">
                                        <span><i class="fa fa-user"></i>by <a href="blog-detail-2.html">Leigh Taylor</a> </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                        <span><i class="fa fa-eye"></i> 789</span>
                                    </div>
                                    <div class="collection-entry">

                                    </div>
                                </div>
                                <div class="collection">
                                    <h3 class="menu-article">Creative Agency</h3>
                                    <div class="collection-header">
                                        <span><i class="fa fa-user"></i>by <a href="blog-detail-2.html">Inspiration Art</a> </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                        <span><i class="fa fa-eye"></i> 789</span>
                                    </div>
                                    <div class="collection-entry">

                                    </div>
                                </div>
                                <div class="collection">
                                    <h3 class="menu-article">Ideas For Personal Site</h3>
                                    <div class="collection-header">
                                        <span><i class="fa fa-user"></i>by <a href="blog-detail-2.html">Inspiration Art</a> </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                        <span><i class="fa fa-eye"></i> 789</span>
                                    </div>
                                    <div class="collection-entry">

                                    </div>
                                </div> 
                                <div class="collection">
                                    <h3 class="menu-article">Inspiration Photos</h3>
                                    <div class="collection-header">
                                        <span><i class="fa fa-user"></i>by <a href="blog-detail-2.html">Inspiration Art</a> </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                        <span><i class="fa fa-eye"></i> 789</span>
                                    </div>
                                    <div class="collection-entry">

                                    </div>
                                </div>                        	                            	
                            </div>                          
                        </div>
                    </div> 

                </div>				
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {

            var my_posts = $("[rel=tooltip]");
            for (i = 0; i < my_posts.length; i++) {
                the_post = $(my_posts[i]);
                if (the_post.hasClass('invert')) {
                    the_post.tooltip({placement: 'left'});
                    the_post.css("cursor", "pointer");
                } else {
                    the_post.tooltip({placement: 'rigt'});
                    the_post.css("cursor", "pointer");
                }
            }


        });



    </script>
    @endsection