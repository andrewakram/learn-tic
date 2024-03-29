@extends('Web.index')
@section('style')
<style>

.mySlides {display: none}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 20px;
  border-radius: 3px 0 0 3px;
}
/* Position the "next button" to the right */
.prev {
  left: 20px;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}



/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next {font-size: 11px}
}
</style>
@endsection
@section('content')
    <!-- Home Design -->
    <section class="home-three home3-overlay home3_bgi6">
        <div class="container">
            <div class="row posr mySlides fade">
                <div class="col-lg-12">
                    <div class="home-text text-center">
                        <h2 class="fz50">{{ trans('lang.slider_title') }}</h2>
                        <p class="color-white">{{ trans('lang.slider_p') }}</p>
                        <a class="btn home_btn" href="{{route('instructor_register')}}">{{ trans('lang.slider_btn') }}</a>
                    </div>
                </div>
            </div>
            <div class="row posr mySlides fade">
                <div class="col-lg-12">
                    <div class="home-text text-center">
                        <h2 class="fz50">{{ trans('lang.slider_title2') }}</h2>
                        <p class="color-white">{{ trans('lang.slider_p2') }}</p>
                        <a class="btn home_btn" href="{{route('courses')}}">{{ trans('lang.slider_btn2') }}</a>
                    </div>
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            <div class="row_style">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none"> <path d="M 1000 280 l 2 -253 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -235 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path><path d="M 1000 261 l 2 -222 c -157 -43 -312 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -153.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 16.61 v 22.39 z"></path><path d="M 1000 296 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path></svg>
            </div>
        </div>
        <div style="text-align:center ;display:none">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
        </div>
    </section>

    <!-- about3 home3 -->
    <section class="home3_about home3_wave">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="about_home3">

                        <h3> {{$data['static_sections']->where('type' , 'home_about')->first()->title }}</h3>
                        {!! $data['static_sections']->where('type' , 'home_about')->first()->body !!}
                        <a href="{{route('about_us')}}" class="btn about_btn_home3">{{ trans('lang.about_btn') }}</a>

                        <!--	<ul class="partners_thumb_list">
                                <li class="list-inline-item"><a href="#"><img class="img-fluid" src="images/partners/1.png" alt="1.png"></a></li>
                                <li class="list-inline-item"><a href="#"><img class="img-fluid" src="images/partners/2.png" alt="2.png"></a></li>
                                <li class="list-inline-item"><a href="#"><img class="img-fluid" src="images/partners/3.png" alt="3.png"></a></li>
                                <li class="list-inline-item"><a href="#"><img class="img-fluid" src="images/partners/4.png" alt="4.png"></a></li>
                            </ul>
                        -->
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="row">
                        @foreach($data['static_sections']->where('type' , 'section') as $key => $section)
                        <div class="col-sm-6 col-lg-6">
                            <div class="home3_about_icon_box
                            @if($key == 0)
                             one
                             @elseif($key == 1)
                             two
                             @elseif($key == 2)
                             three
                             @elseif($key == 3)
                             four
                             @endif

                             ">
                                <span class="icon"><span class="flaticon-account"></span></span>
                                <div class="details">
                                    <h4>{{$section->title }}</h4>
                                    <p>{!! $section->body !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_home3_shape_container">
                        <div class="about_home3_shape"><img src="{{asset('project')}}/images/about/shape1.png" alt="shape1.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//////////////////////////-->



    <!-- School Category Courses -->
    <section id="our-courses" class="our-courses pt90 pt650-992">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#our-courses">
                        <div class="mouse_scroll">
                            <div class="icon"><span class="flaticon-download-arrow"></span></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">{{ trans('lang.categories_title') }}</h3>
                        <p>{{ trans('lang.categories_p') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php $num=1 ;$course_count = 0  ?>

            @foreach ($data['categories'] as $key => $Category)
 
             @if($key < 8 and  $Category -> courses_count  > 0)
                <div class="col-sm-6 col-lg-3">
                    <div class="img_hvr_box" style="background-image: url({{$Category -> image}});">
                        <div class="overlay">
                            <div class="details">


                            <!--  <h5>{{ $Category->{'title_'.App::getLocale()} }}</h5>-->
                              <h5> {{ $Category->title }}</h5>
                                <p>  Over {{$Category -> courses_count}} Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
              
            @endif
             @endforeach

               <!-- <div class="col-sm-6 col-lg-3">
                    <div class="img_hvr_box" style="background-image: url({{asset('project')}}/images/courses/2.jpg);">
                        <div class="overlay">
                            <div class="details">
                                <h5>Business</h5>
                                <p>Over 1,400 Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="img_hvr_box" style="background-image: url({{asset('project')}}/images/courses/3.jpg);">
                        <div class="overlay">
                            <div class="details">
                                <h5>Software Development</h5>
                                <p>Over 350 Courses</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="img_hvr_box" style="background-image: url({{asset('project')}}/images/courses/4.jpg);">
                        <div class="overlay">
                            <div class="details">
                                <h5>Web Development</h5>
                                <p>Over 640 Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="img_hvr_box" style="background-image: url({{asset('project')}}/images/courses/5.jpg);">
                        <div class="overlay">
                            <div class="details">
                                <h5>Photography</h5>
                                <p>Over 740 Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="img_hvr_box" style="background-image: url({{asset('project')}}/images/courses/6.jpg);">
                        <div class="overlay">
                            <div class="details">
                                <h5>Audio + Music</h5>
                                <p>Over 120 Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="img_hvr_box" style="background-image: url({{asset('project')}}/images/courses/7.jpg);">
                        <div class="overlay">
                            <div class="details">
                                <h5>Marketing</h5>
                                <p>Over 200 Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="img_hvr_box" style="background-image: url({{asset('project')}}/images/courses/8.jpg);">
                        <div class="overlay">
                            <div class="details">
                                <h5>3D + Animation</h5>
                                <p>Over 900 Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
-->
                <div class="col-lg-6 offset-lg-3">
                    <div class="courses_all_btn text-center">
                        <a class="btn btn-transparent" href="{{route('catigories')}}">{{ trans('lang.view_categories') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <section class="divider_home1 bg-img2 parallax" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="divider-one">
                        <p class="color-white">{{ trans('lang.strating_online') }}</p>
                        <h1 class="color-white text-uppercase">{{ trans('lang.strating_online_p') }}</h1>
                        <a class="btn btn-transparent divider-btn" href="{{route('courses')}}">{{ trans('lang.view_courses_btn') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Courses -->
    <section id="top-courses" class="top-courses pb30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">{{ trans('lang.top_courses') }}</h3>
                        <p>{{ trans('lang.top_courses_p') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="options" class="alpha-pag full">
                        <div class="option-isotop">
                            <ul id="filter" class="option-set" data-option-key="filter">
                                <li class="list-inline-item"><a href="#all" data-option-value="*" class="selected">All</a></li>
                                @foreach ($data['categories'] as $key => $Category)
                                @if($key < 4 and  $Category -> courses_count  > 0)
                                     <li class="list-inline-item"><a href="#caregory_{{ $Category->id }}" data-option-value=".caregory_{{ $Category->id }}">{{ $Category->title }} </a></li>
                                @endif
                                @endforeach
                                <!-- <li class="list-inline-item"><a href="#test" data-option-value=".test">test</a></li>
                                <li class="list-inline-item"><a href="#web" data-option-value=".web">Web</a></li>
                                <li class="list-inline-item"><a href="#marketing" data-option-value=".marketing">Marketing</a></li> -->
                            </ul>
                        </div>
                    </div><!-- FILTER BUTTONS -->
                    <div class="emply-text-sec">
                        <div class="row" id="masonry_abc">
                        @foreach ($data['categories'] as $key => $Category)
                        @foreach($Category->courses as $keyCourse => $course)
                        @if($keyCourse < 8 and  $Category -> courses_count  > 0)
                            <div class="col-md-6 col-lg-4 col-xl-3 caregory_{{ $Category->id }} ">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{$Category -> image}}" alt="t1.jpg">
                                        <div class="overlay">
                                            <div class="tag">Best Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>{{$course->teacher->full_name}} </p>
                                            <h5>{{$course->$var_title}}  </h5>
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
                            @endif
                        @endforeach
                        @endforeach
                            <!-- <div class="col-md-6 col-lg-4 col-xl-3 business marketing">
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
                            <div class="col-md-6 col-lg-4 col-xl-3 web test">
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
                            <div class="col-md-6 col-lg-4 col-xl-3 business Web">
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
                            <div class="col-md-6 col-lg-4 col-xl-3 marketing">
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
                            <div class="col-md-6 col-lg-4 col-xl-3 business marketing">
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
                            <div class="col-md-6 col-lg-4 col-xl-3 design Web">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{asset('project')}}/images/courses/t7.jpg" alt="t7.jpg">
                                        <div class="overlay">
                                            <div class="tag">Top Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>How to Make Beautiful Landscape Photos?</h5>
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
                            <div class="col-md-6 col-lg-4 col-xl-3 business">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{asset('project')}}/images/courses/t8.jpg" alt="t8.jpg">
                                        <div class="overlay">
                                            <div class="tag">Best Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>Fashion Photography From Professional</h5>
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
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Testimonials -->
    <section id="our-testimonials" class="our-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">{{ trans('lang.people_say') }}</h3>
                        <p>{{ trans('lang.people_say_p') }}</p>
                    </div>
                </div>
            </div>
            <div class="row row_mytestmonial" >
                <div class="col-lg-6 offset-lg-3 mytestmonial">
                    <div class="testimonialsec">
                        <ul class="tes-nav">
                        @foreach ($data['user_comments'] as $user_comment)
                        
                            <li>
                                <img class="img-fluid" src="{{$user_comment->image}}" alt="1.jpg"/>
                            </li>
                        @endforeach
                            <!-- <li>
                                <img class="img-fluid" src="{{asset('project')}}/images/testimonial/2.jpg" alt="2.jpg"/>
                            </li>
                            <li>
                                <img class="img-fluid" src="{{asset('project')}}/images/testimonial/3.jpg" alt="3.jpg"/>
                            </li>
                            <li>
                                <img class="img-fluid" src="{{asset('project')}}/images/testimonial/4.jpg" alt="4.jpg"/>
                            </li> -->
                        </ul>
                        <ul class="tes-for">
                        @foreach ($data['user_comments'] as $user_comment)
                        
                            <li>
                                <div class="testimonial_item">
                                    <div class="details">
                                        <h5>{{ $user_comment->title}}</h5>
                                        <span class="small text-thm">{{ trans('lang.' . $user_comment->user_type) }} 
                                          </span>
                                        <p>{{ $user_comment->body }}</p>
                                        
                                    </div>
                                </div>
                            </li>
                         @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Blog -->
    <section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">{{ trans('lang.latest_news') }}</h3>
                        <p>{{ trans('lang.latest_news_p') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-6 ">
                    <div class="blog_slider_home1">
                    @foreach ($data['blogs_slider'] as $blog_slider)
                        <div class="item">
                            <div class="blog_post one">
                                <div class="thumb">
                                    <div class="post_title">Events</div>
                                    <img class="img-fluid w100" src="{{$blog_slider->image}}" alt="1.jpg">
                                    <a class="post_date" href="#"><span>28 <br> March</span></a>
                                </div>
                                <div class="details">
                                    <div class="post_meta">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                        </ul>
                                    </div>
                                    <h4>{{ $blog_slider->{'title_'.Session::get('lang')} }}</h4>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                @foreach ($data['blogs'] as $blog)
                <div class="col-md-6 col-lg-3 col-xl-3 blog_img">
                    <div class="blog_post">
                        <div class="thumb">
                            <img class="img-fluid w100" src="{{$blog_slider->image}}" alt="2.jpg">
                            <a class="post_date" href="#">July 21, 2019</a>
                        </div>
                        <div class="details">
                            <h5>Marketing</h5>
                            <h4>{{ $blog->{'title_'.Session::get('lang')} }}</h4>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row mt50">
                <div class="col-lg-12">
                    <div class="read_more_home text-center">
                        <h4>{{ trans('lang.like_see') }} <a href="{{route('blogs')}}">{{ trans('lang.see_posts') }}<span class="flaticon-right-arrow pl10"></span></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Job Categories -->
    <!--
    <section class="home1-divider2 parallax" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7">
                    <div class="app_grid">
                        <h1 class="mt0">Download & Enjoy</h1>
                        <p>Access your courses anywhere, anytime & prepare<br> with practice tests.</p>
                        <button class="apple_btn btn-transparent">
                            <span class="icon">
                                <span class="flaticon-apple"></span>
                            </span>
                            <span class="title">App Store</span>
                            <span class="subtitle">Available now on the</span>
                        </button>
                        <button class="play_store_btn btn-transparent">
                            <span class="icon">
                                <span class="flaticon-google-play"></span>
                            </span>
                            <span class="title">Google Play</span>
                            <span class="subtitle">Get in on</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="phone_img">
                        <img class="img-fluid" src="images/resource/phone_home.png" alt="phone_home.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- Our Partners -->
    <!--
    <section id="our-partners" class="our-partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">Need To Train Your Team?</h3>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="images/partners/1.png" alt="1.png">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="images/partners/2.png" alt="2.png">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="images/partners/3.png" alt="3.png">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="images/partners/4.png" alt="4.png">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="images/partners/5.png" alt="5.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- Our Newslatters -->
    <!--
    <section id="our-newslatters" class="our-newslatters">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">Get Newsletter</h3>
                        <p>Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="footer_apps_widget_home1">
                        <form class="form-inline mailchimp_form">
                            <input type="email" class="form-control" placeholder="Email address">
                            <button type="submit" class="btn btn-lg btn-thm dbxshad">Get it now <span class="flaticon-right-arrow-1"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- Our Footer -->

@endsection

@section('script')
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

///
let slideIndexAuto = 0;
showSlidesAuto();

function showSlidesAuto() {
  let i;
  let slidesAuto = document.getElementsByClassName("mySlides");
  for (i = 0; i < slidesAuto.length; i++) {
    slidesAuto[i].style.display = "none";
  }
  slideIndexAuto++;
  if (slideIndexAuto > slidesAuto.length) {slideIndexAuto = 1}
  slidesAuto[slideIndexAuto-1].style.display = "block";
  setTimeout(showSlidesAuto, 5000); // Change image every 2 seconds
}
</script>
@endsection
