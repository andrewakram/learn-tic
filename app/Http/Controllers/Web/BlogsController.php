<?php

namespace App\Http\Controllers\web;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::select('id','title_' . getLang() . '  as title' ,'description_' . getLang() . '  as description')->paginate(3);
        return view('Web.pages.blogs' , compact('blogs'));
    }
    public function blogDetails(Request $request)
    {
//        return redirect(route('admin.home'));
        $blog_details = Blog::findOrFail($request->blog_id)->first();
        return view('Web.pages.blog_details',compact('blog_details'));
    }
}
