<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link rel="stylesheet" href="{{asset('back/styles/style.min.css')}}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{asset('back/plugin/waves/waves.min.css')}}">

</head>

<body>

<div id="single-wrapper">
    <form method="post" action="{{route('dashboard.login.post')}}" class="frm-single">
        @csrf
        <div class="inside">
            <!-- /.title -->
            <div class="frm-title">Login</div>
            <!-- /.frm-title -->
            <div class="frm-input">
                <input name="email" value="{{old('email')}}" type="email" placeholder="email" class="frm-inp">
                <i class="fa fa-user frm-ico"></i>
                @error('email')
                <strong>{{$message}}</strong>
                @enderror
            </div>
            <!-- /.frm-input -->
            <div class="frm-input">
                <input name="password" type="password" placeholder="Password" class="frm-inp">
                <i class="fa fa-lock frm-ico"></i>
                @error('password')
                <strong>{{$message}}</strong>
                @enderror
            </div>
            <div class="frm-input">
                {!! NoCaptcha::renderJs() !!}{!! NoCaptcha::display() !!}
                @error('g-recaptcha-response')
                <strong>{{$message}}</strong>
                @enderror
            </div>
            <!-- /.frm-input -->
            {{--<div class="clearfix margin-bottom-20">
                <!-- /.pull-left -->
                <div class="pull-right"><a href="page-recoverpw.html" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div>
                <!-- /.pull-right -->
            </div>--}}
            <!-- /.clearfix -->
            <button type="submit" class="frm-submit">
                Login
                <i class="fa fa-arrow-circle-right"></i>
            </button>
        </div>
        <!-- .inside -->
    </form>
    <!-- /.frm-single -->
</div><!--/#single-wrapper -->

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
<script src="{{asset('back/plugin/nprogress/nprogress.js')}}"></script>
<script src="{{asset('back/plugin/waves/waves.min.js')}}"></script>

<script src="{{asset('back/scripts/main.min.js')}}"></script>
</body>
</html>
