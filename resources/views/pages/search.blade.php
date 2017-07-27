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
<!-- MAIN CONTENT -->
<div id="content-block">

    <div class="container" style="width:100%;">

        <div style="margin-top: 10px;" class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" style="color:black; border-radius: 0px !important;" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <div class="hidden-xs">Talent Search Results for: "<strong><em>{{Request::input('keyword')}}</em></strong>"</div>
                </button>
            </div>


        </div>

        <div class="col-md-10 col-md-push-1" style="margin-top:10px;">
            <div class="be-user-wrapper row">
                @if(!$talents->count())
                No Results Found.
                @else
                @foreach($talents as $talent)
                <div class="custom-column-5">
                    <div class="be-user-block style-2">
                        <a class="be-ava-user style-2" href="{{url('profile/'.$talent->user_id.'/'.$talent->fname.'.'.$talent->lname)}}">
                            @if($talent->avatar=='')
                              <img src="http://gravatar.com/avatar/0bc83cb571cd1c50ba6f3e8a78ef1346?d=mm" alt="{{$talent->fname.' '.$talent->lname}}"> 
                            @else
                            <img src="{{url("getImages/".$talent->avatar)}}" alt=""> 
                            @endif
                        </a>
                        <div class="be-user-counter">
                            <div class="c_number">17</div>
                            <div class="c_text">projects</div>
                        </div>
                        <a href="{{url('profile/'.$talent->user_id.'/'.$talent->fname.'.'.$talent->lname)}}" class="be-use-name">{{$talent->fname.' '.$talent->lname}}</a>
                        <p class="be-user-info">{{$talent->occupation.','. $talent->city}}</p>
                        <div class="be-text-tags">
                            <?php $tags = explode(',', $talent->tags);?>
                            @foreach($tags as $t)
                            <a href="{{$t}}">{{$t}}</a>,
                            @endforeach
                           
                        </div>
                        <div class="info-block">
                            <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            <span><i class="fa fa-eye"></i> 789</span>
                        </div>
                        
                        <a class="btn color-1 size-2 hover-1" target="_blank" href="{{url('profile/'.$talent->user_id.'/'.$talent->fname.'.'.$talent->lname)}}">
                            
                            
                                <span>view profile</span>
                             
                        </a>
                    </div>
                </div> 
                @endforeach
                @endif
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
