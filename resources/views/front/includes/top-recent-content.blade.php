<div class="recent">
    <ul id="flexiselDemo3">
        @foreach($latestNews as $news)
        <li>
            <div class="team1">
                <a href="{{ url('/news-details/'.$news->id) }}">
                    <img src="{{asset($news->news_image)}}" class="img-responsive" alt=""  style="width: 254px;height: 174px;"/>
                </a>
                <h4><a href="{{ url('/news-details/'.$news->id) }}">{{ $news->news_title }}</a></h4>
                <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
            </div>
        </li>
      @endforeach
    </ul>
    <script type="text/javascript">
        $(window).load(function() {

            $("#flexiselDemo3").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay:false,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="{{asset('/front')}}/js/jquery.flexisel.js"></script>
</div>