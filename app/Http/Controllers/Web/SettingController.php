<?php

namespace App\Http\Controllers\web;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    public function index()
    {

     

        // $data['icon']  = Setting::whereIn('key', ['icon_location'])->get();
        // $data['title_address']  = Setting::whereIn('key', ['title_address_' . getLang() ])->get();
        // $data['address']  = Setting::whereIn('key', ['address_' . getLang() ])->get();
       
    
     

        $data = Setting::whereIn('key', ['icon_location', 'title_address_' . getLang() ,'address_' . getLang() ,
        'icon_call', 'title_phone' . getLang() ,'phone_1',
        'icon_email','title_email_' . getLang() ,'email_1'])->get();
        return view('Web.pages.contact_us' , compact('data'));
    }
   
  
}
