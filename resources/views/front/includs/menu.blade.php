

{{--*****************--}}
<header id="header-container" style="z-index: 1000;position: fixed;width: 100%"
        class="{{ Request::is('/') ? 'header-container' : 'header-container-page' }}">
    <div class="p-top-menu">
        <div class="top-menu">
            @if($contact_info->facebook)
                <a href="{{$contact_info->facebook}}" target="_blank" rel="noopener"> <span
                            class="fab fa-facebook"></span></a>
            @endif
            @if($contact_info->twitter)
                <a href="{{$contact_info->twitter}}" target="_blank"
                   rel="noopener"> <span class="fab fa-twitter" ></span></a>
            @endif
            @if($contact_info->telegram)
                <a href="{{$contact_info->telegram}}"  target="_blank"
                   rel="noopener"> <span class="fab fa-telegram"></span></a>
            @endif
            @if($contact_info->instagram)
                <a href="{{$contact_info->instagram}}" target="_blank" rel="noopener"> <span
                            class="fab fa-instagram"></span></a>
            @endif
        </div>
        <div class="top-menu">
           {{-- @if($contact_info->whatsapp)

                <a href="whatsapp://send?phone=+{{str_replace([' ','+'],'',explode(',',$contact_info->whatsapp)[0])}}" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp  ml-lg-2"></i>
                    <span class="d-none-mobile">
                        +{{explode(',',$contact_info->whatsapp)[0]}}
                    </span>
                    <span class="d-lg-none" style="font-size: 8px;">
                        بنیامین کریمی
                    </span>
                </a>
            @endif--}}
            @if($contact_info->phone)
                <a href="whatsapp://send?phone=+{{str_replace([' ','+'],'',explode(',',$contact_info->phone)[0])}}" target="_blank" rel="noopener">
                    <i class="fa fa-whatsapp  ml-lg-2"></i>
                    <span class="d-none-mobile">+{{explode(',',$contact_info->phone)[0]}} </span>
                    <span class="d-lg-none" style="font-size: 8px;">
                        احسان کازرانی
                    </span>
                </a>
            @endif
            @if($contact_info->email)
                <a href="mailto:{{explode(',',$contact_info->email)[0]}}" style="border-right: 1px solid #ccc" target="_blank" rel="noopener">
                    <i class="far fa-envelope  ml-lg-2"></i>
                    <span class="d-none-mobile">{{explode(',',$contact_info->email)[0]}}</span></a>
            @endif

            <div class="header-user-menu user-menu  d-xl-flex d-none-mobile" onclick="setlang()" style="top: 0 !important;">
                <div class="lang-wrap">
                    <div class="show-lang"
                         style="padding: unset !important;font-size: unset !important;border: unset !important;">
                        <span style="left: 10px">
{{--                            <i class="fas fa-globe-americas"></i>--}}

                            @if(app()->getLocale() == 'en')
                                <strong>ENG</strong>
                            @else
                                <strong style="padding: 0 !important">PER</strong>
                            @endif
                        </span><i class="fa fa-caret-down arrlan"></i></div>
                    <ul class="lang-tooltip lang-action no-list-style" style="position:absolute;z-index: 1000">
                        <li><a style="border: none !important;" href="{{route('front.lang.set','en')}}"
                               class="current-lan" data-lantext="En">English</a></li>
                        <li><a style="border: none !important;" href="{{route('front.lang.set','fa')}}"
                               data-lantext="Fr">فارسی</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <div id="under-menu-left" onclick="closemenu()"
         style=";position:fixed;top: 0;left: -100vw;height: 100vh;width:100vw;background: rgba(0,0,0,0.5);z-index: 9999999999998;"></div>
    <div id="menu-left"
         style="position:fixed;top: 0;left: -100vw;height: 100vh;background: rgba(0,0,0,0.7);z-index: 9999999999999;">
        <div class="menu-left-header">
            <div style="width: 90%;">منو</div>
            <div onclick="closemenu()"
                 style="width: 10%;font-size: 18px;cursor: pointer;color: rgb(237,77,55);user-select: none !important;">
                &times;
            </div>
        </div>
        <div class="menu-left-p {{(request()->is('/')) ? 'active' : '' }}">
            <a class="menu-left-item" href="{{url('/')}}"> {{__('menu.home')}}</a>
        </div>
        <div class="menu-left-p {{ (request()->segment(1) == 'projects') ? 'active' : '' }}">
            <a class="menu-left-item" href="{{url('projects')}}">{{__('menu.project')}}</a>
        </div>
        <div class="menu-left-p  {{ (request()->is('blog-category')) ? 'active' : '' }} {{(request()->segment(1) == 'blog') ? 'active' :''}} {{(request()->segment(1) == 'blog-list') ? 'active' :''}}">
            <a class="menu-left-item" href="{{url('blog-category')}}">{{__('menu.blog')}}</a>
        </div>
        <div class="menu-left-p {{ (request()->is('about-us')) ? 'active' : '' }}">
            <a class="menu-left-item" href="{{url('about-us')}}">{{__('menu.about')}}</a>
        </div>
        <div class="menu-left-p">
            <a href="{{url('city/list')}}" class="menu-left-item"> {{__('menu.city')}}</a>
        </div>


        @if(app()->getLocale() == "fa")


            <div class="menu-left-p">
                <a href="{{url('خرید-خانه-در-استانبول')}}" class="menu-left-item">خرید خانه در استانبول</a>
            </div>
        @endif
    </div>
    <div id="header">

        <div class="container container-header" style="display: flex;justify-content: space-between">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
            {{--                <div id="logo">--}}
            {{--                    <a href=""><img  style="width: 45px !important;" src="{{asset('assets/front/logologo.png')}}" alt=""></a>--}}
            {{--                </div>--}}
            <!-- Mobile Navigation -->

            {{--                <div class="mmenu-trigger">--}}
            {{--                    <button class="hamburger hamburger--collapse" type="button">--}}
            {{--                                <span class="hamburger-box">--}}
            {{--							<span class="hamburger-inner"></span>--}}
            {{--                                </span>--}}
            {{--                    </button>--}}
            {{--                </div>--}}
            <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li class="nav-item  {{(request()->is('/')) ? 'active' : '' }}">
                            <a class="nav-link " href="{{url('/')}}"> {{__('menu.home')}}</a>
                        </li>
                        <li class="nav-item {{ (request()->segment(1) == 'projects') ? 'active' : '' }}">
                            <a class="nav-link " href="{{url('projects')}}">{{__('menu.project')}} <span
                                        class="sr-only">(current)</span></a>
                        </li>
                        @if(app()->getLocale() == "fa")
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{__('project.Services')}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($services as $index=>$service)
                                        @if($index == 2)
                                            <a class="dropdown-item"
                                               href="{{url('خرید-خانه-در-استانبول')}}"> خرید خانه در استانبول
                                            </a>
                                        @else
                                            <a class="dropdown-item"
                                               href="{{route('front.blog.show',[$service->id])}}">{{$service->trans('title')}}
                                            </a>
                                        @endif
                                    @endforeach


                                </div>
                            </li>

                            {{-- <li class="nav-item {{ (request()->is('خرید-خانه-در-استانبول')) ? 'active' : '' }} ">
                                 <a class="nav-link" href="{{url('خرید-خانه-در-استانبول')}}">خرید خانه در استانبول<span
                                         class="sr-only">(current)</span></a>
                             </li>--}}
                        @endif
                        <li class="nav-item  {{ (request()->is('blog-category')) ? 'active' : '' }} {{(request()->segment(1) == 'blog') ? 'active' :''}} {{(request()->segment(1) == 'blog-list') ? 'active' :''}}">
                            <a class="nav-link " href="{{url('blog-category')}}">{{__('menu.blog')}} <span
                                        class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item  {{ (request()->is('about-us')) ? 'active' : '' }} ">
                            <a class="nav-link" href="{{url('about-us')}}">{{__('menu.about')}} <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ (request()->is('contact-us')) ? 'active' : '' }} ">
                            <a class="nav-link" href="{{url('contact-us')}}">{{__('menu.contact')}} <span
                                        class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ (request()->is('city/list')) ? 'active' : '' }} ">
                            <a class="nav-link" href="{{url('city/list')}}">{{__('menu.city')}} <span
                                        class="sr-only">(current)</span></a>
                        </li>

                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
            <div id="logo" class="">
                <a href="{{url('/')}}"><img style="width: 45px ;" src="{{asset('assets/front/logo-gif.gif')}}" alt="{{env('APP_NAME')}}"></a>
            </div>
            <button class="btn-menu-left" id="btnmenuleft" onclick="chamgeMenu()">
                <span class="fa fa-bars"></span>
            </button>

            <!-- -->
            <div class="header-user-menu user-menu add  d-xl-flex lang-small " onclick="setlang()">
                <div class="lang-wrap">
                    <div class="show-lang"><span><i class="fas fa-globe-americas"></i>

                            @if(app()->getLocale() == 'en')
                                <strong>ENG</strong>
                            @else
                                <strong style="padding: 0 !important">PER</strong>
                            @endif
                        </span><i class="fa fa-caret-down arrlan"></i></div>
                    <ul class="lang-tooltip lang-action no-list-style">
                        <li><a href="{{route('front.lang.set','en')}}" class="current-lan" data-lantext="En">English</a>
                        </li>
                        <li><a href="{{route('front.lang.set','fa')}}" data-lantext="Fr">فارسی</a></li>

                    </ul>
                </div>
            </div>
            <!-- lang- end-->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
<style>
    .menu-left-header {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        font-weight: 900;
        border-bottom: 1px solid #ccc;
        text-align: center;
        color: #fff
    }

    .menu-left-item:hover {
        color: #fff;
        background: rgba(255, 255, 255, 0.4);
    }

    .menu-left-p {
        margin: 10px;
        text-align: center;
    }

    .menu-left-item {
        width: 100%;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        text-decoration: none !important;
        border-radius: 2px;
        padding: 10px 60px;
        background: rgba(255, 255, 255, 0.5);
        color: #fff
    }

    .header-container {
        /*background: rgba(0,0,0,0.4);*/
        background: #2d2b2fa6;
    }

    .header-container-page {
        background: #222222b8;
    }

    .p-top-menu {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #ccc;
    }

    .top-menu {
        display: flex;
        align-items: center;

    }

    .top-menu a {
        color: #fff;
        transition: 0.5s;
        display: inline-block;
        padding: 10px 15px;
        border-left: 1px solid #ccc;
        margin: 0;
        text-decoration: none !important;
        font-size: 14px;
    }

    .top-menu a:last-child {
        border-right: 1px solid #ccc;

    }

    .top-menu a:hover {
        color: rgb(237, 77, 55);
    }

    /*#responsive .nav-item a{*/
    /*    color: #fff !important;*/
    /*}*/
    .hd-white .header-widget.sign-in a, .hd-white .show-lang, .hd-white .show-lang .fa-caret-down.arrlan {
        color: #fff !important;
    }

    .btn-menu-left {
        background: none !important;
        border: none !important;
        outline: none !important;

        color: #ffffff;
        font-size: 38px;
    }
</style>
