<?php

namespace App\Http\Controllers\web;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function index()
    {
        $data['Courses'] = Course::select('id','title_' . getLang() . '  as title',
         'body_' . getLang() . '  as body',
        'price_before' , 'price_after'
         )->paginate(6);


         
        // $data['Courses'] = Course::with('teacher')->get();
        return view('Web.pages.courses',compact('data'));
    }
    public function CourseDetails()
    {
        return view('Web.pages.course_details' );
    }
    
}
