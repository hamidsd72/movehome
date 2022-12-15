<footer class="first-footer h-100" >
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-12 text-center-sm">
                    <div class="netabout">
                        <a href="{{url("/")}}" class="logo">
                            <img src="{{asset('assets/front/logo-gif.gif')}}"  class="w-25" alt="{{env('APP_NAME')}}">
                        </a>
                    </div>
                    <div class="contactus" style="font-family: Sans-serif;   ">
                        <ul>
                            @if($footer->whatsapp)
                            <li>
                                <div class="info">
                                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                    <a class="in-p link" target="_blank" rel="noopener" href="whatsapp://send?phone=+{{str_replace([' ','+'],'',explode(',',$footer->whatsapp)[0])}}">
                                        <p dir="ltr" class="in-p">+{{$footer->whatsapp}}</p>
                                    </a>
                                </div>
                            </li>
                            @endif
                          {{--  @if($footer->instagram)
                            <li>
                                <div class="info">
                                    <i class="fab fa-instagram"></i>
                                    <p class="in-p">
                                        <a class="in-p link" target="_blank" rel="noopener" href="{{$footer->instagram}}"> instagram</a>                                    </p>
                                </div>
                            </li>
                                @endif
                                @if($footer->telegram)
                            <li>
                                <div class="info">
                                    <i class="fab fa-telegram"></i>
                                    <p class="in-p">
                                        <a class="in-p link" target="_blank" rel="noopener" href="{{$footer->telegram}}"> telegram</a>                                    </p>
                                </div>
                            </li>
                                @endif--}}
                                @if($footer->phone)
                            <li>
                                <div class="info">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    <a href="whatsapp://send?phone=+{{str_replace([' ','+'],'',explode(',',$footer->whatsapp)[0])}}"><p class="in-p" dir="ltr">{{explode(',',$footer->phone)[0]}}</p></a>
                                </div>
                            </li>
                                @endif
                                @if($footer->email)
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">{{explode(',',$footer->email)[0]}}</p>
                                </div>
                            </li>
                                @endif
                                @if($footer->address)
                            <li>
                                <div class="info cll">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p ti" dir="ltr">{{$footer->address}}</p>
                                </div>
                            </li>
                                @endif
                                <li>

                                    <div class="info">

                                        @if($footer->instagram)
                                            <a href="{{$footer->instagram}}">
                                            <i class="fab fa-instagram" style="font-size: 24px;"></i>
                                            </a>
                                        @endif

                                        @if($footer->telegram)
                                            <a href="{{$footer->telegram}}">
                                                <i class="fab fa-telegram" style="font-size: 24px;padding-left: 15px;padding-right: 15px;"></i>
                                            </a>
                                        @endif
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>

            <div class="col-lg-2 col-md-6 col-sm-12 col-12 text-center-sm">
                    <div class="navigation">
                        <h3>{{__('footer.Navigation')}}</h3>
                        <div class="nav-footer">
                            <ul class="w-100-sm">
{{--                                <li class="text-center-sm"><a href="index.html">PROPERTIES </a></li>--}}
{{--                                <li><a href="properties-right-sidebar.html"> BUYERS</a></li>--}}
                                <li><a href="{{url('projects')}}">{{__('menu.project')}}</a></li>
                                <li><a href="{{url('blog-category')}}">{{__('menu.blog')}}</a></li>
                                <li><a href="{{url('about-us')}}">{{__('menu.about')}} </a></li>
                                <li class="no-mgb"><a href="{{url('contact-us')}}">{{__('menu.contact')}} </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 col-sm-12 col-12 text-center-sm">
                    <div class="navigation">
                        <h3>{{__('footer.Services')}}</h3>
                        <div class="nav-footer">
                            <ul class="w-100-sm">
                                {{-- <li><a href="{{url('خرید-خانه-در-استانبول')}}">{{translate('خرید خانه در استانبول')}}</a></li>
                                <li><a href="{{url('/blog/173')}}">{{translate('سرمایه گذاری ملکی در استانبول')}}</a></li>
                                <li><a href="{{url('/blog/172')}}">{{translate('اخذ شهروندی ترکیه')}}</a></li> --}}
                                @foreach (\App\Models\Page::where('status', 'active')->get('title') as $item)
                                    <li><a href="{{route('front.landing.page',$item->title)}}">{{str_replace("-"," ", $item->title)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-center-sm">
                    @if($contact_info->address_iframe)
                        <div class="newsletters">
                            <h3>{{__('contact.Our_Location')}}</h3>
                                <iframe src="{{$contact_info->address_iframe}}" style="border:0; width: 100%;height: 250px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    @endif
                </div>
{{--              <div class="col-lg-3 col-md-6 col-sm-6 col-6">--}}
{{--                    <div class="newsletters">--}}
{{--                        <h3 class="text-light font-weight-bold ">{{__('footer.Twitter_Feeds')}}</h3>--}}
{{--                        <div class="twitter-widget contuct">--}}
{{--                            <div class="twitter-area">--}}
{{--                                <div class="single-item">--}}
{{--                                    <div class="icon-holder">--}}
{{--                                        <i class="fab fa-twitter" aria-hidden="true"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="text">--}}

{{--                                        <p>{{$footer->tweet1}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-item">--}}
{{--                                    <div class="icon-holder">--}}
{{--                                        <i class="fab fa-twitter" aria-hidden="true"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="text">--}}
{{--                                        <p>{{$footer->tweet2}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-item">--}}
{{--                                    <div class="icon-holder">--}}
{{--                                        <i class="fab fa-twitter" aria-hidden="true"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="text">--}}
{{--                                        <p class="in-p">{{$footer->tweet3}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container " style="justify-content: center">
            <p class="text-copywrite">All rights reserved By <a href="movehome.ir">MoveHome</a> @2022
                <br>
                Design & Develop by <a href="http://adib-it.com" target="_blank">Adib IT - Developer Team</a>
            </p>

        </div>
    </div>
</footer>

<a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!-- END FOOTER -->
