<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <!--head area start-->
    @include('Web.includes.head')
    <!--head area end-->

    @include('Web.includes.css')



</head>
<body>
<div class="wrapper">
    <div class="preloader"></div>


    @include('Web.includes.header')

    @yield('content')

    @include('Web.includes.footer')

</div>

@include('Web.includes.js')

<!--foot area start-->
@include('Web.includes.foot')

</body>
</html>
