<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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



}
