@extends('layouts.backLayout')
@section('content')
    <div class="row small-spacing">
        <div class="col-sm-12">
            <div class="box-content">
                <h4 class="box-title">Show Post</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Author</th>
                        <th>Categories</th>
                        <th>Status</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->slug}}</td>
                            <td>
                                @php
                                    $authorId=$post->author_id;
                                    $author=\App\Author::find($authorId);
                                @endphp
                                {{$author->first_name}} {{$author->last_name}}
                            </td>
                            <td>
                                @php
                                    $categories=$post->categories()->pluck('name');
                                @endphp
                                @foreach($categories as $category)
                                    <span class="label label-success">{{$category}}</span>
                                @endforeach
                            </td>
{{--                            <td>{{$post->description}}</td>--}}
                            <td>
                                @if($post->status == 1)
                                    Visible
                                @else
                                    Hidden
                                @endif
                            </td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{route('post.edit',$post->slug)}}">Update</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('post.destroy',$post->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-content -->
        </div>
    </div>
@endsection
