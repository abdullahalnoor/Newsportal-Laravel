<?php

namespace App\Http\Controllers;
use App\News;
use App\Category;
use Illuminate\Http\Request;
use Auth;
use Image;
use DB;



class NewsController extends Controller
{
    public function showAddNewsForm(){
       $category = Category::get();
        return view('admin.news.add-news-form',['category'=>$category]);
    }



    public function saveNewsInfo(Request $request){

        $newsImage = $request->file('news_image');
        $imageName =$newsImage->getClientOriginalName();
        $directory = 'news_images/';
        $imageUrl = $directory.$imageName;
        Image::make($newsImage)->save($imageUrl);

        $news = new News();
        $news->author_name = Auth::user()->name;
        $news->news_title = $request->news_title;
        $news->category_id = $request->category_id;
        $news->news_description = $request->news_description;
        $news->news_image = $imageUrl;
        $news->publication_status = $request->publication_status;

        $news->save();
        return redirect('/news/add-news')->with('message','News Info save successfully ');
    }
    public function showManageInfo(){
        $news = DB::table('news')
            ->join('categories','news.category_id','=','categories.id')
            ->select('news.*','news.category_id','categories.category_name')
            ->get();
        return view('admin.news.manage-news-form',['news'=>$news]);
    }

    public function unpublishedNewsInfo($id){
        $unpublishedNewsInfo = News::find($id);
        $unpublishedNewsInfo->publication_status = 0;
        $unpublishedNewsInfo->save();
        return redirect('/news/manage-news')->with('message','News Unpublished Successfully !!');
    }
    public function publishedNewsInfo($id){
        $unpublishedNewsInfo = News::find($id);
        $unpublishedNewsInfo->publication_status = 1;
        $unpublishedNewsInfo->save();
        return redirect('/news/manage-news')->with('message','News Unpublished Successfully !!');
    }
    public function deleteNewsInfo($id){
        $deleteNewsInfo = News::find($id);
        @unlink($deleteNewsInfo->news_image);
        $deleteNewsInfo->delete();
        return redirect('/news/manage-news')->with('message','News info delete  Successfully !!');

    }
    public function editNewsInfo($id){
        $newsById = DB::table('news')
            ->join('categories','news.category_id','categories.id')
            ->select('news.*','categories.category_name')->where('news.id','=',$id)
            ->first();
        $publishedCategory = Category::where('publication_status',1)->get();
        return view('admin.news.edit-news',[
            'newsById'=>$newsById,
            'publishedCategory'=>$publishedCategory
        ]);

    }

    public function updateNewsInfo(Request $request){
        $newsInfo =News::find($request->news_id);
        @unlink($newsInfo->news_image);

        $newsImage = $request->file('news_image');
        $imageName =$newsImage->getClientOriginalName();
        $directory ='news_images/';
        $imageUrl = $directory.$imageName;
        Image::make($newsImage)->save($imageUrl);

        $newsInfo->news_title = $request->news_title;
        $newsInfo->category_id = $request->category_id;
        $newsInfo->news_description = $request->news_description;
        $newsInfo->news_image = $imageUrl;
        $newsInfo->publication_status = $request->publication_status;
        $newsInfo->save();

        return redirect('/news/manage-news')->with('message','News info update  Successfully !!');


    }


}
