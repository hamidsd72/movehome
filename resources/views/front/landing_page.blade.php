@extends('front.layouts.master')

@push('css')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    <style>
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
            top:0;

        }
        .portfolio .homes-tag.sale{
            width: 110px !important;
        }
        .lwptoc-autoWidth {
            width: 100%;
        }
        .lwptoc-light .lwptoc_i {
            color: #333;
            background: #fafafa;
            padding: 30px;
        }
        .lwptoc-light .lwptoc_i {
            color: #333;
        }
        .lwptoc_items {
            display: none;
        }
        .lwptoc_items-visible {
            display: block;
        }
        .lwptoc_itemWrap {
             list-style: none;
         }
        .lwptoc_itemWrap .lwptoc_item a , .lwptoc_items a  {
            color: #2c2c2c;
        }
        h3,p {
            text-align: justify
        }
    </style>
@endpush
@section('body')
    <section class="about-us fh py-5" >
        <div class="container" style="padding-top: 105px">
            <div class="row">

                @if ($contents->where('section', 1)->count())
                    @foreach ($contents->where('section', 1)->sortBy('part') as $item)
                        <div class="col-lg-{{$item->sort}} mx-auto py-2">
                            <h1 class="mb-4">{{$item->title}}</h1>
                            <div class="lwptoc lwptoc-autoWidth lwptoc-baseItems lwptoc-light lwptoc-notInherit" data-smooth-scroll="1" data-smooth-scroll-offset="24" data-lwptoc-initialized="1">
                                <div class="lwptoc_i">
                                    <div class="lwptoc_header">
                                        <span class="lwptoc_toggle">
                                            <a class="lwptoc_toggle_label" style="cursor: pointer;" data-label="پنهان">{{$item->link}}</a>
                                        </span>
                                    </div>

                                    <div class="lwptoc_items" data-lwptoc-animation-request-id="125">
                                        {!! $item->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                @if ($contents->where('section', 2)->count())
                    @foreach ($contents->where('section', 2)->sortBy('part') as $item)
                        <div class="col-lg-{{$item->sort}} mx-auto py-2">
                            <div class="page_text">
                                <h3 class="animated fadeIn" id="1">{{$item->title}}</h3>
                                {!! $item->description !!}
                            </div>
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>
    </section>

    
    <div class="inner-pages hd-white">
        <section class="blog-section py-10">
            <div class="container">
                <div class="sec-title">
                    <h2 style="" id="11">منتخب پروژه ها</h2>
                </div>

                <div class="news-wrap">
                    <div class="row">
                        <!--                     --><?php //dd($projects[]->pic)?>
                        @if(isset($projects))
                            @foreach($projects as $row)

                                <div class="col-lg-4 col-md-12 col-xs-12 mb-4 mx-auto  rounded ">
                                    <div class="news-item m-0">
                                        <div class="homes-tag button alt sale share-btn" style="background: rgba(74, 74, 76, 0.7) !important;width: 110px;height:30px;overflow:hidden;position:absolute;top: 15px;right:30px;padding: 0;z-index: 100;display: flex;justify-content: space-around;align-items: center">
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

                                        <a href="{{url('projects/' .$row->slug)}}" class="news-img-link">
                                            <div class="news-item-img " style="display: flex;align-items: center;justify-content: center">
                                                <img class="img-responsive"   style="height: 300px;width: 100%;object-fit: cover;" src="{{$row->pic ? url($row->pic) : asset('assets/front/bg_body.jpg')}}" alt="blog image">
                                            </div>
                                        </a>
                                        <div class="news-item-text text-center">

                                            <div style="font-weight: 900 !important;border: 2px dashed #ed4d37; border-radius: 0 0 8px 8px"
                                                 class="p-3">
                                                <h3 class="text-center text-dark"><a class="text-dark"
                                                                                     href="{{url('projects/' .$row->slug)}}">{{$row->trans('name')}}</a>
                                                </h3>
                                                <p class="homes-address mb-2">
                                                    <a href="{{url('projects/' .$row->slug)}}">
                                                        <i class="fa fa-map-marker text-dark" style="margin:0 !important;"></i><span
                                                                class="px-2"> {{$row->trans('address')}}</span>
                                                    </a>
                                                </p>
                                                <p class="">
                                                    {{--  {{$row->trans('brief')}}--}}
                                                </p>
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

                            @endforeach
                        @endif

                        @if(isset($error))
                            <div class="col-12">
                                <div class="alert alert-danger text-center" role="alert">
                                    {{$error}}
                                </div>
                            </div>
                        @endif

                    </div>

                </div>

            </div>
        </section>
    </div>
    <section class="contact-us py-5" dir="rtl">
        <div class="container">
            <div>
                <h4 class="mb-4 text-right">نظرات</h4>
            </div>
            <div class="property-location mb-5 mt-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <ul class="w-comments-list">
                            @foreach($Comments as $Comment)
                                <li class="comment even thread-even depth-1 w-comments-item" id="comment">
                                    <div class="w-comments-item-meta">
                                        <div class="w-comments-item-author">
                                            <span>{{$Comment->name}}</span>
                                        </div>
                                        <a class="w-comments-item-date smooth-scroll" href="#comment">{{ $Comment->created_at->format('d M Y') }}</a>
                                    </div>
                                    <div class="w-comments-item-text">
                                        <p>{{$Comment->text}}</p>
                                    </div>

                                    @if($Comment->replys)
                                        <ul class="children">
                                            <li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 w-comments-item" id="comment">
                                                <div class="w-comments-item-meta">
                                                    <div class="w-comments-item-author">
                                                        <span>{{$Comment->replys->name}}</span>
                                                    </div>
                                                    <a class="w-comments-item-date smooth-scroll" href="#comment-1245">{{ $Comment->created_at->format('d M Y') }}</a>
                                                </div>
                                                <div class="w-comments-item-text">
                                                    <p>{{$Comment->replys->text}}</p>
                                                </div>

                                            </li><!-- #comment-## -->
                                        </ul><!-- .children -->
                                    @endif

                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">ثبت نظر</h3>
                        <form action="{{route('front.user-comment-store')}}" method="post">
                            <input name="landing_id" value="1" type="hidden">
                            @csrf
                            <div id="success" class="successform">
                                <p class="alert alert-success font-weight-bold" role="alert">پیام شما با موفقیت ارسال شد</p>
                            </div>
                            <div id="error" class="errorform">
                                <p>مشکلی پیش آمد، دوباره فرم را بازخوانی و ارسال کنید</p>
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control input-custom input-full" name="name" placeholder="نام شما ">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-custom input-full" name="email" placeholder="آدرس ایمیل">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required="" rows="8" placeholder="متن نظر"></textarea>
                            </div>
                            <button type="submit" class="btn btn-yellow btn-lg mb-4">ارسال</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 p-4 ">

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script>
        $('.your-class').slick({
            dots: true,
            infinite: true,
            speed: 300,
            centerMode: true,
            variableWidth: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow:1

        });
        $(document).ready(function() {
            $(".lwptoc_toggle_label").click(function(){
                $(".lwptoc_items").toggleClass("lwptoc_items-visible");
            });
        });
    </script>
@endpush

