<?php

namespace App\Http\Controllers\web;

use App\Models\City;
use App\Models\Course;
use App\Models\Category;
use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function index()
    {
        $data['Courses'] = Course::select('id','teacher_id','title_' . getLang() . '  as title',
         'body_' . getLang() . '  as body',
        'price_before' , 'price_after'
         )->paginate(2);

         $data['categories'] =  Category::select('id','title_' . getLang() . '  as title')->withCount(['courses'])->get();
         $data['instructors'] =  TeacherInfo::select('id','full_name')->get();
         $data['cities'] =  City::select('id','title_' . getLang() . '  as title')->get();

        // $data['Courses'] = Course::with('teacher')->get();
        return view('Web.pages.courses',compact('data'));
    }
    public function courseDetails(Request $request)
    {
        $course_details = Course::findOrFail($request->course_id);
        $title = 'title_' . getLang();
        return view('Web.pages.course_details' ,compact('course_details' , 'title') );
    }
   
}
