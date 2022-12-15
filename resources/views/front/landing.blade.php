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
        .lwptoc_itemWrap .lwptoc_item a {
            color: #2c2c2c;
        }
    </style>
@endpush

@section('body')
    <section class="about-us fh py-5" >
        <div class="container" style="padding-top: 105px">
            <div class="row">

                <div class="col-md-12 mx-auto py-2">
                    <div>
                        <h1 class="mb-4">خرید خانه در استانبول</h1>
                    </div>

                    <div class="lwptoc lwptoc-autoWidth lwptoc-baseItems lwptoc-light lwptoc-notInherit" data-smooth-scroll="1" data-smooth-scroll-offset="24" data-lwptoc-initialized="1">
                        <div class="lwptoc_i">
                            <div class="lwptoc_header">
                                <b class="lwptoc_title">فهرست مطالب مهم این صفحه</b>
                                <span class="lwptoc_toggle">
                                <a class="lwptoc_toggle_label" style="cursor: pointer;" data-label="پنهان">نمایش</a>
                            </span>
                            </div>

                            <div class="lwptoc_items" data-lwptoc-animation-request-id="125">
                                <ul class="lwptoc_itemWrap">

                                    <li class="lwptoc_item">
                                        <a href="#1">
                                            <span class="lwptoc_item_label">معرفی شهر استانبول</span>
                                        </a>
                                    </li>
                                    <li class="lwptoc_item">
                                        <a href="#2">
                                            <span class="lwptoc_item_label">اطلاعاتی مختصر درباره شهر استانبول </span>
                                        </a>
                                    </li>
                                    <li class="lwptoc_item">
                                        <a href="#3">
                                            <span class="lwptoc_item_label">قیمت خانه در شهر استانبول</span>
                                        </a>
                                    </li>
                                    <li class="lwptoc_item">
                                        <a href="#4">
                                            <span class="lwptoc_item_label">جذابیت‌های خرید خانه در استانبول</span>
                                        </a>
                                    </li>
                                    <li class="lwptoc_item">
                                        <a href="#5">
                                            <span class="lwptoc_item_label">نکات مهم در خرید ملک در استانبول</span>
                                        </a>
                                    </li>
                                    <li class="lwptoc_item">
                                        <a href="#6">
                                            <span class="lwptoc_item_label">بهترین مناطق استانبول برای خرید ملک </span>
                                        </a>
                                    </li>
                                    <li class="lwptoc_item">
                                        <a href="#7">
                                            <span class="lwptoc_item_label">برای خرید ملک در استانبول به سراغ این محله‌ها نروید</span>
                                        </a>
                                    </li>
                                    <li class="lwptoc_item">
                                        <a href="#8">
                                            <span class="lwptoc_item_label">دریافت اقامت با خرید خانه در استانبول</span>
                                        </a>
                                    </li>
                                    <li class="lwptoc_item">
                                        <a href="#9">
                                            <span class="lwptoc_item_label">قوانین خرید خانه در استانبول</span>
                                        </a>
                                    </li>
                                    <li class="lwptoc_item">
                                        <a href="#10">
                                            <span class="lwptoc_item_label">جمع بندی</span>
                                        </a>
                                    </li>

                                    <li class="lwptoc_item">
                                        <a href="#11">
                                            <span class="lwptoc_item_label">منتخب پروژه ها</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="page_text">
                        <p>مقدمه</p>
                        <p dir="RTL" style="text-align:justify">
                            خرید خانه در استانبول به دلیل مزایایی از جمله دریافت اقامت در ترکیه، زندگی بهتر، سادگی فرآیند مهاجرت، نزدیکی ترکیه به ایران و مواردی از این دست در بین هموطنان ما رواج زیادی پیدا کرده است. از طرفی با توجه به اینکه قیمت خرید خانه در محله‌های لوکس ترکیه خیلی بیشتر از هزینه خرید ملک در شهر تهران نیست و با توجه به شرایط جذابی که ترکیه برای مهاجرت دارد، امروزه اشخاص زیادی به فکر مهاجرت به این کشور هستند. در ادامه اطلاعات مفصلی در خصوص شرایط خرید خانه در استانبول و نکاتی که باید در پروسه خرید رعایت شود، به شما ارائه می‌دهیم پس تا پایان این مقاله با ما همراه باشید.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mx-auto py-2">
                    <div class="page_text">
                        <h3 style="text-align:justify" class="animated fadeIn" id="1">معرفی شهر استانبول</h3>

                        <p style="text-align:justify">قبل از اینکه بخواهیم در خصوص پروسه <a href="{{url('/')}}">خرید خانه در استانبول</a> توضیحاتی را ارائه دهیم، بهتر است با شهر استانبول و خصوصیات این شهر زیبا آشنا شوید. استانبول، شهری تاریخی است که در گذشته از آن با نام قسطنطنیه یاد می‌شد. این شهر تاریخی که قدمتی 2500 ساله دارد، به خاطر ترکیب جاذبه‌های مدرن و سنتی‌اش جایگاه خاصی در کشور ترکیه دارد.<br> همچنین از نظر جغرافیایی، این شهر به گونه‌ای است که بخشی از آن در قاره آسیا و بخش دیگری در قاره اروپا قرار دارد. دو بخش آسیایی و اروپایی شهر استانبول، توسط پل معروفی به نام بسفر بهم وصل می‌شوند که یکی از جاذبه‌های دیدنی این شهر تاریخی به حساب می‌آید. از پل بسفر، با نام پلی میان دو قاره هم یاد می‌شود.</p>
                    </div>
                </div>
                <div class="col-md-6 mx-auto py-2">
                    <div class="page_pic">
                        <img src="{{url('/image')}}/photo-83a30df0d38c6f112a62dda021fced49.jpg" alt="پل بسفر در استانبول">
                    </div>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <h3 style="text-align:justify" class="animated fadeIn" id="2">اطلاعاتی مختصر درباره شهر استانبول </h3>

                        <p style="text-align:justify">استانبول، پرجمعیت‌ترین شهر کشور ترکیه است و جمعیتی حدود 15 میلیون نفر دارد. ترکیه کشوری سکولار است و چیزی به نام دین رسمی در آن وجود ندارد. با این وجود اما اکثر مردم این کشور یعنی چیزی در حدود 97 درصد آن‌ها مسلمان هستند. از طرفی این شهر شکل و شمایلی تلفیقی از المان‌های مذهبی، سنتی و مدرن دارد که البته با توجه به تاثیر پذیری که از کشور ما داشته، بی‌شباهت به هنر و معماری کشورمان نیز نیست. لذا تمام نکاتی که ذکر شد، باعث می‌شود تا استانبول مقصدی دلپذیر برای مهاجران کشورمان باشد.<br>
                            جاذبه‌های گردشگری استانبول به حدی زیاد است که باعث شده این شهر یکی از بزرگترین شهرهای توریستی در جهان به حساب بیاید. طبق برآوردهای صورت گرفته در سال 2015 میلادی چیزی در حدود 12.5 میلیون گردشگر خارجی به استانبول سفر کرده‌اند که همین موضوع نشان از زیبایی بی‌نظیر این شهر است.
                            لازم به ذکر است که سفر به ترکیه نیازی به ویزا ندارد. همچنین پول رایج کشور ترکیه، لیر ترکی است. تاریخ رسمی ترکیه، تاریخ میلادی است. از طرفی استانبول از نظر وضعیت بهداشتی، وضعیت بسیار قابل قبولی دارد و کمتر گزارشی مبنی بر مسمومیت غذایی در این شهر ثبت شده که نشان می‌دهد بهداشت در این شهر از اهمیت بالایی برخوردار است. با این وجود، آب موجود در شبکه لوله کشی استانبول برای نوشیدن مناسب نیست و در نتیجه باید از آب معدنی استفاده کنید.<br> البته بطری آب معدنی در همه جای شهر به چشم می‌خورد و قیمت ارزانی هم دارد. از جمله مهمترین سوغاتی‌های شهر استانبول هم می‌توان به زیورآلات، شیرینی پسته‌ای، باقلوا، قهوه و قهوه جوش و ادویه‌های بسیار خوش طعم ترکی اشاره کرد.
                        </p>
                    </div>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <p style="text-align:center"><img alt="" src="{{url('/image')}}/fdgb4hrufghndfugf.jpg"></p>
                    <p style="text-align:center">تصویری از استانبول در قرن 20 میلادی.</p>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <p style="text-align:justify">
                            از نظر آب و هوایی، شهر استانبول، تقریبا آب و هوایی نزدیک به آب و هوای کشور ما و شهر تهران دارد. بهترین فصل استانبول، فصل بهار است که هوا در استانبول بسیار دلچسب و بهاری است. در روزهای تابستان هوای استانبول، گرم و مرطوب است. همچنین در پاییز، برگ ریزان درختان فضای جذابی به شهر می‌بخشد. در زمستان عموما هوای استانبول، میانگین در حدود 10 درجه سانتی گراد است.
                            <br>از نظر حمل و نقل نیز شهر استانبول، دارای سیستم حمل و نقل بسیار گسترده‌ای است. حمل و نقل در استانبول با وسایلی چون مترو، تاکسی‌های زرد، اتوبوس، تراموا، انواع قایق و کشتی‌های مسافربری و البته تاکسی‌های آنلاین صورت می‌گیرد و با این وسایل نقلیه به سادگی و با هزینه‌ای بسیار مناسب می‌توان در نقاط مختلف شهر جابجا شد.<br> از نظر امنیت هم، استانبول امنیت بالایی دارد و با وجود مسافران زیادی که به این شهر سفر می‌کنند، شاخص امنیت در این شهر، تنها قدری پایین‌تر از شهر تهران است که با توجه به جمعیتی که در این شهر رفت و آمد دارند عددی قابل قبول است.
                            لازم به ذکر است که پاسپورت ترکیه در رده 39 برترین پاسپورت‌های جهان قرار دارد و از 71 کشور جهان می‌توان بدون ویزا به این کشور سفر کرد. در نتیجه تمام این نکات را کنار هم بگذاریم می‌توان به این نتیجه رسید که خرید خانه در استانبول، گزینه‌ای بسیار جذاب برای مهاجران ایرانی و اخذ <a href="{{url("/")}}"> شهروندی ترکیه </a>به حساب می‌آید.
                        </p>
                    </div>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <h2 style="text-align:justify" class="animated fadeIn" id="3">قیمت خانه در شهر استانبول</h2>

                        <p style="text-align:justify">قیمت خانه در استانبول نیز، همانند دیگر نقاط به پارامترهای مختلفی وابسته است. اولین و مهمترین پارامتر مهم در تعیین قیمت خانه در استانبول، نوع ملک است. قطعا قیمت خانه، ویلا، آپارتمان، سوئیت و ... با هم متفاوت است. به غیر از نوع ملک، موقعیت خانه هم در تعیین قیمت آن یک پارامتر اساسی است. به هر حال خانه‌هایی که در محله‌های لوکس شهر قرار دارند، قیمت بالاتری دارند چون امکانات رفاهی، تفریحی، شرایط حمل و نقل و ... در مناطق لوکس بهتر و بیشتر است.
                            به غیر از این موضوع، سن ملک و متریالی که در ساخت آن به کار رفته به همراه متراژ ملک نیز بر قیمت خانه در استانبول تاثیر قابل توجهی دارد.<br> علاوه بر این، فاکتورهایی مانند نزدیکی به مرکز شهر، قرار گرفتن در امتداد دریا یا جنگل، ویو خانه و دسترسی به خدمات عمومی نیز از جمله نکاتی است که بر قیمت خانه در استانبول تاثیر گذار است.

                            <br>با وجود نکات ذکر شده، قیمت ملک در استانبول نسبت به قیمت ملک در شهرهایی چون دمشق در سوریه، تهران در ایران و بغداد در عراق ارزان‌تر است و در نتیجه همین موضوع سبب شده تا اشخاص زیادی به دنبال مهاجرت به ترکیه و خرید ملک در شهر زیبای استانبول باشند.<br> در کل هزینه خرید یک خانه لوکس در استانبول تفاوت زیادی با هزینه خرید خانه در تهران و شهرهای بزرگی مثل اصفهان و مشهد ندارد. لذا همین موضوع سبب شده تا اشخاص زیادی به دنبال <a href="{{url("/")}}">خرید خانه در استانبول</a> باشند.
                            لازم به ذکر است، خرید آپارتمان در استانبول هزینه کمتری نسبت به خرید خانه معمولی یا خانه‌های ویلایی در این شهر دارد. از طرفی خرید خانه‌های دسته دوم در این شهر که عمر بنای آن‌ها بین 5 الی 10 سال است هزینه بسیار کمتری برای شما در پی خواهد داشت.
                        </p>
                    </div>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <p style="text-align:center"><img alt="" src="{{url('/image')}}/home-image.jpg"></p>
                    <p style="text-align:center">خرید آپارتمان در استانبول.</p>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <p style="text-align:justify">لازم به ذکر است که امروزه شرکت‌های ساختمانی مختلفی در ترکیه امکان خرید قسطی خانه در استانبول را برای مشتریان فراهم کرده‌اند و اگر شما نقدینگی لازم برای خرید یک خانه خوب در استانبول را ندارید، می‌توانید از این طریق برای خرید خانه اقدام کنید.
                            لازم به ذکر است که این شرکت‌ها در بعضی از ایام سال، یکسری تخفیفات و شرایط خاص برای خرید ملک در استانبول نظر می‌گیرند که می‌توانید از این موضوع هم استفاده کرده و ملک مد نظر را با قیمت مناسب‌تری خریداری کنید. در پروسه خرید قسطی خانه در استانبول، مبلغ اولیه‌ای که به عنوان پیش پرداخت در نظر گرفته می‌شود، بسیار مهم است. عموما هر چه پول اولیه شما بیشتر باشد، شرایط ساده‌تری برای خرید قسطی ملک دارید و البته سود کمتری هم باید پرداخت کنید.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mx-auto py-2">
                    <div class="page_text">
                        <h3 style="text-align:justify" class="animated fadeIn" id="4">جذابیت‌های خرید خانه در استانبول</h3>

                        <p style="text-align:justify">
                            همانطور که ذکر شد، هزینه خرید خانه در استانبول، نسبت به هزینه خرید خانه در شهرهای بزرگ کشورمان تفاوت چندانی ندارد. علاوه بر این جذابیت‌های زندگی در شهر استانبول باعث شده تا اشخاص زیادی به دنبال انتخاب یک ملک در این شهر باشند.
                            توسعه شهری و پیشرفت‌های زیادی که شهر استانبول در طی سالیان گذشته داشته، باعث شده تا این شهر، به یکی از شهرهای زیبای خاورمیانه تبدیل شود.<br> ترکیب فضای سنتی و مدرن در این شهر، حال و هوایی خاص را برای ساکنان این شهر به همراه دارد که همین موضوع یکی از مهمترین دلایل اشخاص برای خرید خانه در این شهر زیبا است. از نظر موقعیت، شهر استانبول در کنار دریای مدیترانه قرار داشته و ساحل زیبای این شهر یکی از جاذبه‌های گردشگری آن به حساب می‌آید.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mx-auto py-2">
                    <p style="text-align:center"><img alt="" src="{{url('/image')}}/630345.jpg"></p>
                    <p style="text-align:center">خرید آپارتمان در استانبول.</p>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <p style="text-align:justify">
                            <br> از طرفی آب و هوای استانبول بسیار دلچسب و عالی است. هوای شرجی، بهاری و بارانی آن در اکثر روزهای سال قطعا شما را به یاد هوای دل انگیز شمال کشور می‌اندازد. در کنار تمام نکات ذکر شده، دسترسی راحت به خدمات شهری در استانبول یکی از مهمترین مزایای این شهر زیبا به حساب می‌آید. توریستی بودن و جمعیت 15 میلیون نفری استانبول سبب شده تا صنعت حمل و نقل عمومی در این شهر توسعه زیادی داشته باشد.
                            به غیر از این موضوعات، امروزه استانبول از زیرساخت شهری قابل قبولی برخوردار است و با توجه به فراهم بودن بسترهای لازم برای سرمایه گذاری در ترکیه، خرید خانه در استانبول خود می‌تواند به عنوان یک سرمایه‌گذاری سودبخش به حساب بیاید. با توجه به نمودار رشد جمعیتی استانبول، بدون شک می‌توان گفت که با خرید ملک در استانبول می‌توان سرمایه‌ی خود را در عرض چند سال چندین برابر کرد.
                            <br> یکی دیگر از پارامترهای مهم برای زندگی در یک شهر، هزینه‌های زندگی است. به صورت کلی در تمام نقاط ترکیه از جمله استانبول، مایحتاج زندگی با قیمتی بسیار مناسب در اختیار مردم قرار می‌گیرد. از طرفی هزینه‌های زندگی و دخل و خرج تفاوت چندانی با تهران ندارد و تقریبا می‌توان گفت که هزینه زندگی در استانبول، حدود 10 الی 15 درصد بیشتر از هزینه زندگی در تهران است. در نتیجه اگر شما یک کسب و کار معقول داشته باشید، به راحتی از پس هزینه شهروندی در ترکیه برخواهید آمد.
                            در کنار این موضوعات پروسه خرید خانه در استانبول و سایر نقاط ترکیه بسیار ساده است و به سرعت انجام می‌شود که این موضوع یکی از مواردی است که دولت ترکیه برای رفاه حال اتباع خارجی در نظر گرفته است.

                        </p>
                    </div>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <h2 style="text-align:justify" class="animated fadeIn" id="5">نکات مهم در خرید ملک در استانبول</h2>

                        <p style="text-align:justify">
                            زمان  <a href="{{url("/")}}">سرمایه گذاری ملکی در استانبول</a> ، با توجه به اینکه در کشور دیگری هستید و با شرایط، آداب و رسوم و قوانین آن کشور آشنایی ندارید، این امکان وجود دارد که دچار سردرگمی شوید. در این قسمت سعی می‌کنیم یکسری نکات را به شما یادآوری کنیم که در هنگام خرید ملک در شهر استانبول باید مد نظر قرار دهید تا بتوانید خریدی مطمئن داشته باشید.
                        </p>
                    </div>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <p style="text-align:center"><img alt="" src="{{url('/image')}}/78535454424.jpg"></p>
                    <p style="text-align:center">شرایط خرید خانه در استانبول.</p>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <p style="text-align:justify">
                            <br>اولین نکته مهم در خرید ملک در استانبول، سند ملک است. قبل از هر چیزی شما باید از مدارک زمین و خانه اطمینان کامل حاصل کنید و مطمئن شوید که همه چیز در این پروسه درست است. اگر خودتان در این حوزه اطلاعات کافی دارید که هیچ؛ اگر اطلاعات دقیقی در خصوص سندهای ملکی در ترکیه ندارید، بهتر است با یک شخص خبره مشورت کنید.
                            <br>بعد از اطمینان از درستی مدارک و اسناد ملک خریداری شده، پرداخت قبوض برق، آب، گاز و تلفن و عوارض ملک نکته‌ای است که باید مورد توجه قرار گیرد.<br> حتما مطمئن شوید که مالک قبلی تمام قبوض و عوارض ملک را پرداخت کرده و سپس آن را به شما واگذار کند.
                            <br>نکته مهم بعدی که باید در خرید ملک در استانبول در نظر داشته باشید، شکل ساخت سازه و کیفیت ساخت آن است. اینکه از چه مصالحی برای ساخت خانه استفاده شده و آیا استانداردهای ساختمان سازی در آن رعایت شده یا نه؟ یکی از نکات مهمی است که باید به آن توجه شود. از طرفی مقاومت سازه در برابر زلزله هم امری بسیار مهم در ساختمان سازی است که حتما باید مد نظر قرار گیرد.
                            در کنار تمام موارد ذکر شده، منطقه‌ای که ملک در آن قرار دارد هم بسیار مهم است. شلوغی یا خلوتی منطقه، موقعیت مکانی ملک، پایین شهر بودن یا بالا شهر بودن ملک و مواردی از این دست هم از جمله نکاتی است که باید حتما در خرید ملک در استانبول مورد توجه قرار گیرد تا بعد از خرید موجب پشیمانی نشود.

                        </p>
                    </div>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <h3 style="text-align:justify" class="animated fadeIn" id="6">بهترین مناطق استانبول برای خرید ملک </h3>

                        <p style="text-align:justify">
                            در هنگام خرید ملک در استانبول اگر بحث قیمت برای شما اهمیت چندانی نداشته باشد، بشیکتاش یکی از مناطق بسیار زیبا و جذاب استانبول برای خرید ملک است. این منطقه در بخش اروپایی استانبول قرار داشته و در مجاورت تنگه بسفر و کنار ساحل زیبای دریای مدیترانه قرار دارد. از طرفی محله قاضی کوی هم یکی دیگر محله‌های جذاب استانبول است که قیمت مناسب‌تری نسبت به بشیکتاش دارد.<br> این منطقه در بخش آسیایی شهر استانبول و در کنار دریای مرمره و نزدیکی تنگه بسفر قرار دارد و یکی از لوکس‌ترین محله‌های استانبول است.
                            از طرفی محله باکرکوی، محله شیشلی و منطقه فاتیح از جمله جذابترین محله‌ها برای  <a href="{{url("/")}}">خرید خانه در استانبول </a>  به حساب می‌آیند. البته قیمت ملک در این محله‌ها نسبتا بالا است که با توجه به جاذبه و زیبایی خاصی که دارند کاملا منطقی است.
                            همچنین محله‌هایی چون بیلیکدوزو و محله اسنیورت به همراه منطقه بویوک چکمجه از جمله مناطقی هستند که در ترکیه بیشتر مد نظر ایرانی‌ها قرار می‌گیرند. لازم به ذکر است که دو منطقه اول جزو مناطق ارزان نشین ترکیه هستند و منطقه بویوک چکمجه هم یک منطقه متوسط از نظر کیفیت و سبک زندگی در استانبول به حساب می‌آیند.

                        </p>
                    </div>
                </div>

                <div class="col-md-6 mx-auto py-2">
                    <div class="page_text">
                        <h4 style="text-align:justify" class="animated fadeIn" id="7">برای خرید ملک در استانبول به سراغ این محله‌ها نروید!</h4>

                        <p style="text-align:justify">
                            در کنار تمام محله‌های خوبی که برای خرید ملک در استانبول وجود دارد، این شهر محله‌ها و خیابان‌های خطرناکی هم دارد. سه محله آکسارای، کمال پاشا و دولاب دره از جمله محله‌های خطرناک ترکیه هستند.<br> لذا بهتر است اصلا به فکر خرید خانه در این محله‌ها و حتی گشت و گذار در آن‌ها هم نباشید. محله آکسارای عموما پاتوق آوارگان سوری و عراقی بوده و اصلا محله خوبی برای زندگی نیست. در کمال پاشا هم سابقه درگیری با ایرانیان بسیار زیاد بوده است. از طرفی دولاب دره هم یکی از محله‌های فقیرنشین استانبول است که افراد ناسالمی در آن رفت و آمد می‌کنند.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mx-auto py-2">
                    <p style="text-align:center"><img alt="" src="{{url('/image')}}/low-place.jpg"></p>
                    <p style="text-align:center">محله کمال پاشا در استانبول</p>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <h3 style="text-align:justify" class="animated fadeIn" id="8">دریافت اقامت با خرید خانه در استانبول</h3>

                        <p style="text-align:justify">
                            یکی از قوانینی که در کشور ترکیه برای تبعه‌های خارجی وجود دارد، اقامت از طریق سرمایه گذاری و خرید ملک و خانه در ترکیه است. قبل از اینکه بخواهیم به این سوال بپردازیم که چگونه می‌توان با خرید ملک اقامت کشور ترکیه را دریافت کرد؛ بهتر است درباره این موضوع صحبت کنیم که خرید خانه در استانبول و دیگر شهرهای ترکیه چه فایده‌ای دارد؟ و چرا باید میان این همه کشور دنیا، برای خرید ملک در ترکیه اقدام کنیم؟
                            قطعا بخش عمده‌ای از جواب این سوال در قسمت‌های قبلی داده شده است.<br> همچنین علاوه بر تمام مزایایی که ذکر شد، باید به این نکته هم اشاره کرد که ترکیه یکی از کشورهایی است که در بین کشورهای معتبر جهان جایگاه خاصی دارد و دریافت پاسپورت ترکی می‌تواند کار سفر به برخی نقاط دنیا از جمله امریکا را برای شما بسیار ساده‌تر کند و لذا اگر به دنبال اقامت در کشورهای پیشرفته‌تر و غربی هستید، ترکیه می‌تواند پل خوبی برای رسیدن به هدفتان باشد.

                        </p>
                    </div>
                </div>
                <div class="col-md-12 mx-auto py-2">
                    <p style="text-align:center"><img alt="" src="{{url('/image')}}/sd8fsj83h2nsfd.jpg"></p>
                    <p style="text-align:center">شرایط خرید خانه در استانبول.</p>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <p style="text-align:justify">
                            <br>  در خصوص اقامت با خرید ملک در ترکیه لازم به ذکر است که این روزها شرایط اخذ اقامت در ترکیه بسیار ساده‌تر شده است. با خرید یک خانه به ارزش 250 هزار دلار در این کشور می‌توان صاحب اقامت در ترکیه و در نتیجه دریافت پاسپورت ترکی شد. در قوانین کشور ترکیه، شهروندان ایرانی، شهروندان تمامی کشورهای عضو اتحادیه اروپا و شهروندان کشورهایی مانند کانادا و آمریکا قادرند با خرید ملک در این کشور اقامت ترکیه را دریافت کنند.
                            <br>شخص بعد از خرید ملک و تکمیل مدارک باید به اداره ثبت اسناد رسمی ترکیه یعنی نوتر مراجعه کرده و فرآیند انتقال را تکمیل کند. پس از آن متقاضی می‌تواند به اداره مهاجرت کشور ترکیه مراجعه کرده و نوبت دریافت می‌کند. پس از آن باید به یکسری سوالات مصاحبه‌ای ساده پاسخ داده شود و پس از طی این مرحله حدود یک ماه بعد کارت اقامت دائم کشور ترکیه برای شما ارسال خواهد شد.
                            از طرفی اگر ملک خریداری شده، ارزشی کمتر از 250 هزار دلار داشته باشد، مراحلی که باید طی کنید شبیه مراحل قبل است. البته در اینجا کارت اقامتی که به شما تعلق می‌گیرد یک سال اعتبار دارد و پس از آن باید هر ساله آن را تمدید کنید. لازم به ذکر است که تمدید کارت اقامت برای ملک‌هایی که ارزش کمتری از 250 هزار دلار دارند، پروسه‌ای پیچیده‌تر دارد.

                        </p>
                    </div>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <h3 style="text-align:justify" class="animated fadeIn" id="9">قوانین خرید خانه در استانبول</h3>

                        <p style="text-align:justify">
                            <br> به صورت کلی قوانین خاصی برای دریافت اقامت در ترکیه از طریق خرید ملک وجود ندارد و شما نه تنها با خرید ملک در استانبول، که با خرید ملک در هر شهری از این کشور می‌توانید اقامت ترکیه را دریافت کنید. لازم به ذکر است که تنها موضوعی که در اقامت با خرید ملک در کشور ترکیه وجود دارد این است که شما بعد از خرید ملک و دریافت اقامت حداقل تا 3 سال قادر به فروش ملک نیستید وگرنه اقامت شما باطل خواهد شد.
                            از طرفی در هنگام خرید خانه در استانبول یا باید هر شش دانگ سند خانه به نام شما زده شود و یا اینکه به صورت 3 دانگ، 3 دانگ سند به نام شما و یکی از اعضای خانواده‌تان خورده شود تا بتوانید اقامت ترکیه را دریافت کنید. به غیر از این موضوع، هیچ قانون خاص دیگری برای دریافت اقامت در کشور ترکیه از طریق خرید ملک وجود ندارد.<br>

                            لازم به ذکر است که شخص هنگام خرید یک ملک با ارزش 250 هزار دلار و یا بالاتر از آن می‌تواند برای خودش، همسر و فرزندان زیر 18 سالش اقامت کشور ترکیه را دریافت کند. از طرفی با توجه به قانونی که در پاراگراف قبل ذکر شد، اگر فرزندی دارید که بالای 18 سال سن دارد، می‌توانید او را در سند ملک خود شریک کنید تا به این صورت کارت اقامت برای او هم صادر شود.

                        </p>
                    </div>
                </div>

                <div class="col-md-12 mx-auto py-2">
                    <div class="page_text">
                        <h3 style="text-align:justify" class="animated fadeIn" id="10">جمع بندی</h3>

                        <p style="text-align:justify">
                             <a href="{{url("/")}}">خرید خانه در استانبول </a>  یکی از بهترین و ساده‌ترین راه‌ها برای دریافت اقامت ترکیه است. از جمله مهمترین مزایای خرید خانه در شهر استانبول می‌توان به موارد زیر اشاره کرد:
                        </p>
                        <ul>
                            <li>هزینه زندگی در استانبول تقریبا مناسب است</li>
                            <li>استانبول دارای بافت شهری بسیار زیبایی است.</li>
                            <li>استانبول به دریای مدیترانه نزدیک بوده و هوایی معتدل و مرطوب دارد.</li>
                            <li>قیمت ملک در استانبول تقریبا برابر قیمت خانه در تهران است.</li>
                            <li>با خرید ملک در ترکیه می‌توان پاسپورت ترکی دریافت کرد.</li>

                        </ul>
                    </div>
                </div>

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
