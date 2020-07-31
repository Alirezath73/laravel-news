@extends('layouts.backLayout')
@section('content')
    <div class="row small-spacing">
        <h2 style="color: #00ce55;text-align: center">{{session('status')}}</h2>
        <div class="col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Create Post</h4>
                <!-- /.box-title -->
                <div class="card-content">
                    <form class="form-horizontal" method="post" action="{{route('post.store')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="inputEmail3"
                                       value="{{old('title')}}">
                                @error('title')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Author</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="author_id">
                                    @foreach($authors as $author)
                                        <option
                                            value="{{$author->id}}">{{$author->first_name}} {{$author->last_name}}</option>
                                    @endforeach
                                </select>
                                @error('author_id')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status">
                                    <option value="1">Visible</option>
                                    <option value="0">Hidden</option>
                                </select>
                                @error('status')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Short Description</label>
                            <div class="col-sm-10">
                                <textarea name="short_description" id="" cols="60" rows="10"></textarea>
                                @error('short_description')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Long Description</label>
                            <div class="col-sm-10">
                                <textarea name="long_description" id="" cols="60" rows="10"></textarea>
                                @error('long_description')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <fieldset>
                            <legend>Post Categories</legend>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Categories</label>
                                <div class="col-sm-10">
                                    <select class="js-example-basic-multiple form-control" name="categories[]"
                                            multiple="multiple">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('categories')
                                    <strong>{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <br>
                        </fieldset>
                        <fieldset>
                            <legend>Post Images</legend>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">images</label>
                                <div class="col-sm-10" id="divImage">
                                    <div style="margin: 0px 0px 5px 0px">
                                        <button type="button" id="add" class="btn btn-sm btn-success">add more image
                                        </button>
                                        <button type="button" id="del" class="btn btn-sm btn-danger">delete more image
                                        </button>
                                    </div>
                                    <br>
                                    <input type="file" name="images[]" multiple>
                                    @error('images')
                                    <strong>{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <br>
                        </fieldset>
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
