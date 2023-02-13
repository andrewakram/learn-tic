<?php

namespace App\Http\Controllers\StudentAdmin;

use App\Http\Requests\InstructorAdmin\InstructorAddCourseRequest;
use App\Http\Requests\InstructorAdmin\InstructorDeleteCourseRequest;
use App\Http\Requests\InstructorAdmin\InstructorEditCourseRequest;
use App\Http\Requests\InstructorAdmin\InstructorIndexCourseRequest;
use App\Models\Chat;
use App\Models\City;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Order;
use App\Models\Stage;
use App\Models\User;
use App\Models\Category;
use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class StudentCourseController extends Controller
{
    public function index(InstructorIndexCourseRequest $request)
    {
        $userId = auth()->user()->id;

        $data['stages'] = Stage::select('id','title_' . getLang() . '  as title')->get();
        $data['courses'] = Course::orderBy('id','desc')
            ->where('teacher_id',$userId)
            ->select('id','teacher_id','title_' . getLang() . '  as title',
                'body_' . getLang() . '  as body','price_before' , 'price_after')
            ->get();

        return view('StudentAdmin.pages.instructor_courses',compact('data'));
    }

    public function add()
    {
        $data['categories'] = Category::select('id','title_' . getLang() . '  as title')->get();
        $data['stages'] = Stage::select('id','title_' . getLang() . '  as title')->get();
        return view('StudentAdmin.pages.instructor_add_course',compact('data'));
    }

    public function store(InstructorAddCourseRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

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
            'stage_id' => $request->stage_id,
        ]);

        session()->flash('success', 'تم العملية بنجاح');
        return redirect()->route('student_courses');
    }

    public function edit($course_id)
    {
        $data['course'] = Course::findOrFail($course_id);

        if(auth()->user()->id != $data['course']->teacher_id)
            return back();

        $data['categories'] = Category::select('id','title_' . getLang() . '  as title')->get();
        $data['stages'] = Stage::select('id','title_' . getLang() . '  as title')->get();
        return view('StudentAdmin.pages.instructor_edit_course',compact('data'));
    }

    public function update(InstructorEditCourseRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $course = Course::findOrFail($request->course_id);

        if(auth()->user()->id != $course->teacher_id)
            return back();

        Course::whereId($request->course_id)->update([
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
            'stage_id' => $request->stage_id,
        ]);
        if($request->image){
            Course::whereId($request->course_id)->update([
                'image' => $request->image,
            ]);
        }

        session()->flash('success', 'تم العملية بنجاح');
        return redirect()->route('student_courses');
    }

    public function delete(InstructorDeleteCourseRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $course = Course::findOrFail($request->course_id);

        if(auth()->user()->id != $course->teacher_id)
            return back();

        $course->delete();

        session()->flash('success', 'تم الحذف بنجاح');
        return redirect()->back();
    }

    public function search(InstructorIndexCourseRequest $request)
    {
        $userId = auth()->user()->id;

        $data['stages'] = Stage::select('id','title_' . getLang() . '  as title')->get();
        $data['courses'] = Course::orderBy('id','desc')
            ->where('teacher_id',$userId)
            ->where(function ($q) use ($request){
                if($request->search_key){
                    $q->where('title_ar','LIKE','%'.$request->search_key.'%')
                        ->orWhere('title_en','LIKE','%'.$request->search_key.'%')
                        ->orWhere('body_en','LIKE','%'.$request->search_key.'%')
                        ->orWhere('body_en','LIKE','%'.$request->search_key.'%');
                }
                if($request->stage_id && !empty($request->stage_id)){
                    $q->where('stage_id',$request->stage_id);
                }

            })
            ->select('id','teacher_id','title_' . getLang() . '  as title',
                'body_' . getLang() . '  as body','price_before' , 'price_after')
            ->get();

        return view('StudentAdmin.pages.instructor_courses',compact('data'));
    }


}
