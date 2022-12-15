<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <!-- Title -->
    <title>
        @if($titleSeo=='سانی گروپ')
        {{$titleSeo}}({{$title}})
        @else
        {{$titleSeo}}
        @endif
    </title>
    <link rel="shortcut icon" href="{{asset('assets/front/logo3.jpeg')}}" />
    <meta name="keywords" content="{{$keywordsSeo}} ,  @yield ('keywords')">
    @if(trim($__env->yieldContent('description')))
        <meta name="description" content="@yield('description')"/>
        <meta property="og:description" content="@yield('description')"/>
    @else
        <meta name="description" content="{{$descriptionSeo}}"/>
        <meta property="og:description" content="{{$descriptionSeo}}"/>
    @endif
    @if(trim($__env->yieldContent('title_seo')))
        <meta name="og:title" content="@yield('title_seo')"/>
    @else
        <meta name="og:title" content="{{$titleSeo}}"/>
    @endif
    <meta property="og:url" content="{{$urlPage}}">
    @if(trim($__env->yieldContent('image_meta')))
{{--        <meta property="og:image" content="@yield('image_meta')" />--}}
    @else
        <meta property="og:image" content="{{asset('assets/front/logo3.jpeg')}}" />
    @endif
    <meta property="og:locale" content="en_GB" />
    <meta property="og:locale:alternate" content="fr_FR" />
    <meta property="og:locale:alternate" content="es_ES" />
{{--    <meta name="robots" content="index, follow" />--}}
    <meta name="base_url" content="{{url('')}}">
    <!-- icon -->
    <link rel="icon" href="{{asset('assets/front/logo3.jpeg')}}" type="image/x-icon">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- fontawesome css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper css-->
    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!-- Fancybox css-->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <link href="{{URL::asset('assets/plugins/date-picker/persian-datepicker.css')}}" rel="stylesheet"/>
    <!-- custom css-->
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/css_rtl.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/responsive.css')}}">
    @if(session()->has('back_css'))
        <link rel="stylesheet" href="{{URL::asset('assets/front/css/template.css')}}">
    @endif
    @yield ('styles')
</head>

<body>
<div class="fixed_div_r">
    @if(session()->has('back_css'))
        <a href="{{url('template',2)}}" class="a_template_change">
            <i class="fas fa-circle"></i>
            تم سفید
        </a>
    @else
        <a href="{{url('template',1)}}" class="a_template_change">
            <i class="fas fa-circle"></i>
            تم مشکی
        </a>
    @endif
</div>

        {{--     HEADER      --}}
        <div class="header_top_1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6  d-none d-md-block">
                        <h6>آخرین اخبار <i class="fas fa-caret-left"></i></h6>
                        <div class="slider" id="slider"></div>
                    </div>
                    <div class="col-md-6 text-center-md text-left">
                            <span class="date_persian">
                                {{my_jdate(date('Y/m/d'),'l d F Y')}}
                            </span>
                            <span class="date_persian" id="show_time_1">

                            </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_top_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-9 position-relative d-none d-md-block">
                        @if($header_banner)
                            <a href="{{route('front.seen',['banner',$header_banner->id])}}">
                                <img src="{{url($header_banner->pic)}}" class="banner_header" alt=" ">
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-4 col-md-3 position-relative">
                        <a href="{{route('front.index')}}">
                            <img src="{{asset('assets/front/logo3.jpeg')}}" class="logo_top" alt=" ">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        {{--     MENU      --}}
        <nav class="menu_top navbar navbar-expand-lg navbar-dark bg-orginal">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{\Request::route()->getName()=='front.index'?'active':''}}">
                        <a class="nav-link" href="{{route('front.index')}}">صفحه اصلی</a>
                    </li>
                    @if(count($menu_category))
                        @foreach($menu_category as $menu_cat)
                            <li class="nav-item {{isset($id_cat_news) && $id_cat_news==$menu_cat->id?'active':''}}">
{{--                                @if(\Request::route()->getName()=='front.note.list')--}}
{{--                                    <a class="nav-link" href="{{route('front.note.list',[$menu_cat->id,$menu_cat->slug])}}">{{$menu_cat->title}}</a>--}}
{{--                                @elseif(\Request::route()->getName()=='front.report.list')--}}
{{--                                    <a class="nav-link" href="{{route('front.report.list',[$menu_cat->id,$menu_cat->slug])}}">{{$menu_cat->title}}</a>--}}
{{--                                @elseif(\Request::route()->getName()=='front.interview.list')--}}
{{--                                    <a class="nav-link" href="{{route('front.interview.list',[$menu_cat->id,$menu_cat->slug])}}">{{$menu_cat->title}}</a>--}}
{{--                                @elseif(\Request::route()->getName()=='front.news.list')--}}
{{--                                    <a class="nav-link" href="{{route('front.news.list',[$menu_cat->id,$menu_cat->slug])}}">{{$menu_cat->title}}</a>--}}
{{--                                @else--}}
                                    <a class="nav-link" href="{{route('front.all.list',[$menu_cat->id,$menu_cat->slug])}}">{{$menu_cat->title}}</a>
{{--                                @endif--}}
                            </li>
                        @endforeach
                    @endif
                </ul>
                <form action="{{route('front.search')}}" method="get" class="form-inline form_search my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="جستجو..." aria-label="Search" required oninvalid="this.setCustomValidity('دنبال چه میگردید؟؟؟')" oninput="setCustomValidity('')">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </nav>
        @yield ('body')
        {{--     Footer      --}}
        <footer class="footer_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 about_us">

                        <ul class="footer_menu">
                            <li>
                                <a href="{{route('front.about.us')}}"><i class="fas fa-angle-left"></i> درباره ما</a>
                            </li>
                            <li>
                                <a href="{{route('front.contact.us')}}"><i class="fas fa-angle-left"></i> تماس با ما</a>
                            </li>
                        </ul>
                        <div class="col-12">
                            @if($social->telegram || $social->instagram || $social->facebook || $social->twitter || $social->whatsapp)
                                <hr/>
                                <h1>هنر آفرین در شبکه های اجتماعی</h1>
                                <ul class="ul_footer">
                                    @if($social->telegram)
                                        <li>
                                            <a href="{{$social->telegram}}" target="_blank" rel="noreferrer"
                                               aria-label="telegram" data-toggle="tooltip"
                                               data-placement="top" title="تلگرام">
                                            <span class="icon">
                                              <i class="fab fa-telegram-plane"></i>
                                            </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if($social->instagram)
                                        <li>
                                            <a href="{{$social->instagram}}" target="_blank" rel="noreferrer"
                                               aria-label="instagram" data-toggle="tooltip"
                                               data-placement="top" title="اینستاگرام">
                                            <span class="icon">
                                                <i class="fab fa-instagram"></i>
                                            </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if($social->whatsapp_group)
                                        <li>
                                            <a href="{{$social->whatsapp_group}}" target="_blank" rel="noreferrer"
                                               aria-label="whatsapp" data-toggle="tooltip"
                                               data-placement="top" title="برای پیوستن به گروه واتساپی کلیک کنید">
                                            <span class="icon">
                                                <i class="fab fa-whatsapp"></i>
                                            </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if($social->facebook)
                                        <li>
                                            <a href="{{$social->facebook}}" target="_blank" rel="noreferrer"
                                               aria-label="facebook" data-toggle="tooltip"
                                               data-placement="top" title="فیسبوک">
                                            <span class="icon">
                                                <i class="fab fa-facebook-f"></i>
                                            </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if($social->twitter)
                                        <li>
                                            <a href="{{$social->twitter}}" target="_blank" rel="noreferrer"
                                               aria-label="twitter" data-toggle="tooltip"
                                               data-placement="top" title="توئیتر">
                                            <span class="icon">
                                                <i class="fab fa-twitter"></i>
                                            </span>
                                            </a>
                                        </li>
                                    @endif
                                    @if($social->whatsapp && count($social->expload_function($social->whatsapp)))
                                        @foreach($social->expload_function($social->whatsapp) as $whatsapp)
                                            <li>
                                                <a href="https://api.whatsapp.com/send?phone=+{{str_replace(' ','',$whatsapp)}}"
                                                   target="_blank" rel="noreferrer" aria-label="whatsapp" data-toggle="tooltip"
                                                   data-placement="top" title="واتساپ">
                                                <span class="icon">
                                                   <i class="fab fa-whatsapp"></i>
                                                </span>
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            @endif
                        </div>
                        @if($links_footer->links)
                        <div class="col-12">
                            <hr/>
                            <h1>پیوند ها</h1>
                            <ul class="footer_menu pr-3">
                                @foreach($links_footer->expload_function($links_footer->links) as $link)
                                <li>
                                    <a href="{{str_replace(' ','',explode('-',$link)[0])}}" target="_blank" rel="noopener"><i class="fas fa-angle-left"></i> {{explode('-',$link)[1]}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <div class="col-12 {{'bg-000'/*session()->has('back_css')?'bg-000':'bg-white'*/}} py-3">
                            <div class="col-12 p-0 list_news_one border-all-no-border position-relative">
                                <h5 style="color: #fff;" class="title_border">
                                    تقویم روز
                                </h5>
                                <div class="col-md-12 px-0 mb-3 card_page">
                                    @if($calender_last)
                                        @include('front.includes.footer_card',['item'=>$calender_last,'link'=>route('front.news.show',[$calender_last->id,$calender_last->slug])])
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 p-0 list_news_one border-all-no-border position-relative">
                                <h5 style="color: #fff;" class="title_border">
                                    چهره هفته
                                </h5>
                                <div class="col-md-12 px-0 mb-3 card_page">
                                    @if($week_face_last)
                                        @include('front.includes.footer_card',['item'=>$week_face_last,'link'=>route('front.news.show',[$week_face_last->id,$week_face_last->slug])])
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 p-0 list_news_one border-all-no-border position-relative">
                                <h5 style="color: #fff;" class="title_border">
                                    کتاب هفته
                                </h5>
                                <div class="col-md-12 px-0 card_page">
                                    @if($week_book_last)
                                        @include('front.includes.footer_card',['item'=>$week_book_last,'link'=>route('front.news.show',[$week_book_last->id,$week_book_last->slug])])
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-12 {{'bg-000'/*session()->has('back_css')?'bg-000':'bg-white'*/}} py-3">
                            <div class="col-12 p-0 list_news_one border-all-no-border position-relative">
                                <h5 class="title_border text-white">
                                    <img src="{{url('assets/front/f_memory.png')}}" class="footer_icon" alt="آرشیو خاطرات">
                                    آرشیو خاطرات
                                </h5>
                                <div class="col-md-12 px-0 mb-3 card_page">
                                    @if($memory_footer)
                                        @include('front.includes.memory_footer',['item'=>$memory_footer])
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 p-0 list_news_one border-all-no-border position-relative">
                                <h5 class="title_border text-white">
                                    <img src="{{url('assets/front/f_gramaphone.png')}}" class="footer_icon" alt="گرامافون">
                                    گرامافون
                                </h5>
                                <div class="col-md-12 px-0 mb-3 card_page">
                                    @if($sound_g)
                                        @include('front.includes.sound_footer',['item'=>$sound_g])
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 p-0 list_news_one border-all-no-border position-relative">
                                <h5 class="title_border text-white">
                                    <img src="{{url('assets/front/f_podcast.png')}}" class="footer_icon" alt="پادکست">
                                    پادکست
                                </h5>
                                <div class="col-md-12 px-0 card_page">
                                    @if($sound_p)
                                        @include('front.includes.sound_footer',['item'=>$sound_p])
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="footer_bottom_text_copy">بازنشر مطالب مجله خبری هنرآفرین با ذکر منبع بلامانع است</p>
        </footer>
        <footer class="footer_2">
            <p>Copyright © 2021. Created by <a href="https://adib-it.com/" target="_blank" rel="noreferrer">AdibGroup</a></p>
        </footer>
<!-- Jquery js-->
<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<!-- Bootstrap js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<!-- fontawesome js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Swiper js-->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- Fancybox js-->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <!-- typewriter js-->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <!-- sweetalert2 js-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        @include('layouts.script.date_picker')
<!-- custom js-->
<script src="{{URL::asset('assets/front/js/custom.js')}}"></script>
<script>
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

    var app = document.getElementById('slider');

    var typewriter = new Typewriter(app, {
        loop: true
    });

    typewriter
        @if(count($header_last_news))
            @foreach($header_last_news as $header_last_new)
                .typeString('{{$header_last_new->title}}')
                .pauseFor(2500)
                .deleteAll()
            @endforeach
        @endif
        // .deleteChars(7)
        // .typeString('<strong>altered!</strong>')
        // .pauseFor(2500)
        .start();
</script>
@yield ('scripts')
</body>
</html>
