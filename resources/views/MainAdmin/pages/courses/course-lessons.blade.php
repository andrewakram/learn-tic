@extends('MainAdmin.index')

@section('style')
    <link href="{{ asset('admin/dist/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
                        <a href="{{route('admin.home')}}" class="text-muted text-hover-primary">
                            الرئيسية
                        </a>
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <!--end::Separator-->
                        <a href="{{route('admin.courses')}}" class="text-muted text-hover-primary">
                            الكورسات
                        </a>
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <!--end::Separator-->
                        <!--begin::Description-->
                        <small class=" fs-3 fw-bold my-1 ms-1" style="color: #5482d5">تفاصيل الدروس بالكورس</small>
                        <!--end::Description-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Wrapper-->
                    <!--begin::Button-->
{{--                    <a href="{{route('admin.courses.create')}}" class="btn btn-sm btn-success"--}}
{{--                       data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id=""--}}
{{--                    ><i class="fa fa-plus"></i>--}}
{{--                        أضف--}}
{{--                    </a>--}}
{{--                    <a  class="btn btn-sm btn-danger m-1"--}}
{{--                           data-bs-toggle="modal" data-bs-target="#dynamic" id="bulk_delete_btn">--}}
{{--                        <i class="fa fa-trash"></i>--}}
{{--                        حذف متعدد--}}
{{--                    </a>--}}

                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->


        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->

                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                                 role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::General options-->
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>بيانات الكورس</h2>
                                            </div>
                                        </div>
                                        <br>
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            إسم الكورس:
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        {{$course->title_ar}}
                                                    </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            المدرس :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium;"
                                                          class="badge badge-secondary col-md-12">
                                                        <a href="{{route('admin.instructors.edit',[$course->teacher->id])}}" target="_blank">
                                                            {{$course->teacher->name}}
                                                        </a>

                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            التخصص :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium;"
                                                          class="badge badge-secondary col-md-12">
                                                        <a href="{{route('admin.categories.edit',[$course->category->id])}}" target="_blank">
                                                            {{$course->category->title_ar}}
                                                        </a>

                                                    </span>
                                                    </div>
                                                </div>


                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            النقاط :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->points)
                                                            {{$course->points}}
                                                        @else
                                                            0
                                                        @endif
                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            المدة :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->course_time)
                                                            <b class="badge badge-dark">{{$course->course_time}} / ساعة </b>
                                                        @else
                                                            <b class="badge badge-dark"> أقل من ساعة</b>
                                                        @endif
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            السعر قبل :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->price_before)
                                                            {{$course->price_before}} $
                                                        @else
                                                            -
                                                        @endif
                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            السعر بعد :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->price_after)
                                                            {{$course->price_after}} $
                                                        @else
                                                            -
                                                        @endif
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                             التقييم :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->rate)
                                                            {{$course->rate}}
                                                        @else
                                                            -
                                                        @endif
                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            تاريخ التسجبل :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->created_at)
                                                            {{$course->created_at}}
                                                        @else
                                                            -
                                                        @endif
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                             المدن المتوفر بها الكورس :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-10">
                                                        @foreach($course->courseCities as $city)
                                                            <span style="font-size: medium"
                                                                  class="badge badge-secondary m-1 ">
                                                                @if($city->city)
                                                                    {{$city->city->title_ar}}
                                                                @else
                                                                    -
                                                                @endif
                                                            </span>
                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                             أقسام الكورس :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-10">
                                                        @foreach($course->courseSections as $section)
                                                            <span style="font-size: medium"
                                                                  class="badge badge-secondary m-1 ">
                                                                @if($section)
                                                                    {{$section->title_ar}}
                                                                @else
                                                                    -
                                                                @endif
                                                            </span>
                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                            <!--end::Input group-->


                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::General options-->

                                </div>
                            </div>
                            <!--end::Tab pane-->
                        </div>

                    </div>

                    <hr>
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <h3>
                            دروس القسم بالكورس

                            <span class="badge badge-info">
                                {{$section->title_ar}}
                                &nbsp; - &nbsp;
                                {{$course->title_ar}}
                            </span>
                        </h3>

                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3 checkboxes">
                                        <input class="form-check-input group-checkable" data-set="#kt_ecommerce_products_table .checkboxes" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table  .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class=" min-w-10px">#</th>
                                <th class=" min-w-10px">القسم التابع له</th>
                                <th class=" min-w-10px">العنوان (عربي)</th>
                                <th class=" min-w-10px">السعر (قبل)</th>
                                <th class=" min-w-100px">العمليات</th>

                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">

                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->


    <div id="dynamic" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">تأكيد</h4>
                </div>
                <div class="modal-body">
                    <h5> هل أنت متأكد أنك تريد الحذف؟ </h5>
                    <form id="delete_multi_form" method="post" action="{{route('admin.courses.deleteMulti')}}">
                        @csrf
                        <input type="hidden" name="ids" id="ids">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" data-dismiss="modal" class="btn btn-danger delete_multi_btn">حذف</button>
{{--                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">إلغاء</button>--}}
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
<script src="{{ asset('admin/dist/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>


    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script>
        $(document).ready(function () {

            $("#kt_ecommerce_products_table").DataTable({
                "dom": "<'card-header border-0 p-0 pt-6'<'card-title' <'d-flex align-items-center position-relative my-1'f> r> <'card-toolbar' <'d-flex justify-content-end add_button'B> r>>  <'row'l r> <''t><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
                processing: true,
                bLengthChange: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                aaSorting: [],
                lengthMenu: [[10, 25, 50, 100, 250, -1], [10, 25, 50, 100, 250, "الكل"]],
                "language": {
                    search: '<i class="fa fa-eye" aria-hidden="true"></i>',
                    searchPlaceholder: 'بحث سريع',
                    "url": "{{ url('admin/assets/ar.json') }}"
                },
                buttons: [
                    {
                        extend: 'colvis',
                        text: 'أظهر العمود',
                        title: '',
                        className: 'btn btn-primary me-3',
                        customize: function (win) {
                            $(win.document)
                                .css('direction', 'rtl');
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-primary me-3',
                         titleAttr: 'طباعة',
                        text: '<i class="bi bi-printer-fill "></i>طباعة',
                        customize: function (win) {
                            $(win.document.body)
                                .css('direction', 'rtl').prepend(
                                ' <table> ' +
                                '                        <tbody> ' +
                                '                                <tr>' +
                                '                                    <td style="text-align: center">  <p style="padding-right:150px">Learn-Tic</p></td>' +
                                '                                    <td style="text-align: right"> <img src="{{asset('default.png')}}" width="150px" height="150px" /> </td>' +
                                '                                    <td style="text-align: right"><p>عنوان التقرير : الكورسات</p>' +
                                '                                                                  <p>تاريخ التقرير : {{ Carbon\Carbon::now()->translatedFormat('l Y/m/d') }}</p>' +
                                '                                                                  <p>وقت التقرير : {{ Carbon\Carbon::now()->translatedFormat('h:i a') }}</p></td>' +
                                '                                </tr> ' +
                                '                        </tbody>' +
                                '                    </table>'
                            );
                        },
                        exportOptions: {
                            columns: [0, ':visible'],

                            stripHtml: false
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-primary me-3',
                         titleAttr: 'تصدير لأكسيل',
                        text: '<i class="bi bi-file-earmark-spreadsheet-fill "></i>تصدير لأكسيل',
                        title: '',
                        customize: function (win) {
                            $(win.document)
                                .css('direction', 'rtl');
                        },
                        exportOptions: {
                            columns: [0, ':visible']
                        }
                    },


                ],
                ajax: '{{ route('admin.courses.courseLessons.datatable',[$section->id]) }}',
                "columns": [
                    {"data": 'select', "searchable": false, "orderable": false},
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', "searchable": false, "orderable": false},
                    {"data": "section", "searchable": true, "orderable": false},
                    {"data": "title_ar", "searchable": true, "orderable": false},
                    {"data": "title_en", "searchable": true, "orderable": false},
                    {"data": 'actions', name: 'actions', orderable: false, searchable: false}
                ]
            });
        });
    </script>

    <script>

        $("#kt_ecommerce_products_table").find('.group-checkable').change(function () {
            var set = jQuery(this).attr("data-set");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).prop("checked", true);
                    $(this).parents('tr').addClass("active");
                } else {
                    $(this).prop("checked", false);
                    $(this).parents('tr').removeClass("active");
                }
            });
        });

        $("#kt_ecommerce_products_table").on('change', 'tbody tr .checkboxes', function () {
            $(this).parents('tr').toggleClass("active");
        });
    </script>

    {{-- Delete --}}
    <script>
        $(document).on("click", ".delete", function () {
            var row_id = $(this).data('id');
            $(".modal-body #row_id").val(row_id);
        });

        $('.delete_btn').on('click',function () {
            $('#delete_form').submit();
        })
    </script>

{{--     Delete Multi--}}

    <script>
        var $bulkDeleteBtn = $('#bulk_delete_btn');
        $bulkdeleteinput = $('#ids');

        $bulkDeleteBtn.click(function (e) {
            var $checkedBoxes = $('#kt_ecommerce_products_table input[type=checkbox]:checked').not('.select_all');
            var count = $checkedBoxes.length;
            if (count) {
                var myids = [];
                $bulkdeleteinput.val('');
                $.each($checkedBoxes, function () {
                    var value = $(this).val();
                    if (value !== 'on'){
                        myids.push(value);
                    }
                });
                // Set input value
                $bulkdeleteinput.val(myids);
                $('#dynamic').modal('show');
            } else {
                // No row selected
                toastr.warning('Choose At Least One');
            }
        });

        $('.delete_multi_btn').on('click',function () {
            $('#delete_multi_form').submit();
        })
    </script>

    <script>
        $(document).on("click", ".delete", function () {
            var id = $(this).data('id');
            var btn = $(this);
            Swal.fire({
                title: "تحذير.هل انت متأكد؟!",
                text: "",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f64e60",
                confirmButtonText: "نعم",
                cancelButtonText: "لا",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then(function (result) {
                if (result.value) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '{{route('admin.courses.delete')}}',
                        type: "post",
                        data: {'row_id':  id, _token: CSRF_TOKEN},
                        dataType: "JSON",
                        success: function (data) {
                            if (data.message == "Success") {
                                btn.parents("tr").remove();
                                Swal.fire("نجاح", "تم الحذف بنجاح", "success");
                                // location.reload();
                            } else {
                                Swal.fire("نأسف", "حدث خطأ ما اثناء الحذف", "error");
                            }
                        },
                        fail: function (xhrerrorThrown) {
                            Swal.fire("نأسف", "حدث خطأ ما اثناء الحذف", "error");
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    Swal.fire("ألغاء", "تم الالغاء", "error");
                }
            });
        });

    </script>

@endsection
