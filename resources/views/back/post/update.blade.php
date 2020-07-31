@extends('layouts.backLayout')
@section('content')
    <div class="row small-spacing">
        <h2 style="color: #00ce55;text-align: center">{{session('status')}}</h2>
        <div class="col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Update Post</h4>
                <!-- /.box-title -->
                <div class="card-content">
                    <form class="form-horizontal" method="post" action="{{route('post.update',$post->id)}}"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="inputEmail3"
                                       value="{{$post->title}}">
                                @error('title')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Slug</label>
                            <div class="col-sm-10">
                                <input disabled type="text" name="slug" class="form-control" id="inputEmail3"
                                       value="{{$post->slug}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Author</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="author_id">
                                    @foreach($authors as $author)
                                        @if($author->id == $post->author_id)
                                            <option selected
                                                    value="{{$author->id}}">{{$author->first_name}} {{$author->last_name}}</option>
                                        @else
                                            <option
                                                value="{{$author->id}}">{{$author->first_name}} {{$author->last_name}}</option>
                                        @endif
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
                                    @if($post->status == 1)
                                        <option selected value="1">Visible</option>
                                        <option value="0">Hidden</option>
                                    @elseif($post->status == 0)
                                        <option selected value="0">Hidden</option>
                                        <option value="1">Visible</option>
                                    @endif
                                </select>
                                @error('status')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Short Description</label>
                            <div class="col-sm-10">
                                <textarea name="short_description" id="" cols="60" rows="10">{{$post->short_description}}</textarea>
                                @error('short_description')
                                <strong>{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Long Description</label>
                            <div class="col-sm-10">
                                <textarea name="long_description" id="" cols="60" rows="10">{{$post->long_description}}</textarea>
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
                                            <option
                                                value="{{$category->id}}" {{in_array($category->id,$postCategoriesIds) ? 'selected' : ''}}>
                                                {{$category->name}}
                                            </option>
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
                                <label for="" class="col-sm-2 control-label">Current Images</label>
                                <div class="col-sm-10">
                                    <h4 style="color: red"><b>Click on images for delete</b></h4>
                                    @foreach($PostImages as $image)
                                        @if(file_exists(public_path('/uploads/'.$image->image_url)))
                                            <img data-id="{{$image->id}}" id="oldImg"
                                                 src="/uploads/{{$image->image_url}}" alt=""
                                                 style="width: 100px;height: 100px;margin: 0.5px;border: 0.5px solid black;cursor: pointer">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">New Images</label>
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
