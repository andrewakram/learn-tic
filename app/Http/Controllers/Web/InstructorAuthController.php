<?php

namespace App\Http\Controllers\web;

use App\Models\TeacherInfo;
use App\Models\User;
use App\Models\Verfication;
use App\Models\Verification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Mail;

class InstructorAuthController extends Controller
{
    public function instructorDoLogin(Request $request){
        if(Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password,
            'type' => 'teacher',
            'active' => 1,
            'suspend' => 0,
        ])) {
            return redirect(route('home'));
        }else{
            return back()->with('error', 'Invalid Credentials');
        }
    }

    public function instructorDoRegister(Request $request){
        $checkIfEmailExists = User::where('email',$request->email)->first();
        if($checkIfEmailExists && $checkIfEmailExists->active == 1)
            return back()->with('error', 'الايميل مستخدم من قبل');

        $checkIfPhoneExists = User::where('phone',$request->phone)->first();
        if($checkIfPhoneExists && $checkIfPhoneExists->active == 1)
            return back()->with('error', 'الجوال مستخدم من قبل');

        if($request->password != $request->c_password)
            return back()->with('error','كلمة المرور غير متطابقة');


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'active' => 0,
            'suspend' => 0,
            'type' => 'teacher',
        ]);

        $teacherInfo = TeacherInfo::create([
            'teacher_id' => $user->id,
            'full_name' => $request->name,
            'categoey_id' =>  $request->categoey_id
        ]);



        if($user && $teacherInfo) {

            $activation_code = generateActivationCode();

            Verfication::updateOrcreate
            (
                [
                    'type' => 'activate',
                    'email' => $request->email,
                ],
                [
                    'code' => $activation_code,
                    'expire_at' => Carbon::now()->addHour()->toDateTimeString()
                ]
            );

            $data = [
                'name' => $request->nam,
                'subject' => 'هذا هو كود التفعيل في تطبيق Learn Tic ',
                'code' => $activation_code
            ];
            $email = $request->email;
            session()->put('email',$email);
            Mail::send('activation', $data, function ($message) use ($data,$email) {
                $message->from('info@learn-tic.com','Activation@Learn-Tic')
                    ->to($email)
                    ->subject('تفعيل الحساب | Learn Tic');
            });
            return view('Web.pages.activate_account');
        }else{
            return back()->with('error', 'Invalid Credentials');
        }
    }

    public function instructorActivateAccount(Request $request){
        if(session()->get('email') != $request->email)
            return route('/')->with('error', 'Invalid Data');

        $userCheck = Verfication::whereEmail(session()->get('email'))
            ->whereCode($request->code)->first();
        if($userCheck){
            $user = User::whereEmail(session()->get('email'))->first();

            if($user && $user->suspend == 1)
                return route('/')->with('error', 'الحساب موقوف مؤقتا يرجي التواصل مع مدير النظام');

            if($user && $user->active == 1 && $user->suspend == 0){
                Auth::loginUsingId($user->id);
                session()->flash('success', 'تم التفعيل بنجاح');
                return redirect(route('my_profile'));
            }elseif ($user && $user->active == 0 && $user->suspend == 0){
                $user->active = 1;
                $user->save();
                Auth::loginUsingId($user->id);
                session()->flash('success', 'تم التفعيل بنجاح');
                return redirect(route('my_profile'));
            }
            Auth::loginUsingId($user->id);
            session()->flash('success', 'تم التفعيل بنجاح');
            return redirect(route('my_profile'));
        } else{
            return back()->with('error', 'Invalid Credentials');
        }
    }


}
