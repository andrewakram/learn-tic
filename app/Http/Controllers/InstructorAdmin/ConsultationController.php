<?php

namespace App\Http\Controllers\InstructorAdmin;

use App\Http\Traits\MeetingZoomTrait;
use App\Models\Order;
use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class ConsultationController extends Controller
{
    use MeetingZoomTrait;

    public function instructorConsultation(){
        $user = Auth::guard('web')->user();
        if(!$user){
            return back()->with('error', 'يرجي تسجيل الدخول اولا');
        }

        $data['consultations'] = Order::orderBy('id','desc')
            ->where('teacher_id',$user->id)
            ->where('payment_status',1)
            ->whereIn('type',['urgent_consultation','normal_consultation'])
            ->get();

        return view('InstructorAdmin.pages.consultations',compact('data'));
    }

    public function instructorAcceptConsultation(Request $request,$order_id = null){
        $user = Auth::guard('web')->user();
        if(!$user){
            return back()->with('error', 'يرجي تسجيل الدخول اولا');
        }

        $order = Order::whereId($order_id)
            ->where('teacher_id',$user->id)
            ->where('payment_status',1)
            ->first();
        if(!$order){
            return back()->with('error', 'حدث خطأ ما');
        }

        $startTime = Carbon::now()->addMinutes(10);
        $consultationPassword = rand(100000,999999);
        $meetingData = (object)[];
        $meetingData->topic = $order->type.'_'.time().'_'.$order_id;
        $meetingData->duration = 10;
        $meetingData->password = (string)$consultationPassword;
        $meetingData->start_time = isset($request->start_time) ? $request->start_time : $startTime;

        $meeting = $this->createMeeting($meetingData);
        $order->update([
            'consultation_time' => $startTime,
            'url' => $meeting->join_url,
            'consultation_password' => $consultationPassword,
            'teacher_accept' => isset($meeting->join_url) && !empty($meeting->join_url) ? 1 : 0,
        ]);

        $data['consultations'] = Order::orderBy('id','desc')
            ->where('teacher_id',$user->id)
            ->whereIn('type',['urgent_consultation','normal_consultation'])
            ->get();

        return view('InstructorAdmin.pages.consultations',compact('data'));
    }

}
