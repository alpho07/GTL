@extends('_layout')
@section('content')
<div id="content-block">
    <div class="container be-detail-container">
        <div class="row">
            <div class="col-xs-12 col-md-4 left-feild">
                <div class="be-user-block style-3">
                    <div class="be-user-detail">
                        <a class="be-ava-user style-2" href="blog-detail-2.html">
                            <img src="{{url("getImages/".Auth::user()->avatar)}}" alt=""> 
                        </a>
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
                                            <h5 class="large-popup-title">Send Message To DaVinchi</h5>
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

                        <p class="be-use-name">{{Auth::user()->fname."  ".Auth::user()->lname}}</p>
                        <div class="be-user-info">
                            {{Auth::user()->country}}
                        </div>
                        <div class="be-text-tags style-2">\

                            <a href="#role">UI/UX</a>,
                            <a href="#role">Web Design</a>,
                            <a href="#role">Art Direction</a>
                        </div>
                        <div class="be-user-social">							
                            <a class="social-btn color-1" href="{{ $profiles[0]->facebook}}"><i class="fa fa-facebook"></i></a>
                            <a class="social-btn color-2" href="{{ $profiles[0]->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a class="social-btn color-3" href="{{ $profiles[0]->plus}}"><i class="fa fa-google-plus"></i></a>
                            <a class="social-btn color-4" href="{{ $profiles[0]->pinterest}}"><i class="fa fa-pinterest-p"></i></a>
                            <a class="social-btn color-5" href="{{ $profiles[0]->instagram}}"><i class="fa fa-instagram"></i></a>
                            <a class="social-btn color-6" href="{{ $profiles[0]->linkedin}}"><i class="fa fa-linkedin"></i></a>
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
                <div class="be-desc-block">
                    <div class="be-desc-author">
                        <div class="be-desc-label">About Me</div>
                        <div class="clearfix"></div>
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
                <div class="tab-wrapper style-1">
                    <div class="tab-nav-wrapper">
                        <div  class="nav-tab  clearfix">
                            <div class="nav-tab-item active">
                                <span>Projects</span>
                            </div>
                            <div class="nav-tab-item ">
                                <span>Work In Progress</span>
                            </div>
                            <div class="nav-tab-item ">
                                <span>Appreciated</span>
                            </div> 
                            <div class="nav-tab-item ">
                                <span>Collections</span>
                            </div>                                                               
                        </div>
                    </div>
                    <div class="tabs-content clearfix">
                        <div class="tab-info active"> 
                            <div class="row">
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p1.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">The kitsch destruction of our world</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a1.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p2.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Treebeard</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a2.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>										
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p3.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Colors of Ramadan</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a3.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p6.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Fran Ewald for The Diaries Project</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a6.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p7.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">raindrops monochrome</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a7.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p8.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Racing Queensland</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a7.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p13.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Stay Ahead Series</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a6.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p14.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a5.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p15.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazinen</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a1.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                            </div>
                        </div>
                        <div class="tab-info">
                            <div class="row">
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p8.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Racing Queensland</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a7.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>								
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p12.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Face</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a6.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>								
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p2.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Treebeard</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a1.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p3.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Colors of Ramadan</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a2.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>										
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p4.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Leaving Home - L'Officiel Ukraine</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a3.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p7.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">raindrops monochrome</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a6.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p9.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a7.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p13.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Stay Ahead Series</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a5.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p14.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
                                        <span>
                                            <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
                                            <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
                                            <a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
                                        </span>
                                        <div class="author-post">
                                            <img src="img/a1.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                            <span><i class="fa fa-eye"></i> 789</span>
                                            <span><i class="fa fa-comment-o"></i> 20</span>
                                        </div>
                                    </div>									
                                </div>
                            </div>
                        </div>
                        <div class="tab-info">
                            <div class="row">
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p16.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Wisdom For My Children, Life Lessons Through</a>

                                        <div class="author-post clearfix">
                                            <img src="img/a1.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p17.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Créations Namale</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a2.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>												
                                        </div>
                                    </div>										
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p18.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Crossfit : 15.4 Open Workout</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a3.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p15.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazine</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a6.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p14.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a7.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p13.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Stay Ahead Series</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a7.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p12.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Face</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a6.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p19.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Promoção Facas Extra</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a5.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p11.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Tropicalia</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a1.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p10.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">tomorrow</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a1.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p9.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a1.png" alt="" class="ava-author">
                                            <span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
                                        </div>
                                    </div>									
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="blog-detail-2.html" class="be-img-block">
                                            <img src="img/p8.jpg" alt="omg">
                                        </a>
                                        <a href="blog-detail-2.html" class="be-post-title">Racing Queensland</a>
                                        <div class="author-post clearfix">
                                            <img src="img/a1.png" alt="" class="ava-author">
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
                                <div class="collection-entry">
                                    <a href="blog-detail-2.html" class="portfolio-link type-2 clearfix">
                                        <img src="img/collection_1.jpg" alt="">
                                        <img src="img/collection_2.jpg" alt="">
                                        <img src="img/collection_3.jpg" alt="">
                                        <img src="img/collection_4.jpg" alt="">
                                        <img src="img/collection_5.jpg" alt="">
                                        <div class="color_bg">
                                            <span>view gallery</span>
                                            <span class="child"></span>
                                        </div>
                                    </a>
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
                                    <a href="blog-detail-2.html" class="portfolio-link type-2 clearfix">
                                        <img src="img/collection_6.jpg" alt="">
                                        <img src="img/collection_7.jpg" alt="">
                                        <img src="img/collection_8.jpg" alt="">
                                        <img src="img/collection_9.jpg" alt="">
                                        <img src="img/collection_10.jpg" alt="">
                                        <div class="color_bg">
                                            <span>view gallery</span>
                                            <span class="child"></span>
                                        </div>
                                    </a>
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
                                    <a href="blog-detail-2.html" class="portfolio-link type-2 clearfix">
                                        <img src="img/collection_11.jpg" alt="">
                                        <img src="img/collection_12.jpg" alt="">
                                        <img src="img/collection_13.jpg" alt="">
                                        <img src="img/collection_14.jpg" alt="">
                                        <img src="img/collection_15.jpg" alt="">
                                        <div class="color_bg">
                                            <span>view gallery</span>
                                            <span class="child"></span>
                                        </div>
                                    </a>
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
                                    <a href="blog-detail-2.html" class="portfolio-link type-2 clearfix">
                                        <img src="img/collection_16.jpg" alt="">
                                        <img src="img/collection_17.jpg" alt="">
                                        <img src="img/collection_18.jpg" alt="">
                                        <img src="img/collection_19.jpg" alt="">
                                        <img src="img/collection_20.jpg" alt="">
                                        <div class="color_bg">
                                            <span>view gallery</span>
                                            <span class="child"></span>
                                        </div>
                                    </a>
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
                                    <a href="blog-detail-2.html" class="portfolio-link type-2 clearfix">
                                        <img src="img/collection_16.jpg" alt="">
                                        <img src="img/collection_17.jpg" alt="">
                                        <img src="img/collection_18.jpg" alt="">
                                        <img src="img/collection_19.jpg" alt="">
                                        <img src="img/collection_20.jpg" alt="">
                                        <div class="color_bg">
                                            <span>view gallery</span>
                                            <span class="child"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>                        	                            	
                        </div>                          
                    </div>
                </div> 				
            </div>				
        </div>
    </div>
</div>
@endsection