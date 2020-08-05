@extends('layouts.frontLayout')
@section('content')
    <div class="banner-bottom-right-grids">
        <div class="single-right-grid">
            @php
                $image = $post->images()->first();
            @endphp
            <img src="/uploads/{{$image->image_url}}"
                 style="width: 600px;height: 400px;margin: 0.5px;border: 0.5px solid black" alt=""/><br>
            <h4>{{$post->title}}</h4>
            <p class="text">{{$post->long_description}}</p>
            <div class="single-bottom">
                <ul>
                    @php
                        $authorId=$post->author_id;
                        $author=App\Author::find($authorId);

                        $dateAndTime=$post->created_at;
                    $arrayDateAndTime=explode(' ',$dateAndTime);
                    @endphp
                    <li style="font-size: medium;color: red">{{$author->first_name}} {{$author->last_name}}</li>
                    <li style="font-size: medium;color: red">{{$arrayDateAndTime[0]}}</li>
                    @php
                        $countComment=$post->comments()->count();
                    @endphp
                    <li style="font-size: medium;color: red">{{$countComment}} نظر</li>
                    <br><br>
                    {{--                    <li><a href="#">ادمین</a></li>--}}
                </ul>
            </div>
        </div>
    </div>
    @auth
        <div class="leave">
            <h4>
                نظرات
            </h4>
            @php
                $comments=$post->comments()->paginate(10);
            @endphp
            @foreach($comments as $comment)
                @php
                    $userId = $comment->user_id;
                $user = App\User::find($userId);
                @endphp
                <h5 style="color: red">{{$user->first_name}} {{$user->last_name}}</h5>
                <p>{{$comment->description}}</p>
                <hr>
            @endforeach
            {{$comments->links()}}
            <h4>
                ارسال نظر
            </h4>
            <form id="commentform" method="post" action="{{route('store.comment')}}">
                @csrf
                {{--<p class="comment-form-author-name"><label for="author">نام</label>
                    <input id="author" type="text" value="" size="30" aria-required="true">
                </p>
                <p class="comment-form-email">
                    <label class="email">ایمیل</label>
                    <input id="email" type="text" value="" size="30" aria-required="true">
                </p>--}}
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <p class="comment-form-comment">
                    <label class="comment">نظر</label>
                    <textarea name="description"></textarea>
                    @error('description')
                    <strong>{{$message}}</strong>
                    @enderror
                </p>

                <div class="clearfix"></div>
                <p class="form-submit">
                    <input type="submit" id="submit" value="ارسال">
                </p>
                <div class="clearfix"></div>
            </form>

        </div>
    @endauth
    <div class="post">
        <a href="#"><h3>
                پست های مرتبط
            </h3></a>
        @foreach($posts as $item)
            @php
                $image=$item->images()->first();
            @endphp
            <div class="post-grids">
                <div class="col-md-3 post-right">
                    <img style="width: 100px;height: 100px;margin: 0.5px;border: 0.5px solid black"
                         src="/uploads/{{$image->image_url}}" alt="">
                </div>
                <div class="col-md-9 post-left">
                    <h4><a href="{{route('show.post',$item->slug)}}">{{$item->title}}</a></h4>
                    @php
                        $countComment=$item->comments()->count();
                    @endphp
                    <p class="comments">{{$countComment}} نظر</p>
                    <p class="text">{{$item->short_description}}</p>
                </div>
                <div class="clearfix"></div>
            </div>
    @endforeach
    <!--leave-->
    </div>
@endsection
