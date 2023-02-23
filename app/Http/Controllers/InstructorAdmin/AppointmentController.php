<?php

namespace App\Http\Controllers\InstructorAdmin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\TeacherApppintment;
use MacsiDigital\Zoom\Facades\Zoom;
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

    public function index2()
    {
        $teacher_appointments = TeacherApppintment::where('teacher_id', auth()->user()->id)->get();
        return view('InstructorAdmin.pages.instructor_appointments2', compact('teacher_appointments'));  
    }

    public function create()
    {
        
        return view('InstructorAdmin.pages.instructor_create_appointments');  

    }

    public function create2()
    {
        
        return view('InstructorAdmin.pages.instructor_create_appointments2');  

    }


    
    public function store(Request $request)
    {
        $meeting = $this->createMeeting($request);
        // dd($request);
         //create meeting in database
         $start_time = $request->start_time;
        $duration  = $request->duration;
        $from = Carbon::parse($start_time)->format('H:i:s');
         $new_time = Carbon::parse($start_time)->addMinutes($duration);
         $day = Carbon::parse($new_time)->format('Y-m-d');
         $to = Carbon::parse($new_time)->format('H:i:s');
         TeacherApppintment::create([
            
             'teacher_id' => auth()->user()->id,
             'meeting_id' => $meeting->id,
             'topic' => $request->topic,
             //'start_at' => $request->start_time,
             'from' =>   $from ,
             'to' => $to ,
             'day_date' => $day ,
             ///request
             'duration' => $meeting->duration,
             'password' => $meeting->password,
             'start_url' => $meeting->start_url,
             'join_url' => $meeting->join_url,
         ]);
        // toastr()->success(trans('messages.success'));
         return redirect()->route('instructor_appointment');
        
    }

    public function store2(Request $request)
    {
     //   dd($request->from_time);
      //  dd($request->duration);
        $to_time = Carbon::parse($request->from_time)->addMinutes($request->duration);
       // dd($to_time);
         TeacherApppintment::create([
            
             'teacher_id' => auth()->user()->id,
             'topic' => $request->topic,
             'from' => $request->from_time,
             //'to' => $to_time ,
             'duration' => $request->duration,
             'day' => $request->days_week,
            
         ]);
        // toastr()->success(trans('messages.success'));
         return redirect()->route('instructor_appointment2');
        
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

    public function destroy(Request $request)
    {
       // dd($request->id);
        try {
            $meeting = Zoom::meeting()->find($request->id);
            //dd($meeting);
            $meeting->delete();
            TeacherApppintment::where('meeting_id', $request->id)->delete();
            session()->flash('success', 'تم الحذف بنجاح');
            return redirect()->route('instructor_appointment');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    public function destroy2(Request $request)
    {
       // dd($request->id);
        try {
         
            TeacherApppintment::where('id', $request->id)->delete();
            session()->flash('success', 'تم الحذف بنجاح');
            return redirect()->route('instructor_appointment2');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
