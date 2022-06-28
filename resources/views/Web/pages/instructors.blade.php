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
									<li class="list-inline-item">
										<select class="selectpicker show-tick">

											<option>{{ __('lang.city') }}</option>
											@foreach ($data['cities'] as $city)
												<option>{{$city -> title}}</option>
											@endforeach
											<!--
											<option>Newly published</option>
											<option>Recent</option>
											<option>Old Review</option>
										-->
										</select>
									</li>
									<li class="list-inline-item">
										<div class="candidate_revew_search_box course fn-520">
											<form class="form-inline my-2 my-lg-0">
												<input class="form-control mr-sm-2" type="search" placeholder="{{ trans('lang.Search_instructors') }}" aria-label="Search">
												<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
											</form>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
					@foreach ($instractors as $instructor)
						<div class="col-sm-6 col-lg-6 col-xl-4 my_teacher" data-id="{{$instructor->teacher_id}}">
							<div class="team_member style3 text-center mb30">
								<div class="instructor_col">
									<div class="thumb">
										<img class="img-fluid img-rounded-circle" src="{{asset('project')}}/images/team/6.png" alt="6.png">
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
										<li class="list-inline-item"><a href="#">56,178 students</a></li>
										<li class="list-inline-item"><a href="#">22 courses</a></li>
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
											  <input type="checkbox" class="custom-control-input" id="customCheck14">
											  <label class="custom-control-label" for="customCheck14">diploma <span class="float-right">(03)</span></label>
										  </div>
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input" id="customCheck15">
											  <label class="custom-control-label" for="customCheck15">Bachelor  <span class="float-right">(15)</span></label>
										  </div>
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input" id="customCheck16">
											  <label class="custom-control-label" for="customCheck16"> Master's <span class="float-right">(126)</span></label>
										  </div>
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input" id="customCheck17">
											  <label class="custom-control-label" for="customCheck17">PhD
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
										  <input type="checkbox" class="custom-control-input" id="customCheck14">
										  <label class="custom-control-label" for="customCheck14">Male <span class="float-right">(03)</span></label>
									  </div>
									  <div class="custom-control custom-checkbox">
										  <input type="checkbox" class="custom-control-input" id="customCheck15">
										  <label class="custom-control-label" for="customCheck15">Female  <span class="float-right">(15)</span></label>
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
<<<<<<< HEAD

											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck16">
												<label class="custom-control-label" for="customCheck16">Graphic Design <span class="float-right">(126)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck17">
												<label class="custom-control-label" for="customCheck17">Sketch <span class="float-right">(1,584)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck18">
												<label class="custom-control-label" for="customCheck18">InDesign <span class="float-right">(34)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck19">
												<label class="custom-control-label" for="customCheck19">CorelDRAW <span class="float-right">(34)</span></label>
											</div>

=======
											@foreach ($data['categories'] as $category)
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck{{$category -> id}}">
													<label class="custom-control-label" for="customCheck{{$category -> id}}"> {{$category -> title}} <span class="float-right">({{$category -> courses_count}})</span></label>
												</div>
											@endforeach
>>>>>>> f9951b6a4654e8d5da1b602b63e821c4e7fb8ae5
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
											  <input type="checkbox" class="custom-control-input" id="customCheck14">
											  <label class="custom-control-label" for="customCheck14">Student House
												<span class="float-right">(03)</span></label>
										  </div>
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input" id="customCheck15">
											  <label class="custom-control-label" for="customCheck15">Teacher's House
												<span class="float-right">(15)</span></label>
										  </div>
										  <div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input" id="customCheck16">
											  <label class="custom-control-label" for="customCheck16"> online education
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

        $('.my_teacher').on('click', function () {
            var instructor_id = $(this).data("id") ;
            window.location.href = '/instructor-details/' + instructor_id ,true;
        });
    </script>
@endsection
