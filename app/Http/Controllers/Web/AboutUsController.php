<?php

namespace App\Http\Controllers\web;

use App\Models\Page;
use App\Models\UserComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutUsController extends Controller
{
    public function index()
    {
        $data['user_comments']= UserComment::select('id','title_' . getLang() . '  as title' , 'body_' . getLang() . '  as body'  , 'user_type' )->get();
       
        $data['Page'] = Page::get();
        $data['title_arabic'] = $data['Page']->where('type' ,'our_values')->first()->title_ar ;
        $data['title_english'] = $data['Page']->where('type' ,'our_values')->first()->title_en ;
        $data['body_arabic'] = $data['Page']->where('type' ,'our_values')->first()->body_ar ;
		$data['body_english'] = $data['Page']->where('type' ,'our_values')->first()->body_en ;
						
         

    
        return view('Web.pages.about_us' , compact('data'));
    }
}
