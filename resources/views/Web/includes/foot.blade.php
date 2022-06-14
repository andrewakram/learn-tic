
<!-- Wrapper End -->
<script type="text/javascript" src="{{asset('project')}}/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/popper.min.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/isotop.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/snackbar.min.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/simplebar.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/parallax.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/scrollto.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/jquery.counterup.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/wow.min.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/progressbar.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/slider.js"></script>
<script type="text/javascript" src="{{asset('project')}}/js/timepicker.js"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{asset('project')}}/js/script.js"></script>

<?php
$errors = session()->get("errors");
?>
@if( session()->has("errors"))
    <?php
    $e = implode(' - ', $errors->all());
    ?>

    <script>
        Swal.fire({
            icon: 'warning',
            title: "برجاء التأكد من البيانات.",
            text: "{{$e}} ",
            type: "error",
            timer: 5000,
            showConfirmButton: false
        });
    </script>

@endif

@if( session()->has("error"))
    <?php
    $e = session()->get("error");
    ?>

    <script>
        Swal.fire({
            icon: 'warning',
            title: "برجاء التأكد من البيانات.",
            text: "{{$e}} ",
            type: "error",
            timer: 5000,
            showConfirmButton: false
        });
    </script>

@endif

@if( session()->has("success"))
    <?php
    $e = session()->get("success");
    ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: "تمت العملية بنجاح.",
            text: "{{$e}} ",
            type: "success",
            timer: 5000,
            showConfirmButton: false,
            dir:"row"
        });
    </script>

@endif

<script>
    $(".form-select").each(function() {
        $(this).select2({
            theme: "bootstrap3",
            dropdownParent: $(this).parent()
        });
    });
</script>
@yield('script')
