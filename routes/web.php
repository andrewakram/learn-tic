<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\web\BlogsController;
use App\Http\Controllers\web\CategoriesController;
use App\Http\Controllers\web\AboutUsController;
use App\Http\Controllers\web\CoursesController;
use App\Http\Controllers\web\ContactUsController;
use App\Http\Controllers\web\InstructorsController;
use App\Http\Controllers\web\BlogsDetailsController;
use App\Http\Controllers\Web\StudentLoginController;
use App\Http\Controllers\MainAdmin\SettingController;
use App\Http\Controllers\Web\InstructorLoginController;
use App\Http\Controllers\Web\StudentRegisterController;
use App\Http\Controllers\Web\InstructorRegisterController;
use App\Http\Controllers\web\InstructorsDetailsController;
use App\Http\Controllers\web\StudentAuthController;
use App\Http\Controllers\web\InstructorAuthController;



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
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return 'success';
});

Route::group([
    'middleware' => ['SetLanguage'],
    'namespce' => 'App\Http\Controllers\web',
], function () {
    Route::get('/', [HomeController::class,'index'])->name('home');
    Route::get('about-us', [AboutUsController::class,'index'])->name('about_us');
    Route::get('courses', [CoursesController::class,'index'])->name('courses');
    Route::get('course-details/{course_id}', [CoursesController::class,'courseDetails'])->name('course_details');
    Route::get('instructors', [InstructorsController::class,'index'])->name('instructors');
    Route::get('instructor-details/{instructor_id}', [InstructorsController::class,'instructorDetails'])->name('instructor_details');
    Route::get('blogs', [BlogsController::class,'index'])->name('blogs');
    Route::get('blog-details/{blog_id}', [BlogsController::class,'blogDetails'])->name('blog_details');
    Route::get('contact-us', [ContactUsController::class,'index'])->name('contact_us');
    Route::get('instructor-login', [InstructorLoginController::class,'index'])->name('instructor_login');
    Route::post('instructor-login', [InstructorAuthController::class,'instructorDoLogin'])->name('instructorDoLogin');
    Route::get('instructor-signup', [InstructorRegisterController::class,'index'])->name('instructor_register');
    Route::get('student-login', [StudentLoginController::class,'index'])->name('student_login');
    Route::post('student-login', [StudentAuthController::class,'studentDoLogin'])->name('studentDoLogin');
    Route::get('student-signup', [StudentRegisterController::class,'index'])->name('student_register');
    Route::get('logout', [StudentAuthController::class,'logout'])->name('logout');
    Route::get('categories', [CategoriesController::class,'index'])->name('catigories');
});

Route::get('/change-language/{lang}', function ($lang) {
    session()->put('lang', $lang);
    return back();
});


