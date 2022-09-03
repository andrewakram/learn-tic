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
					<div class="row courses_list_heading style2">
						<div class="col-xl-4 p0">
							<div class="instructor_search_result style2">
								<p class="mt10 fz15"><span class="color-dark pr10">85 </span> 
								<!-- results <span class="color-dark pr10">1,236</span> -->
								 <!-- Video Tutorials -->
								 {{ trans('lang.course') }}
								</p>
							</div>
						</div>
						<div class="col-xl-8 p0">
							<div class="candidate_revew_select style2 text-right">
								<ul class="mb0">
									<li class="list-inline-item">
										<select class="selectpicker show-tick">

												<option>{{ trans('lang.city') }}</option>
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
										    	<input class="form-control mr-sm-2" type="search" placeholder="{{ trans('lang.search_courses') }}" aria-label="Search">
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
												<?php $string = $Course->body ;
										if (strlen($string) > 300) {
										$description = substr($string, 0, 300). ' ...';
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
													<input type="checkbox" class="custom-control-input" id="customCheck{{$category -> id}}">
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
													<input type="checkbox" class="custom-control-input" id="customCheck{{$city -> id}}">
													<label class="custom-control-label" for="customCheck{{$city -> id}}">{{$city -> title}} <span class="float-right">(03)</span></label>
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
														<input type="checkbox" class="custom-control-input" id="{{$instructor -> id}} ">
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
												<input type="checkbox" class="custom-control-input" id="customSwitch1">
												<label class="custom-control-label" for="customSwitch1"> {{ trans('lang.paid') }}  </label>
											</div>
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch2">
												<label class="custom-control-label" for="customSwitch2">{{ trans('lang.free') }}</label>
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

					<!-- <div class="selected_filter_widget style3">
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
											 	 <div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck80">
													<label class="custom-control-label" for="customCheck80">Riyad <span class="float-right">(03)</span></label>
											 	 </div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">Makkah  <span class="float-right">(15)</span></label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck2">
													<label class="custom-control-label" for="customCheck2">Dammam  <span class="float-right">(125)</span></label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck80">
													<label class="custom-control-label" for="customCheck80">Riyad <span class="float-right">(03)</span></label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">Makkah  <span class="float-right">(15)</span></label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck2">
													<label class="custom-control-label" for="customCheck2">Dammam  <span class="float-right">(125)</span></label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck3">
													<label class="custom-control-label" for="customCheck3">Al-Qassim <span class="float-right">(1.584)</span></label>
												</div>

										  </div>
									  </div>
								  </div>
							  </div>
						  </div>
					  </div>
				  </div> -->


				  <div class=" ui_kit_button search_btn mb0">
					<button type="button" class="btn dbxshad btn-lg btn-thm circle white">{{ trans('lang.search') }}</button>
				  </div>

					<!--
					<div class="selected_filter_widget style3">
					  	<div id="accordion" class="panel-group">
						    <div class="panel">
						      	<div class="panel-heading">
							      	<h4 class="panel-title">
							        	<a href="#panelBodyRating" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Rating</a>
							        </h4>
						      	</div>
							    <div id="panelBodyRating" class="panel-collapse collapse">
							        <div class="panel-body">
										<div class="ui_kit_checkbox style2">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck80">
												<label class="custom-control-label" for="customCheck80">Show All <span class="float-right">(03)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck82">
												<label class="custom-control-label" for="customCheck82">1 star and higher <span class="float-right">(15)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck83">
												<label class="custom-control-label" for="customCheck83">2 star and higher <span class="float-right">(126)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck84">
												<label class="custom-control-label" for="customCheck84">3 star and higher <span class="float-right">(1,584)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck85">
												<label class="custom-control-label" for="customCheck85">4 star and higher <span class="float-right">(34)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck86">
												<label class="custom-control-label" for="customCheck86">5 star and higher <span class="float-right">(58)</span></label>
											</div>
										</div>
							        </div>
							    </div>
						    </div>
						</div>
					</div>
				-->
					<!--
					<div class="selected_filter_widget style4">
						<span class="float-left"><img class="mr20" src="{{asset('project')}}/images/resource/2.png" alt="2.png"></span>
						<h4 class="mt15 fz20 fw500">Not sure?</h4>
						<br>
						<p>Every course comes with a 30-day money-back guarantee</p>
					</div>
				-->
				</div>
			</div>
		</div>
	</section>



@endsection

@section('script')
<script type="text/javascript">

        $('.my_course').on('click', function () {
            var course_id = $(this).data("id") ;
            window.location.href = '/course-details/' + course_id ,true;
        });
    </script>
@endsection
