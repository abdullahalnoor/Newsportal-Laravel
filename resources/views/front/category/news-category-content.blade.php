@extends('front.master')

@section('title')

    @endsection

@section('body')

    <!-- banner-bottom-left -->
    <div class="col-md-8 banner-bottom-left">
        <div class="ar-ch">
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Nullam id dolor</p>
        </div>
        <div class="banner-bottom-left-grids">
            @foreach($topNews->take(6) as $news )
            <div class="col-md-6 banner-left-grid">
                <div class="clearfix"> </div>
                <a href="{{ url('/news-details/'.$news->id) }}"><img src="{{asset($news->news_image)}}" style="width: 300px;height:250px;" class="img-responsive" alt="" /></a>
                <h4><a href="single.html">{{ $news->news_title }}</a></h4>
                <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
            </div>
            @endforeach
           <div class="clearfix"> </div>
        </div>
        <div class="banner-bottom-left-grids">

            @foreach($bottomNews->take(8) as $news )
            <div class="col-md-6 banner-left-grid">
                <div class="blog-grids">
                    <div class="blog-grid-left">
                        <img src="{{asset($news->news_image)}}" style="width: 80px ;height:60px;" alt="" />
                    </div>
                    <div class="blog-grid-right">
                        <a href="single.html">{{ $news->news_title }}</a>
                        <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            @endforeach

            <div class="clearfix"> </div>
        </div>

       <nav>
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- //post -->
    </div>


@endsection