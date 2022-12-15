<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{$titleSeo}}</title>
<meta name="keywords" content="{{$keywordsSeo}}ه">
<meta name="description" content="{{$descriptionSeo}}"/>
<meta property="og:description" content="{{$descriptionSeo}}"/>
<meta name="author" content="">
<meta name="google-site-verification" content="7EsPuKW-uPmRMVNv4yQmpPPbv0oyq9unb2D1C8dA1iM" />
<!-- FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/logo3.jpeg')}}">

{{--*****--}}
<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
<!-- GOOGLE FONTS -->
<!-- FONT AWESOME -->
<link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
{{--<link rel="stylesheet" href="{{asset('css/fontawesome-5-all.min.css')}}">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-1/css/all.min.css"
      integrity="sha512-wDB6AYiYP4FO5Sxieamqy9wtpAY3qdHMqlhZecIEUu1YjkLw5gQf/4ZDgOzmCBAF5SheMjmugkpUSVoUrGbLkQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<!-- Slider Revolution CSS Files -->
<link rel="stylesheet" href="{{asset('css/css/settings.css')}}">
<link rel="stylesheet" href="{{asset('css/css/layers.css')}}">
<link rel="stylesheet" href="{{asset('css/css/navigation.css')}}">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/lightcase.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/menu.css')}}">
{{--<link rel="stylesheet" href="{{asset('css/slick.css')}}">--}}
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link rel="stylesheet" id="color" href="{{asset('css/colors/pink.css')}}">

<script src="https://use.fontawesome.com/2fbe3db50f.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0GQJNW75MP"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0GQJNW75MP');
</script>
<style>
    @import url(https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap);
    @font-face {
        font-family: IRANSans;
        src: url('{{asset('assets/fonts/IRANSansWeb-Medium.eot')}}');
        src: url('{{asset('assets/fonts/IRANSansWeb-Medium.eot?#iefix')}}') format('embedded-opentype'),
        url('{{asset('assets/fonts/IRANSansWeb-Medium.woff2')}}') format('woff2'),
        url('{{asset('assets/fonts/IRANSansWeb-Medium.woff')}}') format('woff'),
        url('{{asset('assets/fonts/IRANSansWeb-Medium.ttf')}}') format('truetype');
        font-weight: normal;
    }
    .mm-menu .mm-listview>li a:not(.mm-next) {
        -webkit-tap-highlight-color: rgba(255, 255, 255, .5);
        tap-highlight-color: rgba(255, 255, 255, .5);
        background: rgba(255, 255, 255,0.2x);
        margin: 15px;
        border-radius: 5px;
        text-align: center;
    }
    .tp-banner{
        left: unset !important;
    }
    .th-8 .slick-dots li.slick-active, .th-8 .slick-dots li, .homepage-6 .slick-dots li.slick-active, .homepage-6 .slick-dots li {
        /*-webkit-box-shadow: inset 0 0 0 3px rgb(74 74 76 / 40%) !important;*/
        box-shadow: inset 0 0 0 3px rgb(255 255 255 / 70%) !important;
    }

    /*.popular-places .img-box {*/
    /*    !*transition: 0.5s;*!}*/
    [class *= 'img-place-']{
        border-radius: 8px;
        transition: 0.5s !important;

    }
   .popular-places .img-box:hover  [class *= 'img-place-']{
        z-index: 5!important;
        transform: scale(1.4);

    }
    .img-box{
        transition: 0.5s !important;

    }
     .img-place-1 {
        top: -20px !important;
        left: 20px !important;
    }
     .img-place-2{
        top: -10px !important;
        left: 10px !important;

    }
    .popular-places .img-box:hover {
       /* box-shadow: #ccc 0px 0px 0px 2px inset,*/
       /* #2b2d2f11 10px -10px 0px -3px,*/
       /* #ccc 10px -10px,*/
       /* #2b2d2f22 20px -20px 0px -3px,*/
       /*#ccc 20px -20px*/

        /*rgb(255, 255, 255) 30px -30px 0px -3px,*/
        /*rgb(255, 156, 85) 30px -30px*/

    }

    .bg-black {
        background: #2b2d2f !important;
    }

    .lang-small {
        display: block !important;
    }

    #header {
        padding: 0 !important;
        height: 80px;
        display: flex;
        align-items: center;
    }

    #header.cloned {
        padding: 0 !important;
    }

    .fa-globe-americas {
        /*color: rgb(237, 77, 55);*/
    }
    .team-wrap{
        box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;    }
.news-item{
    border: 0 !important;
    box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px!important;
}

    #responsive .active {
        background: rgb(237, 77, 55) !important;
        color: #fff !important;
    }

    #responsive .active span, #responsive .active .nav-link {
        color: #fff !important;

    }
.top-footer  h3{
    display: inline-block !important;
}
    .top-footer  h3::after{
        display: inline-block !important;
        width: 100% !important;
    }
    #status, .status-mes {
        background-position: center;
        background-repeat: no-repeat;
        height: 200px;
        left: 48% !important;
        margin: unset !important;
        position: absolute;
        top: 40% !important;
        width: 200px;
    }

    #preloader {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #status, .status-mes {
        position: unset !important;
    }

    /**/
    .left-side {
        display: flex;
        align-items: center;
        /*justify-content: space-between;*/
    }

    .mmenu-trigger {
        margin: 0 !important;
    }

    @media   (min-width: 600px) {
        .tp-banner, .tp-banner-container {
            height: 100vh !important;
        }

        .tp-kbimg {
            object-fit: cover !important;
            object-position: center !important;
            height: 130vh !important;
            /*filter: brightness(0.5);*/
        }
    }
    @media (max-width: 600px) {
        #logo img{
width: 65px !important;
        }
        .tp-banner, .tp-banner-container {
            height: 50vh !important;
        }
        .tp-kbimg {
            object-fit: cover !important;
            object-position: bottom !important;
            height: 50vh !important;

        }
        .main-slider {
            height: 50vh !important;
        }

        .text-slider {
            width: 80% !important;
            font-size: 12px !important;
        }
    }
    #btnmenuleft{
        display: none !important;
    }
    .left-side{
        display: block;
    }
    @media (max-width: 1024px) {
        .left-side{
            display: none !important;
        }
        #btnmenuleft{
            display: block !important;
        }
    }

    @media only screen and (min-width: 1024px) {
        .lang-small {
            display: none !important;
        }
    }

    .text-slider {
        background: #2d2b2fa6
    }

    .homepage-4 .portfolio .project-single {
        border: 0;
    }
    .nav-up {
        top: -120px;
    }

    .dropdown-toggle::after {
        border-top: unset !important;
    }

    .dropdown-item {
        color: #000 !important;
    }

</style>


@if(app()->getLocale() == 'fa' || app()->getLocale() == null)

    <style>
        .homes-list {
            direction: rtl;
            text-align: right;
            display: flex;
            justify-content: space-between
        }

        .text-slider {
            direction: rtl
        }
        
        .section-title h2, .section-title h3 {
            text-align: right !important;
        }

        .commercial {
            text-align: right;
            direction: rtl;
        }

        .landscapes, .people {
            text-align: right !important;
            direction: rtl;
        }

        .news-item {
            direction: rtl;
            text-align: right;
        }

        .row {
            direction: rtl;
            text-align: right;
        }

        .text-copywrite {
            direction: rtl;
        }

        .section-title:before {
            right: 0 !important;
            left: unset !important;
        }

        .section-title {
            padding-right: 35px !important;
            margin-bottom: 3rem !important;
        }

        .portfolio .homes-content .homes-address a i {
            margin: 0 10px !important;
        }

        .agent-section h4 {
            margin-top: 15px;
        }

        .first-footer .contactus .info p {
            margin-right: 1rem;
        }

        .dot:hover {
            background: #fff !important;
        }

        .twitter-widget.contuct .twitter-area .icon-holder {
            left: unset !important;
            right: 0 !important;
        }

        .twitter-widget.contuct .twitter-area .text {
            padding: 0 30px 0 0 !important;
        }

        .home18 .sec-title h2 span::before {
            display: none;
        }

        .portfolio .homes-price {
            left: unset;
            right: 0 !important;
        }

        @media (min-width: 1024px) {

            .container-header {
                flex-direction: row-reverse;
                display: flex;
                justify-content: space-between;
            }

            #header {
                padding: 22px 0 !important;
                user-select: none !important;
            }

            #navigation {
                /*margin-left: 0 !important;*/
                /*margin-right: 40px !important;*/

            }

            #navigation ul {
                flex-direction: row-reverse;
                display: flex;
            }

            .left-side {
                display: flex !important;
                flex-direction: row-reverse;
            }


            .project-single .footer {
                display: flex;
                justify-content: space-between;
            }

            .inner-pages .blog .homes-content .homes-list {
                float: unset !important;
                padding: 0;
                margin: 0;
                display: flex;
                flex-wrap: wrap;
            }


        }
        #navigation.style-1 ul a {
            text-align: right;
        }
    </style>

@endif
