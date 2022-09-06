<?php

namespace App\Http\Controllers\Web;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Category;
use App\Models\UserComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index()
    {

        $data['categories'] =  Category::select('id','title_' . getLang() . '  as title' ,'image')
            ->withCount(['courses'])
            ->get();
        $data['user_comments']= UserComment::select('id','title_' . getLang() . '  as title' , 'body_' . getLang() . '  as body'  , 'user_type' )
            ->get();
        $data['blogs'] = Blog::orderBy('id', 'DESC')
            ->limit(2)
            ->get();
        $data['blogs_slider'] =  Blog::inRandomOrder()
            ->limit(3)
            ->get();

         $data['static_sections']= Page::select('id','title_' . getLang() . '  as title' , 'body_' . getLang() . '  as body'  , 'type' )
         ->where('type' ,'section' )
         ->orWhere('type' ,'home_about' )
       ->get() ;


       $var_title='title_'.Session::get('lang');



        return view('Web.pages.home',compact('data', 'var_title'));
     
    }
}
