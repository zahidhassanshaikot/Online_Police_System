<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        return view('back-end.news');
    }
    public function newsDetails(){
        return view('back-end.newsDetails');
    }
}