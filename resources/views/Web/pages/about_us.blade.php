@extends('Web.index')
@section('style')

@endsection
@section('content')
    	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb about">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">{{ trans('lang.about_us') }} </h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">{{ trans('lang.home') }} </a></li>
						    <li class="breadcrumb-item active" aria-current="page">{{ trans('lang.about_us') }} </li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_content">
						<h3>
							@if(session()->get('lang') == 'ar')
								{{$data['about_title_arabic'] }}
							@else
								{{$data['about_title_english'] }}
							@endif

						</h3>

						<p>
						@if(session()->get('lang') == 'ar')
								{!! $data['about_body_arabic']  !!}
							@else
								{!! $data['about_body_english'] !!}
						 @endif


						</p>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_thumb">
						<img class="img-fluid" src="{{$data['about_image']}}" alt="about us.jpg">
					</div>
				</div>
			</div>
			<div class="row mb60">
				<div class="col-lg-12 text-center mt60">
					<h3 class="fz26">{{ trans('lang.our_story') }}</h3>
				</div>
				<div class="col-lg-12 text-center mt40">
					<ul class="funfact_two_details">
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5>{{ trans('lang.foreign_follwers') }}</h5>
									<div class="timer">88,000</div>
								</div>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5> {{ trans('lang.certified_teachers') }}</h5>
									<div class="timer">96</div>
								</div>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5>{{ trans('lang.students_enrolled') }} </h5>
									<div class="timer">4,789</div>
								</div>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5>{{ trans('lang.complete_courses') }} </h5>
									<div class="timer">489</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="about_whoweare">
						<h4>
							@if(session()->get('lang') == 'ar')
								{{$data['vision_title_arabic'] }}
							@else
								{{$data['vision_title_english'] }}
							@endif
						</h4>
						<p>
							@if(session()->get('lang') == 'ar')
								{!! $data['vision_body_arabic'] !!}
							@else
								{!! $data['vision_body_english'] !!}
							@endif
						</p>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_whoweare">
					<h4>
							@if(session()->get('lang') == 'ar')
								{{$data['Message_title_arabic'] }}
							@else
								{{$data['Message_title_english'] }}
							@endif
						</h4>
						<p>
							@if(session()->get('lang') == 'ar')
								{!! $data['Message_body_arabic'] !!}
							@else
								{!! $data['Message_body_english'] !!}
							@endif
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Divider -->
	<section class="divider parallax bg-img2" data-stellar-background-ratio="0.3">
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

	<!-- Our Team Members -->
	<section class="our-team pb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title text-center">
						<h3 class="mb0 mt0">{{ trans('lang.popular_instructors') }}</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="team_slider">


					@foreach($data['popular_teachers'] as $popular_teacher)

						<div class="item">
							<div class="team_member text-center">
								<div class="instructor_col">
									<div class="thumb">
										<img class="img-fluid img-rounded-circle" src="{{$popular_teacher -> teacher->image}}" alt="6.png">
									</div>
									<div class="details">
										<h4> {{$popular_teacher -> full_name}}</h4>

										<p>
											@if(session()->get('lang') == 'ar')
											{{$popular_teacher -> category->title_ar}}
											@else
											{{$popular_teacher -> category->title_en}}
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
										<li class="list-inline-item"><a href="#">56,178 {{ trans('lang.students') }}   </a></li>
										<li class="list-inline-item"><a href="#">22 {{ trans('lang.course') }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					@endforeach
						
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
			<div class="row row_mytestmonial">
				<div class="col-lg-6 offset-lg-3 mytestmonial">
					<div class="testimonialsec">
						<ul class="tes-nav">
							<li>
								<img class="img-fluid" src="{{asset('project')}}/images/testimonial/1.jpg" alt="1.jpg"/>
							</li>
							<li>
								<img class="img-fluid" src="{{asset('project')}}/images/testimonial/2.jpg" alt="2.jpg"/>
							</li>
							<li>
								<img class="img-fluid" src="{{asset('project')}}/images/testimonial/3.jpg" alt="3.jpg"/>
							</li>
							<li>
								<img class="img-fluid" src="{{asset('project')}}/images/testimonial/4.jpg" alt="4.jpg"/>
							</li>
						</ul>
						<ul class="tes-for">
                        @foreach ($data['user_comments'] as $user_comment)

                            <li>
                                <div class="testimonial_item">
                                    <div class="details">
                                        <h5>{{ $user_comment->title}}</h5>
                                        <span class="small text-thm">{{ $user_comment->user_type }}</span>
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
				<div class="col-lg-8 offset-lg-2">
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

@endsection

@section('script')

@endsection
