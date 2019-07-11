<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Carbon\Carbon;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class NewsController extends Controller
{
    public function news(){
        $obj_news=News::where('publication_status',1)->get();
        return view('back-end.news',['obj_news'=>$obj_news]);
    }
    public function addNews(){
        return view('back-end.add-news');
    }
    public function saveNews(Request $request){
    $this->validate($request, [
            'news_title' => 'required|max:30|min:2',
            'short_description' => 'required|max:80|min:5'
        
        ]);
        $obj_news=new News();
        $obj_news->news_title=$request->news_title;
        $obj_news->short_description=$request->short_description;
        $obj_news->long_description=$request->long_description;
        

        if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg,png|max:2048',
            ]);
            $newsImage = $request->file('image');
            $fileType = $newsImage->getClientOriginalExtension();
            $imageName = date('YmdHis') . "news" . rand(5, 10) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($newsImage)->save($imageUrl);
            $obj_news->image = $imageUrl;
        }
        $obj_news->save();

        return redirect()->back()->with('message','Successfully Saved');
    }
    public function newsDetails($id){
        $obj_news=News::find($id);
        // return $obj_news;
        return view('back-end.newsDetails',['obj_news'=>$obj_news]);
    }
}
