<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
   
    @include('front.includs.head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @stack('css')
</head>
<body class="th-8 homepage-4 hp-6 hd-white">
<div id="wrapper" style="overflow: hidden !important">
    <a target="_blank" href="https://api.whatsapp.com/send?phone=+905342796666">
    <div class="wat_sapp wat_sapp1">
{{--
            <img class="social_img" src="{{url('image/Whatsapp-icon-vector-PNG.png')}}" alt="moveHome">
--}}
        <div class="whatsapp_all_page">
            <div class="bg_class"></div>
            <div class="col_1">
                <a target="_blank" class="a2" rel="noopener"
                   href="whatsapp://send?phone=+905342796666">{{__("team.ehsan")}}</a>
                <a target="_blank" rel="noopener"
                   href="whatsapp://send?phone=+905398209180">
                    <img style="width: 35px;" class="social_img" src="{{url('image//whatss.png')}}" alt="moveHome"></a>

            </div>
                {{--<div class="col_1">

                    <a target="_blank" class="a1" rel="noopener"
                       href="whatsapp://send?phone=+905398209180">{{__("team.beniamin")}}</a>
                    <a target="_blank" rel="noopener"
                       href="whatsapp://send?phone=+905398209180">
                        <img style="width: 35px;" class="social_img" src="{{url('image//whatss.png')}}" alt="moveHome"></a>

                </div>--}}

        </div>
    </div>
    </a>
@include('front.includs.menu')
@yield('body')
<!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            {{--            <div class="status-mes" style="  background-image: url({{url('assets/front/preloader.gif')}});"></div>--}}
            <div class="status-mes" style="background-image: url({{asset('assets/front/giff.gif')}});"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
    @include('front.includs.footer')
</div>
@include('front.includs.script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@stack('scripts')
</body>
</html>
