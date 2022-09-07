@extends('InstructorAdmin.index')
@section('style')

@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard_navigationbar dn db-991">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                    <ul id="myDropdown" class="dropdown-content">
                        <li><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                        <li><a href="page-instructor-courses.html"><span class="flaticon-like"></span> My Courses</a></li>
                        <li><a href="page-my-order.html"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
                        <li><a href="page-my-message.html"><span class="flaticon-speech-bubble"></span> Messages</a></li>
                        <li><a href="page-my-review.html"><span class="flaticon-rating"></span> Reviews</a></li>
                        <li class="active"><a href="page-add-course.html"><span class="flaticon-add-contact"></span> Add Course</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">Add Course</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12">
            <div class="my_course_content_container">
                <form method="post" href="" enctype="multipart/form-data">
                    @csrf
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
                                        <label for="formGroupExampleInput1">Course title</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="UX/UI">
                                    </div>
                                    <div class="my_profile_setting_input form-group">
                                        <label for="formGroupExampleInput2">Course start</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="formGroupExampleInput3">Course price</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="$89">
                                    </div>
                                    <div class="my_profile_setting_input form-group">
                                        <label for="exampleInputPhone">Course expire</label>
                                        <input type="email" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="formGroupExampleInputX">Teacher name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInputX">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="file" name="image">
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
                        <div class="col-lg-12">
                            <div class="my_profile_select_box form-group">
                                <label for="exampleFormControlInput5">Category</label><br>
                                <select class="selectpicker">
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>None</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="my_resume_textarea">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Personal info</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my_setting_content_header style2">
                        <div class="my_sch_title">
                            <h4 class="m0">Videos</h4>
                        </div>
                    </div>
                    <div class="row my_setting_content_details">
                        <div class="col-xl-4">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInputY">Course Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInputY" placeholder="UX/UI, HTML, Photoshop">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="my_profile_select_box tt_video form-group">
                                <label for="exampleFormControlInput5">Video category</label><br>
                                <select class="selectpicker">
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>None</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInputZ">Video URL</label>
                                <input type="text" class="form-control" id="formGroupExampleInputZ">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="my_setting_savechange_btn btn btn-thm">Save <span class="flaticon-right-arrow-1 ml15"></span></button>
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
