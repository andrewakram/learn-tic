@extends('InstructorAdmin.index')
@section('style')

@endsection
@section('content')
<!-- row -->
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
            <h4 class="title float-left">create Appointment</h4>
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>

    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('instructor_store_appointment') }}" autocomplete="off">
                    @csrf



                    <div class="row my_setting_content_details pb0">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput1"> Appointment Title </label>
                                            <input name="topic" type="text" class="form-control" required
                                                   id="formGroupExampleInput1" placeholder="Appointment Title">
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput12"> Appointment Day </label>


                                            <select name="days_week" class="form-control" class="selectpicker" required id="formGroupExampleInput12">
                                                 <option value="Saturday">Saturday</option>
                                                 <option value="Saturday">Saturday</option>
                                                 <option value="Saturday">Saturday</option>
                                                 <option value="Saturday">Saturday</option>
                                                 <option value="Saturday">Saturday</option>
                                                 <option value="Saturday">Saturday</option>
                                                 <option value="Saturday">Saturday</option>
                                             </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput3"> From </label>
                                            <input type="time" name="price_before" class="form-control" required
                                                   id="formGroupExampleInput3" placeholder="From">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput32">To</label>
                                            <input type="time" name="price_after" class="form-control" required
                                                   id="formGroupExampleInput32" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInputX"> Duration By Minuts</label>
                                            <input type="number" name="points" class="form-control" required
                                                   id="formGroupExampleInputX">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>




                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>عنوان الحصة : <span class="text-danger">*</span></label>
                                <input class="form-control" name="topic" type="text">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>تاريخ ووقت الحصة : <span class="text-danger">*</span></label>
                                <input class="form-control" type="datetime-local" name="start_time">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>مدة الحصة بالدقائق : <span class="text-danger">*</span></label>
                                <input class="form-control" name="duration" type="text">
                            </div>
                        </div>


                        <button class="btn btn-success btn-sm nextBtn btn-lg appointment_submit"
                            type="submit">تاكيد</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection

@section('script')

@endsection
