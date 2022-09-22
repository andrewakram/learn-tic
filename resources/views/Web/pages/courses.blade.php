@extends('Web.index')
@section('style')

@endsection
@section('content')
  <!-- Inner Page Breadcrumb -->
  <div id="loader"  style="display:none;"></div>
	<section class="inner_page_breadcrumb courses">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">{{ trans('lang.courses') }}</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">{{ trans('lang.home') }}</a></li>
						    <li class="breadcrumb-item active" aria-current="page">{{ trans('lang.courses') }}</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Courses List 2 -->
	<section class="courses-list2 pb40">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9">
					<div class="row courses_list_heading search_instructor style2">
						<div class="col-xl-4 p0">
							<div class="instructor_search_result style2">
								<p class="mt10 fz15"><span class="color-dark pr10">85 </span> 
								<!-- results <span class="color-dark pr10">1,236</span> -->
								 <!-- Video Tutorials -->
								 {{ trans('lang.course') }}
								</p>
							</div>
						</div>
						<div class="col-xl-12 p0">
							<div class="candidate_revew_select mb20   style2 text-right">
								<ul class="mb0">
									 <!-- <li class="list-inline-item">
										<select class="selectpicker show-tick">

												<option>{{ trans('lang.city') }}</option>
											@foreach ($data['cities'] as $city)
												<option>{{$city -> title}}</option>
											@endforeach

										</select>
									</li>  -->
									<li class="list-inline-item">
										<div class="candidate_revew_search_box course fn-520">
											<form class="form-inline my-2 my-lg-0">
												<input list="searchStage" id="stage" class="form-control mr-sm-2"  type="search" placeholder="{{ trans('lang.stage') }}" aria-label="Search">
												
												<datalist id="searchStage">
                                                    @foreach ($data['stages'] as $stage)
                                                        <option id="{{$stage -> id}}" data-id="{{$stage -> id}}"
                                                                value="{{$stage -> title}}">

                                                    @endforeach
													
												</datalist>
												<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
											</form>
										</div>
									</li>

									<li class="list-inline-item">
										<div class="candidate_revew_search_box course fn-520">
											<form class="form-inline my-2 my-lg-0">
												<input list="searchSubject" id="subject" class="form-control mr-sm-2"  type="search" placeholder="{{ trans('lang.subject') }}" aria-label="Search">
												
												<datalist id="searchSubject">
                                                    @foreach ($data['categories'] as $category)
                                                        <option id="{{$category -> id}}" data-id="{{$category -> id}}"
                                                                value="{{$category -> title}}">

                                                    @endforeach
													
												</datalist>
												<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
											</form>
										</div>
									</li>
									
									<!-- <li class="list-inline-item">
										<div class="candidate_revew_search_box course fn-520">
											<form class="form-inline my-2 my-lg-0">
												<input list="searchCity" id="city" class="form-control mr-sm-2"  type="search" placeholder="{{ trans('lang.city') }}" aria-label="Search">
												
												<datalist id="searchCity">
												@foreach ($data['cities'] as $city)
													<option data-id="{{$city -> id}}" value="{{$city -> title}}">
														
												@endforeach
													
												</datalist>
												<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
											</form>
										</div>
									</li> -->
									<!-- <li class="list-inline-item">
										<div class="candidate_revew_search_box course fn-520">
											<form class="form-inline my-2 my-lg-0">
										    	<input class="form-control mr-sm-2" type="search" placeholder="{{ trans('lang.search_courses') }}" aria-label="Search">
										    	<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
										    </form>
										</div>
									</li> -->
									<!-- <li class="list-inline-item">
										<div class="candidate_revew_search_box course fn-520">
											<form class="form-inline my-2 my-lg-0">
												<input list="searchCourse" id="course_name"  class="form-control mr-sm-2" type="search" placeholder="{{ trans('lang.search_courses') }}" aria-label="Search">
												
												<datalist id="searchCourse">
												@foreach ($data['Courses_search'] as $Course_search)
													<option data-id="{{$Course_search->id}}" value="{{$Course_search->title}}">
												@endforeach
													
												</datalist>
												<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
											</form>
										</div>
									</li> -->
									<li class="list-inline-item">
										<div class="candidate_revew_search_box course fn-520">
											<form class="form-inline my-2 my-lg-0">
												<input list="searchInstructor" id="instructor_name"  class="form-control mr-sm-2" type="search" placeholder="{{ trans('lang.search_instructors') }}" aria-label="Search">
												
												<datalist id="searchInstructor">
                                                    @foreach ($data['instructors_search'] as $instructor)
                                                        <option data-id="{{$instructor->teacher_id}}"
                                                                id="{{$instructor->teacher_id}}"
                                                                value="{{$instructor->full_name}}">
                                                    @endforeach
													
												</datalist>
												<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
											</form>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row courses_container style2">
					@foreach ($data['Courses'] as $Course)

						<div class="col-lg-12 p0">

							<div class="courses_list_content my_course"  data-id="{{$Course -> id }}" >

								<div class="top_courses list">
									<div class="thumb">
										<img class="img-whp" src="{{$Course->image}}" alt="t1.jpg">
										<div class="overlay">
											<div class="icon"><span class="flaticon-like"></span></div>
											<a class="tc_preview_course" href="#">{{ trans('lang.preview_course') }}</a>
										</div>
									</div>

										<div class="details">
											<div class="tc_content">
												<p>{{ $Course->teacher->teacherInfo->full_name}} </p>
												<h5>{{ $Course->title}} </h5>
												<p>
													<?php
														$string = $Course->body ;
														if (strlen($string) > 360) {
														$description = substr($string, 0, 360). ' ...';
														} else {
														$description = $string;
														}
														echo $description;
													?>

													</p>
											</div>
											<div class="tc_footer">
												<ul class="tc_meta float-left fn-414">
													<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
													<li class="list-inline-item"><a href="#">1548</a></li>
													<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
													<li class="list-inline-item"><a href="#">25</a></li>
												</ul>
												<div class="tc_price float-right fn-414">
												@if(!empty($Course->price_after))
												<del class="original_price">${{ $Course->price_after}}</del>
												@endif
												${{$Course->price_before}}
												</div>
												<ul class="tc_review float-right fn-414">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#">(5)</a></li>
												</ul>
											</div>
										</div>

								</div>
							</div>
						</div>
						@endforeach

						<!-- {{$data['Courses'] -> links()}} -->


					</div>

					<div class="row">
						<div class="col-lg-12 mt50">
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
				<div class="col-lg-4 col-xl-3">
					<div class="selected_filter_widget style3 mb30">
					  	<div id="accordion" class="panel-group">
						    <div class="panel">
						      	<div class="panel-heading">
							      	<h4 class="panel-title">
							        	<a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{ trans('lang.category') }}</a>
							        </h4>
						      	</div>
							    <div id="panelBodySoftware" class="panel-collapse collapse show">
							        <div class="panel-body">
										<div class="ui_kit_checkbox">
											@foreach ($data['categories'] as $category)
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input category" value="{{$category -> id}}" id="customCheck{{$category -> id}}">
													<label class="custom-control-label" for="customCheck{{$category -> id}}">{{$category -> title}} <span class="float-right">({{$category -> courses_count}})</span></label>
												</div>
											@endforeach

											<a class="color-orose" href="#"><span class="fa fa-plus pr10"></span> See More</a>
										</div>
							        </div>
							    </div>
						    </div>
						</div>
					</div>
					<div class="selected_filter_widget style3">
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
					<div class="selected_filter_widget style3">
					  	<div id="accordion" class="panel-group">
						    <div class="panel">
						      	<div class="panel-heading">
							      	<h4 class="panel-title">
							        	<a href="#panelBodyAuthors" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{ trans('lang.instructor') }}</a>
							        </h4>
						      	</div>
							    <div id="panelBodyAuthors" class="panel-collapse collapse show">
							        <div class="panel-body">
										<div class="cl_skill_checkbox">
											<div class="content ui_kit_checkbox style2 text-left">
												@foreach ($data['instructors'] as $instructor)
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input instructor" value="{{$instructor -> id}} " id="{{$instructor -> id}} ">
														<label class="custom-control-label" for="{{$instructor -> id}} ">{{$instructor -> full_name}}  <span class="float-right">({{$instructor -> courses_count}})</span></label>
													</div>
												@endforeach

											</div>
										</div>
							        </div>
							    </div>
						    </div>
						</div>
					</div>
					<div class="selected_filter_widget style3 mb30">
					  	<div id="accordion" class="panel-group">
						    <div class="panel">
						      	<div class="panel-heading">
							      	<h4 class="panel-title">
							        	<a href="#panelBodyPrice" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{ trans('lang.price') }}</a>
							        </h4>
						      	</div>
							    <div id="panelBodyPrice" class="panel-collapse collapse show">
							        <div class="panel-body">
										<div class="ui_kit_whitchbox">
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input price_course" name="check" onclick="onlyOne(this)"  value="3" id="aprice_all">
												<label class="custom-control-label" for="aprice_all"> {{ trans('lang.all') }}  </label>
											</div>
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input price_course" name="check" onclick="onlyOne(this)"  value="2" id="price_piad">
												<label class="custom-control-label" for="price_piad"> {{ trans('lang.paid') }}  </label>
											</div>
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input price_course" name="check" onclick="onlyOne(this)"  value="1" id="price_free">
												<label class="custom-control-label" for="price_free">{{ trans('lang.free') }}</label>
											</div>
										</div>
							        </div>
							    </div>
						    </div>
						</div>
					</div>
					<!-- <div class="selected_filter_widget style3 mb30">
					  	<div id="accordion" class="panel-group">
						    <div class="panel">
						      	<div class="panel-heading">
							      	<h4 class="panel-title">
							        	<a href="#panelBodySkills" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion"> {{ __('lang.course_type') }}</a>
							        </h4>
						      	</div>
							    <div id="panelBodySkills" class="panel-collapse collapse show">
							        <div class="panel-body">
										<div class="ui_kit_checkbox">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck14">
												<label class="custom-control-label" for="customCheck14">{{ trans('lang.all') }} <span class="float-right">(03)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck15">
												<label class="custom-control-label" for="customCheck15"> {{ trans('lang.online_course') }} <span class="float-right">(15)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck16">
												<label class="custom-control-label" for="customCheck16"> {{ trans('lang.spacial_course') }}  <span class="float-right">(126)</span></label>
											</div>

										</div>
							        </div>
							    </div>
						    </div>
						</div>
					</div> 
				   <div class=" ui_kit_button search_btn mb0">
					<button type="button" class="btn dbxshad btn-lg btn-thm circle white">{{ trans('lang.search') }}</button>
				  </div> -->

				</div>
			</div>
		</div>
	</section>



@endsection

@section('script')
<script type="text/javascript">

var myVar;

function showLoader() {
 document.getElementById("loader").style.display = "block";
  myVar = setTimeout(hideLoader, 500);
}

function hideLoader() {
  document.getElementById("loader").style.display = "none";
}


	var city = [] ;
	 var category = [] ;
	 var instructor = [] ;
	 var price_course ='';
	 var course_name_id = '';
	 var city_selected_id = '';
	 var instructor_name_id = '';
    var subject_name_id = '';
    var stage_name_id = '';


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
		

		$('#instructor_name').on('input', function () {
			$('.courses_container').hide();
				showLoader();

            $.ajax({
                type: 'GET',  
                url: "{{url('courseFilter')}}" + '?categories=' + category + '&cities=' + city
				 + '&instructors=' + instructor + '&price_course=' + price_course 
				 + '&course_name_id=' + course_name_id + '&city_selected_id=' + city_selected_id
				 + '&instructor_name_id=' + instructor_name_id + '&subject_name_id=' + subject_name_id
				 + '&stage_name_id=' + stage_name_id   ,  

                data: {},

                success: function (response) { 
                    if (response) {
                        $(".courses_container").empty();
                        if (response.length > 0) {
							
                        $.each(response, function (key, value) {
							plus_course(value.id, value.image, value.teacher.teacher_info.full_name , value.title, value.body,value.price_after , value.price_before);

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
		  $('.courses_container').hide();
			showLoader();

            $.ajax({
                type: 'GET',  
                url: "{{url('courseFilter')}}" + '?categories=' + category + '&cities=' + city
				 + '&instructors=' + instructor + '&price_course=' + price_course 
				 + '&course_name_id=' + course_name_id + '&city_selected_id=' + city_selected_id
				 + '&instructor_name_id=' + instructor_name_id + '&subject_name_id=' + subject_name_id
				 + '&stage_name_id=' + stage_name_id   ,  
                data: {},

                success: function (response) { 
                    if (response) {
                        $(".courses_container").empty();
                        if (response.length > 0) {
                        $.each(response, function (key, value) {
							plus_course(value.id, value.image, value.teacher.teacher_info.full_name , value.title, value.body,value.price_after , value.price_before);

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
			$('.courses_container').hide();
				showLoader();

            $.ajax({
                type: 'GET',  
                url: "{{url('courseFilter')}}" + '?categories=' + category + '&cities=' + city
				 + '&instructors=' + instructor + '&price_course=' + price_course 
				 + '&course_name_id=' + course_name_id + '&city_selected_id=' + city_selected_id
				 + '&instructor_name_id=' + instructor_name_id + '&subject_name_id=' + subject_name_id
				 + '&stage_name_id=' + stage_name_id   ,  

                data: {},

                success: function (response) { 
                    if (response) {
                        $(".courses_container").empty();
                        if (response.length > 0) {
                        $.each(response, function (key, value) {
							plus_course(value.id, value.image, value.teacher.teacher_info.full_name , value.title, value.body,value.price_after , value.price_before);

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


// $('#city').on('input', function() {
// 			// alert('city_selected_id');
// 			// alert(city_selected_id);
// 		$.ajax({
// 				type: 'GET',  // http method
// 				url: "{{url('courseFilter')}}" + '?categories=' + category + '&cities=' + city
// 				 + '&instructors=' + instructor + '&price_course=' + price_course 
// 				 + '&course_name_id=' + course_name_id + '&city_selected_id=' + city_selected_id
// 				 + '&instructor_name_id=' + instructor_name_id + '&subject_name_id=' + subject_name_id
// 				 + '&stage_name_id=' + stage_name_id   ,    	
//    				 data: {},
				
// 				success: function(response){ // What to do if we succeed
// 				if(response)
// 				{
// 					//alert("success"); 
// 					//alert(response);
// 					//console.log(response);
// 					$(".courses_container").empty();
// 					$.each(response, function (key, value) {
// 						plus_course(value.id, value.image, value.teacher.teacher_info.full_name , value.title, value.body,value.price_after , value.price_before);

//                     });
// 				}
					
// 				},
// 				error: function(response){
// 					alert('Error'+response);
// 				}
				
// 				});
		
// });



//   $('#course_name').on('input', function() {
// 		//    alert('course_name_id');
// 		//    alert(course_name_id);
// 		$.ajax({
// 				type: 'GET',  // http method
// 				url: "{{url('courseFilter')}}" + '?categories=' + category + '&cities=' + city
// 				 + '&instructors=' + instructor + '&price_course=' + price_course 
// 				 + '&course_name_id=' + course_name_id + '&city_selected_id=' + city_selected_id
// 				 + '&instructor_name_id=' + instructor_name_id + '&subject_name_id=' + subject_name_id
// 				 + '&stage_name_id=' + stage_name_id   ,  	
// 				data: {},
				
// 				success: function(response){ // What to do if we succeed
// 				if(response)
// 				{
// 				//	alert("success"); 
// 					//alert(response);
// 					//console.log(response);
// 					$(".courses_container").empty();
					
// 					$.each(response, function (key, value) {
// 						plus_course(value.id, value.image, value.teacher.teacher_info.full_name , value.title, value.body,value.price_after , value.price_before);
//                     });
// 				}
					
// 				},
// 				error: function(response){
// 					alert('Error'+response);
// 				}
				
// 				});

// });

	function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
     if (item !== checkbox) item.checked = false
	})
}

        $('.my_course').on('click', function () {
            var course_id = $(this).data("id") ;
            window.location.href = '/course-details/' + course_id ,true;
     });

	 
		$('.category').on('click', function () {
			$('.courses_container').hide();
			showLoader();
			 category = [] ;
			$('.category').each(function() {
				if($(this).is(":checked"))
				{
					category.push($(this).val());
				}
				else {
						var index = category.indexOf($(this).val());
						if (index > -1) {
							category.splice(index, 1);
						}
					}
			});
			categories = category.toString();
			
			$.ajax({
				type: 'GET',  
				url: "{{url('courseFilter')}}" + '?categories=' + category + '&cities=' + city
				 + '&instructors=' + instructor + '&price_course=' + price_course 
				 + '&course_name_id=' + course_name_id + '&city_selected_id=' + city_selected_id
				 + '&instructor_name_id=' + instructor_name_id + '&subject_name_id=' + subject_name_id
				 + '&stage_name_id=' + stage_name_id   ,  
   				 data: {},
				
				success: function(response){ 
				if(response)
				{
					$(".courses_container").empty();
					
					if (response.length > 0) {
                        $.each(response, function (key, value) {
							plus_course(value.id, value.image, value.teacher.teacher_info.full_name , value.title, value.body,value.price_after , value.price_before);

                        });
                    }else{
                        no_result();
                    }
				}
					
				},
				error: function(response){
					alert('Error'+response);
				}
				
				});
	});
		$('.city').on('click', function () {
			$('.courses_container').hide();
			showLoader();
			 city = [] ;
			$('.city').each(function() {
				if($(this).is(":checked"))
				{
					city.push($(this).val());
					
				}
				else {
						var index = city.indexOf($(this).val());
						if (index > -1) {
							city.splice(index, 1);
						}
					}
			});
			cities = city.toString();
	
			$.ajax({
				type: 'GET',  
				url: "{{url('courseFilter')}}" + '?categories=' + category + '&cities=' + city
				 + '&instructors=' + instructor + '&price_course=' + price_course 
				 + '&course_name_id=' + course_name_id + '&city_selected_id=' + city_selected_id
				 + '&instructor_name_id=' + instructor_name_id + '&subject_name_id=' + subject_name_id
				 + '&stage_name_id=' + stage_name_id   ,  
   				 data: {},
				
				success: function(response){ 
				if(response)
				{
					$(".courses_container").empty();
					if (response.length > 0) {
                        $.each(response, function (key, value) {
							plus_course(value.id, value.image, value.teacher.teacher_info.full_name , value.title, value.body,value.price_after , value.price_before);

                        });
                    }else{
                        no_result();
                    }
				}
					
				},
				error: function(response){
					alert('Error'+response);
				}
				
				});
		
  
	});

		$('.instructor').on('click', function () {
			$('.courses_container').hide();
			showLoader();
			 instructor = [] ;
			$('.instructor').each(function() {
				if($(this).is(":checked"))
				{
					instructor.push($(this).val());	
				}
				// else {
				// 		var index = instructor.indexOf($(this).val());
				// 		if (index > -1) {
				// 			instructor.splice(index, 1);
				// 		}
				// 	}
			});
			
			instructors = instructor.toString();
			$.ajax({
				type: 'GET',  
				url: "{{url('courseFilter')}}" + '?categories=' + category + '&cities=' + city
				 + '&instructors=' + instructor + '&price_course=' + price_course 
				 + '&course_name_id=' + course_name_id + '&city_selected_id=' + city_selected_id
				 + '&instructor_name_id=' + instructor_name_id + '&subject_name_id=' + subject_name_id
				 + '&stage_name_id=' + stage_name_id   , 
				 data: {},

				success: function(response){ 
				if(response)
				{
					$(".courses_container").empty();
					if (response.length > 0) {
                        $.each(response, function (key, value) {
							plus_course(value.id, value.image, value.teacher.teacher_info.full_name , value.title, value.body,value.price_after , value.price_before);

                        });
                    }else{
                        no_result();
                    }
				}
					
				},
				error: function(response){
					alert('Error'+response);
				}
				
				});
		});
		$('.price_course').on('click', function () {
				$('.courses_container').hide();
				showLoader();
				if($(this).is(":checked"))
				{
					 price_course = $(this).val();	
				}

			$.ajax({
				type: 'GET',  
				url: "{{url('courseFilter')}}" + '?categories=' + category + '&cities=' + city
				 + '&instructors=' + instructor + '&price_course=' + price_course 
				 + '&course_name_id=' + course_name_id + '&city_selected_id=' + city_selected_id
				 + '&instructor_name_id=' + instructor_name_id + '&subject_name_id=' + subject_name_id
				 + '&stage_name_id=' + stage_name_id   , 
				 data: {},
				success: function(response){ 
				if(response)
				{
					console.log(response);
					$(".courses_container").empty();
					if (response.length > 0) {
                        $.each(response, function (key, value) {
							plus_course(value.id, value.image, value.teacher.teacher_info.full_name , value.title, value.body,value.price_after , value.price_before);

                        });
                    }else{
                        no_result();
                    }
				}
					
				},
				error: function(response){
					alert('Error'+response);
				}
				
				});
		});

		function no_result()
        {
			$('.courses_container').show();
            var course = '<p class="my_result"> {{ trans('lang.result') }} </p>';
            $(".courses_container").append(course);
        }
		function plus_course(course_id, course_image, course_fullname , course_title , course_body ,course_price_after ,course_price_before) {
			$('.courses_container').show();
			var short_course_body='';
			var length = course_body.length;
			if (length > 200) {
				short_course_body = course_body.substring(0, 200).concat('...') ;
			} else {
					short_course_body = course_body;
				}
            var course ='<div class="col-lg-12 p0">\n'+
						'<div class="courses_list_content my_course"  data-id="'+ course_id +'" >\n'+
							'<div class="top_courses list">\n'+
								'<div class="thumb">\n'+
									'<img class="img-whp" src="'+ course_image +'" alt="t1.jpg">\n'+
									'<div class="overlay">\n'+
										'<div class="icon"><span class="flaticon-like"></span></div>\n'+
										'<a class="tc_preview_course" href="#"> {{ trans('lang.preview_course') }}</a>\n'+
									'</div>\n'+
								'</div>\n'+

							'<div class="details">\n'+
								'<div class="tc_content">\n'+
									 '<p>'+ course_fullname +' </p>\n'+
									'<h5>'+ course_title +' </h5>\n'+
									

									'<p>'+ short_course_body +' </p>\n'+
								'</div>\n'+
								'<div class="tc_footer">\n'+
									'<ul class="tc_meta float-left fn-414">\n'+
										'<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>\n'+
										'<li class="list-inline-item"><a href="#">1548</a></li>\n'+
										'<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>\n'+
										'<li class="list-inline-item"><a href="#">25</a></li>\n'+
									'</ul>\n'+
										'<div class="tc_price float-right fn-414">\n'+
									'@if(!empty($Course->price_after))\n'+
									'<del class="original_price">$'+ course_price_after +'</del>\n'+
									'@endif\n'+
									'$'+ course_price_before +'\n'+
									'</div>\n'+
									'<ul class="tc_review float-right fn-414">\n'+
										'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
										'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
										'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
										'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
										'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
										'<li class="list-inline-item"><a href="#">(5)</a></li>\n'+
									'</ul>\n'+
								'</div>\n'+
							'</div>\n'+

					'</div>\n'+
				'</div>\n'+
			'</div>';
						
			$(".courses_container").append(course);
        }
		
    </script>
@endsection
