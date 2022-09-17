<?php

namespace App\Http\Controllers\web;

use App\Models\City;
use App\Models\User;
use App\Models\Category;
use App\Models\CourseCity;
use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstructorsController extends Controller
{
    public function index()
    {
        $instractors = TeacherInfo::select('id', 'full_name', 'teacher_id', 'categoey_id')->get();
        $data['categories'] = Category::select('id', 'title_' . getLang() . '  as title')->withCount(['courses'])->get();
        $data['cities'] = City::select('id', 'title_' . getLang() . '  as title')->get();
        return view('Web.pages.instructors', compact('instractors', 'data'));
    }

    public function instructorDetails(Request $request)
    {
        $teacher_details = User::findOrFail($request->instructor_id);
        return view('Web.pages.instructor_details', compact('teacher_details'));
    }

    public function instructorFilter(Request $request)
    {

        $gender = $request->gender;
        $qualification = $request->qualification;
        $category = $request->category;
        $learn_type = $request->learn_type;

        $instractors = TeacherInfo::where(function ($q) use($gender,$qualification,$category,$learn_type){
            if (isset($qualification) && !empty($qualification)) {
                $qualificationArr = explode(',', $qualification);
                $q->whereIn('qualifications', $qualificationArr);
            }

            if (isset($gender) && !empty($gender)) {
                $teacher_ids = User::where('gender', $gender)
                    ->where('type', 'teacher')
                    ->pluck('id');
                $q->whereIn('teacher_id', $teacher_ids);
            }

            if (isset($category) && !empty($category)) {
                $categoryArr = explode(',', $category);
                $q->whereIn('categoey_id', $categoryArr);
            }

            if (isset($learn_type) && !empty($learn_type)) {
                $learn_typeArr = explode(',', $learn_type);
                $q->whereIn('learn_type', $learn_typeArr);
            }

        })->with('teacher')->orderBy('id','desc')->get();

        return response()->json($instractors);


        // if (isset($request->instructor_name_id)) {
        //     $instructor_name_id = $request->instructor_name_id;
        //     $instractors = TeacherInfo::where('teacher_id', $instructor_name_id)->with('teacher')->get();
        //     return response()->json($instractors);
        // }


        // if (isset($request->cities)) {
        //     $cities = $request->cities;
        //     $teacher_ids = CourseCity::where('city_id', $cities)->pluck('teacher_id');
        //     $city_filter = TeacherInfo::whereIn('teacher_id', $teacher_ids)->get();
        //     return response()->json($city_filter);
        // }

       

    }


}
