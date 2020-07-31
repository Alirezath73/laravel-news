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
    <form method="post" action="{{route('dashboard.register.post')}}" class="frm-single">
        @csrf
        <div class="inside">
            <!-- /.title -->
            <div class="frm-title">Register</div>
            <!-- /.frm-title -->
            <div class="frm-input">
                <input name="first_name" value="{{old('first_name')}}" type="text" placeholder="first name" class="frm-inp">
                <i class="fa fa-user frm-ico"></i>
                @error('first_name')
                <strong>{{$message}}</strong>
                @enderror
            </div>
            <div class="frm-input">
                <input name="last_name" value="{{old('last_name')}}" type="text" placeholder="last name" class="frm-inp">
                <i class="fa fa-user frm-ico"></i>
                @error('last_name')
                <strong>{{$message}}</strong>
                @enderror
            </div>
            <div class="frm-input">
                <input name="mobile" value="{{old('mobile')}}" type="text" placeholder="mobile" class="frm-inp">
                <i class="fa fa-user frm-ico"></i>
                @error('mobile')
                <strong>{{$message}}</strong>
                @enderror
            </div>
            <div class="frm-input">
                <input name="email" value="{{old('email')}}" type="email" placeholder="email" class="frm-inp">
                <i class="fa fa-user frm-ico"></i>
                @error('email')
                <strong>{{$message}}</strong>
                @enderror
            </div>
            <div class="frm-input">
                <input name="password" type="password" placeholder="password" class="frm-inp">
                <i class="fa fa-user frm-ico"></i>
                @error('password')
                <strong>{{$message}}</strong>
                @enderror
            </div>
            <div class="frm-input">
                <input name="password_confirmation" type="password" placeholder="password confirmation" class="frm-inp">
                <i class="fa fa-user frm-ico"></i>
            </div>
            <div class="frm-input">
                {!! NoCaptcha::renderJs() !!}{!! NoCaptcha::display() !!}
                @error('g-recaptcha-response')
                <strong>{{$message}}</strong>
                @enderror
            </div>
            <!-- /.clearfix -->
            <button type="submit" class="frm-submit">
                Register
                <i class="fa fa-arrow-circle-right"></i>
            </button>
            <!-- /.row -->
{{--            <a href="page-login.html" class="a-link"><i class="fa fa-sign-in"></i>Already have account? Login.</a>--}}
            <!-- /.footer -->
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
