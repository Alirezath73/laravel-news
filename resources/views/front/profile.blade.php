@extends('layouts.frontLayout')
@section('banner')
    <div class="banner two">
        <div class="container">
            <h2 class="inner-tittle">پروفایل {{$user->last_name}}</h2>
        </div>
    </div>
@endsection
@section('content')
    <!--account-->
    <div class="account">
        <div class="container">
            <div class="account-bottom">
                <div class="col-md-6 account-right">
                    <form method="post" action="{{route('profile.update',$user->email)}}">
                        @csrf
                        <div class="account-top heading">
                            <h3 style="color: #00bf4f">
                                {{session('status')}}
                            </h3>
                        </div>
                        <div class="address form-group">
                            <span>نام</span>
                            <input type="text" name="first_name"
                                   class="form-control @error('first_name') is-invalid @enderror"
                                   value="{{$user->first_name}}" disabled>
                            @error('first_name')
                            <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="address form-group">
                            <span>نام خانوادگی</span>
                            <input type="text" name="last_name"
                                   class="form-control @error('last_name') is-invalid @enderror"
                                   value="{{$user->last_name}}" disabled>
                            @error('last_name')
                            <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="address form-group">
                            <span>آدرس ایمیل</span>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                   value="{{$user->email}}" disabled>
                            @error('email')
                            <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="address form-group">
                            <span>رمز عبور</span>
                            <input type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="address form-group">
                            <span>تکرار رمز عبور</span>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        <div class="address form-group">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @error('g-recaptcha-response')
                            <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="address new form-group">
                            <input type="submit" value="ارسال">
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
