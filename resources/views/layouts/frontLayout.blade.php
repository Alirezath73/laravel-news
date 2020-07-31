<!--فارسی شضده توسط مرجع تخصصی برنامه نویسان-->
<!DOCTYPE HTML>
<html lang="">
<head>
    <title>قالب سایت خبری</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Motive Mag Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="{{asset('/front/css/bootstrap-3.1.1.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom Theme files -->
    <link href="{{asset('/front/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('/front/css/style.css')}}" rel='stylesheet' type='text/css'/>
    <script src="{{asset('/front/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/front/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('/front/js/easing.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/front/css/flexslider.css')}}" type="text/css" media="screen"/>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
            });
        });
    </script>
    <style>
        #search {
            z-index: 9999;
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);

            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;

            -webkit-transform: translate(0px, -100%) scale(0, 0);
            -moz-transform: translate(0px, -100%) scale(0, 0);
            -o-transform: translate(0px, -100%) scale(0, 0);
            -ms-transform: translate(0px, -100%) scale(0, 0);
            transform: translate(0px, -100%) scale(0, 0);

            opacity: 0;
        }

        #search.open {
            -webkit-transform: translate(0px, 0px) scale(1, 1);
            -moz-transform: translate(0px, 0px) scale(1, 1);
            -o-transform: translate(0px, 0px) scale(1, 1);
            -ms-transform: translate(0px, 0px) scale(1, 1);
            transform: translate(0px, 0px) scale(1, 1);
            opacity: 1;
        }

        #search input[type="search"] {
            position: absolute;
            top: 50%;
            width: 100%;
            color: rgb(255, 255, 255);
            background: rgba(0, 0, 0, 0);
            font-size: 60px;
            font-weight: 300;
            text-align: center;
            border: 0px;
            margin: 0px auto;
            margin-top: -51px;
            padding-left: 30px;
            padding-right: 30px;
            outline: none;
        }

        #search .btn {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: 61px;
            margin-left: -45px;
        }

        #search .close {
            position: fixed;
            top: 15px;
            right: 15px;
            color: #fff;
            background-color: #428bca;
            border-color: #357ebd;
            opacity: 1;
            padding: 10px 17px;
            font-size: 27px;
        }

        * { box-sizing: border-box; }
        body {
            font: 16px Arial;
        }
        .autocomplete {
            /*the container must be positioned relative:*/
            width: 300px;
            position: absolute;
            display: inline-block;
            top: 55%;
            left: 49%;
            transform: translate(-50%,-50%);
        }
        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }
        input[type=text] {
            background-color: #f1f1f1;
            width: 100%;
        }
        input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
        }
        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }
        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }
        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }
        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
</head>
<body>
<div class="header" id="home">
    <div id="search">
        <button type="button" class="close">×</button>
        <form autocomplete="off" method="get" action="{{route('post.search')}}">
            {{--            <input autocomplete="off" name="q" type="search" value="" placeholder="جستجوی خبر"/>--}}
            <div class="autocomplete">
                <input id="myInput" type="text" name="q" placeholder="جستجوی خبر">
            </div>
            <button type="submit" class="btn btn-primary">جستجو</button>
        </form>
    </div>
    <div class="content white">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">
تبدیل ناوبری
</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('index')}}"><h1>Motive<span> Mag</span></h1></a>
                </div>
                <!--/.navbar-header-->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    {{--@foreach($navigations as $navigation)
                        {{$navigation->name}}
                    @endforeach--}}
                    <ul class="nav navbar-nav">
                        {{--<li><a href="fashion.html">اخبار روز</a></li>
                        <li><a href="sports.html">ورزشی</a></li>--}}
                        @foreach($navigations as $navigation)
                            @if($navigation->parent_id == null)
                                <li class="dropdown">
                                    @if($navigation->children()->count() > 0)
                                        <a href="{{route('category.posts',$navigation->name)}}" class="dropdown-toggle"
                                           data-toggle="dropdown">{{$navigation->name}}
                                            <b
                                                class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column">
                                            @foreach($navigation->children as $lvl1)
                                                <li>
                                                    <a href="{{route('category.posts',$lvl1->name)}}">{{$lvl1->name}}</a>
                                                    @if($lvl1->children()->count() > 0)
                                                        <ol class="multi-column-dropdown">
                                                            @foreach($lvl1->children as $lvl2)
                                                                <li>
                                                                    <a href="{{route('category.posts',$lvl2->name)}}">{{$lvl2->name}}</a>
                                                                    @if($lvl2->children()->count() > 0)
                                                                        <ol class="multi-column-dropdown">
                                                                            @foreach($lvl2->children as $lvl3)
                                                                                <li>
                                                                                    <a href="{{route('category.posts',$lvl3->name)}}">{{$lvl3->name}}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ol>
                                                                    @endif
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @endif
                                                </li>
                                                <li class="divider"></li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <a href="" class="dropdown-toggle"
                                           data-toggle="dropdown">{{$navigation->name}}</a>
                                    @endif

                                </li>
                            @endif
                        @endforeach
                        {{--<li class="dropdown">
                            <a href="entertainment.html" class="dropdown-toggle" data-toggle="dropdown">سرگرمی<b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="entertainment.html">فیلم</a></li>
                                <li class="divider"></li>
                                <li><a href="entertainment.html">لورم ایپسوم</a></li>
                                <li class="divider"></li>
                                <li><a href="articles.html">مقالات</a></li>
                                <li class="divider"></li>
                                <li><a href="entertainment.html">طرح نما</a></li>
                                <li class="divider"></li>
                                <li><a href="entertainment.html">یک لینک بیش از هم جدا</a></li>
                            </ul>
                        </li>--}}
                        {{-- <li><a href="typography.html">سیاست</a></li>
                         <li class="dropdown">
                             <a href="business.html" class="dropdown-toggle" data-toggle="dropdown">کسب و کار<b
                                     class="caret"></b></a>
                             <ul class="dropdown-menu multi-column columns-2">
                                 <div class="row">
                                     <div class="col-sm-6">
                                         <ul class="multi-column-dropdown">
                                             <li><a href="business.html">طراح گرافیک</a></li>
                                             <li class="divider"></li>
                                             <li><a href="business.html">انیمیشن</a></li>
                                             <li class="divider"></li>
                                             <li><a href="business.html">بازار</a></li>
                                             <li class="divider"></li>
                                             <li><a href="business.html">بررسی</a></li>
                                             <li class="divider"></li>
                                             <li><a href="typography.html">کدهای کوتاه</a></li>
                                         </ul>
                                     </div>
                                     <div class="col-sm-6">
                                         <ul class="multi-column-dropdown">
                                             <li><a href="#">ویژگی ها</a></li>
                                             <li class="divider"></li>
                                             <li><a href="#">فیلم</a></li>
                                             <li class="divider"></li>
                                             <li><a href="#">ورزشی</a></li>
                                             <li class="divider"></li>
                                             <li><a href="#">بررسی</a></li>
                                             <li class="divider"></li>
                                             <li><a href="#">حساب کاربری</a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </ul>
                         </li>
                         <li><a href="contact.html">تماس با ما</a></li>--}}
                        @auth
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">کاربری<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('profile.show',Auth::user()->email)}}">پروفایل کاربری</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <form action="{{route("logout")}}" method="post">
                                            @csrf
                                            <button style="margin: 5px 15px 5px 5px" class="btn btn-sm btn-danger">
                                                خروج
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                        @guest()
                            <li><a href="{{route('login')}}">
                                    ورود
                                </a></li>
                            <li><a href="{{route('register')}}">
                                    ثبت نام
                                </a></li>
                        @endguest
                        <li style="font-size: large"><a href="#search"><span class="glyphicon glyphicon-search"></span></a>
                        </li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
                <!--/.navbar-->
                <!--فارسی شضده توسط مرجع تخصصی برنامه نویسان-->
            </div>
        </nav>
    </div>
</div>
<!--/start-banner-->
@yield('banner')
<!--//end-banner-->
<!--/start-main-->
<!--فارسی شضده توسط مرجع تخصصی برنامه نویسان-->
<div class="main-content">
    <div class="container">
        <div class="mag-inner">
            <div class="col-md-8 mag-innert-right">
                @yield('content')
            </div>
            <div class="col-md-4 mag-inner-left">
                <div class="connect">
                    <h4 class="side">
                        همیشه در ارتباط ماندن
                    </h4>
                    <ul class="stay">
                        <li class="c5-element-facebook"><a href="#"><span class="icon"></span><h5>700</h5><span
                                    class="text">

لورم ایپسوم</span></a></li>
                        <li class="c5-element-twitter"><a href="#"><span class="icon1"></span><h5>201</h5><span
                                    class="text">

لورم ایپسوم</span></a></li>
                        <li class="c5-element-gg"><a href="#"><span class="icon2"></span><h5>111</h5><span class="text">

لورم ایپسوم</span></a></li>
                        <li class="c5-element-dribble"><a href="#"><span class="icon3"></span><h5>99</h5><span
                                    class="text">

لورم ایپسوم</span></a></li>

                    </ul>
                </div>
                <div class="modern">
                    <h4 class="side">لورم ایپسوم متن ساختگی</h4>
                    <div id="example1" dir=ltr>
                        <div id="owl-demo" class="owl-carousel text-center">
                            <div class="item">

                                <img class="img-responsive lot" src="{{asset('front/images/p1.jpg')}}" alt=""/>
                            </div>
                            <div class="item">

                                <img class="img-responsive lot" src="{{asset('front/images/p2.jpg')}}" alt=""/>
                            </div>
                            <div class="item">

                                <img class="img-responsive lot" src="{{asset('front/images/p33.jpg')}}" alt=""/>
                            </div>
                            <div class="item">

                                <img class="img-responsive lot" src="{{asset('front/images/p1.jpg')}}" alt=""/>
                            </div>
                            <div class="item">

                                <img class="img-responsive lot" src="{{asset('front/images/p1.jpg')}}" alt=""/>
                            </div>
                            <div class="item">

                                <img class="img-responsive lot" src="{{asset('front/images/p2.jpg')}}" alt=""/>
                            </div>
                            <div class="item">

                                <img class="img-responsive lot" src="{{asset('front/images/p33.jpg')}}" alt=""/>
                            </div>
                            <div class="item">

                                <img class="img-responsive lot" src="{{asset('front/images/p1.jpg')}}" alt=""/>
                            </div>
                        </div>
                    </div>
                    <!-- requried-jsfiles-for owl -->
                    <!--فارسی شضده توسط مرجع تخصصی برنامه نویسان-->
                    <script src="{{asset('front/js/owl.carousel.js')}}"></script>
                    <script>
                        $(document).ready(function () {
                            $("#owl-demo").owlCarousel({
                                items: 1,
                                lazyLoad: true,
                                autoPlay: false,
                                navigation: true,
                                navigationText: true,
                                pagination: false,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 2
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 3
                                    }
                                }
                            });
                        });
                    </script>
                    <!-- //requried-jsfiles-for owl -->
                </div>
                <!--/start-sign-up-->
                <div class="sign_main">
                    <h4 class="side">
                        ثبت نام برای خبرنامه
                    </h4>
                    <div class="sign_up">
                        <p class="sign">
                            ثبت نام برای دریافت خبرنامه رایگان ما!
                        </p>
                        <form>
                            <input type="text" class="text" value="نام" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Name';}">
                            <input type="text" class="text" value="آدرس ایمیل" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Email Address';}">
                            <input type="submit" value="ارسال">
                        </form>
                        <p class="spam">لورم ایپسوم متن ساختگی با تولید سادگی</p>
                    </div>
                </div>
                <!--//end-sign-up-->
                <h4 class="side">
                    محبوب پست ها
                </h4>
                <div class="edit-pics">
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="{{asset('front/images/f4.jpg')}}" class="img-responsive" alt=""/>

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                    href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="{{asset('front/images/f1.jpg')}}" class="img-responsive" alt=""/>

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                    href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="{{asset('front/images/f1.jpg')}}" class="img-responsive" alt=""/>

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                    href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="{{asset('front/images/f4.jpg')}}" class="img-responsive" alt=""/>

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                    href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--//edit-pics-->
                <!--/top-news-->
                <div class="top-news">
                    <h4 class="side">
                        اخبار مهم
                    </h4>
                    <div class="top-inner">
                        <div class="top-text">
                            <a href="single.html"><img src="{{asset('front/images/slp.jpg')}}" class="img-responsive"
                                                       alt=""/></a>
                            <h5 class="top"><a href="single.html">نظرسنجی:لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                    از صنعت چاپ</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                    href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="top-text two">
                            <a href="single.html"><img src="{{asset('front/images/dest.jpg')}}" class="img-responsive"
                                                       alt=""/></a>
                            <h5 class="top"><a href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                    href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                    </div>
                </div>
                <!--//top-news-->
            </div>
            <div class="clearfix"></div>
        </div>
        <!--//end-mag-inner-->
    </div>
</div>
<!--فارسی شضده توسط مرجع تخصصی برنامه نویسان-->
<!--//end-main-->
<!--/start-footer-section-->
<div class="footer-section">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-4 footer-grid">
                <h4>
                    نوشته سردبیر
                </h4>
                <div class="editor-pics">
                    <div class="col-md-3 item-pic">
                        <img src="{{asset('front/images/f1.jpg')}}" class="img-responsive" alt=""/>

                    </div>
                    <div class="col-md-9 item-details">
                        <h5 class="inner"><a href="#"> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است...</a></h5>
                        <div class="td-post-date">Feb 22, 2015</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="editor-pics">
                    <div class="col-md-3 item-pic">
                        <img src="{{asset('front/images/f2.jpg')}}" class="img-responsive" alt=""/>

                    </div>
                    <div class="col-md-9 item-details">
                        <h5 class="inner"><a href="#"> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است...</a></h5>
                        <div class="td-post-date">Feb 22, 2015</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="editor-pics">
                    <div class="col-md-3 item-pic">
                        <img src="{{asset('front/images/f3.jpg')}}" class="img-responsive" alt=""/>

                    </div>
                    <div class="col-md-9 item-details">
                        <h5 class="inner"><a href="#"> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است...</a></h5>
                        <div class="td-post-date">Feb 22, 2015</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 footer-grid">
                <h4>
                    محبوب پست ها
                </h4>
                <div class="editor-pics">
                    <div class="col-md-3 item-pic">
                        <img src="{{asset('front/images/f4.jpg')}}" class="img-responsive" alt=""/>

                    </div>
                    <div class="col-md-9 item-details">
                        <h5 class="inner"><a href="#"> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است...</a></h5>
                        <div class="td-post-date">Feb 22, 2015</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="editor-pics">
                    <div class="col-md-3 item-pic">
                        <img src="{{asset('front/images/f3.jpg')}}" class="img-responsive" alt=""/>

                    </div>
                    <div class="col-md-9 item-details">
                        <h5 class="inner"><a href="#"> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است...</a></h5>
                        <div class="td-post-date">Feb 22, 2015</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="editor-pics">
                    <div class="col-md-3 item-pic">
                        <img src="{{asset('front/images/f2.jpg')}}" class="img-responsive" alt=""/>

                    </div>
                    <div class="col-md-9 item-details">
                        <h5 class="inner"><a href="#"> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است...</a></h5>
                        <div class="td-post-date">Feb 22, 2015</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 footer-grid">
                <h4>
                    دسته بندی محبوب
                </h4>
                <ul class="td-pb-padding-side">
                    <li><a href="#">معماری<span class="td-cat-no">15</span></a></li>
                    <li><a href="#">
                            نگاه جدید 2015
                            <span class="td-cat-no">14</span></a></li>
                    <li><a href="#">اسباب بازی<span class="td-cat-no">14</span></a></li>
                    <li><a href="#">
                            موبایل و تلفن
                            <span class="td-cat-no">14</span></a></li>
                    <li><a href="#">دستور غذاها<span class="td-cat-no">14</span></a></li>
                    <li><a href="#">تزئینات<span class="td-cat-no">14</span></a></li>
                    <li><a href="#">فضای داخلی<span class="td-cat-no">14</span></a></li>
                    <li><a href="#">طرح‌نما<span class="td-cat-no">13</span></a></li>
                    <li><a href="#">چاپگرها و متون<span class="td-cat-no">13</span></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//end-footer-section-->
<!--/start-copyleft-section-->
<!--فارسی شضده توسط مرجع تخصصی برنامه نویسان-->
<div class="copyleft">
    <p>

        کپی رایت@2015 تمام حقوق مادی و معنوی این سایت متعلق به گروه برنامه نویسان میباشد
        <a href="http://www.barnamenevisan.org">برنامه نویسان</a></p>
</div>


<!--start-smoth-scrolling-->
<script type="text/javascript">
    $(document).ready(function () {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                         style="opacity: 1;"> </span></a>


<!--JS-->
<script type="text/javascript" src="{{asset('/front/js/bootstrap-3.1.1.min.js')}}"></script>

<!--//JS-->
<!--فارسی شضده توسط مرجع تخصصی برنامه نویسان-->
<script>
    //simple search
    $(function () {
        $('a[href="#search"]').on('click', function (event) {
            event.preventDefault();
            $('#search').addClass('open');
            $('#search > form > input[type="search"]').focus();
        });

        $('#search, #search button.close').on('click keyup', function (event) {
            if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                $(this).removeClass('open');
            }
        });

        //autocomplete input for search
        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function (e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function (e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function (e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }

            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function (e) {
                closeAllLists(e.target);
            });
        }

        var posts = [
            @foreach($postNames as $item)
                '{{$item}}',
            @endforeach
        ];

        autocomplete(document.getElementById("myInput"), posts);
    });
</script>
</body>
</html>
