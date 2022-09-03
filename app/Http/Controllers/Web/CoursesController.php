<?php

namespace App\Http\Controllers\web;

use App\Models\Tag;
use App\Models\City;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\CourseCity;
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
         $data['Courses_search'] = Course::select('id','teacher_id','title_' . getLang() . '  as title',
         'body_' . getLang() . '  as body',
        'price_before' , 'price_after'
         )->get();
        // $data['Courses'] = Course::with('teacher')->get();
        return view('Web.pages.courses',compact('data'));
    }
    public function courseDetails(Request $request)
    {
        $tags =  Tag::select('id','title_' . getLang() . '  as title'   , 'link' )
        ->inRandomOrder()->limit(6)->get();

       

        $myCourse = Course::findOrFail($request->course_id);
        $related_courses = Course::select('id','title_' . getLang() . '  as title' )->where('category_id' , $myCourse->category_id)->get();


        $course_details = Course::findOrFail($request->course_id);
        $title = 'title_' . getLang();
        $body = 'body_' . getLang();

       $CourseLessons = CourseLesson::where('course_id' , $request->course_id)->get();

       $teacher_course_id = $course_details -> teacher_id ;
        $instractor = TeacherInfo::where('teacher_id' , $teacher_course_id )->with('category')->first();  
        return view('Web.pages.course_details' ,compact('course_details' , 'title' ,'body' , 'instractor','CourseLessons' , 'tags' ,'related_courses') );
    }

    public function courseFilter(Request $request)
    {
       
      
        if(isset($request->categories)){
            $categories =  $request->categories ;
            $course_filter = Course::select('id','teacher_id','image','title_' . getLang() . '  as title',
            'body_' . getLang() . '  as body',
           'price_before' , 'price_after')
           ->whereIn('category_id' , explode( ',', $categories ))->with(['teacher'=>function($query){
            $query->with('teacherInfo');
           }])
           ->get();
          //  dd($course_filter);
          return response()->json($course_filter);
           }


           if(isset($request->coursename)){
            $courseid =  $request->coursename ;
            
            $course_name_filter = Course::select('id','teacher_id','image','title_' . getLang() . '  as title',
            'body_' . getLang() . '  as body',
           'price_before' , 'price_after')
           ->whereIn('id' , explode( ',', $courseid ))->with(['teacher'=>function($query){
            $query->with('teacherInfo');
           }])
           ->get();
          //  dd($course_filter);
          return response()->json($course_name_filter);
           }


           if(isset($request->cities)){
            $cities =  $request->cities ;
            $city_filter = CourseCity::whereIn('city_id' , explode( ',', $cities ))
            ->with(['course'=>function($query){

                $query->with(['teacher'=>function($query2){
                $query2->with('teacherInfo');
               }])->select('id','teacher_id','image','title_' . getLang() . '  as title',
                'body_' . getLang() . '  as body',
               'price_before' , 'price_after');
               }])
               
            
            
            ->get();
            
            // $city_filter = CourseCity::whereHas('city', function ($query) {
            //     $query->whereIn('city_id' , explode( ',', $cities )); 
            // })->get(); 

           // dd($city_filter);

          return  response()->json($city_filter);
           }

           if(isset($request->instructors)){
            $instructors =  $request->instructors ;
            $instructors_filter = Course::select('id','teacher_id','image','title_' . getLang() . '  as title',
            'body_' . getLang() . '  as body',
           'price_before' , 'price_after')
           ->whereIn('teacher_id' , explode( ',', $instructors ))->with(['teacher'=>function($query){
            $query->with('teacherInfo');
           }])
           ->get();
          //  dd($course_filter);
          return response()->json($instructors_filter);
           }

           if(isset($request->price_course)){
          // dd($request->all());
            
            $price_course =  $request->price_course ;
         
                $price_filter = Course::select('id','teacher_id','image','title_' . getLang() . '  as title',
                'body_' . getLang() . '  as body',
                'price_before' , 'price_after')->with(['teacher'=>function($query){
                $query->with('teacherInfo');
           }])
           ->where(function($query3) use ($price_course){

            if($price_course == 0)
            {

                $query3->whereNull('price_before');
               // dd($query3);

            }elseif($price_course == 1)
            {
                $query3->whereNotNull('price_before');
            }

           })
           ->get();

            
          return response()->json($price_filter);
           }

           
           
    }

}
