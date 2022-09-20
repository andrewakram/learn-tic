@extends('InstructorAdmin.index')
@section('style')

@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard_navigationbar dn db-991">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation
                    </button>
                    <ul id="myDropdown" class="dropdown-content">
                        <li><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                        <li><a href="page-instructor-courses.html"><span class="flaticon-like"></span> My Courses</a>
                        </li>
                        <li><a href="page-my-order.html"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
                        <li><a href="page-my-message.html"><span class="flaticon-speech-bubble"></span> Messages</a>
                        </li>
                        <li><a href="page-my-review.html"><span class="flaticon-rating"></span> Reviews</a></li>
                        <li class="active"><a href="page-add-course.html"><span class="flaticon-add-contact"></span> Add
                                Course</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">Edit Course</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12">
            <div class="my_course_content_container">
                <form method="post" action="{{route('instructor_update_course')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="course_id" value="{{$data['course']->id}}">
                    <div class="my_setting_content mb30">
                        <div class="my_setting_content_header">
                            <div class="my_sch_title">
                                <h4 class="m0">Basic info</h4>
                            </div>
                        </div>
                        <div class="row my_setting_content_details pb0">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput1">Course title arabic</label>
                                            <input type="text" name="title_ar" class="form-control" required
                                                   value="{{$data['course']->title_ar}}"
                                                   id="formGroupExampleInput1" placeholder="Course title arabic">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput12">Course title english</label>
                                            <input type="text" name="title_en" class="form-control" required
                                                   value="{{$data['course']->title_en}}"
                                                   id="formGroupExampleInput12" placeholder="Course title english">
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput3">Course price before discount</label>
                                            <input type="number" name="price_before" class="form-control" required
                                                   value="{{$data['course']->price_before}}"
                                                   id="formGroupExampleInput3" placeholder="$89">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput32">Course price after discount</label>
                                            <input type="number" name="price_after" class="form-control" required
                                                   value="{{$data['course']->price_after}}"
                                                   id="formGroupExampleInput32" placeholder="$89">
                                        </div>
                                    </div><div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInputX">points of course</label>
                                            <input type="number" name="points" class="form-control" required
                                                   value="{{$data['course']->points}}"
                                                   id="formGroupExampleInputX">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInputX2">number of hours of course</label>
                                            <input type="number" name="course_time" class="form-control" required
                                                   value="{{$data['course']->course_time}}"
                                                   id="formGroupExampleInputX2">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="file" name="image" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my_setting_content_header style2">
                            <div class="my_sch_title">
                                <h4 class="m0">Description</h4>
                            </div>
                        </div>
                        <div class="row my_setting_content_details">
                            <div class="col-lg-6">
                                <div class="my_profile_select_box form-group">
                                    <label for="exampleFormControlInput5">Category</label><br>
                                    <select name="category_id" class="selectpicker" required id="exampleFormControlInput5">
                                        @foreach($data['categories'] as $category)
                                            <option value="{{$category->id}}" {{$category->id == $data['course']->category_id ? "selected" : ""}}>
                                                {{$category->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="my_profile_select_box form-group">
                                    <label for="exampleFormControlInput56">Stage</label><br>
                                    <select name="stage_id" class="selectpicker" required id="exampleFormControlInput56">
                                        @foreach($data['stages'] as $stage)
                                            <option value="{{$stage->id}}" {{$stage->id == $data['course']->stage_id ? "selected" : ""}}>
                                                {{$stage->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="my_resume_textarea">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Cource Description arabic</label>
                                        <textarea required name="body_ar" class="form-control" id="exampleFormControlTextarea1"
                                                  rows="4">{{$data['course']->body_ar}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="my_resume_textarea">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea12">Cource Description english</label>
                                        <textarea required name="body_en" class="form-control" id="exampleFormControlTextarea12"
                                                  rows="4">{{$data['course']->body_en}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row my_setting_content_details">
                            <div class="col-lg-12">
                                <button type="submit" class="my_setting_savechange_btn btn btn-thm">Save <span
                                        class="flaticon-right-arrow-1 ml15"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">


    </script>
@endsection
