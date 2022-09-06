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
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9">
					<div class="row">
						<div class="col-sm-5 col-lg-5 col-xl-3">
							<div class="instructor_search_result">
								<p class="mt10 fz15"><span class="color-dark">85</span> {{ trans('lang.instructors') }}</p>
							</div>

						</div>
						<div class="col-sm-7 col-lg-7 col-xl-9">
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
								<ul >
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
												<input list="searchCity" id="city" class="form-control mr-sm-2"  type="search" placeholder="{{ trans('lang.city') }}" aria-label="Search">
												
												<datalist id="searchCity">
												@foreach ($data['cities'] as $city)
													<option id="{{$city -> id}}" data-id="{{$city -> id}}" value="{{$city -> title}}">
														
												@endforeach
													
												</datalist>
												<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
											</form>
										</div>
									</li>
									<li class="list-inline-item">
										<div class="candidate_revew_search_box course fn-520">
											<form class="form-inline my-2 my-lg-0">
												<input list="searchInstructor"  class="form-control mr-sm-2" id="instructor_name" type="search" placeholder="{{ trans('lang.search_instructors') }}" aria-label="Search">
												
												<datalist id="searchInstructor">
												@foreach ($instractors as $instructor)
													<option data-id="{{$instructor->teacher_id}}" id="{{$instructor->teacher_id}}" value="{{$instructor->full_name}}">
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
					<div class="row instructors">
					@foreach ($instractors as $instructor)
						<div class="col-sm-6 col-lg-6 col-xl-4 my_teacher" data-id="{{$instructor->teacher_id}}">
							<div class="team_member style3 text-center mb30">
								<div class="instructor_col">
									<div class="thumb">
										<img class="img-fluid img-rounded-circle" src="{{$instructor->teacher->image}}" alt="6.png">
									</div>
									<div class="details">
										<h4>{{$instructor->full_name}}</h4>

										<p>
										@if(session()->get('lang') == 'ar')
											{{$instructor -> category -> title_ar}}
										@else
											{{$instructor -> category -> title_en}}
										@endif
										</p>

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
										<li class="list-inline-item"><a href="#">56,178 {{ trans('lang.students') }} </a></li>
										<li class="list-inline-item"><a href="#">22 {{ trans('lang.course') }} </a></li>
									</ul>
								</div>
							</div>
						</div>
						
						
						@endforeach

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
				<div class="col-lg-4 col-xl-3">
					<div class="selected_filter_widget style2 mb30">
					  	<div id="accordion" class="panel-group">
						    <div class="panel">
						      	<div class="panel-heading">
							      	<h4 class="panel-title">
							        	<a href="#panelBodyfilter" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{ trans('lang.search_map') }}
										</a>
							        </h4>
						      	</div>
							    <div id="panelBodyfilter" class="panel-collapse collapse show">
							        <div class="panel-body">
										<input class="form-control mr-sm-2" type="search" placeholder="{{ trans('lang.add_address') }}" aria-label="Search">

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
									  <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{ trans('lang.teacher_qualification') }}
									</a>
								  </h4>
								</div>
							  <div id="panelBodySoftware" class="panel-collapse collapse show">
								  <div class="panel-body">
									  <div class="ui_kit_checkbox">
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox"  class="custom-control-input qualification" id="customCheck30" value="Diploma">
											  <label class="custom-control-label" for="customCheck30"> {{ trans('lang.diploma') }}  <span class="float-right">(03)</span></label>
										  </div>
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input qualification" id="customCheck31" value="Bachlore">
											  <label class="custom-control-label" for="customCheck31"> {{ trans('lang.bachelor') }}   <span class="float-right">(15)</span></label>
										  </div>
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input qualification" id="customCheck32" value="Master">
											  <label class="custom-control-label" for="customCheck32"> {{ trans('lang.master') }}  <span class="float-right">(126)</span></label>
										  </div>
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input qualification" id="customCheck33" value="PHD">
											  <label class="custom-control-label" for="customCheck33"> {{ trans('lang.phd') }} 
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
								  <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion"> {{ trans('lang.gender') }}
								</a>
							  </h4>
							</div>
						  <div id="panelBodySoftware" class="panel-collapse collapse show">
							  <div class="panel-body">
								  <div class="ui_kit_checkbox">
									  <div class="custom-control custom-checkbox">
										  <input type="checkbox" class="custom-control-input gender" id="customCheck34" value="male">
										  <label class="custom-control-label" for="customCheck34">{{ trans('lang.male') }}   <span class="float-right">(03)</span></label>
									  </div>
									  <div class="custom-control custom-checkbox">
										  <input type="checkbox" class="custom-control-input gender" id="customCheck35" value="female">
										  <label class="custom-control-label" for="customCheck35"> {{ trans('lang.female') }}   <span class="float-right">(15)</span></label>
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
							        	<a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{ trans('lang.category') }}										</a>
							        </h4>
						      	</div>
							    <div id="panelBodySoftware" class="panel-collapse collapse show">
							        <div class="panel-body">
										<div class="ui_kit_checkbox">
										<!-- <form action="" method="get">  -->
											@foreach ($data['categories'] as $category)
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input category" value="{{$category -> id}}" id="customCheck{{$category -> id}}">
													<label class="custom-control-label" for="customCheck{{$category -> id}}"> {{$category -> title}} <span class="float-right">({{$category -> courses_count}})</span></label>
												</div>
											 @endforeach 
										<!-- </form> -->
											<a class="color-orose" href="#"><span class="fa fa-plus pr10"></span> See More</a>
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
									  <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">  {{ trans('lang.teaching_methods') }}
									</a>
								  </h4>
								</div>
							  <div id="panelBodySoftware" class="panel-collapse collapse show">
								  <div class="panel-body">
									  <div class="ui_kit_checkbox">
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input learn_type" value="Student House" id="customCheck14">
											  <label class="custom-control-label" for="customCheck14"> {{ trans('lang.student_house') }}  
												<span class="float-right">(03)</span></label>
										  </div>
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input learn_type" value="Teacher House" id="customCheck15">
											  <label class="custom-control-label" for="customCheck15"> {{ trans('lang.teacher_house') }} 
												<span class="float-right">(15)</span></label>
										  </div>
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input learn_type" value="Online Education"  id="customCheck16">
											  <label class="custom-control-label" for="customCheck16"> {{ trans('lang.online_education') }}  
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

$('#city').on('input', function() {
    var cityName = $(this).val();
	
	var cityId = $('#searchCity option[value=' + cityName +']').attr('data-id');
	
   alert(cityName);
   alert(cityId);

   $.ajax({
				type: 'GET',  // http method
				url: 'instructorFilter?cities='+cityId ,
   				 data: {},
				
				success: function(response){ // What to do if we succeed
				if(response)
				{
					alert("success"); 
					//alert(response);
					console.log(response);
					$(".instructors").empty();
					$.each(response, function (key, value) {
						var instructor ='<div class="col-sm-6 col-lg-6 col-xl-4 my_teacher" data-id="'+value.teacher_id +'">\n'+
							'<div class="team_member style3 text-center mb30">\n'+
								'<div class="instructor_col">\n'+
									'<div class="thumb">\n'+
										'<img class="img-fluid img-rounded-circle" src="{{asset('project')}}/images/team/6.png" alt="6.png">\n'+
									'</div>\n'+
									'<div class="details">\n'+
										'<h4>'+ value.full_name +'</h4>\n'+

										 '<p>\n'+
										' @if(session()->get('lang') == 'ar')\n'+
										'{{$instructor -> category -> title_ar}}\n'+
										' @else\n'+
										'{{$instructor -> category -> title_en}}\n'+
										' @endif\n'+
										'</p>\n'+

										'<ul>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#">(6)</a></li>\n'+
										'</ul>\n'+
									'</div>\n'+
								'</div>\n'+
								'<div class="tm_footer">\n'+
									'<ul>\n'+
										'<li class="list-inline-item"><a href="#">56,178 {{ trans('lang.students') }} </a></li>\n'+
										'<li class="list-inline-item"><a href="#">22 {{ trans('lang.course') }} </a></li>\n'+
									'</ul>\n'+
								'</div>\n'+
							'</div>\n'+
						'</div>';
						
						
						$(".instructors").append(instructor);
                    });
					
				}
					
				},
				error: function(response){
					alert('Error'+response);
				}
				
				});
  });


        $('.my_teacher').on('click', function () {
            var instructor_id = $(this).data("id") ;
            window.location.href = '/instructor-details/' + instructor_id ,true;
        });

		$('.select_city').change(function() {
			mycity_value = $(this).val();
			mycity_idid = $(this).attr('id');
			
			mycity_id = $(this).data('id');
			// alert(mycity_value);
			// alert(mycity_id);
		
    
		});
		$('.qualification').on('click', function () {
			var qualification = [] ;
			$('.qualification').each(function() {
				if($(this).is(":checked"))
				{
					
					qualification.push($(this).val());
					// alert(qualification);
				}
			});
			qualification = qualification.toString();
			// alert(qualification);
			$.ajax({
				type: 'GET',  // http method
				url: 'instructorFilter?qualification='+qualification ,
   				 data: {},
				
				success: function(response){ // What to do if we succeed
				if(response != null )
				{
					//alert("success"); 
					//console.log(response);
					$(".instructors").empty();
					
					$.each(response, function (key, value) {
						var instructor ='<div class="col-sm-6 col-lg-6 col-xl-4 my_teacher" data-id="'+value.teacher_id +'">\n'+
							'<div class="team_member style3 text-center mb30">\n'+
								'<div class="instructor_col">\n'+
									'<div class="thumb">\n'+
										'<img class="img-fluid img-rounded-circle" src="{{asset('project')}}/images/team/6.png" alt="6.png">\n'+
									'</div>\n'+
									'<div class="details">\n'+
										'<h4>'+ value.full_name +'</h4>\n'+

										 '<p>\n'+
										' @if(session()->get('lang') == 'ar')\n'+
										'{{$instructor -> category -> title_ar}}\n'+
										' @else\n'+
										'{{$instructor -> category -> title_en}}\n'+
										' @endif\n'+
										'</p>\n'+

										'<ul>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#">(6)</a></li>\n'+
										'</ul>\n'+
									'</div>\n'+
								'</div>\n'+
								'<div class="tm_footer">\n'+
									'<ul>\n'+
										'<li class="list-inline-item"><a href="#">56,178 {{ trans('lang.students') }} </a></li>\n'+
										'<li class="list-inline-item"><a href="#">22 {{ trans('lang.course') }} </a></li>\n'+
									'</ul>\n'+
								'</div>\n'+
							'</div>\n'+
						'</div>';
						
						
						$(".instructors").append(instructor);
                    });

					
				}
				else{
					var my_msg ="<p>No Search Results Found</p>"
					$(".instructors").append(my_msg);
             }
					
				},
				error: function(response){
					//alert('Error'+response);
				}
				
				});
		});
		$('.category').on('click', function () {
			
			var category = [] ;
			$('.category').each(function() {
				if($(this).is(":checked"))
				{
					
					category.push($(this).val());
					
				}
			});
			categories = category.toString();
			//alert(categories);
			$.ajax({
				type: 'GET',  // http method
				url: 'instructorFilter?categories='+categories ,
   				 data: {},
				
				success: function(response){ // What to do if we succeed
				if(response)
				{
					$(".instructors").empty();
					if(response.length > 0)
					{
						alert("success"); 
						alert(response);
						console.log(response);
						
						
						$.each(response, function (key, value) {

							var instructor ='<div class="col-sm-6 col-lg-6 col-xl-4 my_teacher" data-id="'+value.teacher_id +'">\n'+
								'<div class="team_member style3 text-center mb30">\n'+
									'<div class="instructor_col">\n'+
										'<div class="thumb">\n'+
											'<img class="img-fluid img-rounded-circle" src="{{asset('project')}}/images/team/6.png" alt="6.png">\n'+
										'</div>\n'+
										'<div class="details">\n'+
											'<h4>'+ value.full_name +'</h4>\n'+

											'<p>\n'+
											' @if(session()->get('lang') == 'ar')\n'+
											'{{$instructor -> category -> title_ar}}\n'+
											' @else\n'+
											'{{$instructor -> category -> title_en}}\n'+
											' @endif\n'+
											'</p>\n'+

											'<ul>\n'+
												'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
												'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
												'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
												'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
												'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
												'<li class="list-inline-item"><a href="#">(6)</a></li>\n'+
											'</ul>\n'+
										'</div>\n'+
									'</div>\n'+
									'<div class="tm_footer">\n'+
										'<ul>\n'+
											'<li class="list-inline-item"><a href="#">56,178 {{ trans('lang.students') }} </a></li>\n'+
											'<li class="list-inline-item"><a href="#">22 {{ trans('lang.course') }} </a></li>\n'+
										'</ul>\n'+
									'</div>\n'+
								'</div>\n'+
							'</div>';
							$(".instructors").append(instructor);
							
							
						});
					}
					else{
					var instructor ='<p> No result found! </p>';
						
					}
					$(".instructors").append(instructor);
				}
				
				
				
				
					
			},
				error: function(response){
					//alert('Error'+response);
				}
				
				});
		
  
		});

		$('.gender').on('click', function () {
			
		
			if($(this).is(":checked"))
			{
				
				var gender = $(this).val();
				
			}
	
		alert(gender);
		$.ajax({
			type: 'GET',  // http method
			url: 'instructorFilter?gender='+gender ,
				data: {},
			
			success: function(response){ // What to do if we succeed
			if(response)
			{
				alert("success"); 
				$(".instructors").empty();
					
					$.each(response, function (key, value) {
						var instructor ='<div class="col-sm-6 col-lg-6 col-xl-4 my_teacher" data-id="'+value.teacher_id +'">\n'+
							'<div class="team_member style3 text-center mb30">\n'+
								'<div class="instructor_col">\n'+
									'<div class="thumb">\n'+
										'<img class="img-fluid img-rounded-circle" src="'+value.image +'" alt="6.png">\n'+
									'</div>\n'+
									'<div class="details">\n'+
										'<h4>'+ value.full_name +'</h4>\n'+

										 '<p>\n'+
										' @if(session()->get('lang') == 'ar')\n'+
										'{{$instructor -> category -> title_ar}}\n'+
										' @else\n'+
										'{{$instructor -> category -> title_en}}\n'+
										' @endif\n'+
										'</p>\n'+

										'<ul>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#">(6)</a></li>\n'+
										'</ul>\n'+
									'</div>\n'+
								'</div>\n'+
								'<div class="tm_footer">\n'+
									'<ul>\n'+
										'<li class="list-inline-item"><a href="#">56,178 {{ trans('lang.students') }} </a></li>\n'+
										'<li class="list-inline-item"><a href="#">22 {{ trans('lang.course') }} </a></li>\n'+
									'</ul>\n'+
								'</div>\n'+
							'</div>\n'+
						'</div>';
						
						
						$(".instructors").append(instructor);
                    });

					
				}
					
				},
				error: function(response){
					//alert('Error'+response);
				}
				
				});
				});


				$('.learn_type').on('click', function () {
			
			var learn_type = [] ;
			$('.learn_type').each(function() {
				if($(this).is(":checked"))
				{
					
					learn_type.push($(this).val());
					
				}
			});
			learn_types = learn_type.toString();
			alert(learn_types);
			$.ajax({
				type: 'GET',  // http method
				url: 'instructorFilter?learn_types='+learn_types ,
   				 data: {},
				
				success: function(response){ // What to do if we succeed
				if(response)
				{
					alert("success"); 
					//console.log(response);
					$(".instructors").empty();
					
					$.each(response, function (key, value) {
						var instructor ='<div class="col-sm-6 col-lg-6 col-xl-4 my_teacher" data-id="'+value.teacher_id +'">\n'+
							'<div class="team_member style3 text-center mb30">\n'+
								'<div class="instructor_col">\n'+
									'<div class="thumb">\n'+
										'<img class="img-fluid img-rounded-circle" src="{{asset('project')}}/images/team/6.png" alt="6.png">\n'+
									'</div>\n'+
									'<div class="details">\n'+
										'<h4>'+ value.full_name +'</h4>\n'+

										 '<p>\n'+
										' @if(session()->get('lang') == 'ar')\n'+
										'{{$instructor -> category -> title_ar}}\n'+
										' @else\n'+
										'{{$instructor -> category -> title_en}}\n'+
										' @endif\n'+
										'</p>\n'+

										'<ul>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#">(6)</a></li>\n'+
										'</ul>\n'+
									'</div>\n'+
								'</div>\n'+
								'<div class="tm_footer">\n'+
									'<ul>\n'+
										'<li class="list-inline-item"><a href="#">56,178 {{ trans('lang.students') }} </a></li>\n'+
										'<li class="list-inline-item"><a href="#">22 {{ trans('lang.course') }} </a></li>\n'+
									'</ul>\n'+
								'</div>\n'+
							'</div>\n'+
						'</div>';
						
						
						$(".instructors").append(instructor);
                    });

					
				}
					
				},
				error: function(response){
					//alert('Error'+response);
				}
				
				});
		
  
		});

		$('#instructor_name').on('input', function() {
   
	///////////////////////////////////////////////
  		
				
				var instructorName = $(this).id;
				alert(instructorName);
				var instructorId = $('#searchInstructor option[id=' + instructorName +']');
				alert(instructorId);
				
		
	
		$.ajax({
			type: 'GET',  // http method
			url: 'instructorFilter?instructorId='+instructorId ,
				data: {},
			
			success: function(response){ // What to do if we succeed
			if(response)
			{
				alert("success"); 
				$(".instructors").empty();
					
					$.each(response, function (key, value) {
						var instructor ='<div class="col-sm-6 col-lg-6 col-xl-4 my_teacher" data-id="'+value.teacher_id +'">\n'+
							'<div class="team_member style3 text-center mb30">\n'+
								'<div class="instructor_col">\n'+
									'<div class="thumb">\n'+
										'<img class="img-fluid img-rounded-circle" src="'+value.teacher.image +'" alt="6.png">\n'+
									'</div>\n'+
									'<div class="details">\n'+
										'<h4>'+ value.full_name +'</h4>\n'+

										 '<p>\n'+
										' @if(session()->get('lang') == 'ar')\n'+
										'{{$instructor -> category -> title_ar}}\n'+
										' @else\n'+
										'{{$instructor -> category -> title_en}}\n'+
										' @endif\n'+
										'</p>\n'+

										'<ul>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>\n'+
											'<li class="list-inline-item"><a href="#">(6)</a></li>\n'+
										'</ul>\n'+
									'</div>\n'+
								'</div>\n'+
								'<div class="tm_footer">\n'+
									'<ul>\n'+
										'<li class="list-inline-item"><a href="#">56,178 {{ trans('lang.students') }} </a></li>\n'+
										'<li class="list-inline-item"><a href="#">22 {{ trans('lang.course') }} </a></li>\n'+
									'</ul>\n'+
								'</div>\n'+
							'</div>\n'+
						'</div>';
						
						
						$(".instructors").append(instructor);
                    });

					
				}
					
				},
				error: function(response){
					//alert('Error'+response);
				}
				
				});
				});
		
		// function plus_item() {
        //     var new_item = 
        //         ' <label class="required form-label">\n' +
        //         '  اختر الباقة الإضافية\n' +
        //         '                                                            </label>\n' +
		
        //                  $(".instructors").append(new_item);
		// 				}
    </script>
@endsection
