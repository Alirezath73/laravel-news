@extends('layouts.frontLayout')
@section('banner')
    <div class="banner two">
        <div class="container">
            <h2 class="inner-tittle">حساب من</h2>
        </div>
    </div>
@endsection
@section('content')
    <!--account-->
    <div class="account">
        <div class="container">
            <div class="account-bottom">
                <div class="col-md-6 account-right second">
                    <form method="Post" action="{{route('login')}}">
                        @csrf
                        <div class="account-top heading">
                            <h3>
                                مشتریان ثبت نام شده
                            </h3>
                        </div>
                        <div class="address form-group">
                            <span>آدرس ایمیل</span>
                            <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email"
                                   value="{{old('email')}}">
                            @error('email')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="address form-group">
                            <span>رمز عبور</span>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password">
                            @error('password')
                            <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="address form-group">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @error('g-recaptcha-response')
                            <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="address form-group">
                            {{--                            <a class="forgot" href="#">رمز ورود خود را فراموش کرده اید?</a>--}}
                            <input type="submit" value="ورود به سیستم">
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

