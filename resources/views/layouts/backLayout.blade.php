<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - SpaceX Template</title>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('back/styles/style.min.css')}}">

    <!-- Themify Icon -->
    <link rel="stylesheet" href="{{asset('back/fonts/themify-icons/themify-icons.css')}}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{asset('back/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{asset('back/plugin/waves/waves.min.css')}}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{asset('back/plugin/sweet-alert/sweetalert.css')}}">

    <!-- Percent Circle -->
    <link rel="stylesheet" href="{{asset('back/plugin/percircle/css/percircle.css')}}">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="{{asset('back/plugin/chart/chartist/chartist.min.css')}}">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="{{asset('back/plugin/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/plugin/fullcalendar/fullcalendar.print.css')}}" media='print'>

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{asset('back/plugin/datatables/media/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('back/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css')}}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('back/plugin/select2/css/select2.min.css')}}">

</head>

<body>
<div class="main-menu">
    <header class="header">
        <a href="{{route('dashboard')}}" class="logo"><i class="ico ti-panel"></i>Admin Panel</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <h5 class="title">Navigation</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                <li class="current">
                    <a class="waves-effect" href="{{route('dashboard')}}"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
                </li>
                {{--<li>
                    <a class="waves-effect" href="calendar.html"><i
                            class="menu-icon ti-calendar"></i><span>Admin</span></a>
                </li>--}}
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i
                            class="menu-icon ti-crown"></i><span>Admin</span><span
                            class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="{{route('admin.index')}}">Show</a></li>
                        <li><a href="{{route('admin.create')}}">Create</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
                <li>
                    <a class="waves-effect" href="{{route('user.index')}}"><i
                            class="menu-icon ti-user"></i><span>User</span></a>
                </li>
                <li>
                    <a class="waves-effect parent-item js__control" href="{{route('comment.index')}}"><i
                            class="menu-icon ti-comment-alt"></i><span>Comment</span>
                        <!-- /.sub-menu js__content -->
                    </a>
                </li>
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i
                            class="menu-icon ti-clipboard"></i><span>Post</span><span
                            class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="{{route('post.index')}}">Show</a></li>
                        <li><a href="{{route('post.create')}}">Create</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i
                            class="menu-icon ti-layout-list-thumb"></i><span>Category</span><span
                            class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="{{route('category.index')}}">Show</a></li>
                        <li><a href="{{route('category.create')}}">Create</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i
                            class="menu-icon ti-write"></i><span>Author</span><span
                            class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="{{route('author.index')}}">Show</a></li>
                        <li><a href="{{route('author.create')}}">Create</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
            </ul>
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title">Home</h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
    {{--<div class="ico-item">
        <a href="#" class="ico-item ti-search js__toggle_open" data-target="#searchform-header"></a>
        <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search"
                                                                                     placeholder="Search..."
                                                                                     class="input-search">
            <button class="ti-search button-search" type="submit"></button>
        </form>
        <!-- /.searchform -->
    </div>--}}
    <!-- /.ico-item -->
        {{--<a href="#" class="ico-item ti-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
        <a href="#" class="ico-item ti-bell notice-alarm js__toggle_open" data-target="#notification-popup"></a>--}}
        <div class="ico-item">
            {{--            <i class="ti-user"></i>--}}
            {{--            <ul class="sub-ico-item">--}}
            {{--                <li><a href="#">Settings</a></li>--}}
            {{--                <li><a class="js__logout" href="#">Log Out</a>--}}
            <form method="post" action="{{route('dashboard.logout')}}">
                @csrf
                <button class="btn btn-sm btn-danger" type="submit">Log Out</button>
            </form>
        {{--                </li>--}}
        {{--            </ul>--}}
        <!-- /.sub-ico-item -->
        </div>
    </div>
    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
    <h2 class="popup-title">Your Notifications</h2>
    <!-- /.popup-title -->
    <div class="content">
        <ul class="notice-list">
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">John Doe</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">10 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Anna William</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">15 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
                    <span class="name">Update Status</span>
                    <span class="desc">Failed to get available update data. To ensure the please contact us.</span>
                    <span class="time">30 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                    <span class="name">Jennifer</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Michael Zenaty</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">50 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Simon</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">1 hour</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
                    <span class="name">Account Contact Change</span>
                    <span class="desc">A contact detail associated with your account has been changed.</span>
                    <span class="time">2 hours</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Helen 987</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">Yesterday</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                    <span class="name">Denise Jenny</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">Oct, 28</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Thomas William</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">Oct, 27</span>
                </a>
            </li>
        </ul>
        <!-- /.notice-list -->
        <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
    </div>
    <!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="75">
    <h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
    <!-- /.popup-title -->
    <div class="content">
        <ul class="notice-list">
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">John Doe</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">10 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Harry Halen</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">15 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Thomas Taylor</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">30 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                    <span class="name">Jennifer</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Helen Candy</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                    <span class="name">Anna Cavan</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">1 hour ago</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-success"><i class="fa fa-user"></i></span>
                    <span class="name">Jenny Betty</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">1 day ago</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                    <span class="name">Denise Peterson</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">1 year ago</span>
                </a>
            </li>
        </ul>
        <!-- /.notice-list -->
        <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
    </div>
    <!-- /.content -->
</div>
<!-- /#message-popup -->
<div id="wrapper">
    <div class="main-content">
        @yield('content')
        <footer class="footer">
            <ul class="list-inline">
                <li>2016 © NinjaAdmin.</li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </footer>
    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="{{asset('back/scripts/html5shiv.min.js')}}"></script>
<script src="{{asset('back/scripts/respond.min.js')}}"></script>
<![endif]-->
<!--
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('back/scripts/jquery.min.js')}}"></script>
<script src="{{asset('back/scripts/modernizr.min.js')}}"></script>
<script src="{{asset('back/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('back/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('back/plugin/nprogress/nprogress.js')}}"></script>
<script src="{{asset('back/plugin/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{asset('back/plugin/waves/waves.min.js')}}"></script>
<!-- Sparkline Chart -->
<script src="{{asset('back/plugin/chart/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('back/scripts/chart.sparkline.init.min.js')}}"></script>

<!-- Percent Circle -->
<script src="{{asset('back/plugin/percircle/js/percircle.js')}}"></script>

<!-- Google Chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- Chartist Chart -->
<script src="{{asset('back/plugin/chart/chartist/chartist.min.js')}}"></script>
<script src="{{asset('back/scripts/jquery.chartist.init.min.js')}}"></script>

<!-- FullCalendar -->
<script src="{{asset('back/plugin/moment/moment.js')}}"></script>
<script src="{{asset('back/plugin/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('back/scripts/fullcalendar.init.js')}}"></script>

<!-- Data Tables -->
<script src="{{asset('back/plugin/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('back/plugin/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('back/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('back/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js')}}"></script>
<script src="{{asset('back/scripts/datatables.demo.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('back/plugin/select2/js/select2.min.js')}}"></script>

<script>

    //ajax csrf token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //select2
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });

    //button for image addMore/deleteMore
    $(document).ready(function () {

        $('#add').click(function () {
            $('#divImage').append('<input type="file" id="moreImage" name="images[]" multiple>');
        });

        $('#del').click(function () {
            $('#moreImage').remove();
        });

        //delete image with ajax
        $('#oldImg').click(function () {
            var imageId = $(this).attr('data-id');
            $.ajax({
                url: '{{route('dashboard.delete.image')}}',
                method: 'post',
                data: {id: imageId},
                success: function () {
                    $('#oldImg').remove();
                },
                error: function () {
                }
            });
        });

    });
</script>

<script src="{{asset('back/scripts/main.min.js')}}"></script>

</body>
</html>
