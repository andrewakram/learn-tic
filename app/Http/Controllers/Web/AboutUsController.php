<?php

namespace App\Http\Controllers\web;

use App\Models\UserComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutUsController extends Controller
{
    public function index()
    {
        $data['user_comments']= UserComment::select('id','title_' . getLang() . '  as title' , 'body_' . getLang() . '  as body'  , 'user_type' )->get();
        return view('Web.pages.about_us' , compact('data'));
    }
}
