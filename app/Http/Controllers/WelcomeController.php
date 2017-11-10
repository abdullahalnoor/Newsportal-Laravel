<?php

namespace App\Http\Controllers;
use App\Category;
use App\News;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index(Request  $request){
        $latestNews =  News::where('publication_status',1)->orderBy('id','desc')->take(4)->get();
       $titleNews =   News::where('publication_status',1)->orderBy('id','desc')->take(1)->first();
       $generalNews =   News::where('publication_status',1)->orderBy('id','desc')->skip(1)->take(2)->get();

       return view('front.home.home-content',[
           'latestNews'=>$latestNews,
           'titleNews'=>$titleNews,
           'generalNews'=>$generalNews

       ]);
   }
   public function showNewsCategoryContent($id){
       $latestNews =  News::where('publication_status',1)->orderBy('id','desc')->take(4)->get();
       $topNews =  News::where('category_id',$id)->orderBy('id','desc')->take(4)->get();
       $bottomNews =  News::where('category_id',$id)->orderBy('id','desc')->take(8)->get();

       return view('front.category.news-category-content',[
           'latestNews'=>$latestNews,
           'topNews'=>$topNews,
           'bottomNews'=>$bottomNews
       ]);
   }
   public function showNewsDetails($id){
       $latestNews =  News::where('publication_status',1)->orderBy('id','desc')->take(4)->get();
       $newsDetails = News::where('id',$id)->first();
       return view('front.details.news-details-content',[
           'latestNews'=>$latestNews,
           'newsDetails'=>$newsDetails
       ]);
   }
}
