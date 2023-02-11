<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\TermsConditions;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\BlogsController;
use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\CoursesController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\CategoriesController;
use App\Http\Controllers\Web\InstructorsController;
use App\Http\Controllers\Web\StudentAuthController;
use App\Http\Controllers\Web\StudentLoginController;
use App\Http\Controllers\Web\InstructorAuthController;
use App\Http\Controllers\Web\InstructorLoginController;
use App\Http\Controllers\Web\StudentRegisterController;
use App\Http\Controllers\Web\InstructorRegisterController;
use App\Http\Controllers\Web\ConsultationController;
use App\Http\Controllers\InstructorAdmin\AppointmentController;
use App\Http\Controllers\InstructorAdmin\InstructorCourseController;
use App\Http\Controllers\InstructorAdmin\InstructorProfileController;
use App\Http\Controllers\StudentAdmin\StudentAppointmentController;
use App\Http\Controllers\StudentAdmin\StudentCourseController;
use App\Http\Controllers\StudentAdmin\StudentProfileController;
use App\Http\Controllers\StudentAdmin\StudentPaymentController;


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

Route::get('/change-language/{lang}', function ($lang) {
    session()->put('lang', $lang);
    return back();
});

Route::group([
    'middleware' => ['SetLanguage'],
], function () {
    Route::get('/', [HomeController::class,'index'])->name('home');
    Route::get('about-us', [AboutUsController::class,'index'])->name('about_us');
    Route::get('terms-conditions', [TermsConditions::class,'index'])->name('terms_conditions');
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
    Route::post('instructor-signup', [InstructorAuthController::class,'instructorDoRegister'])->name('instructorDoRegister');
    Route::post('instructor-activate-account', [InstructorAuthController::class,'instructorActivateAccount'])->name('instructorActivateAccount');
    Route::get('student-login', [StudentLoginController::class,'index'])->name('student_login');
    Route::post('student-login', [StudentAuthController::class,'studentDoLogin'])->name('studentDoLogin');
    Route::get('student-signup', [StudentRegisterController::class,'index'])->name('student_register');
    Route::post('student-signup', [StudentAuthController::class,'studentDoRegister'])->name('studentDoRegister');
    Route::post('student-activate-account', [StudentAuthController::class,'studentActivateAccount'])->name('studentActivateAccount');

    Route::get('logout', [StudentAuthController::class,'logout'])->name('logout');
    Route::get('categories', [CategoriesController::class,'index'])->name('catigories');

    Route::get('instructorFilter', [InstructorsController::class,'instructorFilter'])->name('instructorFilter');
    Route::get('courseFilter', [CoursesController::class,'courseFilter'])->name('courseFilter');



    Route::any('payment/pay', 'App\Http\Controllers\Web\PaymentController@pay')->name('payment.pay');
    Route::any('payment/callback', 'App\Http\Controllers\Web\PaymentController@callback')->name('payment.callback');

    Route::get('send-consultation-request/{instructor_id}', [ConsultationController::class,'sendConsultationRequest'])->name('sendConsultationRequest');
    Route::any('payment/consultation/callback', 'App\Http\Controllers\Web\PaymentController@callbackConsultationRequest')->name('payment.consultation.callback');

    Route::get('buy-course/{instructor_id}', [ConsultationController::class,'buyCourse'])->name('buyCourse');
    Route::any('payment/buy-course/callback', 'App\Http\Controllers\Web\PaymentController@callbackConsultationRequest')->name('payment.buy-course.callback');

    //instructor Admin
    Route::group([
        'middleware' => 'auth:web',
    ], function () {
        Route::get('instructor/my-profile', [InstructorProfileController::class,'myProfile'])->name('my_profile');
        Route::get('instructor-personal-profile', [InstructorProfileController::class,'personalProfile'])->name('personalProfile');
        Route::get('instructor-personal-profile-edit', [InstructorProfileController::class,'personalProfileEdit'])->name('personalProfileEdit');
        Route::post('instructor-personal-profile-update', [InstructorProfileController::class,'personalProfileUpdate'])->name('personalProfileUpdate');
        Route::get('instructor-courses', [InstructorCourseController::class,'index'])->name('instructor_courses');
        Route::post('instructor-courses', [InstructorCourseController::class,'search'])->name('search_instructor_courses');
        Route::get('instructor-add-course', [InstructorCourseController::class,'add'])->name('instructor_add_course');
        Route::post('instructor-store-course', [InstructorCourseController::class,'store'])->name('instructor_store_course');
        Route::get('instructor-edit-course/{course_id}', [InstructorCourseController::class,'edit'])->name('instructor_edit_course');
        Route::post('instructor-update-course', [InstructorCourseController::class,'update'])->name('instructor_update_course');
        Route::post('instructor-delete-course', [InstructorCourseController::class,'delete'])->name('instructor_delete_course');
        Route::get('instructor-appointment', [AppointmentController::class,'index'])->name('instructor_appointment');
        Route::get('instructor-create-appointment', [AppointmentController::class,'create'])->name('instructor_create_appointment');
        Route::post('instructor-store-appointment', [AppointmentController::class,'store'])->name('instructor_store_appointment');
        Route::post('instructor-delete-appointment', [AppointmentController::class,'destroy'])->name('instructor_delete_appointment');

    });

    //student Admin
    Route::group([
        'middleware' => 'auth:web',
    ], function () {
        Route::get('student/my-profile', [StudentProfileController::class,'myProfile'])->name('student_my_profile');
        Route::get('student-personal-profile', [StudentProfileController::class,'personalProfile'])->name('studentPersonalProfile');
        Route::get('student-personal-profile-edit', [StudentProfileController::class,'personalProfileEdit'])->name('studentPersonalProfileEdit');
        Route::post('student-personal-profile-update', [StudentProfileController::class,'personalProfileUpdate'])->name('studentPersonalProfileUpdate');
        Route::get('student-courses', [StudentCourseController::class,'index'])->name('student_courses');
        Route::post('student-courses', [StudentCourseController::class,'search'])->name('search_student_courses');
        Route::get('student-add-course', [StudentCourseController::class,'add'])->name('student_add_course');
        Route::post('student-store-course', [StudentCourseController::class,'store'])->name('student_store_course');
        Route::get('student-edit-course/{course_id}', [StudentCourseController::class,'edit'])->name('student_edit_course');
        Route::post('student-update-course', [StudentCourseController::class,'update'])->name('student_update_course');
        Route::post('student-delete-course', [StudentCourseController::class,'delete'])->name('student_delete_course');
        Route::get('student-appointment', [StudentAppointmentController::class,'index'])->name('student_appointment');

        Route::get('student-payments', [StudentPaymentController::class,'index'])->name('student-payments');

    });

});


