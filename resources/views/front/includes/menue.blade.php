<div class="banner-top">
    <span class="menu">MENU</span>
    <ul class="nav banner-nav">
        <li class="active"><a href="{{ url('/') }}">Home</a></li>
    @foreach($categories as $category)
        <li class="dropdown1"><a href="{{ url('/news-category/'.$category->id )}}">{{ $category->category_name }}</a></li>
@endforeach
    </ul>
    <script>
        $("span.menu").click(function(){
            $(" ul.nav").slideToggle("slow" , function(){
            });
        });
    </script>
</div>

                         