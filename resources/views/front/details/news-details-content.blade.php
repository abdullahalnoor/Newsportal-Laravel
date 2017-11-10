@extends('front.master')

@section('title')

    News Details

    @endsection

@section('body')

    <div class="col-md-8 banner-bottom-left">
        <div class="banner-bottom-left-grids">
            <div class="single-left-grid">
                @if($newsDetails)
                <h4>{{ $newsDetails->news_title }}</h4>
                <p class="comments">Written by Orman Clark  //  August 4 2010  //  Category One, Category Two  // <a href="#">8 Comments</a></p>
                <img src="{{asset($newsDetails->news_image)}}" class="img-responsive" alt="" />
                    <p class="text">{{ $newsDetails->news_description }} </p>
                    <div class="clearfix"> </div>
                    @endif
            </div>
        </div>
        <!-- post -->
        <div class="post">
            <h3>About the Author</h3>
            <div class="post-grids">
                <div class="col-md-4 post-left">
                    <a href="single.html"><img src="{{asset('/front')}}/images/pic1.jpg" alt="" /></a>
                </div>
                <div class="col-md-8 post-right">
                    <h4><a href="single.html">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                    <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                    <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <h3>Related Posts</h3>
            <div class="col-md-4 post-grids-1">
                <div class="post-left1">
                    <a href="single.html"><img src="{{asset('/front')}}/images/pic2.jpg" class="img-responsive" alt="" /></a>
                </div>
                <div class="post-right1">
                    <h4><a href="#">Fly Fishers Serving as Transports for Noxious Little Invaders</a></h4>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 post-grids-1">
                <div class="post-left1">
                    <a href="single.html"><img src="{{asset('/front')}}/images/pic6.jpg" class="img-responsive" alt="" /></a>
                </div>
                <div class="post-right1">
                    <h4><a href="#">Fly Fishers Serving as Transports for Noxious Little Invaders</a></h4>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 post-grids-1">
                <div class="post-left1">
                    <a href="single.html"><img src="{{asset('/front')}}/images/pic4.jpg" class="img-responsive" alt="" /></a>
                </div>
                <div class="post-right1">
                    <h4><a href="#">Fly Fishers Serving as Transports for Noxious Little Invaders</a></h4>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //post -->
        <div class="respond">
            <h4>Leave a comment</h4>
            <form>
                <input type="text" placeholder="Name" required="">
                <input class="name" type="text" placeholder="Email" required="">
                <textarea placeholder="Message" required=""></textarea>
                <input type="submit" value="Submit Comment">
            </form>
        </div>
    </div>


@endsection