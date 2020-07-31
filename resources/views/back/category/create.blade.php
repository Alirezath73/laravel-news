@extends('layouts.backLayout')
@section('content')
    <div class="row small-spacing">
        <h2 style="color: #00ce55;text-align: center">{{session('status')}}</h2>
        <div class="col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Create Category</h4>
                <!-- /.box-title -->
                <div class="card-content">
                    <form class="form-horizontal" method="post" action="{{route('category.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="inputEmail3"
                                       value="{{old('name')}}">
                                @error('name')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Parent</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="parent_id">
                                    <option value="" selected>parent</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent_id')
                                <strong>{{$message}}</strong>
                                @enderror
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
