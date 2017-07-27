<!DOCTYPE html>
<html>
    <head>
        <title>Global Talent Lens</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="apple-touch-icon" sizes="57x57" href="{{url('public/images/')}}apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{url('public/images/')}}apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('public/images/')}}apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{url('public/images/')}}apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('public/images/')}}apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{url('public/images/')}}apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{url('public/images/')}}apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{url('public/images/')}}apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('public/images/')}}apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{url('public/images/')}}android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('public/images/')}}favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{url('public/images/')}}favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('public/images/')}}favicon-16x16.png">
        <link rel="manifest" href="{{url('public/images/')}}manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{url('public/images/')}}ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="{{url('public/style/bootstrap.min.css')}}">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{url('public/style/icon.css')}}">
        <link rel="stylesheet" href="{{url('public/style/loader.css')}}">
        <link rel="stylesheet" href="{{url('public/style/idangerous.swiper.css')}}">
        <link rel="stylesheet" href="{{url('public/style/stylesheet.css')}}">
        <link rel="stylesheet" href="{{url('public/style/dropzone.css')}}">
        <link rel="stylesheet" href="{{url('public/js/dropzone.js')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
.LENSLOGIN li{
    display: inline;
}
        </style>
    </head>
    <body>

        <!-- THE LOADER -->

        <div class="be-loader">
            <div class="spinner">
                <div class="spinner-container container1">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                </div>
                <div class="spinner-container container2">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                </div>
                <div class="spinner-container container3">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                </div>
            </div>
        </div>
        <!-- THE HEADER -->
        <header style="background: #222835;">
            <div class="container-fluid custom-container">
                <div class="row no_row row-header">
                    <div class="brand-be">
                        <a href="{{url('/')}}"><img src="{{url('getLogo/GlobalTalentLens.png')}}" height="52px;" alt="logo" class="be_logo">
                        </a>
                    </div>
                    <div class="header-menu-block">
                        <button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
                        <ul class="header-menu" id="one">
                            <li class="active-header"><a href="{{url('/')}}">Talents</a><i class="fa fa-angle-down"></i>
                                <!--                                <ul>
                                                                    <li>
                                                                        <a href="activity.html">ACTIVITY</a>
                                                                        <i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i>
                                                                        <ul>
                                                                            <li><a href="page1.html">PAGE 1</a></li>
                                                                            <li><a href="page2.html">PAGE 2</a></li>
                                                                            <li><a href="page3.html">PAGE 3</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="search.html">SEARCH</a></li>
                                                                </ul>-->
                            </li>
                            <li><a href="#scouts">Scouts</a><i class="fa fa-angle-down"></i>
                                <!--                                <ul>
                                                                    <li><a href="author-edit.html">AUTHOR EDIT</a></li>
                                                                    <li><a href="author-login.html">AUTHOR LOGIN</a></li>
                                                                    <li><a href="messages.html">MESSAGES</a></li>
                                                                    <li><a href="messages-2.html">MESSAGES 2</a></li>
                                                                </ul>-->
                            </li>
                            <li><a href="#coaches">Coaches</a><i class="fa fa-angle-down"></i>
                                <!--                                <ul>
                                                                    <li><a href="blog.html">BLOG</a></li>							
                                                                    <li><a href="blog-2.html">BLOG 2</a></li>						
                                                                    <li><a href="blog-3.html">BLOG 3</a></li>
                                                                    <li><a href="statictics.html">STATISTICS</a></li>
                                                                    <li><a href="faq.html">FAQ</a></li>
                                                                    <li><a href="about-us.html">ABOUT US</a></li>
                                                                    <li><a href="contact-us.html">CONTACT US</a></li>
                                                                    <li><a href="shortcodes.html">SHORTCODES</a></li>
                                                                </ul></li>-->
                            </li>

                            <li><a href="#find">Search</a><i class="fa fa-angle-down"></i>
                                <ul style="width:200px; height: auto;">
                                    <li style="width:200px;">
                                        <form action="{{route('find.talent')}}" method='get' class="input-search">
                                            <input  type="text" name='keyword' required="" placeholder="Find Talent">
                                            <i class="fa fa-search"></i>
                                            <input type="submit" value="">
                                        </form>	
                                    </li>							

                                </ul>
                            </li>




                        </ul>




                    </div>
                    @if(Auth::check())

                    <div class="login-header-block">

                        <div class="login_block">																	
                            <a class="notofications-popup" href="#friend-requests">
                                <i class="fa fa-bell-o"></i>
                                <span class="noto-count">{{Auth::user()->friendRequests()->count()}}</span>
                            </a>
                            <div class="noto-popup notofications-block">
                                <div class="noto-label">Your Friend Requests</div>
                                <div class="noto-body">
                                   @foreach(Auth::user()->friendRequests() as $req)
                                    <div class="noto-entry">
                                        <div class="noto-content clearfix">
                                            <div class="noto-img">	
                                                <a href="{{url('profile/'.$req->id)}}">

                                                </a>
                                            </div>
                                            <div class="noto-text">
                                                <div class="noto-text-top">
                                                    <span class="noto-name">
                                                            <a href="{{url('profile/'.$req->id.'/'.$req->fname.'.'.$req->lname)}}">
                                                             @if(!$req->avatar)
                             <img src="http://gravatar.com/avatar/gdhghgahd66ad65d65adadh?d=mm" alt=""> 
                             @else
                             <img src="{{url("getImages/".$req->avatar)}}" alt="" width="80px" height="80px"> 
                             @endif
                                                              </a></span>
                                                <span class="noto-date"><a href='{{url('profile/'.$req->id.'/'.$req->fname.'.'.$req->lname)}}'><i class="fa fa-user"></i> {{$req->fname.' '.$req->lname}}</a></span>
                                                </div>
                                                <a href="blog-detail-2.html" class="noto-message">Accept friend Request</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    											
                                </div>							
                            </div>
                            <a class="messages-popup" href="blog-detail-2.html">
                                <i class="fa fa-envelope-o"></i>
                                <span class="noto-count">4</span>
                            </a>
                            <div class="noto-popup messages-block">
                                <div class="noto-label">Your Messages <span class="noto-label-links"><a href="messages-2.html">compose</a><a href="messages.html">View all messages</a></span></div>
                                <div class="noto-body">
                                    <div class="noto-entry style-2">
                                        <div class="noto-content clearfix">
                                            <div class="noto-img">	
                                                <a href="blog-detail-2.html">

                                                </a>
                                            </div>
                                            <div class="noto-text">
                                                <div class="noto-text-top">
                                                    <span class="noto-name"><a href="blog-detail-2.html">Ravi Sah</a></span>
                                                    <span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
                                                </div>
                                                <div class="noto-message">Sed velit mauris, pulvinar sit amet accumsan vitae, egestas, pulvinar sit amet accumsan vitae, egestas</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noto-entry style-2">
                                        <div class="noto-content clearfix">
                                            <div class="noto-img">	
                                                <a href="blog-detail-2.html">

                                                </a>
                                            </div>
                                            <div class="noto-text">
                                                <div class="noto-text-top">
                                                    <span class="noto-name"><a href="blog-detail-2.html">Louis Paquet</a></span>
                                                    <span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
                                                </div>
                                                <div class="noto-message">
                                                    Pellentesque habitant morbi tristique senectus et netus tristique senectus
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noto-entry style-2">
                                        <div class="noto-content clearfix">
                                            <div class="noto-img">	
                                                <a href="blog-detail-2.html">

                                                </a>
                                            </div>
                                            <div class="noto-text">
                                                <div class="noto-text-top">
                                                    <span class="noto-name"><a href="blog-detail-2.html">Cüneyt ŞEN</a></span>
                                                    <span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
                                                </div>
                                                <div class="noto-message">
                                                    Sed id erat vitae libero malesuada dictum vel sit amet eros
                                                </div>
                                            </div>
                                        </div>
                                    </div>								
                                    <div class="noto-entry style-2">
                                        <div class="noto-content clearfix">
                                            <div class="noto-img">	
                                                <a href="blog-detail-2.html">

                                                </a>
                                            </div>
                                            <div class="noto-text">
                                                <div class="noto-text-top">
                                                    <span class="noto-name"><a href="blog-detail-2.html">Tomasz Mazurczak</a></span>
                                                    <span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
                                                </div>
                                                <div class="noto-message">
                                                    In molestie libero quis cursus ullamcorper eu rhoncus magna
                                                </div>
                                            </div>
                                        </div>
                                    </div>												
                                </div>							
                            </div>

                            <div class="be-drop-down login-user-down">
                                <img class="login-user" width="60px" src="{{url("getImages/".Auth::user()->avatar)}}" alt="">
                                <span class="be-dropdown-content">Hi, <span>{{Auth::user()->fname.' '.Auth::user()->lname}}</span></span>
                                <ul class="drop-down-list">                                  
                                    <li><a href="{{route('profile')}}" onclick="window.location.href ='{{route('profile')}}'">My Profile</a></li>
                                    <li><a href="{{route('logout')}}" onclick="window.location.href ='{{route('logout')}}'">Logout</a></li>

                                </ul>
                            </div>																		
                        </div>	
                    </div>

                    @else
                    <div class="login-header-block">
                        <div class="login_block">
                            <ul class="LENSLOGIN">
                                <li>
                                    <a  class="btn btn-login color-4-1 " href="blog-detail-2.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</a>

                                </li>
                                <li>
                                    <a class="btn btn-login color-4-1  be-register " href="blog-detail-2.html"><i class="fa fa-lock"></i>Signup</a>

                                </li>
                            </ul>
                        </div>	
                    </div>
                    @endif
                </div>
            </div>
        </header>
