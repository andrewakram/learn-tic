<?php

namespace App\Http\Controllers\web;

use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstructorsController extends Controller
{
    public function index()
    {

         $instractors = TeacherInfo::select('id','full_name')->get();
        return view('Web.pages.instructors',compact('instractors'));
    }
}
