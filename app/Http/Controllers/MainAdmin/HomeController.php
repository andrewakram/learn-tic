<?php

namespace App\Http\Controllers\MainAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supervisor;

class HomeController extends Controller
{
    public function index()
    {
        //counts for first row in page ....
        //first card
        $data['supervisors'] = Admin::where('type','admin')->select('id')->count();
        $data['categories'] = 0;
        $data['products'] = 0;

        return view('MainAdmin.pages.home',
            compact('data'));
    }
}
