
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Learn-Tic">
<meta name="CreativeLayers" content="ATFN">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- css file -->
@if(session()->get('lang') == 'ar')
    <link rel="stylesheet" href="{{asset('project')}}/css/ar-bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{asset('project')}}/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="{{asset('project')}}/css/ar-style.css">
    <link rel="stylesheet" href="{{asset('project')}}/css/ar-responsive">
@else
    <link rel="stylesheet" href="{{asset('project')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('project')}}/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('project')}}/css/responsive.css">
    
@endif

<!-- Title -->
<title> Learn-Tic </title>
<!-- Favicon -->
<link href="{{asset('project')}}/images/icon_learn.jpg"  sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{asset('project')}}/images/icon_learn.jpg"  sizes="128x128" rel="shortcut icon" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<!--add font cairo-->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

@yield('style')
