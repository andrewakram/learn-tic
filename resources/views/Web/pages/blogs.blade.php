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
						<h4 class="breadcrumb_title">{{ __('lang.blogs') }}</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">{{ __('lang.home') }}</a></li>
						    <li class="breadcrumb-item active" aria-current="page">{{ __('lang.blogs') }}</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Main Blog Post Content -->
	<!--
	<section class="blog_post_container bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0 mb0">Featured Posts</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="feature_post_slider">
						<div class="item">
							<div class="blog_post">
								<div class="thumb">
									<img class="img-fluid w100" src="{{asset('project')}}/images/blog/2a.jpg" alt="2a.jpg">
									<a class="post_date" href="#">July 21, 2019</a>
								</div>
								<div class="details">
									<h5>Marketing</h5>
									<h4>A Solution Built for Teachers</h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog_post">
								<div class="thumb">
									<img class="img-fluid w100" src="{{asset('project')}}/images/blog/3a.jpg" alt="3a.jpg">
									<a class="post_date" href="#">July 21, 2019</a>
								</div>
								<div class="details">
									<h5>Marketing</h5>
									<h4>A Solution Built for Teachers</h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog_post">
								<div class="thumb">
									<img class="img-fluid w100" src="{{asset('project')}}/images/blog/2.jpg" alt="2.jpg">
									<a class="post_date" href="#">July 21, 2019</a>
								</div>
								<div class="details">
									<h5>Marketing</h5>
									<h4>A Solution Built for Teachers</h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog_post">
								<div class="thumb">
									<img class="img-fluid w100" src="{{asset('project')}}/images/blog/3.jpg" alt="3.jpg">
									<a class="post_date" href="#">July 21, 2019</a>
								</div>
								<div class="details">
									<h5>Business</h5>
									<h4>An Overworked Newspaper Editor</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
-->

	<!-- Main Blog Post Content -->
	<section class="blog_post_container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-xl-9">
					<div class="main_blog_post_content">
					@foreach ($blogs as $blog)

                        <div class="mbp_thumb_post mt35  my_blog"   data-id="{{$blog -> id }}"  >
								<div class="thumb">
									<img class="img-fluid" src="{{$blog->image}} " alt="12.jpg">
									<div class="tag">Marketing</div>
									<div class="post_date"><h2>28</h2> <span>DECEMBER</span></div>
								</div>
								<div class="details">
									<h3>{{ $blog->title}}</h3>
									<ul class="post_meta">
										<li><a href="#"><span class="flaticon-profile"></span></a></li>
										<li><a href="#"><span>ahmed ali</span></a></li>
										<li><a href="#"><span class="flaticon-comment"></span></a></li>
										<li><a href="#"><span>7 comments</span></a></li>
									</ul>
								 <!--test-->
									<?php $string = $blog->description ;
										if (strlen($string) > 300) {
										$description = substr($string, 0, 300). ' ...';
										} else {
										$description = $string;
										}
										 echo $description;
									?>

								</div>
							</div>

					@endforeach
						<div class="row">
							<div class="col-lg-12">
								<div class="mbp_pagination mt20">
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
				</div>
				<div class="col-lg-4 col-xl-3 pl10 pr10">
					<div class="main_blog_post_widget_list">
						<div class="blog_search_widget">
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Search Here" aria-label="Recipient's username" aria-describedby="button-addon2">
								<div class="input-group-append">
							    	<button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-magnifying-glass"></span></button>
								</div>
							</div>
						</div>
						<div class="blog_category_widget">
							<ul class="list-group">
								<h4 class="title">{{ __('lang.category') }}</h4>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	Admissions <span class="float-right">6</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	News <span class="float-right">1</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	Event <span class="float-right">6</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	Focus in the lab <span class="float-right">16</span>
								</li>
							</ul>
						</div>
						<div class="blog_recent_post_widget media_widget">
							<h4 class="title"> {{ __('lang.recent_posts') }}</h4>
							<div class="media">
								<img class="align-self-start mr-3" src="{{asset('project')}}/images/blog/s1.jpg" alt="s1.jpg">
								<div class="media-body">
							    	<h5 class="mt-0 post_title">Half of What We Know About Coffee</h5>
							    	<a href="#">October 25, 2019.</a>
								</div>
							</div>
							<div class="media">
								<img class="align-self-start mr-3" src="{{asset('project')}}/images/blog/s2.jpg" alt="s2.jpg">
								<div class="media-body">
							    	<h5 class="mt-0 post_title">The Best Places to Start Your Travel</h5>
							    	<a href="#">October 25, 2019.</a>
								</div>
							</div>
							<div class="media">
								<img class="align-self-start mr-3" src="{{asset('project')}}/images/blog/s3.jpg" alt="s3.jpg">
								<div class="media-body">
							    	<h5 class="mt-0 post_title">The Top 25 London</h5>
							    	<a href="#">October 25, 2019.</a>
								</div>
							</div>
						</div>
						<div class="blog_tag_widget">
							<h4 class="title">Tags</h4>
							<ul class="tag_list">
								<li class="list-inline-item"><a href="#">Photoshop</a></li>
								<li class="list-inline-item"><a href="#">Sketch</a></li>
								<li class="list-inline-item"><a href="#">Beginner</a></li>
								<li class="list-inline-item"><a href="#">UX/UI</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('script')
    <script type="text/javascript">

        $('.my_blog').on('click', function () {
            var blog_id = $(this).data("id") ;
            window.location.href = '/blog-details/' + blog_id ,true;
        });
    </script>
@endsection
