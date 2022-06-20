<?php

namespace App\Http\Controllers\Web;

use App\Models\Blog;
use App\Models\Category;
use App\Models\UserComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    
    public function index()
    {
      
        $data['categories'] = Category::select('id','title_' . getLang() . '  as title')->get();
        $data['user_comments']= UserComment::select('id','title_' . getLang() . '  as title' , 'body_' . getLang() . '  as body'  , 'user_type' )->get();
        $data['blogs'] = Blog::orderBy('id', 'DESC')->limit(2)->get();
        $data['blogs_slider'] =  Blog::inRandomOrder()->limit(3)->get();
    
        

        return view('Web.pages.home',compact('data'));
       
    }
}
