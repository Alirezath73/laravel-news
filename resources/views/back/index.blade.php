@extends('layouts.backLayout')
@section('content')
    <div class="row small-spacing">
        <div class="col-lg-3 col-xs-12" style="display: contents">
            <div class="box-content">
                <div class="statistics-box with-icon">
                    <i class="ico ti-clipboard text-inverse"></i>
                    @php
                        $countPost= \App\Post::count();
                    @endphp
                    <h2 class="counter text-inverse">{{$countPost}}</h2>
                    <p class="text">Posts</p>
                </div>
                <!-- .statistics-box .with-icon -->
            </div>
            <!-- /.box-content -->

            <div class="box-content">
                <div class="statistics-box with-icon">
                    <i class="ico ti-crown text-success"></i>
                    @php
                        $countAdmin= \App\Admin::count();
                    @endphp
                    <h2 class="counter text-success">{{$countAdmin}}</h2>
                    <p class="text">Admins</p>
                </div>
                <!-- .statistics-box .with-icon -->
            </div>
            <!-- /.box-content -->

            <div class="box-content">
                <div class="statistics-box with-icon">
                    <i class="ico ti-user text-primary"></i>
                    @php
                        $countUser= \App\User::count();
                    @endphp
                    <h2 class="counter text-primary">{{$countUser}}</h2>
                    <p class="text">Users</p>
                </div>
                <!-- .statistics-box .with-icon -->
            </div>
            <!-- /.box-content -->
        </div>
    </div>
@endsection
