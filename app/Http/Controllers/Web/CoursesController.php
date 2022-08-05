<?php

namespace App\Http\Controllers\web;

use App\Models\City;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\TeacherInfo;
use App\Models\CourseLesson;
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
         $data['instructors'] =  User::where('type','teacher')->select('id')->withCount(['courses'])->get();
         $data['cities'] =  City::select('id','title_' . getLang() . '  as title')->get();
        // $data['Courses'] = Course::with('teacher')->get();
        return view('Web.pages.courses',compact('data'));
    }
    public function courseDetails(Request $request)
    {
        $course_details = Course::findOrFail($request->course_id);
        $title = 'title_' . getLang();
        $body = 'body_' . getLang();
       $CourseLessons = CourseLesson::where('course_id' , $request->course_id)->get();

       $teacher_course_id = $course_details -> teacher_id ;
        $instractor = TeacherInfo::select('id','full_name','teacher_id' ,'categoey_id' ,'desctiption' , 'inquiry_cost_normal' , 'inquiry_cost_urgent')->where('teacher_id' , $teacher_course_id )->with('category')->first();  
        return view('Web.pages.course_details' ,compact('course_details' , 'title' ,'body' , 'instractor','CourseLessons') );
    }

}
