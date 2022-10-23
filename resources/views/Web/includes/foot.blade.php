
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

		<script>

$(document).ready(function () {

var navListItems = $('div.setup-panel div a'),
		allWells = $('.setup-content'),
		allNextBtn = $('.nextBtn'),
		allPrevBtn = $('.prevBtn');

allWells.hide();

navListItems.click(function (e) {
	e.preventDefault();
	var $target = $($(this).attr('href')),
			$item = $(this);

	if (!$item.hasClass('disabled')) {
		navListItems.removeClass('btn-primary').addClass('btn-default');
		$item.addClass('btn-primary');
		allWells.hide();
		$target.show();
		$target.find('input:eq(0)').focus();
	}
});

allNextBtn.click(function(){
	var curStep = $(this).closest(".setup-content"),
		curStepBtn = curStep.attr("id"),
		nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		curInputs = curStep.find("input[type='text'],input[type='url']"),
		isValid = true;

	$(".form-group").removeClass("has-error");
	for(var i=0; i<curInputs.length; i++){
		if (!curInputs[i].validity.valid){
			isValid = false;
			$(curInputs[i]).closest(".form-group").addClass("has-error");
		}
	}

	if (isValid)
		nextStepWizard.removeAttr('disabled').trigger('click');
});

allPrevBtn.click(function(){
	var curStep = $(this).closest(".setup-content"),
		curStepBtn = curStep.attr("id"),
		prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

	$(".form-group").removeClass("has-error");
	prevStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-primary').trigger('click');
});
		</script>
@yield('script')
