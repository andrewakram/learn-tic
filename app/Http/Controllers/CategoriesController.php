<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
       // $data['categories'] = Category::select('id','title_' . getLang() . '  as title' ,'image')->get();
        $data['categories'] =  Category::select('id','title_' . getLang() . '  as title' ,'image')->withCount(['courses'])->get();
        return view('Web.pages.category' , compact('data'));
    }

    
}
