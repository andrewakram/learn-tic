<?php

namespace App\Http\Controllers\MainAdmin;

use App\Http\Requests\MainAdmin\Course\CourseIndexRequest;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    public function index(CourseIndexRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        return view('MainAdmin.pages.courses.index');
    }

    public function getData()
    {
        $model = Course::query();

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->addColumn('select',function ($row){
                return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3 ">
                    <input class="form-check-input checkboxes" type="checkbox"  value="'.$row->id.'" />
                </div>';
            })
            ->editColumn('image', function ($row) {
                return '<a class="symbol symbol-50px"><span class="symbol-label" style="background-image:url(' . $row->image . ');"></span></a>';
            })
            ->editColumn('price_before', function ($row) {
                if($row->price_before){
                    return '<b class="badge badge-success">'.$row->price_before.'</b>';
                }else{
                    return "-";
                }
            })
            ->editColumn('price_after', function ($row) {
                if($row->price_after){
                    return '<b class="badge badge-success">'.$row->price_after.'</b>';
                }else{
                    return "-";
                }
            })
            ->editColumn('points', function ($row) {
                if($row->points){
                    return '<b class="badge badge-dark">'.$row->points.'</b>';
                }else{
                    return '<b class="badge badge-dark"> 0 </b>';
                }
            })
            ->editColumn('course_time', function ($row) {
                if($row->course_time){
                    return '<b class="badge badge-dark">'.$row->course_time.' / ساعة'.'</b>';
                }else{
                    return '<b class="badge badge-dark"> أقل من ساعة</b>';
                }
            })
            ->editColumn('rate', function ($row) {
                if($row->rate){
                    return '<b class="badge badge-info">'.$row->rate.'</b>';
                }else{
                    return '<b class="badge badge-info"> 0 </b>';
                }
            })
            ->addColumn('teacher', function ($row) {
                if($row->teacher){
                    $user_name = $row->teacher->name;
                    $user_email = $row->teacher->email;
                    return '<a href="'.route('admin.teachers.edit',[$row->teacher_id]).'" target="_blank" class="" title="'.$user_email.'">
                            '.$user_name.'
                        </a>';
                }else{
                    return "-";
                }
            })
            ->addColumn('category', function ($row) {
                if($row->category){
                    $title = $row->category->title_ar;
                    return '<a href="" target="_blank" class="" title="'.$title.'">
                            '.$title.'
                        </a>';
                }else{
                    return "-";
                }
            })

            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->translatedFormat("Y-m-d (H:i) A");
            })
            ->addColumn('actions', function ($row) {
                $buttons = '';
                $buttons .= '<a href="' . route('admin.blogs.edit', [$row->id]) . '" class="btn btn-primary btn-circle btn-sm m-1" title="تعديل">
                            <i class="fa fa-edit"></i>
                        </a>';
                $buttons .= '<a class="btn btn-danger btn-sm delete btn-circle m-1" data-id="' . $row->id . '"  title="حذف">
                            <i class="fa fa-trash"></i>
                        </a>';
//                }
                return $buttons;
            })
            ->rawColumns(['actions','select','image',
                'price_before','price_after','points',
                'course_time','rate',
                'teacher','category','created_at'])
            ->make();

    }


}
