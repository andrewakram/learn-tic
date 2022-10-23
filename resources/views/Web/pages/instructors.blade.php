
@extends('Web.index')
@section('style')

@endsection
@section('content')
<div id="loader"  style="display:none;"></div>
    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb teachers">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title"> {{ trans('lang.instructors') }}</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> {{ trans('lang.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> {{ trans('lang.instructors') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Members -->
    <!--
	<section class="our-team instructor-page pb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title text-center">
						<h3 class="mb0 mt0">Popular Instructors</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="team_slider">
						<div class="item">
							<div class="team_member style2 text-center">
								<div class="instructor_col">
									<div class="thumb">
										<img class="img-fluid img-rounded-circle" src="{{asset('project')}}/images/team/6.png" alt="6.png">
									</div>
									<div class="details">
										<h4>Andrew Williams</h4>
										<p>Web Design, Photoshop</p>
										<ul>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#">(6)</a></li>
										</ul>
									</div>
								</div>
								<div class="tm_footer">
									<ul>
										<li class="list-inline-item"><a href="#">56,178 students</a></li>
										<li class="list-inline-item"><a href="#">22 courses</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member style2 text-center">
								<div class="instructor_col">
									<div class="thumb">
										<img class="img-fluid img-rounded-circle" src="{{asset('project')}}/images/team/7.png" alt="7.png">
									</div>
									<div class="details">
										<h4>Anna Richard</h4>
										<p>CSS, HTML</p>
										<ul>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#">(6)</a></li>
										</ul>
									</div>
								</div>
								<div class="tm_footer">
									<ul>
										<li class="list-inline-item"><a href="#">56,178 students</a></li>
										<li class="list-inline-item"><a href="#">22 courses</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member style2 text-center">
								<div class="instructor_col">
									<div class="thumb">
										<img class="img-fluid img-rounded-circle" src="{{asset('project')}}/images/team/8.png" alt="8.png">
									</div>
									<div class="details">
										<h4>Krisztina Szer</h4>
										<p>User Experience Design</p>
										<ul>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#">(6)</a></li>
										</ul>
									</div>
								</div>
								<div class="tm_footer">
									<ul>
										<li class="list-inline-item"><a href="#">56,178 students</a></li>
										<li class="list-inline-item"><a href="#">22 courses</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member style2 text-center">
								<div class="instructor_col">
									<div class="thumb">
										<img class="img-fluid img-rounded-circle" src="{{asset('project')}}/images/team/9.png" alt="9.png">
									</div>
									<div class="details">
										<h4>Kristen Pala</h4>
										<p>Web Design, PSD to HTML</p>
										<ul>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#">(6)</a></li>
										</ul>
									</div>
								</div>
								<div class="tm_footer">
									<ul>
										<li class="list-inline-item"><a href="#">56,178 students</a></li>
										<li class="list-inline-item"><a href="#">22 courses</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member style2 text-center">
								<div class="instructor_col">
									<div class="thumb">
										<img class="img-fluid img-rounded-circle" src="{{asset('project')}}/images/team/10.png" alt="10.png">
									</div>
									<div class="details">
										<h4>Jill Poye</h4>
										<p>Watercolor Painting</p>
										<ul>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#">(6)</a></li>
										</ul>
									</div>
								</div>
								<div class="tm_footer">
									<ul>
										<li class="list-inline-item"><a href="#">56,178 students</a></li>
										<li class="list-inline-item"><a href="#">22 courses</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

-->

    <!-- Our Team Members -->
    <section class="our-team pb40">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row search_instructor">
                        <div class="col-sm-5 col-lg-5 col-xl-3">
                            <div class="instructor_search_result">
                                <p class="mt10 fz15"><span class="color-dark">85</span> {{ trans('lang.instructors') }}
                                </p>
                            </div>

                        </div>
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <!--<div class="candidate_revew_search_box mb30 float-right fn-520">
                                <form class="form-inline my-2 my-lg-0">
                                    <select class="selectpicker show-tick">
                                        <option>City</option>
                                        <option>Riyad</option>
                                        <option>Makkah</option>
                                        <option>Dammam</option>
                                        <option>Al-Qassim</option>
                                    </select>
                                    --
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search our instructors" aria-label="Search">
                                    <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>

                                </form>
                            </div>
                            -->

                            <div class="candidate_revew_select mb30 style2 text-right">
                                <ul>
                                <!-- <li class="list-inline-item">
										<select class="selectpicker show-tick select_city">

											<option>{{ trans('lang.city') }}</option>
											@foreach ($data['cities'] as $city)
                                    <option data-id="{{$city -> id}}">{{$city -> title}}</option>
											@endforeach


                                    </select>
                                </li> -->
                                
                                    <li class="list-inline-item">
                                        <div class="candidate_revew_search_box course fn-520">
                                            <form class="form-inline my-2 my-lg-0">
                                                <input list="searchStage" id="stage" class="form-control mr-sm-2"
                                                       type="search" placeholder="{{ trans('lang.stage') }}"
                                                       aria-label="Search">

                                                <datalist id="searchStage">
                                                    @foreach ($data['stages'] as $stage)
                                                        <option id="{{$stage -> id}}" data-id="{{$stage -> id}}"
                                                                value="{{$stage -> title}}">

                                                    @endforeach

                                                </datalist>
                                                <button class="btn my-2 my-sm-0" type="submit"><span
                                                        class="flaticon-magnifying-glass"></span></button>
                                            </form>
                                        </div>
                                    </li>
                                    <!-- <li class="list-inline-item">
                                        <div class="candidate_revew_search_box course fn-520">
                                            <form class="form-inline my-2 my-lg-0">
                                                <input list="searchCity" id="city" class="form-control mr-sm-2"
                                                       type="search" placeholder="{{ trans('lang.city') }}"
                                                       aria-label="Search">

                                                <datalist id="searchCity">
                                                    @foreach ($data['cities'] as $city)
                                                        <option id="{{$city -> id}}" data-id="{{$city -> id}}"
                                                                value="{{$city -> title}}">

                                                    @endforeach

                                                </datalist>
                                                <button class="btn my-2 my-sm-0" type="submit"><span
                                                        class="flaticon-magnifying-glass"></span></button>
                                            </form>
                                        </div>
                                    </li> -->

                                    <li class="list-inline-item">
                                        <div class="candidate_revew_search_box course fn-520">
                                            <form class="form-inline my-2 my-lg-0">
                                                <input list="searchSubject" id="subject" class="form-control mr-sm-2"
                                                       type="search" placeholder="{{ trans('lang.subject') }}"
                                                       aria-label="Search">

                                                <datalist id="searchSubject">
                                                    @foreach ($data['categories'] as $category)
                                                        <option id="{{$category -> id}}" data-id="{{$category -> id}}"
                                                                value="{{$category -> title}}">

                                                    @endforeach

                                                </datalist>
                                                <button class="btn my-2 my-sm-0" type="submit"><span
                                                        class="flaticon-magnifying-glass"></span></button>
                                            </form>
                                        </div>
                                    </li>
                                    
                                    <li class="list-inline-item">
                                        <div class="candidate_revew_search_box course fn-520">
                                            <form class="form-inline my-2 my-lg-0">
                                                <input list="searchInstructor" class="form-control mr-sm-2"
                                                       id="instructor_name" type="search"
                                                       placeholder="{{ trans('lang.search_instructors') }}"
                                                       aria-label="Search">

                                                <datalist id="searchInstructor">
                                                    @foreach ($instractors as $instructor)
                                                        <option data-id="{{$instructor->teacher_id}}"
                                                                id="{{$instructor->teacher_id}}"
                                                                value="{{$instructor->full_name}}">
                                                    @endforeach

                                                </datalist>
                                                <button class="btn my-2 my-sm-0" type="submit"><span
                                                        class="flaticon-magnifying-glass"></span></button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row instructors">
                        @foreach ($instractors as $instructor)
                            <div  class="col-sm-6 col-lg-6 col-xl-4 my_teacher" data-id="{{$instructor->teacher_id}}">
                                <div class="team_member style3 text-center mb30">
                                    <div class="instructor_col">
                                        <div class="thumb">
                                            <img class="img-fluid img-rounded-circle"
                                                 src="{{$instructor->teacher->image}}" alt="6.png">
                                        </div>
                                        <div class="details">
                                            <h4>{{$instructor->full_name}}</h4>

                                            <p>
                                            {{$instructor -> category -> title}}
                                             
                                            </p>

                                            <ul>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tm_footer">
                                        <ul>
                                            <li class="list-inline-item"><a
                                                    href="#">56,178 {{ trans('lang.students') }} </a></li>
                                            <li class="list-inline-item"><a href="#">22 {{ trans('lang.course') }} </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        @endforeach

                        <div class="col-lg-12">
                            <div class="mbp_pagination">
                                <ul class="page_navigation">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                                class="flaticon-left-arrow"></span> Prev</a>
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
                <div class="col-lg-4 col-xl-3">
                    <div class="selected_filter_widget style2 mb30">
                        <div id="accordion" class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyfilter" class="accordion-toggle link fz20 mb15"
                                           data-toggle="collapse"
                                           data-parent="#accordion">{{ trans('lang.search_map') }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="panelBodyfilter" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <input class="form-control mr-sm-2" type="search"
                                               placeholder="{{ trans('lang.add_address') }}" aria-label="Search">

                                        <!--	<div class="tags-bar style2">
                                                 <span>Photoshop<i class="close-tag">x</i></span>
                                                 <span>Sketch<i class="close-tag">x</i></span>
                                                 <span>Beginner<i class="close-tag">x</i></span>
                                             </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- teacher qualification
-->
                    <div class="selected_filter_widget style2 mb30">
                        <div id="accordion" class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15"
                                           data-toggle="collapse"
                                           data-parent="#accordion">{{ trans('lang.teacher_qualification') }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="panelBodySoftware" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <div class="ui_kit_checkbox">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input qualification"
                                                       id="customCheck30" value="Diploma">
                                                <label class="custom-control-label"
                                                       for="customCheck30"> {{ trans('lang.diploma') }} <span
                                                        class="float-right">(03)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input qualification"
                                                       id="customCheck31" value="Bachlore">
                                                <label class="custom-control-label"
                                                       for="customCheck31"> {{ trans('lang.bachelor') }} <span
                                                        class="float-right">(15)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input qualification"
                                                       id="customCheck32" value="Master">
                                                <label class="custom-control-label"
                                                       for="customCheck32"> {{ trans('lang.master') }} <span
                                                        class="float-right">(126)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input qualification"
                                                       id="customCheck33" value="PHD">
                                                <label class="custom-control-label"
                                                       for="customCheck33"> {{ trans('lang.phd') }}
                                                    <span class="float-right">(1,584)</span></label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--gender-->
                    <div class="selected_filter_widget style2 mb30">
                        <div id="accordion" class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15"
                                           data-toggle="collapse" data-parent="#accordion"> {{ trans('lang.gender') }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="panelBodySoftware" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <div class="ui_kit_checkbox">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input gender"
                                                       id="customCheck34" value="male" name="check" onclick="onlyOne(this)">
                                                <label class="custom-control-label"
                                                       for="customCheck34">{{ trans('lang.male') }} <span
                                                        class="float-right">(03)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input gender"
                                                       id="customCheck35" value="female" name="check" onclick="onlyOne(this)">
                                                <label class="custom-control-label"
                                                       for="customCheck35"> {{ trans('lang.female') }} <span
                                                        class="float-right">(15)</span></label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---->

                    <div class="selected_filter_widget style2 mb30">
                        <div id="accordion" class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15"
                                           data-toggle="collapse"
                                           data-parent="#accordion">{{ trans('lang.category') }}                                        </a>
                                    </h4>
                                </div>
                                <div id="panelBodySoftware" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <div class="cl_skill_checkbox">
                                            <div class="content ui_kit_checkbox style2 text-left">
                                                <!-- <form action="" method="get">  -->
                                                @foreach ($data['categories'] as $category)
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input category"
                                                            value="{{$category -> id}}"
                                                            id="customCheck{{$category -> id}}">
                                                        <label class="custom-control-label"
                                                            for="customCheck{{$category -> id}}"> {{$category -> title}}
                                                            <span
                                                                class="float-right">({{$category -> courses_count}})</span></label>
                                                    </div>
                                                 @endforeach
                                            <!-- </form> -->
                                                <!-- <a class="color-orose" href="#"><span class="fa fa-plus pr10"></span> See
                                                    More</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="selected_filter_widget style2">
						<div id="accordion" class="panel-group">
						  <div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
									  <a href="#panelBodyPlace" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{ trans('lang.city') }}</a>
								  </h4>
								</div>
							  <div id="panelBodyPlace" class="panel-collapse collapse show">
								  <div class="panel-body">
									  <div class="cl_skill_checkbox">
										  <div class="content ui_kit_checkbox style2 text-left">
										 	 @foreach ($data['cities'] as $city)

											 	 <div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input city" value="{{$city -> id}}" id="city{{$city -> id}}">
													<label class="custom-control-label" for="city{{$city -> id}}">{{$city -> title}} <span class="float-right">(03)</span></label>
											 	 </div>
											@endforeach


										  </div>
									  </div>
								  </div>
							  </div>
						  </div>
					  </div>
				  </div>

                    <!-- teaching methods-->
                    <div class="selected_filter_widget style2 mb30">
                        <div id="accordion" class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15"
                                           data-toggle="collapse"
                                           data-parent="#accordion">  {{ trans('lang.teaching_methods') }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="panelBodySoftware" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <div class="ui_kit_checkbox">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input learn_type"
                                                       value="Student House" id="customCheck14">
                                                <label class="custom-control-label"
                                                       for="customCheck14"> {{ trans('lang.student_house') }}
                                                    <span class="float-right">(03)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input learn_type"
                                                       value="Teacher House" id="customCheck15">
                                                <label class="custom-control-label"
                                                       for="customCheck15"> {{ trans('lang.teacher_house') }}
                                                    <span class="float-right">(15)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input learn_type"
                                                       value="Online Education" id="customCheck16">
                                                <label class="custom-control-label"
                                                       for="customCheck16"> {{ trans('lang.online_education') }}
                                                    <span class="float-right">(126)</span></label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



@endsection

@section('script')

    <script type="text/javascript">
        
        function showLoader() {
        document.getElementById("loader").style.display = "block";
        var myVar = setTimeout(hideLoader, 500);
        }

        function hideLoader() {
        document.getElementById("loader").style.display = "none";
        }

        function onlyOne(checkbox) {
            var checkboxes = document.getElementsByName('check')
            checkboxes.forEach((item) => {
              if (item !== checkbox) item.checked = false
            })
        }
        var qualification = [];
        var category = [];
        var learn_type = [];
        var gender = '';
        var instructor_name_id = '';
        var subject_name_id = '';
        var stage_name_id = '';
        var city = [];

        document.querySelector('#instructor_name').addEventListener('input', (e) => {
            Object.assign(e.target.dataset, document.querySelector('#' + e.target.getAttribute('list') + ' option[value="' + e.target.value + '"]').dataset);
            instructor_name_id = e.target.dataset.id
        });

        document.querySelector('#subject').addEventListener('input', (e) => {
            Object.assign(e.target.dataset, document.querySelector('#' + e.target.getAttribute('list') + ' option[value="' + e.target.value + '"]').dataset);
            subject_name_id = e.target.dataset.id
        });

        document.querySelector('#stage').addEventListener('input', (e) => {
            Object.assign(e.target.dataset, document.querySelector('#' + e.target.getAttribute('list') + ' option[value="' + e.target.value + '"]').dataset);
            stage_name_id = e.target.dataset.id
        });

       
        $('.my_teacher').on('click', function () {
            var instructor_id = $(this).data("id");
            window.location.href = '/instructor-details/' + instructor_id , true;
            
        });

        $('.qualification').on('click', function () {
            $('.instructors').hide();
			showLoader();
			 qualification = [];
            $('.qualification').each(function () {
                if ($(this).is(":checked")) {
                    qualification.push($(this).val());
                }
            });
            qualification = qualification.toString();
            $.ajax({
                type: 'GET',  // http method
                url: "{{url('instructorFilter')}}" + '?qualification=' + qualification 
                + '&gender=' + gender + '&category=' + category  + '&city=' + city  + '&learn_type=' + learn_type
                + '&instructor_name_id=' + instructor_name_id  + '&subject_name_id=' + subject_name_id 
                + '&stage_name_id=' + stage_name_id,
                data: {},

                success: function (response) { // What to do if we succeed
                    if (response) {
                            $(".instructors").empty();
                            if (response.length > 0) {
                            $.each(response, function (key, value) {
                                plus_instructor(value.teacher_id, value.full_name, value.category.title, value.teacher.image);

                            });
                        }
                        else {
                        no_result();
                    }

                    }

                },
                error: function (response) {
                    //alert('Error'+response);
                }

            });
        });
        $('.category').on('click', function () {
            $('.instructors').hide();
			showLoader();
             category = [];
            $('.category').each(function () {
                if ($(this).is(":checked")) {

                    category.push($(this).val());

                }
            });
            categories = category.toString();
            $.ajax({
               type: 'GET',  
               url: "{{url('instructorFilter')}}" + '?qualification=' + qualification 
                + '&gender=' + gender + '&category=' + category  + '&city=' + city  + '&learn_type=' + learn_type
                + '&instructor_name_id=' + instructor_name_id  + '&subject_name_id=' + subject_name_id 
                + '&stage_name_id=' + stage_name_id,
                data: {},

                success: function (response) { 
                    if (response) {
                        $(".instructors").empty();
                        if (response.length > 0) {
                            $.each(response, function (key, value) {
                                plus_instructor(value.teacher_id, value.full_name, value.category.title, value.teacher.image);
                            });
                        } else {
                            no_result();

                        }   
                    }
                },
                error: function (response) {
                    //alert('Error'+response);
                }

            });


        });

        

        $('.gender').on('click', function () {
            $('.instructors').hide();
			showLoader();
            if ($(this).is(":checked")) {
                gender = $(this).val();
            }

            $.ajax({
                type: 'GET',  // http method
                url: "{{url('instructorFilter')}}" + '?qualification=' + qualification 
                + '&gender=' + gender + '&category=' + category  + '&city=' + city  + '&learn_type=' + learn_type
                + '&instructor_name_id=' + instructor_name_id  + '&subject_name_id=' + subject_name_id 
                + '&stage_name_id=' + stage_name_id,
                data: {},

                success: function (response) { // What to do if we succeed
                    if (response) {
                            $(".instructors").empty();
                            if (response.length > 0) {

                            $.each(response, function (key, value) {
                                plus_instructor(value.teacher_id, value.full_name, value.category.title, value.teacher.image);
                               
                            });
                        }else{
                            no_result();
                        }
                    }

                },
                error: function (response) {
                    //alert('Error'+response);
                }

            });
        });


        $('.learn_type').on('click', function () {
            $('.instructors').hide();
			showLoader();
             learn_type = [];
            $('.learn_type').each(function () {
                if ($(this).is(":checked")) {
                    learn_type.push($(this).val());
                }
            });
            learn_types = learn_type.toString();
            $.ajax({
                type: 'GET',  // http method
                url: "{{url('instructorFilter')}}" + '?qualification=' + qualification 
                + '&gender=' + gender + '&category=' + category  + '&city=' + city  + '&learn_type=' + learn_type
                + '&instructor_name_id=' + instructor_name_id  + '&subject_name_id=' + subject_name_id 
                + '&stage_name_id=' + stage_name_id,
                data: {},

                success: function (response) { // What to do if we succeed
                    if (response) {
                        $(".instructors").empty();
                        if (response.length > 0) {
                        $.each(response, function (key, value) {
                            plus_instructor(value.teacher_id, value.full_name, value.category.title, value.teacher.image);

                        });
                        }else{
                            no_result();
                        }
                }

                },
                error: function (response) {
                    //alert('Error'+response);
                }

            });


        });


        $('#instructor_name').on('input', function () {
            $('.instructors').hide();
			showLoader();
            $.ajax({
                type: 'GET',  
                url: "{{url('instructorFilter')}}" + '?qualification=' + qualification 
                + '&gender=' + gender + '&category=' + category  + '&city=' + city  + '&learn_type=' + learn_type
                + '&instructor_name_id=' + instructor_name_id  + '&subject_name_id=' + subject_name_id 
                + '&stage_name_id=' + stage_name_id,

                data: {},

                success: function (response) { 
                    if (response) {
                    //    alert("success");
                        $(".instructors").empty();
                        if (response.length > 0) {
                        $.each(response, function (key, value) {
                            plus_instructor(value.teacher_id, value.full_name, value.category.title, value.teacher.image);

                        });
                    }else{
                        no_result();
                    }
                    }
                },
                error: function (response) {
                    //alert('Error'+response);
                }

            });
        });


        $('#subject').on('input', function () {
            $('.instructors').hide();
			showLoader();
            $.ajax({
                type: 'GET',  // http method
                url: "{{url('instructorFilter')}}" + '?qualification=' + qualification 
                + '&gender=' + gender + '&category=' + category  + '&city=' + city  + '&learn_type=' + learn_type
                + '&instructor_name_id=' + instructor_name_id  + '&subject_name_id=' + subject_name_id 
                + '&stage_name_id=' + stage_name_id,
                data: {},

                success: function (response) { // What to do if we succeed
                    if (response) {
                      //  alert("success");
                        $(".instructors").empty();
                        if (response.length > 0) {
                        $.each(response, function (key, value) {
                            plus_instructor(value.teacher_id, value.full_name, value.category.title, value.teacher.image);

                        });
                    }else{
                        no_result();
                    }
                    }

                },
                error: function (response) {
                    //alert('Error'+response);
                }

            });
        });

        $('#stage').on('input', function () {
            $('.instructors').hide();
			showLoader();
            $.ajax({
                type: 'GET',  // http method
                url: "{{url('instructorFilter')}}" + '?qualification=' + qualification 
                + '&gender=' + gender + '&category=' + category  + '&city=' + city  + '&learn_type=' + learn_type
                + '&instructor_name_id=' + instructor_name_id  + '&subject_name_id=' + subject_name_id 
                + '&stage_name_id=' + stage_name_id,

                data: {},

                success: function (response) { // What to do if we succeed
                    if (response) {
                        $(".instructors").empty();
                        if (response.length > 0) {
                        $.each(response, function (key, value) {
                            plus_instructor(value.teacher_id, value.full_name, value.category.title, value.teacher.image);

                        });
                    }else{
                        no_result();
                    }


                    }

                },
                error: function (response) {
                    //alert('Error'+response);
                }

            });
        });

        $('.city').on('click', function () {
            $('.instructors').hide();
			showLoader();
            city = [];
            $('.city').each(function () {
            if ($(this).is(":checked")) {
                city.push($(this).val());
            }
            });
            cities = city.toString();
            $.ajax({
            type: 'GET',  
            url: "{{url('instructorFilter')}}" + '?qualification=' + qualification 
                + '&gender=' + gender + '&category=' + category  + '&city=' + city  + '&learn_type=' + learn_type
                + '&instructor_name_id=' + instructor_name_id  + '&subject_name_id=' + subject_name_id 
                + '&stage_name_id=' + stage_name_id,
            data: {},

            success: function (response) { 
                if (response) {
                    $(".instructors").empty();
                    if (response.length > 0) {
                        $.each(response, function (key, value) {
                            plus_instructor(value.teacher_id, value.full_name, value.category.title, value.teacher.image);
                        });
                    } else {
                        no_result();

                    }
                }


            },
            error: function (response) {
                //alert('Error'+response);
            }

            });


        });
        ///////////

        function no_result()
        {
            $('.instructors').show();
            var instructor = '<p class="my_result">{{ trans('lang.result') }} </p>';
            $(".instructors").append(instructor);
        }

        function plus_instructor(instructor_id, instructor_name, instructor_category , instructor_image) {
            $('.instructors').show();
            var instructor = '<div  class="col-sm-6 col-lg-6 col-xl-4 my_teacher" data-id="' + instructor_id + '">\n' +
                '<div class="team_member style3 text-center mb30">\n' +
                '<div class="instructor_col">\n' +
                '<div class="thumb">\n' +
                '<img class="img-fluid img-rounded-circle" src="' + instructor_image + '" alt="6.png">\n' +
                '</div>\n' +
                '<div class="details">\n' +
                '<h4>' + instructor_name + '</h4>\n' +
                '<p>' + instructor_category + '</p>\n' +

                '<ul>\n' +
                '<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n' +
                '<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n' +
                '<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n' +
                '<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n' +
                '<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n' +
                '<li class="list-inline-item"><a href="#">(6)</a></li>\n' +
                '</ul>\n' +
                '</div>\n' +
                '</div>\n' +
                '<div class="tm_footer">\n' +
                '<ul>\n' +
                '<li class="list-inline-item"><a href="#">56,178 {{ trans('lang.students') }} </a></li>\n' +
                '<li class="list-inline-item"><a href="#">22 {{ trans('lang.course') }} </a></li>\n' +
                '</ul>\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>';
            $(".instructors").append(instructor);
        }
        
    </script>
@endsection
