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
      
        $data['categories'] =  Category::select('id','title_' . getLang() . '  as title' ,'image')->withCount(['courses'])->get();
        $data['user_comments']= UserComment::select('id', 'image' ,'title_' . getLang() . '  as title' , 'body_' . getLang() . '  as body'  , 'user_type' )->get();
        $data['blogs'] = Blog::orderBy('id', 'DESC')->limit(2)->get();
        $data['blogs_slider'] =  Blog::inRandomOrder()->limit(3)->get();
       
         $data['static_sections']= Page::select('id','title_' . getLang() . '  as title' , 'body_' . getLang() . '  as body'  , 'type' )
         ->where('type' ,'section' )
         ->orWhere('type' ,'home_about' )
       ->get() ;

       $var_title='title_'.Session::get('lang');

      // $data['sections'] = Page::get();
    //    $data['static_sections'] = $data['sections']->where('type' ,'section' )
    //    ->orWhere('type' ,'home_about' )
    //  ->get() ;


       //$data['home_about'] = $data['sections']->where('type' ,'home_about')->first() ;
       //dd($data['home_about']);
       // $data['title_english'] = $data['sections']->where('type' ,'section2')->first()->value ;
       // $data['phone'] = $data['sections']->where('type' ,'section3')->first()->value ;
       // $data['email'] = $data['sections']->where('type' ,'section4')->first()->value ;
        
    
        

        return view('Web.pages.home',compact('data', 'var_title'));
       
    }
}
