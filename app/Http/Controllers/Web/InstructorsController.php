<?php

namespace App\Http\Controllers\web;

use App\Models\City;
use App\Models\User;
use App\Models\Category;
use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstructorsController extends Controller
{
    public function index()
    {
         $instractors = TeacherInfo::select('id','full_name','teacher_id' ,'categoey_id')->get();
         $data['categories'] =  Category::select('id','title_' . getLang() . '  as title')->withCount(['courses'])->get();
         $data['cities'] =  City::select('id','title_' . getLang() . '  as title')->get();
        return view('Web.pages.instructors',compact('instractors' , 'data'));
    }
    public function instructorDetails(Request $request)
    {
        $teacher_details = User::findOrFail($request->instructor_id);
        
        return view('Web.pages.instructor_details',compact('teacher_details'));
    }
    

}
