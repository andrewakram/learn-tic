<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class TermsConditions extends Controller
{
    public function index()
    {
        $data['terms']= Page::select('id','title_' . getLang() . '  as title' , 'body_' . getLang() . '  as body'  , 'type' )
         ->where('type' ,'terms' )
       ->get() ;
        return view('Web.pages.terms_conditions',compact('data'));
    }
}
