<?php

namespace App\Http\Controllers\InstructorAdmin;

use App\Models\Chat;
use App\Models\City;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Order;
use App\Models\User;
use App\Models\Category;
use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class InstructorCourseController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;

        $data['courses'] = Course::orderBy('id','desc')
            ->where('teacher_id',$userId)
            ->select('id','teacher_id','title_' . getLang() . '  as title',
                'body_' . getLang() . '  as body','price_before' , 'price_after')
            ->get();

        return view('InstructorAdmin.pages.instructor_courses',compact('data'));
    }

    public function add()
    {
        $data['categories'] = Category::select('id','title_' . getLang() . '  as title')->get();
        return view('InstructorAdmin.pages.instructor_add_course',compact('data'));
    }

    public function store(Request $request)
    {
        Course::create([
            'category_id' => $request->category_id,
            'teacher_id' => auth()->user()->id,
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'body_ar' => $request->body_ar,
            'body_en' => $request->body_en,
            'price_before' => $request->price_before,
            'price_after' => $request->price_after,
            'points' => $request->points,
            'course_time' => $request->course_time,
            'image' => $request->image,
        ]);
        return redirect()->route('instructor_courses');
    }

    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'region_id' => 'required|exists:regions,id',
        ]);
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        Course::where('id',$request->course)->delete();

        session()->flash('success', 'تم الحذف بنجاح');
        return redirect()->back();
    }

}
