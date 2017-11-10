@extends('front.master')

@section('title')
    Home
 @endsection
@section('body')

    <div class="col-md-8 banner-bottom-left">
        <div class="banner-bottom-left-grids">
            <div class="col-md-6 banner-left-grid">
                <ul>
                    <li><h3>Finance</h3></li>
                    <li class="mor">
                        <a class="view" href="#">view more...</a>
                    </li>
                </ul>
                <div class="clearfix"> </div>

                @if( $titleNews  )
                <a href="{{ url('/news-details/'.$titleNews->id) }}"><img src="{{ asset($titleNews->news_image) }}" class="img-responsive" alt="" /></a>
                <h4><a href="single.html">{{ $titleNews->news_title }}</a></h4>
                <p class="comments">{{ $titleNews->created_at }}  <a href="#">8 Comments</a></p>
                <p class="text">{{ $titleNews->category_description }}</p>
                @endif
                @foreach( $generalNews as $news )
                <h5><a href="single.html">{{ $news->news_title }}</a></h5>
                 @endforeach
            </div>
            <div class="col-md-6 banner-left-grid">
                <ul>
                    <li><h3>World News</h3></li>
                    <li class="mor">
                        <a class="view" href="#">view more...</a>
                    </li>
                </ul>
                <a href="single.html"><img src="{{asset('/front')}}/images/7.jpg" class="img-responsive" alt="" /></a>
                <h4><a href="single.html">But I must explain to you how mistaken</a></h4>
                <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
                <h5><a href="single.html">But who has any right to find fault with</a></h5>
                <h5><a href="single.html"> pleasure that has no annoying consequen</a></h5>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="banner-bottom-left-grids">
            <div class="col-md-6 banner-left-grid">
                <ul>
                    <li><h3>Sport</h3></li>
                    <li class="mor">
                        <a class="view" href="#">view more...</a>
                    </li>
                </ul>
                <a href="single.html"><img src="{{asset('/front')}}/images/8.jpg" class="img-responsive" alt="" /></a>
                <h4><a href="single.html">Silicon Valley Shows Signs of Dot-Com</a></h4>
                <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
                <h5><a href="single.html">vitae dicta sunt explicabo. Nemo enim</a></h5>
                <h5><a href="single.html">Numquam eius tempora incidunt labore</a></h5>

            </div>
            <div class="col-md-6 banner-left-grid">
                <ul>
                    <li><h3>Politics</h3></li>
                    <li class="mor">
                        <a class="view" href="#">view more...</a>
                    </li>
                </ul>
                <a href="single.html"><img src="{{asset('/front')}}/images/9.jpg" class="img-responsive" alt="" /></a>
                <h4><a href="single.html">explain to you how all this mistaken idea</a></h4>
                <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
                <h5><a href="single.html"> denouncing pleasure and praising pain </a></h5>
                <h5><a href="single.html">To take a trivial example, which of</a></h5>

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="banner-bottom-left-grids">
            <div class="col-md-6 banner-left-grid">
                <ul>
                    <li><h3>Lifestyle</h3></li>
                    <li class="mor">
                        <a class="view" href="#">view more...</a>
                    </li>
                </ul>
                <h5><a href="single.html">At vero eos et accusamus et iusto</a></h5>
                <h5><a href="single.html">Ducimus qui blanditiis praesentium</a></h5>
                <h5><a href="single.html">Nam libero tempore, cum soluta nobis</a></h5>
                <h5><a href="single.html">Temporibus autem quibusdam et aut </a></h5>
                <h5><a href="single.html">voluptates repudiandae sint et molestia</a></h5>
            </div>
            <div class="col-md-6 banner-left-grid">
                <ul>
                    <li><h3>Culture</h3></li>
                    <li class="mor">
                        <a class="view" href="#">view more...</a>
                    </li>
                </ul>
                <h5><a href="single.html">Beguiled and demoralized by the charms</a></h5>
                <h5><a href="single.html"> with righteous indignation and dislike</a></h5>
                <h5><a href="single.html">when our power of choice is untrammelle</a></h5>
                <h5><a href="single.html">The wise man therefore always holds</a></h5>
                <h5><a href="single.html">pleasures to secure other greater </a></h5>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- post -->

        <!-- //post -->
    </div>


@endsection