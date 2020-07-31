@extends('layouts.backLayout')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Show Comment</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Post</th>
                        <th>Description</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            @php
                                $userId = $comment->user_id;
                                $user = \App\User::find($userId);
                            @endphp
                            <td>{{$user->first_name}} {{$user->last_name}}</td>
                            @php
                                $postId = $comment->post_id;
                                $post = \App\Post::find($postId);
                            @endphp
                            <td>{{$post->slug}}</td>
                            <td>{{$comment->description}}</td>
                            <td>{{$comment->created_at}}</td>
                            <td>{{$comment->updated_at}}</td>
                            <td>
                                <form method="post" action="{{route('comment.destroy',$comment->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger list-inline">Delete</button>
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
