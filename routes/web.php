<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\web\BlogsController;
use App\Http\Controllers\web\AboutUsController;
use App\Http\Controllers\web\CoursesController;
use App\Http\Controllers\web\ContactUsController;
use App\Http\Controllers\web\InstructorsController;
use App\Http\Controllers\web\BlogsDetailsController;
use App\Http\Controllers\Web\StudentLoginController;
use App\Http\Controllers\web\CourseDetailsController;
use App\Http\Controllers\Web\InstructorLoginController;
use App\Http\Controllers\Web\StudentRegisterController;
use App\Http\Controllers\Web\InstructorRegisterController;
use App\Http\Controllers\web\InstructorsDetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('cache', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return 'success';
});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('about-us', [AboutUsController::class,'index'])->name('about_us');
Route::get('courses', [CoursesController::class,'index'])->name('courses');
Route::get('course_details', [CoursesController::class,'CourseDetails'])->name('course_details');
Route::get('instructors', [InstructorsController::class,'index'])->name('instructors');
Route::get('instructor-details', [InstructorsDetailsController::class,'index'])->name('instructor_details');
Route::get('blogs', [BlogsController::class,'index'])->name('blogs');
Route::get('blogs-details', [BlogsDetailsController::class,'index'])->name('blog_details');
Route::get('contact-us', [ContactUsController::class,'index'])->name('contact_us');
Route::get('instructor-login', [InstructorLoginController::class,'index'])->name('instructor_login');
Route::get('instructor-signup', [InstructorRegisterController::class,'index'])->name('instructor_register');
Route::get('student-login', [StudentLoginController::class,'index'])->name('student_login');
Route::get('student-signup', [StudentRegisterController::class,'index'])->name('student_register');


Route::get('/change-languagee/{lang}', function ($lang) {
    // if(in_array($lang , ['ar' , 'en']))
    // {
        session()->put('lang', $lang);
    // }
    // else
    // {
    //     session()->put('lang', 'ar');
    // }
    
    return back();
});
