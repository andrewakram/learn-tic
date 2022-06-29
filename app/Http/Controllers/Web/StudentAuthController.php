<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentAuthController extends Controller
{

    public function studentDoLogin(Request $request){
        if(Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password,
            'type' => 'user',
            'active' => 1,
            'suspend' => 0,
        ])) {
            return redirect(route('home'));
        }else{
            return back()->with('error', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect(route('home'));
    }
}
