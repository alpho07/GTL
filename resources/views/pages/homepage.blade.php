@extends('_layout')
@section('content')
<script type="text/javascript">
    $(document).ready(function () {
        //$(".imgLiquidFill").imgLiquid({fill:true});
        //$('.w3-margin-bottom').css('display','block')
    });
</script>

<style type="text/css" media="screen">
    .w3-half img{                
        object-fit: contain;
        max-height: 500px;
    }

    .imgLiquidFill{
        margin-left: 120px;
        width:500px; 
        height: auto;
        margin-top: 5px;
    }
    .w3-margin-bottom{
        width:400px;
    }

    @media only screen and (max-width: 700px) {
        .imgLiquidFill{
            margin-left: 0px;
            width:100%; 
        }
        .w3-margin-bottom{
            width:100% !important;
        }
    }

</style>
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

<!-- MAIN CONTENT -->
<div id="content-block">
    <div class="head-bg">
        <div class="head-bg-img"></div>
        <div class="head-bg-content">
            <h1>Looking for real Talent, search here...</h1>

            <div class="col-md-6 col-md-offset-3 ">
                <form action="./" class="input-search">
                    <input type="text" required="" placeholder="Football, Volleyball, Dribbling...">
                    <i class="fa fa-search"></i>
                    <input type="submit" value="">
                </form>				
            </div>
        </div>	
    </div>
    <div class="container" style="width:100%;">

        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" style="color:black" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    <div class="hidden-xs">Timeline</div>
                </button>
            </div>
            <div class="btn-group" role="group" >
                <button type="button" id="favorites" class="btn btn-default" style="color:black" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <div class="hidden-xs">STAR TALENTS</div>
                </button>
            </div>

        </div>

        <div class="well" style="background: #FFF;">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">


                    <div class="w3-container w3-content" style="max-width:1400px;margin-top:5px">    
                        <!-- The Grid -->
                        <div class="w3-row">
                            <!-- Left Column -->
                            <div class="w3-col m3" >
                                <!-- Profile -->
                                <div class="w3-card-2 w3-round w3-white" style="padding: 10px;">
                                    <div class="be-vidget">
                                        <h3 class="letf-menu-article">
                                            Popular Talent Cohorts
                                        </h3>
                                        <div class="creative_filds_block">
                                            <div class="ul">
                                                <a href="#football">Football	</a>
                                                <a href="#rugby">Rugby			</a>
                                                <a href="#Basketball">Basketball	</a>
                                                <a href="#artists">Artists		</a>
                                                <a href="#Hockey">Hockey		</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>



                                <!-- Interests --> 
                                <div class="w3-card-2 w3-round w3-white w3-hide-small">
                                    <div class="w3-container">
                                        <div class="be-vidget">
                                            <h3 class="letf-menu-article">
                                                Popular Talents
                                            </h3>
                                            <div class="tags_block clearfix">
                                                <ul>
                                                    <li><a href="#">SS</a></li>
                                                    <li><a href="#">LW</a></li>
                                                    <li><a href="#">RF</a></li>
                                                    <li><a href="#">CB</a></li>
                                                    <li><a href="#">Big Man</a></li>
                                                    <li><a href="#">Point Guard</a></li>
                                                    <li><a href="#">Flanker</a></li>
                                                    <li><a href="#">Winger</a></li>
                                                    <li><a href="#">Forward</a></li>
                                                    <li><a href="#">Rapper</a></li>       
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <!-- Alert Box -->
                                <div style="width:100%" class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
                                    <span onclick="this.parentElement.style.display = 'none'" class="w3-button w3-theme-l3 w3-display-topright">
                                        <i class="fa fa-remove"></i>
                                    </span>
                                    <p><strong>Hey!</strong></p>
                                    <p>Share your talent the word and inspire a great more talents...</p>
                                </div>

                                <!-- End Left Column -->
                            </div>

                            <!-- Middle Column -->
                            <div class="w3-col m7">
                                @if(Auth::check())
                                <div class="w3-row-padding">




                                    <div class="col-xs-12 col-sm-12 card" id="">
                                        <ul class="navbar-nav col-xs-12" id="post_header" role="navigation">
                                            <li><a href="#"><span class="glyphicon glyphicon-pencil"></span>Update Status</a></li>
                                            <li><a href="#"><span class="glyphicon glyphicon-picture"></span>Add Photos/Video</a></li>
                                            <li><a href="#"><span class="glyphicon glyphicon-th"></span>Create Photo Album</a></li>
                                        </ul>
                                        <div class="col-xs-12" id="post_content">
                                            <img alt="profile picture" class="col-xs-1" src="{{url("getImages/".Auth::user()->avatar)}}"       >
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

                                @else

                                @endif

                                @foreach($timeline as $t)
                                <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                                    <a href="{{url('profile/'.$t->user_id."/".$t->fname.".".$t->lname)}}"><img src="{{url('getImages/'.$t->avatar)}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px"></a>
                                    <span class="w3-right w3-opacity">{{\Carbon\Carbon::createFromTimeStamp(strtotime($t->created_at))->diffForHumans()}}</span>
                                    <h4><a href="{{url('profile/'.$t->user_id."/".$t->fname.".".$t->lname)}}">{{$t->fname." ".$t->lname}}</a></h4><br>
                                    <hr class="w3-clear">

                                    <div class="w3-row-padding grayscale" style="background-image: url({{url('public/images/blurredbg.jpg')}}); background-size: cover; filter:blur(3)">
                                        @php
                                        $exte = explode('.',$t->image);
                                        $final = end($exte);                                   
                                        @endphp
                                        @if($t->story_type=='video')
                                        <video style="width: 100%; height: 300px;" controls>
                                            <source src="{{url("getStoryVideos/".$t->image)}}" type="video/{{$final}}">
                                            Your browser does not support HTML5 video.
                                        </video>

                                        @elseif($t->story_type=='image')
                                        <div class="w3-half imgLiquidFill " >
                                            <img src="{{url('getStoryImages/'.$t->image)}}"   alt="" class="w3-margin-bottom">

                                        </div>                                      
                                        @else

                                        @endif

                                    </div>
                                    <p>{{$t->caption}}
                                    <hr>
                                    <span><i class="fa fa-thumbs-up"></i> <a href="#lens">Lens</a></span> 
                                    <span class='w3-margin-bottom'><i class="fa fa-comment"></i>  <a href="#comment">Comment</a></span> 
                                    </p>

                                </div>
                                @endforeach


                            </div>

                            <!-- Right Column -->
                            <div class="w3-col m2">
                                <div class="w3-card-2 w3-round w3-white w3-center">
                                    <div class="w3-container">
                                        <p>Upcoming Events:</p>
                                        <img src="" alt="Forest" style="width:100%;">
                                        <p><strong>Holiday</strong></p>
                                        <p>Friday 15:00</p>
                                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                                    </div>
                                </div>
                                <br>

                                <div class="w3-card-2 w3-round w3-white w3-center">
                                    <div class="w3-container">
                                        <p>Friend Request</p>
                                        <img src="" alt="Avatar" style="width:50%"><br>
                                        <span>Jane Doe</span>
                                        <div class="w3-row w3-opacity">
                                            <div class="w3-half">
                                                <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
                                            </div>
                                            <div class="w3-half">
                                                <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
                                    <p>ADS</p>
                                </div>
                                <br>

                                <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
                                    <p><i class="fa fa-bug w3-xxlarge"></i></p>
                                </div>

                                <!-- End Right Column -->
                            </div>

                            <!-- End Grid -->
                        </div>

                        <!-- End Page Container -->
                    </div>






                </div>
                <div class="tab-pane fade in" id="tab2">
                    <div class="row">

                        <div class="col-md-2 left-feild card" style="padding: 10px;">
                            <div class="be-vidget">
                                <h3 class="letf-menu-article">
                                    Popular Talent Cohorts
                                </h3>
                                <div class="creative_filds_block">
                                    <div class="ul">
                                        <a href="#football">Football	</a>
                                        <a href="#rugby">Rugby			</a>
                                        <a href="#Basketball">Basketball	</a>
                                        <a href="#artists">Artists		</a>
                                        <a href="#Hockey">Hockey		</a>
                                    </div>
                                </div>
                            </div>
                            <div class="be-vidget">
                                <h3 class="letf-menu-article">
                                    Popular Talents
                                </h3>
                                <div class="tags_block clearfix">
                                    <ul>
                                        <li><a href="#">SS</a></li>
                                        <li><a href="#">LW</a></li>
                                        <li><a href="#">RF</a></li>
                                        <li><a href="#">CB</a></li>
                                        <li><a href="#">Big Man</a></li>
                                        <li><a href="#">Point Guard</a></li>
                                        <li><a href="#">Flanker</a></li>
                                        <li><a href="#">Winger</a></li>
                                        <li><a href="#">Forward</a></li>
                                        <li><a href="#">Rapper</a></li>       
                                    </ul>
                                </div>
                            </div>
                            <div class="be-vidget">
                                <h3 class="letf-menu-article">
                                    Filter By
                                </h3>
                                <div class="filter-block">
                                    <ul>
                                        <li><a><i class="fa fa-graduation-cap"></i>Schools</a>
                                            <div class="be-popup">
                                                <h3 class="letf-menu-article">
                                                    Enter School
                                                </h3>
                                                <form action="./" class="input-search">
                                                    <input type="text" required placeholder="Start typing to see list">
                                                </form>
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </li>
                                        <li><a><i class="fa fa-wrench"></i>Tools Used</a>
                                            <div class="be-popup">
                                                <h3 class="letf-menu-article">
                                                    Tools
                                                </h3>
                                                <form action="./" class="input-search">
                                                    <input type="text" required placeholder="Start typing to see list">
                                                </form>
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </li>
                                        <li><a><i class="fa fa-paint-brush"></i>Color</a>
                                            <div class="be-popup be-color-picker">
                                                <h3 class="letf-menu-article">
                                                    Choose color
                                                </h3>
                                                <div class="for-colors">

                                                </div>
                                                <i class="fa fa-times"></i>

                                            </div>
                                        </li>
                                        <li><a><i class="fa fa-camera-retro"></i>Visit Gallery</a>
                                            <div class="be-popup">
                                                <h3 class="letf-menu-article">
                                                    Galerry
                                                </h3>
                                                <form action="./" class="input-search">
                                                    <input type="text" required placeholder="Start typing to see list">
                                                </form>
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>				

                        <div class="col-md-8 card" style="padding: 10px;">
                            @foreach($profiles as $profile)
                            <div class="custom-column-5 " style="width: 210px !important;">
                                <div class="be-post">
                                    <a href="{{url('view_profile').'/'.$profile->id}}" class="be-img-block">

                                        @if(empty($profile->avatar))
                                        <img style="height: 253px !important; height: 143px !important;"  src="{{url('getImages').'/default_avatar.png'}}" alt="omg">

                                        @else
                                        <img  style="height: 253px !important; height: 143px !important;"  src="{{url('getImages').'/'.$profile->avatar}}" alt="omg">
                                        @endif
                                    </a>

                                    <a href="{{url('profile').'/'.$profile->id.'/'.$profile->fname.'.'.$profile->lname}}" class="be-post-title">{{$profile->fname.' '.$profile->lname}}</a>
                                    <span>
                                        <?php
                                        $tags = explode(",", $profile->tags);
                                        ?>
                                        @foreach($tags as $t)
                                        <a href="{{url('/tags').'/'.$t}}">{{$t}}</a>,
                                        @endforeach

                                    </span>
                                    <div class="author-post">


                                        <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                                        <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                                        <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                                        <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                                        <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>

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


                        <div class="col-md-2 card" style="min-height: 805px; background: #fff;">
                            <div class="AD_SPACE">
                                <img src=""/>
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
        $(".btn-pref .btn").click(function () {
            $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
            // $(".tab").addClass("active"); // instead of this do the below 
            $(this).removeClass("btn-default").addClass("btn-primary");
        });
    });
</script>
@endsection
