<?php

namespace App\Http\Controllers\InstructorAdmin;

use Illuminate\Http\Request;
use App\Models\TeacherApppintment;
use App\Http\Controllers\Controller;
use App\Http\Traits\MeetingZoomTrait;

class AppointmentController extends Controller
{
    use MeetingZoomTrait;
   
    public function index()
    {
        $teacher_appointments = TeacherApppintment::where('teacher_id', auth()->user()->id)->get();
        return view('InstructorAdmin.pages.instructor_appointments', compact('teacher_appointments'));  
    }

    public function create()
    {
        
        return view('InstructorAdmin.pages.instructor_create_appointments');  

    }

    
    public function store(Request $request)
    {
        $meeting = $this->createMeeting($request);
        // dd($request);
         //create meeting in database
         TeacherApppintment::create([
            
             'teacher_id' => auth()->user()->id,
             'meeting_id' => $meeting->id,
             'topic' => $request->topic,
             'start_at' => $request->start_time,
             ///request
             'duration' => $meeting->duration,
             'password' => $meeting->password,
             'start_url' => $meeting->start_url,
             'join_url' => $meeting->join_url,
         ]);
        // toastr()->success(trans('messages.success'));
         return redirect()->route('instructor_appointment');
        
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
