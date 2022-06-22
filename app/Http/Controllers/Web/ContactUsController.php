<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index()
    {
        $data = Setting::get();
         

        return view('Web.pages.contact_us' , compact('data'));
    }
}
