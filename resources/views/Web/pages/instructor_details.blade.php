@extends('Web.index')
@section('style')

@endsection
@section('content')
    	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title"> {{$teacher_details -> teacherInfo -> full_name}}   </h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">{{ __('lang.home') }}</a></li>
						    <li class="breadcrumb-item active" aria-current="page">{{ __('lang.instructors') }}</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Team Members -->
	<section class="our-team pb40">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9">
					<div class="row">
						<div class="col-lg-12">
                            <div class="cs_rwo_tabs csv2">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Overview-tab" data-toggle="tab" href="#Overview" role="tab" aria-controls="Overview" aria-selected="true"> {{ __('lang.course_list') }}  </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="course-tab" data-toggle="tab" href="#course" role="tab" aria-controls="course" aria-selected="false">{{ __('lang.appointment') }}</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Overview" role="tabpanel" aria-labelledby="Overview-tab">
                                        <div class="row">

                                       @foreach($teacher_details -> teacherInfo -> category -> courses  as $course ) 
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="top_courses">
                                                    <div class="thumb">
                                                        <img class="img-whp" src="{{asset('project')}}/images/courses/t1.jpg" alt="t1.jpg">
                                                        <div class="overlay">
                                                            <div class="tag">Best Seller</div>
                                                            <div class="icon"><span class="flaticon-like"></span></div>
                                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <div class="tc_content">
                                                            <p>{{$teacher_details -> teacherInfo -> full_name}}</p>
                                                            <h5>
                                                            @if(session()->get('lang') == 'ar')
                                                                 {{$course -> title_ar }}
                                                            @else
                                                                 {{$course -> title_en }}
                                                            @endif
                                                                </h5>
                                                            <ul class="tc_review">
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tc_footer">
                                                            <ul class="tc_meta float-left">
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">25</a></li>
                                                            </ul>
                                                            
                                                            <div class="tc_price float-right">
                                                                @if(!empty($course->price_after))
                                                                    <del class="original_price">${{ $course->price_after}}</del> 
                                                                @endif 
                                                                ${{$course->price_before}}
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="top_courses">
                                                    <div class="thumb">
                                                        <img class="img-whp" src="{{asset('project')}}/images/courses/t2.jpg" alt="t2.jpg">
                                                        <div class="overlay">
                                                            <div class="tag">Top Seller</div>
                                                            <div class="icon"><span class="flaticon-like"></span></div>
                                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <div class="tc_content">
                                                            <p>Ali TUFAN</p>
                                                            <h5>Designing a Responsive Mobile Website with Muse</h5>
                                                            <ul class="tc_review">
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tc_footer">
                                                            <ul class="tc_meta float-left">
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">25</a></li>
                                                            </ul>
                                                            <div class="tc_price float-right">$69.95</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="top_courses">
                                                    <div class="thumb">
                                                        <img class="img-whp" src="{{asset('project')}}/images/courses/t3.jpg" alt="t3.jpg">
                                                        <div class="overlay">
                                                            <div class="tag">Top Seller</div>
                                                            <div class="icon"><span class="flaticon-like"></span></div>
                                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <div class="tc_content">
                                                            <p>Ali TUFAN</p>
                                                            <h5>Adobe XD: Prototyping Tips and Tricks</h5>
                                                            <ul class="tc_review">
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tc_footer">
                                                            <ul class="tc_meta float-left">
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">25</a></li>
                                                            </ul>
                                                            <div class="tc_price float-right">$69.95</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="top_courses">
                                                    <div class="thumb">
                                                        <img class="img-whp" src="{{asset('project')}}/images/courses/t4.jpg" alt="t4.jpg">
                                                        <div class="overlay">
                                                            <div class="tag">Best Seller</div>
                                                            <div class="icon"><span class="flaticon-like"></span></div>
                                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <div class="tc_content">
                                                            <p>Ali TUFAN</p>
                                                            <h5>Sketch: Creating Responsive SVG</h5>
                                                            <ul class="tc_review">
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tc_footer">
                                                            <ul class="tc_meta float-left">
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">25</a></li>
                                                            </ul>
                                                            <div class="tc_price float-right">$69.95</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="top_courses">
                                                    <div class="thumb">
                                                        <img class="img-whp" src="{{asset('project')}}/images/courses/t5.jpg" alt="t5.jpg">
                                                        <div class="overlay">
                                                            <div class="tag">Best Seller</div>
                                                            <div class="icon"><span class="flaticon-like"></span></div>
                                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <div class="tc_content">
                                                            <p>Ali TUFAN</p>
                                                            <h5>Design Instruments for Communication</h5>
                                                            <ul class="tc_review">
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tc_footer">
                                                            <ul class="tc_meta float-left">
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">25</a></li>
                                                            </ul>
                                                            <div class="tc_price float-right">$69.95</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="top_courses">
                                                    <div class="thumb">
                                                        <img class="img-whp" src="{{asset('project')}}/images/courses/t6.jpg" alt="t6.jpg">
                                                        <div class="overlay">
                                                            <div class="tag">Top Seller</div>
                                                            <div class="icon"><span class="flaticon-like"></span></div>
                                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <div class="tc_content">
                                                            <p>Ali TUFAN</p>
                                                            <h5>How to be a DJ? Make Electronic Music</h5>
                                                            <ul class="tc_review">
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tc_footer">
                                                            <ul class="tc_meta float-left">
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">25</a></li>
                                                            </ul>
                                                            <div class="tc_price float-right">$69.95</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="col-lg-12">
                                                <div class="mbp_pagination">
                                                    <ul class="page_navigation">
                                                        <li class="page-item disabled">
                                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active" aria-current="page">
                                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">Next <span class="flaticon-right-arrow-1"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="review-tab">
                                      <!--//////////// -->
                                      <!-- Slider -->
                                        <div class="appointment">
                                            <div uk-slider="center: true">
                                         
                                                <ul class="uk-slider-items uk-child-width-1-2@s ">
                                                    <!-- Thursday -->
                                                    <li class="appointment_time">
                                                        <div class="none">
                                                        <div class="uk-card-calendar uk-card-hover">
                                                            <h1>28</h1>
                                                            <h3 style="color: #009688; padding-top: 25px; font-size: 25px;">Thursday</h3>
                                                            <h4 style="font-size: 14px;">from 9:00am-6:00pm</h4>
                                                            <h3 style="color: #000; font-size: 16px; padding-top: 35px; padding-bottom: 15px;">Afternoon</h3>
                                                            <ul class="uk-list-time">
                                                                <li class="time">2:30pm - 3:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">3:30pm - 4:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <h3 style="color: #000; font-size: 16px; padding-top: 15px; padding-bottom: 15px;">Evening</h3>
                                                                <li class="active-time"> ‣ 5:30pm - 6:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">6:00pm - 6:30pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">6:30pm - 7:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <!-- Friday -->
                                                    <li class="appointment_time">
                                                        <div class="none">
                                                        <div class="uk-card-calendar uk-card-hover">
                                                            <h1>29</h1>
                                                            <h3 style="color: #009688; padding-top: 25px; font-size: 25px;">Friday</h3>
                                                            <h4 style="font-size: 14px;">from 9:00am-6:00pm</h4>
                                                            <h3 style="color: #000; font-size: 16px; padding-top: 35px; padding-bottom: 15px;">Afternoon</h3>
                                                            <ul class="uk-list-time">
                                                                <li class="time">2:30pm - 3:00pm 
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">3:30pm - 4:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <h3 style="color: #000; font-size: 16px; padding-top: 15px; padding-bottom: 15px;">Evening</h3>
                                                                <li class="time">  5:30pm - 6:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">6:00pm - 6:30pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">6:30pm - 7:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <!-- Monday -->
                                                    <li class="appointment_time">
                                                        <div class="none">
                                                        <div class="uk-card-calendar uk-card-hover">
                                                            <h1>30</h1>
                                                            <h3 style="color: #009688; padding-top: 25px; font-size: 25px;">Monday</h3>
                                                            <h4 style="font-size: 14px;">from 9:00am-6:00pm</h4>
                                                            <h3 style="color: #000; font-size: 16px; padding-top: 35px; padding-bottom: 15px;">Afternoon</h3>
                                                            <ul class="uk-list-time">
                                                                <li class="time">2:30pm - 3:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">3:30pm - 4:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <h3 style="color: #000; font-size: 16px; padding-top: 15px; padding-bottom: 15px;">Evening</h3>
                                                                <li class="time">  5:30pm - 6:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">6:00pm - 6:30pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">6:30pm - 7:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <!-- Tuesday -->
                                                    <li class="appointment_time">
                                                        <div class="none">
                                                        <div class="uk-card-calendar uk-card-hover">
                                                            <h1>31</h1>
                                                            <h3 style="color: #009688; padding-top: 25px; font-size: 25px;">Tuesday</h3>
                                                            <h4 style="font-size: 14px;">from 9:00am-6:00pm</h4>
                                                            <h3 style="color: #000; font-size: 16px; padding-top: 35px; padding-bottom: 15px;">Afternoon</h3>
                                                            <ul class="uk-list-time">
                                                                <li class="time">2:30pm - 3:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">3:30pm - 4:00pm\
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <h3 style="color: #000; font-size: 16px; padding-top: 15px; padding-bottom: 15px;">Evening</h3>
                                                                <li class="time">  5:30pm - 6:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">6:00pm - 6:30pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">6:30pm - 7:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <!-- Wednesday -->
                                                    <li class="appointment_time">
                                                        <div class="none">
                                                        <div class="uk-card-calendar uk-card-hover">
                                                            <h1>01</h1>               
                                                            <h3 style="color: #009688; padding-top: 25px; font-size: 25px;">Wednesday</h3>
                                                            <h4 style="font-size: 14px;">from 9:00am-6:00pm</h4>
                                                            <h3 style="color: #000; font-size: 16px; padding-top: 35px; padding-bottom: 15px;">Afternoon</h3>
                                                            <ul class="uk-list-time">
                                                                <li class="time">2:30pm - 3:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">3:30pm - 4:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <h3 style="color: #000; font-size: 16px; padding-top: 15px; padding-bottom: 15px;">Evening</h3>
                                                                <li class="time">  5:30pm - 6:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">6:00pm - 6:30pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                                <li class="time">6:30pm - 7:00pm
                                                                    <a href="#" type="button" class="btn dbxshad btn-lg btn-thm circle white apply_btn">Apply Now</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                
                                                
                                                <!-- Indicator -->
                                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                            </div>
                                            </div>
    
                                      <!-- //////////-->
                                      
                                    </div>
                                    
                                </div>
                            </div>
							
						</div>
					
					</div>

					
				</div>
				<div class="col-lg-4 col-xl-3 teacher_info"  >
                    <div class="teacher_avatar">
                        <img  src="{{$teacher_details -> image }}" alt="teacher.png">
                        <h3> {{$teacher_details -> teacherInfo -> full_name}} </h3>
                        <span>{{$teacher_details ->teacherInfo -> category -> title_ar}}</span>
                        <span> {{$teacher_details -> email}}</span>
                        <span> {{$teacher_details -> phone }}</span>
                    </div>
                    <div class="teacher_social">
                        <a href="" class="fa fa-facebook-f"></a>
                        <a href="" class="fa fa-linkedin"></a>
                        <a href="" class="fa fa-twitter" ></a>
                        <a href="" class="fa fa-youtube"></a>
                    </div>

                    
                    
                    <div class="teacher_achieve">
                        <div class="teacher_achieve_list">
                            
                            <i class="fa fa-user"></i>
                            <h3> 56,890 </h3>
                            <span> {{ __('lang.students') }}  </span>
                        </div>
                        <div class="teacher_achieve_list">
                            <i class="fa fa-star"></i>
                            <h3> 5.0 </h3>
                            <span> {{ __('lang.rating') }}  </span>
                        </div>
                        <div class="teacher_achieve_list">
                            <i class="fa fa-book"></i>
                            <h3> 80 </h3>
                            <span> {{ __('lang.course') }} </span>
                        </div>
                    </div>

                    <div class="teacher_about">
                        <h3> {{ __('lang.about_me') }}</h3>
                        <p>
                            {{$teacher_details -> teacherInfo -> desctiption}}
                        </p>
                     </div>
                     <div class=" ui_kit_button search_btn mb0">
                        <a href="page-student-message.html" type="button" class="btn dbxshad btn-lg btn-thm circle white">{{ __('lang.chat') }}</a>
                      </div>
			
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
					<div class="footer_contact_widget">
						<h4>CONTACT</h4>
						<p>329 Queensberry Street, North Melbourne </p>
						<p>VIC 3051, Australia.</p>
						<p>123 456 7890</p>
						<p>support@LearnTic.com</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="footer_company_widget">
						<h4>COMPANY</h4>
						<ul class="list-unstyled">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="page-contact.html">Contact</a></li>
							<li><a href="#">Become a Teacher</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="footer_program_widget">
						<h4>PROGRAMS</h4>
						<ul class="list-unstyled">
							<li><a href="#">Nanodegree Plus</a></li>
							<li><a href="#">Veterans</a></li>
							<li><a href="#">Georgia</a></li>
							<li><a href="#">Self-Driving Car</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="footer_support_widget">
						<h4>SUPPORT</h4>
						<ul class="list-unstyled">
							<li><a href="#">Documentation</a></li>
							<li><a href="#">Forums</a></li>
							<li><a href="#">Language Packs</a></li>
							<li><a href="#">Release Status</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
					<div class="footer_apps_widget">
						<h4>MOBILE</h4>
						<div class="app_grid">
							<button class="apple_btn btn-dark">
								<span class="icon">
									<span class="flaticon-apple"></span>
								</span>
								<span class="title">App Store</span>
								<span class="subtitle">Available now on the</span>
							</button>
							<button class="play_store_btn btn-dark">
								<span class="icon">
									<span class="flaticon-google-play"></span>
								</span>
								<span class="title">Google Play</span>
								<span class="subtitle">Get in on</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('script')

@endsection
