{{--{{dd($projects)}}--}}
{{--{{dd($city)}}--}}
{{--{{dd(App::city())}}--}}
@extends('front.layouts.master')
@section('body')

    <style>
.tp-loader{
    display: none !important;
}
#share-circle,
        #share-button {
            position: relative;
            display: block;
            width: 52px;
            height: 52px;
            border-radius: 50%;
        }

        #share-button {
            background: #e74c3c;
            color: #FFF;
            cursor: pointer;
            box-shadow: 0 2px 4px #A4A4A4;
        }

        #share-button .icon-share,
        #share-button .icon-x {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 52px;
            height: 52px;
            line-height: 52px;
            font-size: 28px;
            text-align: center;
        }

        #share-button .icon-share {
            transform: scale(1);
            opacity: 1;
        }

        #share-button .icon-x {
            transform: scale(0) rotate(0);
            opacity: 0;
        }

        .share {
            display: block;
            position: absolute;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            color: #FFF;
            line-height: 28px;
            font-size: 14px;
            text-align: center;
            transition: 0.4s ease;
            cursor: pointer;
        }

        .share.facebook {
            background: #3B5998;
            top: 14px;
            left: 14px;
            transition-delay: 0.08s;
        }

        .share.facebook.opened {
            background: #3B5998;
            top: 0;
            left: -44px;
        }

        .share.twitter {
            background: #3B5998;
            top: 14px;
            left: 14px;
            transition-delay: 0.16s;
        }

        .share.twitter.opened {
            background: #55ACEE;
            top: -32px;
            left: -24px;
        }

        .share.googleplus {
            background: #3B5998;
            top: 14px;
            left: 14px;
            transition-delay: 0.24s;
        }

        .share.googleplus.opened {
            background: #DD4B39;
            top: -44px;
            left: 14px;
        }

        .share.linkedin {
            background: #3B5998;
            top: 14px;
            right: 14px;
            transition-delay: 0.32s;
        }

        .share.linkedin.opened {
            background: #006FA6;
            top: -32px;
            right: -24px;
        }

        .share.tumblr {
            background: #3B5998;
            top: 14px;
            right: 14px;
            transition-delay: 0.4s;
        }

        .share.tumblr.opened {
            background: #36465D;
            top: 0;
            right: -44px;
        }

        .share.nodelay {
            transition: 0.6s ease;
            transition-delay: 0s;
        }

        .button-expand {
            animation-name: buttonanimation;
            animation-duration: 0.8s;
            animation-timing-function: ease;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-fill-mode: forwards;
        }

        .button-close {
            animation-name: buttonanimationx;
            animation-duration: 0.8s;
            animation-timing-function: ease;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-fill-mode: forwards;
        }

        .share-expand {
            animation-name: share-expand-animation;
            animation-duration: 0.8s;
            animation-timing-function: ease;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-fill-mode: forwards;
        }

        #share-button .icon-share.closed {
            transform: scale(0);
            opacity: 0;
        }

        .x-expand {
            animation-name: x-expand-animation;
            animation-delay: 0.6s;
            animation-duration: 0.8s;
            animation-timing-function: ease;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-fill-mode: forwards;
        }

        #share-button .icon-x.expanded {
            transform: scale(1) rotate(675deg);
            opacity: 1;
        }

        .share-close {
            animation-name: share-close-animation;
            animation-delay: 0.3s;
            animation-duration: 0.8s;
            animation-timing-function: ease;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-fill-mode: forwards;
        }

        .x-close {
            animation-name: x-close-animation;
            animation-duration: 0.4s;
            animation-timing-function: ease;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-fill-mode: forwards;
        }

        @keyframes buttonanimation {
            0% {transform: scale(1);}
            50% {background: #c0392b;transform: scale(0.8);}
            100% {background: #e74c3c;transform: scale(1);box-shadow: 0 0 0 transparent;}
        }

        @keyframes buttonanimationx {
            0% {background: #e74c3c;transform: scale(1);box-shadow: 0 0 0 transparent;}
            50% {background: #c0392b;transform: scale(0.8);}
            100% {transform: scale(1);box-shadow: 0 2px 4px #AAA;}
        }

        @keyframes share-expand-animation {
            0% {transform: scale(1);opacity: 1;}
            100% {transform: scale(0);opacity: 0;}
        }

        @keyframes x-expand-animation {
            0% {transform: scale(0) rotate(0);opacity: 0;}
            100% {transform: scale(1) rotate(675deg);opacity: 1;}
        }

        @keyframes share-close-animation {
            0% {transform: scale(0);opacity: 0;}
            100% {transform: scale(1);opacity: 1;}
        }

        @keyframes x-close-animation {
            0% {transform: scale(1) rotate(675deg);opacity: 1;}
            100% {transform: scale(0) rotate(630deg);opacity: 0;}
        }
        /*------------------------------------------------*/
        .spinner5 {
            background-image: url("{{asset('assets/front/preloader.gif')}}");
        }

        /*.tp-parallax-wrap {*/
        /*    !*top:300px !important*!*/
        /*}*/

        /*.tp-mask-wrap {*/
        /*    top: -100px !important;*/
        /*}*/
        /*.tp-banner, .tp-banner-container {*/
        /*    height: 100vh !important;*/
        /*}*/

        /*.tp-kbimg {*/
        /*    object-fit: cover !important;*/
        /*    object-position: center !important;*/
        /*    height: 130vh ;*/
        /*    !*filter: brightness(0.5);*!*/
        /*}*/

@media (max-width: 520px){
    .tgju-widget-item:nth-child(2) {
        display: flex !important;
    }
    .tgju-widget-item:nth-child(3) {
        display: flex !important;
    }
    .tgju-widget-item:nth-child(4) {
        display: flex !important;
    }
    .tgju-widget-item:nth-child(5) {
        display: flex !important;
    }
}
.tgju-copyright-fix {
    display: none !important;
}
    </style>
    <!-- Main Slider -->
    <!-- Slider -->
    <div class="main-slider style-two default-banner slide2" style="height:100vh;position: relative">
        <div class="text-slider " id="typing">
            {{__('project.subtitle')}}
           {{-- <h1 hidden>خرید خانه در استانبول</h1>--}}
        </div>

        <div class="wrapper max_width_100">
            <div class="search_box">
                {{--<div class="dropdown">
                    <div class="default_option">All</div>
                    <ul>
                        <li>All</li>
                        <li>Recent</li>
                        <li>Popular</li>
                    </ul>
                </div>--}}
                <div class="opacity"></div>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('menu.location')}}
                    </button>

                    <div class="dropdown-menu" >
                        @foreach($locales as $local)
                            <a class="dropdown-item" href="{{url('projects/city/'.$local->id)}}">{{$local->name}}</a>
                        @endforeach

                    </div>
                </div>

                <div class="search_field">
                    <form action="{{url('projects')}}" method="get">
                        <input type="submit" class="input"  value="{{__('menu.search')}}">
                    </form>

                    {{--<i class="fas fa-search"></i>--}}
                </div>
            </div>
        </div>

{{--        <div class="container">

            <form  class="flex-form">

                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        آپارتمان
                    </button>

                    <div class="dropdown-menu" style="height: auto;max-height: 200px;overflow-x: hidden;">
                        <a class="dropdown-item" href="#">آپارتمان</a>
                        <a class="dropdown-item" href="#">ویلایی</a>

                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" style="width: 200px;" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('menu.location')}}
                    </button>

                    <div class="dropdown-menu" style="height: auto;max-height: 200px;overflow-x: hidden;">
                        @foreach($locales as $local)
                            <a class="dropdown-item" href="{{url('projects/city/'.$local->id)}}">{{$local->name}}</a>
                        @endforeach

                    </div>
                </div>

                <input type="submit" value="جستجو">
            </form>
        </div>--}}


        <div class="tp-banner-container">
            <div class="tp-banner">

                <div id="rev_slider_328_1" class="rev_slider fullwidthabanner" style="display:none;"
                     data-version="5.4.8">
                    <ul>
                        @foreach($sliders as $row)

                            <li data-index="rs-{{$loop->index}}00" data-transition="fade" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                                data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                data-param8="" data-param9=""
                                data-param10="{&quot;revslider-weather-addon&quot; : { &quot;type&quot; : &quot;&quot; ,&quot;name&quot; : &quot;&quot; ,&quot;woeid&quot; : &quot;&quot; ,&quot;unit&quot; : &quot;&quot; }}"
                                data-description="">
                                <!-- MAIN IMAGE -->
                                <img style="" src="{{asset($row->photo->path)}}" alt="slider" title=""
                                     data-bgposition="right center" data-kenburns="on" data-duration="20000"
                                     data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="110"
                                     data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0"
                                     data-offsetstart="0 0" data-offsetend="300 0" data-bgparallax="8"
                                     class="rev-slidebg" data-no-retina>
                            </li>
                    @endforeach
                    <!-- SLIDE  -->
                    </ul>
                    <div style="" class="tp-static-layers">

                        <!-- LAYER NR. 78 -->
{{--                        <div class="tp-caption have tp-shape tp-shapewrapper tp-resizeme re-shadow2 re-overflow tp-static-layer"--}}
{{--                             id="slider-328-layer-31" data-x="['right','right','right','right']"--}}
{{--                             data-hoffset="['90','90','100','100']" data-y="['bottom','bottom','bottom','bottom']"--}}
{{--                             data-voffset="['100','100','100','100']" data-width="130" data-height="130"--}}
{{--                             data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="shape"--}}
{{--                             data-basealign="slide" data-responsive_offset="on" data-startslide="0" data-endslide="2"--}}
{{--                             data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'--}}
{{--                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"--}}
{{--                             style="z-index: 14;background-color:rgb(255,255,255);border-color:rgb(255,255,255);border-style:solid;border-width:5px 5px 5px 5px;border-radius:100px;">--}}
{{--                            <div class="tp-element-background"--}}
{{--                                 style="background-position:0 0!important; ;background: url('https://www.bigfreight.com/media/20190828_081110.jpg') no-repeat center center; background-size: cover; opacity: 1; border-radius:100px;">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- LAYER NR. 80 -->
{{--                        <div class="tp-caption have   tp-resizeme re-shadow2 tp-static-layer" id="slider-328-layer-33"--}}
{{--                             data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"--}}
{{--                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"--}}
{{--                             data-width="250" data-height="none" data-whitespace="nowrap"--}}
{{--                             data-visibility="['on','on','on','off']" data-type="text" data-basealign="slide"--}}
{{--                             data-responsive_offset="on" data-startslide="0" data-endslide="2"--}}
{{--                             data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'--}}
{{--                             data-textAlign="['center','center','center','center']" data-paddingtop="[10,10,10,10]"--}}
{{--                             data-paddingright="[20,20,20,20]" data-paddingbottom="[10,10,10,10]"--}}
{{--                             data-paddingleft="[20,20,20,20]"--}}
{{--                             style="z-index: 16; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 15px; line-height: 22px; font-weight: 400; color: #fff; letter-spacing: 0px;background-color:#2d2b2fa6;border-radius:5px 5px 5px 5px;">--}}
{{--                            <div class="rs-looped rs-slideloop" data-easing="Expo.easeInOut" data-speed="1" data-xs="0"--}}
{{--                                 data-xe="0" data-ys="-5" data-ye="5">--}}
{{--                                --}}{{--                                Have a Question?--}}
{{--                                {{__('menu.question')}}--}}
{{--                                <br/>--}}
{{--                                <div style="display: flex;justify-content: space-between;width: 100%;" class="my-2">--}}

{{--                                    <a class="tp-phonenum" style="font-size: 16px;color: darkcyan !important;" target="_blank"--}}
{{--                                       href="https://api.whatsapp.com/send?phone=+905398209180">بنیامین کریمی </a>--}}
{{--                                    <i class="fab fa-whatsapp  mx-2"></i>--}}
{{--                                    <a class="tp-phonenum" style="font-size: 16px;color: rgb(237, 77, 55) !important" target="_blank"--}}
{{--                                       href="https://api.whatsapp.com/send?phone=+905342796666">احسان کازرانی </a>--}}
{{--                                    <i class="fab fa-whatsapp  mx-2"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider END -->
    <!-- Main Slider -->
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PROPERTIES FOR SALE -->
    <section>
        <style>
            .tgju-widget-item:after
            {
                display: none;
            }
            .tgju-widget
            {
                background: #2b2d2f!important;
                border-right: unset!important;
                border-left: unset!important;
                border-top: unset!important;
                border-color: #626269!important;
            }
            .tgju-widget-item
            {
                background: #2b2d2f;
                border: 1px solid #626269;
                border-top: unset;
                border-bottom: unset;
            }
            .tgju-widget-item:hover
            {
                background: #0f0f10!important;
            }
            .tgju-widget-item .tgju-widget-title-text
            {
                color: #fff;
            }
            .tgju-widget-item .tgju-widget-change,
            .tgju-widget-item .tgju-widget-current-price
            {
                color: #dedede;
            }
            .tgju-widget-item.widget- .tgju-widget-current-price
            {
                color: #ffa200;
            }
            .tgju-widget-item.widget-low .tgju-widget-current-price,
            .tgju-widget-item.widget-low .tgju-widget-change
            {
                color: #ff0d00;
            }
            .tgju-widget-item.widget-high .tgju-widget-current-price,
            .tgju-widget-item.widget-high .tgju-widget-change
            {
                color: #1fb800;
            }
            .tgju-copyright
            {
                display: none!important;
            }
        </style>
        <tgju
                type="ticker"
                items="137203,137205,137207,137206,137225"
                columns="dot"
                token="webservice"
        ></tgju>
        <script src="https://api.accessban.com/v1/widget/v2" defer></script>
    </section>
    <section class="services-home bg-" style="background:#2b2d2f; padding: 0rem 0;">
        <div class="container">

{{--            <tgju--}}
{{--                type="ticker-tap"--}}
{{--                items="137203,137205,137207,137206,137225"--}}
{{--                columns="dot"--}}
{{--                speed="25"--}}
{{--                token="webservice"--}}
{{--            ></tgju>--}}

{{--            <div class="section-title">--}}
{{--                <h3>{{__('index.exchange_text')}}</h3>--}}
{{--                <a style="" class="btn btn-yellow btn-lg mb-4 mx-auto btn-exhange" href="{{route('front.exchange')}}">{{__('index.exchange')}}</a>--}}
{{--            </div>--}}
          {{--  <div class="sec-title">
                <h2 style="color: #fff !important;background: #2d2b2fa6;text-align: center;padding: 10px;border-radius: 5px;font-size: 1.3rem;
font-weight: 800;
line-height: 26px;
padding: 1rem !important;">{{__('index.exchange_text')}}</h2>
            </div>--}}
            <div class="row">


            </div>
        </div>
    </section>

{{--    <section class="popular-places bg-">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <a href="{{route('front.homade')}}"><h2><i class="fa fa-hand-o-right" style="font-size:36px"></i>{{__('index.Madeـbyـus')}} </h2></a>--}}
{{--            </div>--}}

{{--            <div class="sec-title">--}}
{{--                <h2 style="">{{__('index.Madeـbyـus2')}}</h2>--}}
{{--            </div>--}}
{{--            <div class="portfolio col-xl-12">--}}
{{--                <div class="slick-lancers slider1">--}}
{{--                    @foreach($articleProjects as $row)--}}

{{--                        <div class="agents-grid " data-aos="fade-up" data-aos-delay="200">--}}
{{--                            <div class="landscapes articleProjects">--}}
{{--                                <a style="display: block;position:absolute;opacity: 0;z-index: 22;height: 100%;width: 100%;"--}}
{{--                                   href="{{url('blog/' .$row->id)}}"></a>--}}

{{--                                <div class="project-single">--}}
{{--                                    <div class="homes-img">--}}
{{--                                        <div class="project-inner project-head">--}}
{{--                                            <!-- homes img -->--}}
{{--                                            <div class="homes">--}}

{{--                                                <div class="homes-price">--}}
{{--                                                    {{$row->title}}--}}
{{--                                                </div>--}}

{{--                                                <img style="height: 25vh;object-fit: cover;"--}}
{{--                                                     src="{{$row->photo ? url($row->photo) : url('assets/front/null_img.svg')}}"--}}
{{--                                                     alt="{{$row->trans('name')}}" class="img-responsive">--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- homes content -->--}}
{{--                                    <div class="homes-content">--}}

{{--                                        <div style="font-weight: 900 !important;border: 2px dashed #ed4d37; border-radius: 0 0 8px 8px" class="p-3">--}}

{{--                                            <p class="">--}}
{{--                                                {{$row->text_short}}--}}
{{--                                            </p>--}}


{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="recently portfolio bg-black home18">
        <div class="container">
            <div class="sec-title">

                <h2 style="color: #fff !important;">     {!!__('project.title')!!}</h2>

                {{--<p> {{__('project.subtitle')}}</p>--}}
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers slider2">
                    @foreach($projects as $row)

                        <div class="agents-grid " data-aos="fade-up" data-aos-delay="200">
                            <div class="landscapes" style="position:relative;">
                                <a style="display: block;position:absolute;opacity: 0;z-index: 22;height: 100%;width: 100%;"
                                   href="{{url('projects/' .$row->slug)}}"></a>

                                <div class="project-single">
                                    <div class="homes-img">
                                        <div class="project-inner project-head">
                                            <!-- homes img -->
                                            <div class="homes">
                                                <div class="homes-tag button alt featured">{{__('project.featured')}}</div>
                                                <div class="homes-tag button alt sale share-btn" style="padding: 0;z-index: 9999999999999999999;display: flex;justify-content: space-around;align-items: center">
                                                    <span class="fa fa-share-alt share-icon" style="color: #fff;margin: 0"></span>
                                                    <div style="width: 100%;" class="share-icon-hide">
                                                        <div style="display: flex;justify-content: space-evenly;width: 100%;">
                                                            <a href="https://telegram.me/share/url?url={{url('projects/' .$row->slug)}}"><span class="fa fa-telegram"></span></a>
                                                            <a href="https://twitter.com/intent/tweet?url={{url('projects/' .$row->slug)}}"> <span class="fa fa-twitter"></span></a>
                                                            <a href="https://www.facebook.com/sharer.php?u={{url('projects/' .$row->slug)}}"> <span class="fa fa-facebook"></span></a>
                                                                <a href="whatsapp://send?text={{url('projects/' .$row->slug)}}"> <span class="fa fa-whatsapp"></span></a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="homes-price">
                                                    <span> {{__('project.from_price')}}</span>/{{$row->from_price}}
                                                    $
                                                </div>

                                                <img style="height: 25vh;object-fit: cover;"
                                                     src="{{$row->pic ? url($row->pic) : url('assets/front/null_img.svg')}}"
                                                     alt="{{$row->trans('name')}}" class="img-responsive">
                                            </div>

                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">

                                        <div style="font-weight: 900 !important;border: 2px dashed #ed4d37; border-radius: 0 0 8px 8px" class="p-3">

                                            <h3 class="text-center"><a
                                                        href="{{url('projects/' .$row->slug)}}">{{$row->trans('name')}}</a>
                                            </h3>
                                            <p class="homes-address mb-2">
                                                <a href="{{url('projects/' .$row->slug)}}">
                                                    <i class="fa fa-map-marker " style="margin:0 !important;"></i><span
                                                            class="px-2"> {{$row->trans('address')}}</span>
                                                </a>
                                            </p>
                                           {{-- <p class="">
                                                {{$row->trans('brief')}}
                                            </p>--}}
                                            <p class="">
                                                <span>{{__('project.built_year')}} : {{$row->built_year}}</span>
                                            </p>
                                            <p class="">
                                                <span>{{__('project.city_')}}: {{$row->local->name}}
                                            </p>

                                            {{--                                                <ul class="homes-list clearfix">--}}
                                            {{--                                                    <li>--}}
                                            {{--                                                        <span></span>--}}
                                            {{--                                                    </li>--}}
                                            {{--                                                    <li>--}}
                                            {{--                                                        <span></span>--}}
                                            {{--                                                    </li>--}}

                                            {{--                                                </ul>--}}
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PROPERTIES FOR SALE -->

    <!-- START SECTION SERVICES -->
    <section class="services-home bg-">
        <div class="container">
            <div class="section-title">
                <h3> {{__('project.Property')}}</h3>
                <h2>{{__('project.Services')}}</h2>
            </div>
            <div class="row">
                @foreach($services as $index=>$service)
                    <div class="col-lg-4 col-md-12 m-top-5 m-bottom-40" data-aos="fade-up" data-aos-delay="200">
                        <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                            <div class="media">
                                <i class="bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5">
                                    <img class="logo" src="{{url('image/movehome sefid.png')}}" alt="{{$service->trans('title')}}">
                                </i>
                            </div>
                            <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                                @if($index == 2)
                                    <h1 style="font-size: 1.5rem;" class="m-bottom-15 text-bold-700">{{$service->trans('title')}}</h1>
                                @else
                                    <h2 style="font-size: 1.5rem;" class="m-bottom-15 text-bold-700">{{$service->trans('title')}}</h2>
                                @endif
                                <p>
                                    {{$service->trans('text_short')}}
                                </p>

                                    @if($index == 2)
                                        <a class="text-base text-base-dark-hover text-size-14"
                                           href="{{url('خرید-خانه-در-استانبول')}}">    {{__('project.more')}}
                                        </a>
                                    @else
                                        <a class="text-base text-base-dark-hover text-size-14"
                                           href="{{route('front.blog.show',[$service->id])}}">    {{__('project.more')}}
                                        </a>
                                    @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END SECTION SERVICES -->

    <!-- START SECTION PROPERTIES FOR RENT -->
    {{--    <section class="recently portfolio bg-white-2 home18">--}}
    {{--        <div class="container">--}}
    {{--            <div class="sec-title">--}}
    {{--                <h2>{!! __('project.Rent_title') !!}</h2>--}}
    {{--                <p>--}}
    {{--                    {{__('project.Rent_subtitle')}}--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--            <div class="portfolio col-xl-12">--}}
    {{--                <div class="slick-lancers">--}}
    {{--                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="200">--}}
    {{--                        <div class="landscapes">--}}
    {{--                            <div class="project-single">--}}
    {{--                                <div class="project-inner project-head">--}}
    {{--                                    <div class="homes">--}}
    {{--                                        <!-- homes img -->--}}
    {{--                                        <a href="single-property-1.html" class="homes-img">--}}
    {{--                                            <div class="homes-tag button alt featured">           {{__('project.featured')}}</div>--}}
    {{--                                            <div class="homes-tag button alt sale"> {{__('project.sale')}} </div>--}}
    {{--                                            <div class="homes-price">$3,000/mo</div>--}}
    {{--                                            <img src="images/feature-properties/fp-10.jpg" alt="home-1" class="img-responsive">--}}
    {{--                                        </a>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="button-effect">--}}
    {{--                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>--}}
    {{--                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>--}}
    {{--                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <!-- homes content -->--}}
    {{--                                <div class="homes-content">--}}
    {{--                                    <!-- homes address -->--}}
    {{--                                    <h3><a href="single-property-1.html">{!! __('project.Rent_title') !!} </a></h3>--}}
    {{--                                    <p class="homes-address mb-3">--}}
    {{--                                        <a href="single-property-1.html">--}}
    {{--                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>--}}
    {{--                                        </a>--}}
    {{--                                    </p>--}}
    {{--                                    <!-- homes List -->--}}
    {{--                                    <ul class="homes-list clearfix">--}}
    {{--                                        <li>--}}
    {{--                                            <span>6 {{__('project.Bedrooms')}} </span>--}}
    {{--                                        </li>--}}
    {{--                                        <li>--}}
    {{--                                            <span>3 {{__('project.Bathrooms')}} </span>--}}
    {{--                                        </li>--}}
    {{--                                        <li>--}}
    {{--                                            <span>720  {{__('project.sq_ft')}}</span>--}}
    {{--                                        </li>--}}
    {{--                                        <li>--}}
    {{--                                            <span>2  {{__('project.Garages')}}</span>--}}
    {{--                                        </li>--}}
    {{--                                    </ul>--}}
    {{--                                    <div class="footer">--}}
    {{--                                        <a href="agent-details.html">--}}
    {{--                                            <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2"> Lisa Jhonson--}}
    {{--                                        </a>--}}
    {{--                                        <span>--}}
    {{--                                              <i class="fa fa-calendar"></i> 2 months ago--}}
    {{--                                            </span>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- END SECTION PROPERTIES FOR RENT -->

    <!-- START SECTION POPULAR PLACES -->
    <section class="popular-places bg-black">
        <div class="container">
            <div class="section-title">
                <h3 style="color: #fff !important;">      {{__('project.Popular')}} </h3>
                <h2>{{__('project.Places')}} </h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-lg-4 col-md-6" style="    padding: 30px;    overflow: hidden;" data-aos="fade-right">
                    <!-- Image Box -->
                    <a href="{{route('front.projects.city',$TopCities[0]->city_id)}}" class="img-box ">


                          <img style="position: absolute;z-index: 1" src="{{url($TopCities[2]->pic)}}"
                               class="img-responsive img-place-1" alt="{{$TopCities[2]->name}}">

                        <img style="position: absolute;z-index: 2;" src="{{url($TopCities[1]->pic)}}"
                             class="img-responsive img-place-2" alt="{{$TopCities[1]->name}}">
                        <img style="position: absolute;z-index: 3" src="{{url($TopCities[0]->pic)}}"
                             class="img-responsive img-place-3" alt="{{$TopCities[0]->name}}">

                        <!-- Badge -->
                        {{--   <div class="listing-badges">
                               <span class="featured">{{__('project.featured')}}</span>
                           </div>--}}
                        <div class="img-box-content visible">
                            <h4>{{$TopCities[0]->name}}</h4>
                            {{--  <span>203 {{__('project.Properties')}}</span>--}}
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6" style="    padding: 30px;    overflow: hidden;" data-aos="fade-left">
                    <!-- Image Box -->
                    <a href="{{route('front.projects.city',$TopCities[1]->city_id)}}" class="img-box">
                        <img style="position: absolute;z-index: 1" src="{{url($TopCities[3]->pic)}}"
                             class="img-responsive img-place-1" alt="{{$TopCities[3]->name}}">
                        <img style="position: absolute;z-index: 2;" src="{{url($TopCities[2]->pic)}}"
                             class="img-responsive img-place-2" alt="{{$TopCities[2]->name}}">
                        <img style="position: absolute;z-index: 3" src="{{url($TopCities[1]->pic)}}"
                             class="img-responsive img-place-3" alt="{{$TopCities[1]->name}}">

                        <div class="img-box-content visible">
                            <h4>{{$TopCities[1]->name}}</h4>
                            {{--  <span>307 {{__('project.Properties')}}</span>--}}
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6" style="    padding: 30px;    overflow: hidden;" data-aos="fade-right">
                    <!-- Image Box -->
                    <a href="{{route('front.projects.city',$TopCities[2]->city_id)}}" class="img-box ">
                        <img style="position: absolute;z-index: 1" src="{{url($TopCities[2]->pic)}}"
                             class="img-responsive img-place-1" alt="{{$TopCities[2]->name}}">
                        <img style="position: absolute;z-index: 2;" src="{{url($TopCities[0]->pic)}}"
                             class="img-responsive img-place-2" alt="{{$TopCities[0]->name}}">
                        <img style="position: absolute;z-index: 3" src="{{url($TopCities[1]->pic)}}"
                             class="img-responsive img-place-3" alt="{{$TopCities[1]->name}}">

                        <div class="img-box-content visible">
                            <h4>{{$TopCities[2]->name}}</h4>
                            {{-- <span>409 {{__('project.Properties')}}</span>--}}
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" style="    padding: 30px;    overflow: hidden;" data-aos="fade-left">
                    <!-- Image Box -->
                    <a href="{{route('front.projects.city',$TopCities[3]->city_id)}}" class="img-box  x3">
                        <img style="position: absolute;z-index: 1" src="{{url($TopCities[2]->pic)}}"
                             class="img-responsive img-place-1" alt="{{$TopCities[2]->name}}">
                        <img style="position: absolute;z-index: 2;" src="{{url($TopCities[1]->pic)}}"
                             class="img-responsive img-place-2" alt="{{$TopCities[1]->name}}">
                        <img style="position: absolute;z-index: 3" src="{{url($TopCities[3]->pic)}}"
                             class="img-responsive img-place-3" alt="{{$TopCities[3]->name}}">

                        <!-- Badge -->
                        {{--<div class="listing-badges">
                            <span class="featured">{{__('project.featured')}}</span>
                        </div>--}}
                        <div class="img-box-content visible">
                            <h4>{{$TopCities[3]->name}}</h4>
                            {{--<span>507 {{__('project.Properties')}}</span>--}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION POPULAR PLACES -->

    <!-- START SECTION AGENTS -->
    <section class="team bg-white">
        <div class="container">
            <div class="section-title col-12">
                {{-- <a href="{{route('front.team')}}"><h3> {{__('project.Agents')}} </h3></a> --}}
                <a href="{{route('front.team')}}"><h2><i class="fa fa-hand-o-right" style="font-size:36px"></i>{{__('project.Agents')}}{{__('project.meet')}}</h2></a>
            </div>
            <div class="row">

                <div class="col-lg">
                    <form action="{{route('front.send-msg')}}" method="post" class="shadow rounded p-3">
                        @csrf
                        <label for="name">{{ __('index.full_name') }}</label>
                        <input type="text" name="name" id="name" class="form-control mb-2" placeholder="{{ __('index.plc_full_name') }}" required>

                        <label for="email">{{ __('index.email') }}</label>
                        <input type="text" name="email" id="email" class="form-control mb-2" placeholder="{{ __('index.plc_email') }}" required>

                        <label for="number">{{ __('index.call_number') }}</label>
                        <input type="number" name="number" id="number" class="form-control mb-2" placeholder="{{ __('index.plc_call_number') }}" required>

                        <label for="description">{{ __('index.subject') }}</label>
                        <textarea name="description" id="description" rows="3" class="form-control mb-2" required></textarea>
                        <button type="submit" class="btn btn-primary">{{ __('index.send_message') }}</button>
                    </form>
                </div>

                <div class="col-lg-7 p-0 my-auto">
                    <div class="row team-all">
                        <div class="col-lg col-md-6 team-pro" data-aos="fade-up" data-aos-delay="300">
                            <div class="team-wrap">
                                <div class="team-img">
                                    <img style="height: 300px;object-fit: cover;object-position: top"
                                         src="{{url('assets/front/2.jpg')}}"
                                         alt="{{__("team.ehsan")}}"/>
                                </div>
                                <div class="team-content">
                                    <div class="team-info">
                                        <h3>{{__("team.ehsan")}}</h3>
                                        <p>{{__('project.eco_Agent')}}</p>
                                        <div class="team-socials">
                                            <ul>
                                                <li>
                                                    <a href="https://api.whatsapp.com/send?phone=+905342796666" title="whatsapp"><i class="fa fa-whatsapp"
                                                                                                                                    aria-hidden="true"></i></a>
                                                    <a href="https://www.instagram.com/movehome.ir/?hl=en" title="instagran"><i class="fa fa-instagram"
                                                                                                                                aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        {{--                                <span><a href="agent-details.html">{{__('project.Profile')}}</a></span>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="col-lg-3 col-md-6 team-pro" data-aos="fade-up" data-aos-delay="200">
                            <div class="team-wrap">
                                <div class="team-img">
                                    <img style="height: 300px;object-fit: cover;object-position: center;"
                                         src="{{url('assets/front/1.jpg')}}" alt="{{__("team.beniamin")}}"/>
                                </div>
                                <div class="team-content">
                                    <div class="team-info">
                                        <h3>{{__("team.beniamin")}}</h3>
                                        <p>{{__('project.manager_Agent')}}</p>
                                        <div class="team-socials">
                                            <ul>
                                                <li>
                                                    <a href="https://api.whatsapp.com/send?phone=+905398209180" title="whatsapp"><i class="fa fa-whatsapp"
                                                                                                                                    aria-hidden="true"></i></a>
                                                    <a href="https://www.instagram.com/movehome.ir/?hl=en" title="instagran"><i class="fa fa-instagram"
                                                                                     aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    --}}{{--                                <span><a href="agent-details.html">{{__('project.Profile')}}</a></span>--}}{{--
                                    </div>
                                </div>
                            </div>
                        </div>--}}
        
                        <div class="col-lg col-md-6 team-pro hidden-x" data-aos="fade-up" data-aos-delay="400">
                            <div class="team-wrap">
                                <div class="team-img">
                                    <img style="height: 300px;object-fit: cover;object-position: center;"
                                         src="{{url('assets/front/3.jpg')}}" alt="{{__("team.Mahna")}}"/>
                                </div>
                                <div class="team-content">
                                    <div class="team-info">
                                        <h3>{{__("team.Mahna")}}</h3>
                                        <p>{{__('project.Real_Estate_Agent')}}</p>
                                       {{-- <div class="team-socials">
                                            <ul>
                                                <li>
                                                    <a href="#" title="facebook"><i class="fa fa-facebook"
                                                                                    aria-hidden="true"></i></a>
                                                    <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    <a href="#" title="instagran"><i class="fa fa-instagram"
                                                                                     aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-md-6 team-pro hidden-x" data-aos="fade-up" data-aos-delay="500">
                            <div class="team-wrap">
                                <div class="team-img">
                                    <img style="height: 300px;object-fit: cover;object-position: top"
                                         src="{{url('image/atena-Jhons.jpg')}}"
                                         alt="Atena Jhons"/>
                                </div>
                                <div class="team-content">
                                    <div class="team-info">
                                        <h3>Atena Jhons</h3>
                                        <p>{{__('project.Real_Estate_Agent')}}</p>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    
    <!-- END SECTION AGENTS -->

    <!-- START SECTION PRICING -->
    {{--    <section class="pricing-table bg-white">--}}
    {{--        <div class="container">--}}
    {{--            <div class="section-title">--}}
    {{--                <h3> {{__('Package.Pricing')}}</h3>--}}
    {{--                <h2>{{__('Package.Packages')}}</h2>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <!-- plan start -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-xs-12" data-aos="zoom-in" data-aos-delay="200">--}}
    {{--                    <div class="plan text-center">--}}
    {{--                        <span class="plan-name">{{__('Package.Standard')}}</span>--}}
    {{--                        <p class="plan-price"><sup class="currency">$</sup><strong>99</strong><sub>.99</sub></p>--}}
    {{--                        <ul class="list-unstyled">--}}
    {{--                            <li>10  {{__('Package.Listings')}}</li>--}}
    {{--                            <li> {{__('Package.Featured_Listings')}}</li>--}}
    {{--                            <li>100  {{__('Package.Domain_Hosting')}}</li>--}}
    {{--                            <li> {{__('Package.SSL_Shopping_Cart')}}</li>--}}
    {{--                            <li>24/7  {{__('Package.Tech_Support')}}</li>--}}
    {{--                            <li> {{__('Package.Unlimited_Project')}}</li>--}}
    {{--                        </ul>--}}
    {{--                        <a class="btn btn-secondary btn-lg" href="#."> {{__('Package.Sign_Up')}}</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- plan end -->--}}
    {{--                <!-- plan start -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-xs-12" data-aos="zoom-in" data-aos-delay="300">--}}
    {{--                    <div class="plan text-center featured no-mgb yes-mgb">--}}
    {{--                        <span class="plan-name">{{__('Package.Professional')}}</span>--}}
    {{--                        <p class="plan-price"><sup class="currency">$</sup><strong>149</strong><sub>.99</sub></p>--}}
    {{--                        <ul class="list-unstyled">--}}
    {{--                            <li>10  {{__('Package.Listings')}}</li>--}}
    {{--                            <li> {{__('Package.Featured_Listings')}}</li>--}}
    {{--                            <li>100  {{__('Package.Domain_Hosting')}}</li>--}}
    {{--                            <li> {{__('Package.SSL_Shopping_Cart')}}</li>--}}
    {{--                            <li>24/7  {{__('Package.Tech_Support')}}</li>--}}
    {{--                            <li> {{__('Package.Unlimited_Project')}}</li>--}}
    {{--                        </ul>--}}
    {{--                        <a class="btn btn-secondary btn-lg" href="#."> {{__('Package.Sign_Up')}}</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- plan end -->--}}
    {{--                <!-- plan start -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-xs-12" data-aos="zoom-in" data-aos-delay="400">--}}
    {{--                    <div class="plan text-center no-mgb">--}}
    {{--                        <span class="plan-name">{{__('Package.Premium')}}</span>--}}
    {{--                        <p class="plan-price"><sup class="currency">$</sup><strong>399</strong><sub>.99</sub></p>--}}
    {{--                        <ul class="list-unstyled">--}}
    {{--                            <li>10  {{__('Package.Listings')}}</li>--}}
    {{--                            <li> {{__('Package.Featured_Listings')}}</li>--}}
    {{--                            <li>100  {{__('Package.Domain_Hosting')}}</li>--}}
    {{--                            <li> {{__('Package.SSL_Shopping_Cart')}}</li>--}}
    {{--                            <li>24/7  {{__('Package.Tech_Support')}}</li>--}}
    {{--                            <li> {{__('Package.Unlimited_Project')}}</li>--}}
    {{--                        </ul>--}}
    {{--                        <a class="btn btn-secondary btn-lg" href="#."> {{__('Package.Sign_Up')}}</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- plan end -->--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- END SECTION PRICING -->

    {{--about--}}
    <section class="blog-section bg-black text-light">
        <div class="container">

            <div class="news-wrap">
                <div class="row">

                    <div class="col-md-6 col-sm-12 col-12 mb-3">
                        <div class="section-title">
                            <h3 class="text-light mb-2"> {{__('about.title')}}</h3>
                            <h2> {{__('about.company')}}</h2>
                        </div>
                        <div>
                            <p class="p-3 px-4" style="font-size: 15px;line-height: 1.8;text-align: justify">{{__('about.text')}}</p>
                            <div style="display: flex;justify-content: center;" class="mt-4">
                                <a href="{{url('about-us')}}" class="btn btn-yellow btn-sm">     {{__('blog.more')}}</a>
                            </div>
                            {{--                            <div style="display: flex;justify-content: center;" class="mt-4">--}}
                            {{--                                <a href="{{url('about-us')}}" class="" style="color: rgb(237,77,55);text-decoration: none !important; font-size: 18px">                {{__('blog.more')}}</a>--}}
                            {{--                            </div>--}}

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12 mb-3">
                        <div class="section-title">
                            <h3 class="text-center mb-2 text-light">{{__('about.about_me')}}</h3>
                            <h2 class="">{{__('about.about_sub_me')}}</h2>
                        </div>
                        <div class="news-wrap">
                            <p style="text-align: justify;font-size: 15px;line-height: 1.8" class="p-3 px-4">
                                {{__('about.text_mission')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- START SECTION BLOG -->
    <section class="blog-section bg-white">
        <div class="container">
            <div class="section-title">
                <h3>{{__('blog.Latest')}}</h3>
                <h2>{{__('blog.Blog')}}</h2>
            </div>
            <div class="news-wrap">
                <div class="row">
                    @foreach($categories->take(6) as $category)
                        <div class="col-xl-3 col-md-6 col-xs-12" style="margin-bottom: 25px">
                            <div class="news-item" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{url('blog-list/'.$category->id)}}" class="news-img-link">
                                    <div class="news-item-img">
                                        <img style="width: 100%;object-fit: cover;height: 40vh;object-position: bottom;"
                                             class="img-responsive"
                                             src="{{$category->pic ? url($category->pic ) : asset('assets/front/null_img.svg')}}"
                                             alt="{{translate($category->name)}}">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="{{url('blog-list/'.$category->id)}}"><h3>{{translate($category->name)}}</h3></a>
                                  {{--  <div class="dates">
                                        <span class="date">{{substr($category->name,0,10)}} &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                            </li>
                                        </ul>
                                    </div>--}}
                                    {{--<div class="news-item-descr big-news">

                                    </div>--}}
                                    <div class="news-item-bottom">
                                        <a href="{{url('blog-list/'.$category->id)}}"
                                           class="news-link">  {{__('blog.more')}}    </a>
                                        {{--                                    <div class="admin">--}}
                                        {{--                                        <p>متن                  </p>--}}
                                        {{--                                        <img src="images/testimonials/ts-6.jpg" alt="">--}}
                                        {{--                                    </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- END SECTION BLOG -->

{{--    <section class="blog-section bg-black text-light">
        <div class="container">

            <div class="news-wrap">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-12"
                         style="justify-content: center;">
                        <h3 class="mb-4" style="color: rgb(237,77,55) !important">{{__('contact.Contact_Us')}}  </h3>
                        <form action="{{route('front.contact')}}" method="post">
                            @csrf
                            <div id="success" class="successform">
                                <p class="alert alert-success font-weight-bold" role="alert">Your message was sent
                                    successfully!</p>
                            </div>
                            <div id="error" class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="name"
                                       placeholder=" {{__('contact.name')}} ">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control text-left input-custom input-full" dir="ltr" name="phone"
                                       placeholder="{{__('contact.phone')}}  ">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control text-left input-custom input-full" dir="ltr" name="email"
                                       placeholder="{{__('contact.email')}} ">
                            </div>
                            <div class="form-group">
                            <textarea class="form-control textarea-custom input-full" id="ccomment" name="message"
                                      required rows="8" placeholder="{{__('contact.message')}} "></textarea>
                            </div>
                            <button type="submit"
                                    class="btn btn-yellow btn-lg mb-4 mx-auto"> {{__('contact.Submit')}} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- START SECTION COUNTER UP -->
    {{--    <section class="counterup">--}}
    {{--        <div class="container" data-aos="zoom-in">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-3 col-md-6 col-xs-12">--}}
    {{--                    <div class="countr">--}}
    {{--                        <i class="fa fa-home" aria-hidden="true"></i>--}}
    {{--                        <div class="count-me">--}}
    {{--                            <p class="counter text-left">300</p>--}}
    {{--                            <h3>{{__('blog.Sold_Houses')}}      </h3>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-6 col-xs-12">--}}
    {{--                    <div class="countr">--}}
    {{--                        <i class="fa fa-list" aria-hidden="true"></i>--}}
    {{--                        <div class="count-me">--}}
    {{--                            <p class="counter text-left">400</p>--}}
    {{--                            <h3>{{__('blog.Daily_Listings')}}  </h3>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-6 col-xs-12">--}}
    {{--                    <div class="countr mb-0">--}}
    {{--                        <i class="fa fa-users" aria-hidden="true"></i>--}}
    {{--                        <div class="count-me">--}}
    {{--                            <p class="counter text-left">250</p>--}}
    {{--                            <h3>{{__('blog.Expert_Agents')}}  </h3>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-6 col-xs-12">--}}
    {{--                    <div class="countr mb-0 last">--}}
    {{--                        <i class="fa fa-trophy" aria-hidden="true"></i>--}}
    {{--                        <div class="count-me">--}}
    {{--                            <p class="counter text-left">200</p>--}}
    {{--                            <h3>{{__('blog.Won_Awars')}}  </h3>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- END SECTION COUNTER UP -->




@endsection

@push('css')
    <style>
        .hp-6 .btn.btn-yellow {
            border: 0px;
            border-radius: 3px;
            font-size: 15px;
            background-color: rgb(237, 77, 55);
            -webkit-box-shadow: 0px 1px 4px 0px rgb(255 90 95 / 30%);
            box-shadow: 0px 1px 4px 0px rgb(255 90 95 / 30%);
            color: #ffffff;
            height: 35px;
            width: 150px;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
            display: flex;
            justify-content: center;
            align-items: center;}


        /*share*/
        .share-btn:hover .share-icon{
            display: none !important;;
        }
        .share-icon{
            position: absolute;
        }
        .share-icon-hide{
            position: relative;
            top: -50px;
        }
        .share-icon-hide a{
            color: #fff;

        }
        .share-icon-hide a:hover{
            color:   rgb(237,77,55) !important;

        }
        .share-btn:hover .share-icon-hide{
            transition: 0.5s;
            top:4px;

        }
        .portfolio .homes-tag.sale{
            width: 110px !important;
        }
    </style>
{{--    ------------------}}
@endpush

@push('scripts')
<script>
    $(".default_option").click(function(){
        $(".dropdown ul").addClass("active");
    });

    $(".dropdown ul li").click(function(){
        var text = $(this).text();
        $(".default_option").text(text);
        $(".dropdown ul").removeClass("active");
    });
</script>
<script src="https://api.accessban.com/v1/widget/v2" defer></script>

@endpush
