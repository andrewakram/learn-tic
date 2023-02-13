@extends('InstructorAdmin.index')
@section('style')
    
@endsection
@section('content')
<!-- row -->
<div class="row">
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

                <form method="post" action="{{ route('instructor_store_appointment2') }}" autocomplete="off">
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
                                                 <option value="Sunday">Sunday</option>  
                                                 <option value="Monday">Monday</option>  
                                                 <option value="Tuesday">Tuesday</option>  
                                                 <option value="Wednesday">Wednesday</option>  
                                                 <option value="Thursday">Thursday</option>  
                                                 <option value="Friday">Friday</option>  
                                             </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput3"> From </label>
                                            <input type="time" name="from_time" class="form-control" required
                                                   id="formGroupExampleInput3" placeholder="From">
                                        </div>
                                    </div>
                                    <!-- <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput32">To</label>
                                            <input type="time" name="to_time" class="form-control" required
                                                   id="formGroupExampleInput32" placeholder="To">
                                        </div>
                                    </div> -->
                                    <div class="col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInputX"> Duration By Minuts</label>
                                            <input type="number" name="duration" class="form-control" required
                                                   id="formGroupExampleInputX">
                                        </div>
                                    </div>

                                    
                                    
                                    
                                </div>
                            </div>
                        </div>





                    <div class="row">

                       

                    
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
