@extends('InstructorAdmin.index')
@section('style')
    <style>
        .my_setting_content_header {
            border-bottom: 10px solid #eeeeee;
        }
    </style>
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
                        <li><a href="page-add-course.html"><span class="flaticon-add-contact"></span> Add Course</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">User Profile</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12">
            <form method="post" action="{{route('personalProfileUpdate')}}" enctype="multipart/form-data">
                @csrf
                <div class="my_course_content_container">
                    <div class="my_setting_content mb30">
                        <div class="my_setting_content_header">
                            <div class="my_sch_title">
                                <h4 class="m0">Personal Details</h4>
                            </div>
                        </div>

                        <div class="row my_setting_content_details pb0">

                            <div class="col-xl-3">
                                <div class="wrap-custom-file">
                                    <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
                                    <label for="image1">
                                        <span>Browse</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput11">Email</label>
                                            <input type="email" name="email" value="{{$data['instructor']->email}}"
                                                   class="form-control" id="formGroupExampleInput11">
                                        </div>
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput12">phone</label>
                                            <input type="tel" name="phone" value="{{$data['instructor']->phone}}"
                                                   class="form-control" id="formGroupExampleInput12">
                                        </div>
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput3">years_of_exper</label>
                                            <input type="number" name="years_of_exper"
                                                   value="{{$data['instructor']->teacherInfo->years_of_exper}}"
                                                   class="form-control" id="formGroupExampleInput3" placeholder="$89">
                                        </div>
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput31">inquiry_cost_normal</label>
                                            <input type="number" name="inquiry_cost_normal"
                                                   value="{{$data['instructor']->teacherInfo->inquiry_cost_normal}}"
                                                   class="form-control" id="formGroupExampleInput31" placeholder="$89">
                                        </div>

                                        <div class="my_profile_setting_input form-group">
                                            <label for="exampleInputlearn_type">التخصص</label>
                                            <select name="categoey_id" id="exampleInputlearn_type"
                                                    class="form-control">
                                                @foreach($data['categories'] as $category)
                                                    <option
                                                        value="{{$category->id}}" {{$category->id == $data['instructor']->teacherInfo->categoey_id ? "selected" : ""}}>
                                                        {{$category->title}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput111">national_id</label>
                                            <input type="text" name="national_id"
                                                   value="{{$data['instructor']->teacherInfo->national_id}}"
                                                   class="form-control" id="formGroupExampleInput111">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput1">Full Name</label>
                                            <input type="text" name="full_name"
                                                   value="{{$data['instructor']->teacherInfo->full_name}}"
                                                   class="form-control" id="formGroupExampleInput1">
                                        </div>
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput2">university</label>
                                            <input type="text" name="university"
                                                   value="{{$data['instructor']->teacherInfo->university}}"
                                                   class="form-control" id="formGroupExampleInput2">
                                        </div>

                                        <div class="my_profile_setting_input form-group">
                                            <label for="exampleInputQualifications">qualifications</label>
                                            <select name="qualifications" id="exampleInputQualifications"
                                                    class="form-control">
                                                <option
                                                    value="PHD" {{$data['instructor']->teacherInfo->qualifications == "PHD" ? "selected" : ""}}>
                                                    PHD
                                                </option>
                                                <option
                                                    value="Master" {{$data['instructor']->teacherInfo->qualifications == "Master" ? "selected" : ""}}>
                                                    Master
                                                </option>
                                                <option
                                                    value="Bachlore" {{$data['instructor']->teacherInfo->qualifications == "Bachlore" ? "selected" : ""}}>
                                                    Bachlore
                                                </option>
                                                <option
                                                    value="other" {{$data['instructor']->teacherInfo->qualifications == "other" ? "selected" : ""}}>
                                                    other
                                                </option>
                                            </select>
                                        </div>

                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput32">inquiry_cost_urgent</label>
                                            <input type="number" name="inquiry_cost_urgent"
                                                   value="{{$data['instructor']->teacherInfo->inquiry_cost_urgent}}"
                                                   class="form-control" id="formGroupExampleInput32" placeholder="$89">
                                        </div>

                                        <div class="my_profile_setting_input form-group">
                                            <label for="exampleInputlearn_type">طريقة التعلم</label>
                                            <select name="learn_type" id="exampleInputlearn_type"
                                                    class="form-control">
                                                <option
                                                    value="remote" {{$data['instructor']->teacherInfo->learn_type == "remote" ? "selected" : ""}}>
                                                    remote
                                                </option>

                                                <option
                                                    value="site" {{$data['instructor']->teacherInfo->learn_type == "site" ? "selected" : ""}}>
                                                    on site
                                                </option>
                                            </select>
                                        </div>

                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput1112">residence_id</label>
                                            <input type="text" name="residence_id"
                                                   value="{{$data['instructor']->teacherInfo->residence_id}}"
                                                   class="form-control" id="formGroupExampleInput1112">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="my_resume_textarea">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">description</label>
                                        <textarea class="form-control" name="desctiption"
                                                  id="exampleFormControlTextarea1"
                                                  rows="7">{{$data['instructor']->teacherInfo->desctiption}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my_setting_content_header style2 bold">
                            <div class="my_sch_title bold">
                            </div>
                        </div>
                        <div class="my_setting_content_header style2">
                            <div class="my_sch_title">
                                <h4 class="m0">تحميل الملفات</h4>
                            </div>
                        </div>
                        <div class="row my_setting_content_details pb0">
                            <div class="col-xl-6">
                                <div class="password_change_form">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1z">شهادة التخرج</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="file" name="graduate" class="form-control"
                                                       id="exampleInputPassword1z" placeholder="">
                                            </div>
                                            <div class="col-md-6">
                                                @if($data['instructor']->uploadedFiles)
                                                    @if($data['instructor']->uploadedFiles->where('type','graduate')->first())
                                                        <a href="{{$data['instructor']->uploadedFiles->where('type','graduate')->first()->file}}"
                                                           class="btn btn-primary" target="_blank">عرض</a>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1z1">certificate</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="file" name="certificate" class="form-control"
                                                       id="exampleInputPassword1z1" placeholder="">
                                            </div>
                                            <div class="col-md-6">
                                                @if($data['instructor']->uploadedFiles)
                                                    @if($data['instructor']->uploadedFiles->where('type','certificate')->first())
                                                        <a href="{{$data['instructor']->uploadedFiles->where('type','certificate')->first()->file}}"
                                                           class="btn btn-primary" target="_blank">عرض</a>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1z12">صورة الهوية</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="file" name="national_id_file" class="form-control"
                                                       id="exampleInputPassword1z12" placeholder="">
                                            </div>
                                            <div class="col-md-6">
                                                @if($data['instructor']->uploadedFiles)
                                                    @if($data['instructor']->uploadedFiles->where('type','national_id')->first())
                                                        <a href="{{$data['instructor']->uploadedFiles->where('type','national_id')->first()->file}}"
                                                           class="btn btn-primary" target="_blank">عرض</a>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1z123">صورة الاقامة</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="file" name="residence_id_file" class="form-control"
                                                       id="exampleInputPassword1z123" placeholder="">
                                            </div>
                                            <div class="col-md-6">
                                                @if($data['instructor']->uploadedFiles)
                                                    @if($data['instructor']->uploadedFiles->where('type','residence_id')->first())
                                                        <a href="{{$data['instructor']->uploadedFiles->where('type','residence_id')->first()->file}}"
                                                           class="btn btn-primary" target="_blank">عرض</a>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="my_setting_content_header style2">
                            <div class="my_sch_title">
                            </div>
                        </div>

                        <div class="my_setting_content_header style2">
                            <div class="my_sch_title">
                                <h4 class="m0">Change password</h4>
                            </div>
                        </div>
                        <div class="row my_setting_content_details pb0">
                            <div class="col-xl-6">
                                <div class="password_change_form">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Old Password</label>
                                        <input type="password" name="password" class="form-control"
                                               id="exampleInputPassword1" placeholder="*******">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">New Password</label>
                                        <input type="password" name="new_password" class="form-control"
                                               id="exampleInputPassword2">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword3">Confirm Password</label>
                                        <input type="password" name="new_password2" class="form-control mb0"
                                               id="exampleInputPassword3">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="my_setting_content_header style3">
                            {{--                        <div class="my_sch_title">--}}
                            {{--                            <h4 class="m0">Social Links</h4>--}}
                            {{--                        </div>--}}
                            {{--                    </div>--}}
                            {{--                    <div class="row my_setting_content_details">--}}
                            {{--                        <div class="col-xl-6">--}}
                            {{--                            <div class="my_profile_setting_input2">--}}
                            {{--                                <label for="validationServerUsername">Facebook</label>--}}
                            {{--                                <div class="input-group">--}}
                            {{--                                    <input type="text" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="col-xl-6">--}}
                            {{--                            <div class="my_profile_setting_input2">--}}
                            {{--                                <label for="validationServerUsername2">Twitter</label>--}}
                            {{--                                <div class="input-group">--}}
                            {{--                                    <input type="text" class="form-control" id="validationServerUsername2" aria-describedby="inputGroupPrepend4" required>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="col-xl-6">--}}
                            {{--                            <div class="my_profile_setting_input2">--}}
                            {{--                                <label for="validationServerUsername3">Linkedin</label>--}}
                            {{--                                <div class="input-group">--}}
                            {{--                                    <input type="text" class="form-control" id="validationServerUsername3" aria-describedby="inputGroupPrepend4" required>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="col-xl-6">--}}
                            {{--                            <div class="my_profile_setting_input2">--}}
                            {{--                                <label for="validationServerUsername4">Google Plus</label>--}}
                            {{--                                <div class="input-group">--}}
                            {{--                                    <input type="text" class="form-control" id="validationServerUsername4" aria-describedby="inputGroupPrepend4" required>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            <div class="col-lg-12">
                                <button type="submit" class="my_setting_savechange_btn btn btn-thm">Save <span
                                        class="flaticon-right-arrow-1 ml15"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">


    </script>
@endsection
