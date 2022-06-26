<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainAdmin\SettingController;


Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers'
], function () {

    Route::group(['namespace' => 'MainAdmin', 'as' => 'admin'], function () {
        Route::get('login', 'AuthController@login_view')->name('login-view');
        Route::post('login', 'AuthController@login')->name('.login');
        Route::get('logout', 'AuthController@logout')->name('.logout');

        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('home', 'HomeController@index')->name('.home');
            Route::get('courses-last-7-days', 'HomeController@getDataCoursesLast7Days')
                ->name('.coursesLast7Days.datatable');

        });
        Route::group(['middleware' => 'auth:admin'], function () {

            Route::group(['prefix' => 'supervisors', 'as' => '.supervisors'], function () {
                Route::get('/', 'SupervisorController@index');
                Route::get('getData', 'SupervisorController@getData')->name('.datatable');
                Route::get('/create', 'SupervisorController@create')->name('.create');
                Route::post('/store', 'SupervisorController@store')->name('.store');
                Route::get('/edit/{id}', 'SupervisorController@edit')->name('.edit');
                Route::post('/update', 'SupervisorController@update')->name('.update');
                Route::get('/show/{id}', 'SupervisorController@show')->name('.show');
                Route::post('/delete', 'SupervisorController@delete')->name('.delete');
                Route::post('/delete-multi', 'SupervisorController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'students', 'as' => '.students'], function () {
                Route::get('/', 'StudentController@index');
                Route::get('getData', 'StudentController@getData')->name('.datatable');
                Route::get('/create', 'StudentController@create')->name('.create');
                Route::post('/store', 'StudentController@store')->name('.store');
                Route::get('/edit/{id}', 'StudentController@edit')->name('.edit');
                Route::post('/update', 'StudentController@update')->name('.update');
                Route::get('/show/{id}', 'StudentController@show')->name('.show');
                Route::post('/delete', 'StudentController@delete')->name('.delete');
                Route::post('/delete-multi', 'StudentController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'instructors', 'as' => '.instructors'], function () {
                Route::get('/', 'InstructorController@index');
                Route::get('getData', 'InstructorController@getData')->name('.datatable');
                Route::get('/create', 'InstructorController@create')->name('.create');
                Route::post('/store', 'InstructorController@store')->name('.store');
                Route::get('/edit/{id}', 'InstructorController@edit')->name('.edit');
                Route::post('/update', 'InstructorController@update')->name('.update');
                Route::get('/show/{id}', 'InstructorController@show')->name('.show');
                Route::post('/delete', 'InstructorController@delete')->name('.delete');
                Route::post('/delete-multi', 'InstructorController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'cities', 'as' => '.cities'], function () {
                Route::get('/', 'CityController@index');
                Route::get('getData', 'CityController@getData')->name('.datatable');
                Route::get('/create', 'CityController@create')->name('.create');
                Route::post('/store', 'CityController@store')->name('.store');
                Route::get('/edit/{id}', 'CityController@edit')->name('.edit');
                Route::post('/update', 'CityController@update')->name('.update');
                Route::get('/show/{id}', 'CityController@show')->name('.show');
                Route::post('/delete', 'CityController@delete')->name('.delete');
                Route::post('/delete-multi', 'CityController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'categories', 'as' => '.categories'], function () {
                Route::get('/', 'CategoryController@index');
                Route::get('getData', 'CategoryController@getData')->name('.datatable');
                Route::get('/create', 'CategoryController@create')->name('.create');
                Route::post('/store', 'CategoryController@store')->name('.store');
                Route::get('/edit/{id}', 'CategoryController@edit')->name('.edit');
                Route::post('/update', 'CategoryController@update')->name('.update');
                Route::get('/show/{id}', 'CategoryController@show')->name('.show');
                Route::post('/delete', 'CategoryController@delete')->name('.delete');
                Route::post('/delete-multi', 'CategoryController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'blogs', 'as' => '.blogs'], function () {
                Route::get('/', 'BlogController@index');
                Route::get('getData', 'BlogController@getData')->name('.datatable');
                Route::get('/create', 'BlogController@create')->name('.create');
                Route::post('/store', 'BlogController@store')->name('.store');
                Route::get('/edit/{id}', 'BlogController@edit')->name('.edit');
                Route::post('/update', 'BlogController@update')->name('.update');
                Route::get('/show/{id}', 'BlogController@show')->name('.show');
                Route::post('/delete', 'BlogController@delete')->name('.delete');
                Route::post('/delete-multi', 'BlogController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'courses', 'as' => '.courses'], function () {
                Route::get('/', 'CourseController@index');
                Route::get('getData', 'CourseController@getData')->name('.datatable');
                Route::get('/create', 'CourseController@create')->name('.create');
                Route::post('/store', 'CourseController@store')->name('.store');
                Route::get('/edit/{id}', 'CourseController@edit')->name('.edit');
                Route::post('/update', 'CourseController@update')->name('.update');
                Route::get('/show/{id}', 'CourseController@show')->name('.show');
                Route::post('/delete', 'CourseController@delete')->name('.delete');
                Route::post('/delete-multi', 'CourseController@deleteMulti')->name('.deleteMulti');
                Route::get('/course-sections/{course_id}', 'CourseController@courseSections')
                    ->name('.courseSections');
                Route::get('/course-sections/getData/{course_id}', 'CourseController@getCourseSectionsData')
                    ->name('.courseSections.datatable');
                Route::get('/course-lessons/{section_id}', 'CourseController@courseLessons')
                    ->name('.courseLessons');
                Route::get('/course-lessons/getData/{section_id}', 'CourseController@getCourseLessonsData')
                    ->name('.courseLessons.datatable');
            });

            Route::group(['prefix' => 'tags', 'as' => '.tags'], function () {
                Route::get('/', 'TagController@index');
                Route::get('getData', 'TagController@getData')->name('.datatable');
                Route::get('/create', 'TagController@create')->name('.create');
                Route::post('/store', 'TagController@store')->name('.store');
                Route::get('/edit/{id}', 'TagController@edit')->name('.edit');
                Route::post('/update', 'TagController@update')->name('.update');
                Route::get('/show/{id}', 'TagController@show')->name('.show');
                Route::post('/delete', 'TagController@delete')->name('.delete');
                Route::post('/delete-multi', 'TagController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'pages', 'as' => '.pages'], function () {
                Route::get('/', 'PageController@index');
                Route::get('getData', 'PageController@getData')->name('.datatable');
                Route::get('/edit/{id}', 'PageController@edit')->name('.edit');
                Route::post('/update', 'PageController@update')->name('.update');
                Route::get('/show/{id}', 'PageController@show')->name('.show');
                Route::post('/delete', 'PageController@delete')->name('.delete');
                Route::post('/delete-multi', 'PageController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'settings', 'as' => '.settings'], function () {
                Route::get('/edit', [SettingController::class, 'index']);
                Route::post('/update', [SettingController::class, 'update'])->name('.update');
            });

        });
    });

});
