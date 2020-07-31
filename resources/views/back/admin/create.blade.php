@extends('layouts.backLayout')
@section('content')
    <div class="row small-spacing">
        <h2 style="color: #00ce55;text-align: center">{{session('status')}}</h2>
        <div class="col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Create Admin</h4>
                <!-- /.box-title -->
                <div class="card-content">
                    <form class="form-horizontal" method="post" action="{{route('admin.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="first_name" class="form-control" id="inputEmail3"
                                       value="{{old('first_name')}}">
                                @error('first_name')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="last_name" class="form-control" id="inputEmail3"
                                       value="{{old('last_name')}}">
                                @error('last_name')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile</label>
                            <div class="col-sm-10">
                                <input type="text" name="mobile" class="form-control" id="inputEmail3"
                                       value="{{old('mobile')}}">
                                @error('mobile')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="inputEmail3"
                                       value="{{old('email')}}">
                                @error('email')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputPassword3">
                                @error('password')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" class="form-control"
                                       id="inputPassword3">
                            </div>
                        </div>
                        <div class="form-group margin-bottom-0">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info btn-sm waves-effect waves-light">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-content -->
            </div>
        </div>
    </div>
@endsection
