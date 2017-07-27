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




<div class="col-xs-12 col-sm-12" id="new_status">
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
            <li><a href="#"><span class="glyphicon glyphicon-camera"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-sunglasses"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a></li>
        </ul>
        <div class="col-xs-5">
            <button class="btn btn-default"><span class="glyphicon glyphicon-cog"></span>Custom<span class="caret"></span></button>
            <button class="btn btn-primary">Post</button>
        </div>
    </div>
</div>
