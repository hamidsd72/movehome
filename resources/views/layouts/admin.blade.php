<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>


    <!-- Title -->
    <title> movehome ( پنل مدیریت)</title>
    <meta name="base_url" content="{{url('')}}">
    @include('layouts.style.styles')
    <link rel="icon" type="image/x-icon" href="{{asset('assets/front/logo3.jpeg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/logo3.jpeg')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/selectize/css.css')}}">
    @if(isset($tbl))
        @include('layouts.style.tbl')
    @endif
    @if(isset($file_upload))
        <link href="{{URL::asset('assets/plugins/fileupload/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    @endif
    @if(isset($date_picker))
        <link href="{{URL::asset('assets/plugins/date-picker/persian-datepicker.css')}}" rel="stylesheet"/>
    @endif
    @if(isset($progress))
        <link href="{{URL::asset('assets/plugins/progress/normalize.css')}}" rel="stylesheet"/>
        <link href="{{URL::asset('assets/plugins/progress/asPieProgress.css')}}" rel="stylesheet"/>
    @endif
<!-- INTERNAL Quill css -->
    <link href="{{URL::asset('assets/plugins/quill/quill.snow-rtl.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/quill/quill.bubble-rtl.css')}}" rel="stylesheet">

    <!-- INTERNAL WYSIWYG Editor css -->
    {{--    <link href="{{URL::asset('assets/plugins/wysiwyag/richtext-rtl.css')}}" rel="stylesheet" />--}}


    {{--    <script type="text/javascript" src="{{URL::asset('js/bootstrap-select.min.js') }}"></script>--}}
    {{--    <script type="text/javascript" src="{{ URL::asset('js/bootstrap-select-fa_IR.min.js') }}"></script>--}}
    {{--    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-select.min.css') }}"/>--}}

    {{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />--}}
    {{--    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"></head>--}}
</head>
<body class="app sidebar-mini" id="index1">

<!---Global-loader-->
<div id="global-loader">
    <img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader">
</div>
<div id="global-loader-form" style="display: none">
    <img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader">
    <p class="text-center">در حال بارگذاری اطلاعات ...</p>
</div>
<div class="page">
    <div class="page-main">
        @if(Auth::check())
            @include('layouts.menu.hr-sidebar')
        @endif

        <div class="app-content main-content">
            <div class="side-app">
                @if(Auth::check())
                    @include('layouts.header.app-header')
                @endif
                @yield('content')
                @if(isset($url_back))
                    <a href="{{$url_back}}" class="btn btn-danger back_btn_all ml-1"
                       onclick="return confirm('برای بازگشت مطمئن هستید؟')" data-toggle="tooltip"
                       data-placement="top" title="بازگشت"><span class="feather feather-chevrons-right"></span> </a>
                @endif
            </div>
        </div><!-- end app-content-->
    </div>

    @include('layouts.footer.footer')


</div>

@include('layouts.script.scripts')
<script type="text/javascript" src="{{URL::asset('assets/plugins/selectize/js.js')}}"></script>
@if(isset($tbl))
    @include('layouts.script.tbl')
@endif
@if(isset($req))
    @include('layouts.script.req')
@endif
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Custom js-->
@if(isset($req))
    @include('layouts.script.req')
@endif
@if(isset($date_picker))
    @include('layouts.script.date_picker')
@endif
@if(isset($price_k))
    <script src="https://cdn.jsdelivr.net/gh/mahmoud-eskandari/NumToPersian/dist/num2persian-min.js"></script>
@endif
@if(isset($file_upload))
    @include('layouts.script.file_upload')
@endif
@if(isset($progress))
    <script src="{{URL::asset('assets/plugins/progress/jquery-asPieProgress.js')}}"></script>
    <script>
        jQuery(function ($) {
            $('.pie_progress').asPieProgress({
                namespace: 'pie_progress'
            });
        })
        $(document).ready(function () {
            $('.pie_progress').asPieProgress('start');
        })
    </script>
@endif
{{--<!-- INTERNAL WYSIWYG Editor js -->--}}
{{--<script src="{{URL::asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>--}}
{{--<script src="{{URL::asset('assets/js/form-editor.js')}}"></script>--}}

<!-- INTERNAL quill js -->
<script src="{{URL::asset('assets/plugins/quill/quill.min.js')}}"></script>
<script src="{{URL::asset('assets/js/form-editor2.js')}}"></script>
<script src="{{URL::asset('assets/js/custom.js')}}"></script>
<script>
    $("#key_word").selectize({
        delimiter: "-",
        plugins: {
            remove_button: {
                label: "×"
            }
        },
        persist: false,
        createOnBlur: true,
        create: true
    });
    $(".contact_multi").selectize({
        delimiter: ",",
        plugins: {
            remove_button: {
                label: "×"
            }
        },
        persist: false,
        createOnBlur: true,
        create: true,
        copyClassesToDropdown: false
    });
    @if(isset($req))
    $("#form_req").validate({
        submitHandler: function (form) {
            $('#global-loader-form').css('display', 'block');
            form.submit();
        }
    });
    @endif
    @if(session()->has('err_message'))
    $(document).ready(function () {
        Swal.fire({
            title: "ناموفق",
            text: "{{ session('err_message') }}",
            icon: "warning",
            timer: 6000,
            timerProgressBar: true,
        })
    });
    @endif
    @if(session()->has('flash_message'))
    $(document).ready(function () {
        Swal.fire({
            title: "موفق",
            text: "{{ session('flash_message') }}",
            icon: "success",
            timer: 6000,
            timerProgressBar: true,
        })
    })
    ;@endif
    @if (count($errors) > 0)
    $(document).ready(function () {
        Swal.fire({
            title: "ناموفق",
            icon: "warning",
            html:
                    @foreach ($errors->all() as $key => $error)
                        '<p class="text-right mt-2 ml-5" dir="rtl"> {{$key+1}} : ' +
                '{{ $error }}' +
                '</p>' +
                    @endforeach
                        '<p class="text-right mt-2 ml-5" dir="rtl">' +
                '</p>',
            timer: @if(count($errors)>3)parseInt('{{count($errors)}}') * 1500 @else 6000 @endif,
            timerProgressBar: true,
        })
    });
    @endif
</script>
@stack('in_tag_script')
@yield ('in_tag_script')

</body>
</html>
