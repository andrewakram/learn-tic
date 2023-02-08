<?php

namespace App\Http\Controllers\Web;

use App\Models\Order;
use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ConsultationController extends Controller
{
    protected $paymentController;
    public function __construct(PaymentController $paymentController){
        $this->paymentController = $paymentController;
    }

    public function sendConsultationRequest(Request $request,$instructorId)
    {
        $user = Auth::guard('web')->user();
        if(!$user){
            return back()->with('error', 'يرجي تسجيل الدخول اولا');
        }

        $teacher = TeacherInfo::where('teacher_id',$instructorId)->first();
        $order = Order::create([
            'type' => 'consultation',
            'teacher_id' => $instructorId,
            'student_id' => $user->id,
            'price_after' => $teacher->inquiry_cost_urgent,
        ]);
        return $this->paymentController->payConsultationRequest($order->id,$teacher->inquiry_cost_urgent,$teacher->teacher->email);
//        session()->flash('success', 'تم ارسال الطلب بنجاح');
        return back();
    }
}
