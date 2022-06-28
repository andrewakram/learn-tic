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
				<?php $num=1 ?>

				@foreach ($data['categories'] as $Category)
				@if($num <= 8)
					<div class="col-sm-6 col-lg-3">
						<div class="img_hvr_box" style="background-image: url({{asset('project')}}/images/courses/1.jpg);">
							<div class="overlay">
								<div class="details">


								<!--  <h5>{{ $Category->{'title_'.App::getLocale()} }}</h5>-->
								<h5> {{ $Category->title }}</h5>
									<p>  Over {{$Category -> courses_count}} Courses</p>
								</div>
							</div>
						</div>
					</div>
					<?php  $num++ ?>
				@endif
				@endforeach
			</div>
		</div>
	</section>

@endsection

@section('script')

@endsection
