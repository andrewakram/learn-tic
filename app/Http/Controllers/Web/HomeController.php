<?php

namespace App\Http\Controllers\Web;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Category;
use App\Models\UserComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    
    public function index()
    {
      
        $data['categories'] =  Category::select('id','title_' . getLang() . '  as title' ,'image')->withCount(['courses'])->get();
        $data['user_comments']= UserComment::select('id','title_' . getLang() . '  as title' , 'body_' . getLang() . '  as body'  , 'user_type' )->get();
        $data['blogs'] = Blog::orderBy('id', 'DESC')->limit(2)->get();
        $data['blogs_slider'] =  Blog::inRandomOrder()->limit(3)->get();
       $data['sections']= Page::select('id','title_' . getLang() . '  as title' , 'body_' . getLang() . '  as body'  , 'type' )->get();
      
      // $data['sections'] = Page::get();
         
       $data['section1'] = $data['sections']->where('type' ,'section1')->first() ;
       $data['section2'] = $data['sections']->where('type' ,'section2')->first() ;
       $data['section3'] = $data['sections']->where('type' ,'section3')->first() ;
       $data['section4'] = $data['sections']->where('type' ,'section4')->first() ;
       $data['home_about'] = $data['sections']->where('type' ,'home_about')->first() ;
       // $data['title_english'] = $data['sections']->where('type' ,'section2')->first()->value ;
       // $data['phone'] = $data['sections']->where('type' ,'section3')->first()->value ;
       // $data['email'] = $data['sections']->where('type' ,'section4')->first()->value ;
        
    
        

        return view('Web.pages.home',compact('data'));
       
    }
}
