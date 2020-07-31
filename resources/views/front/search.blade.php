@extends('layouts.frontLayout')
@section('banner')
    <div class="banner two">
        <div class="container">
            <h2 class="inner-tittle"></h2>
        </div>
    </div>
@endsection
@section('content')
    <div class="latest-articles">
        <h3 class="tittle"><i class="glyphicon glyphicon-file"></i>
            نتایج جستجو برای عبارت : {{$input}}
        </h3>
        <div class="world-news-grids">
            @foreach($posts as $post)
                <div class="world-news-grid">
                    @php
                        $image = $post->images()->first();
                    @endphp
                    <img src="/uploads/{{$image->image_url}}"
                         style="width: 400px;height: 400px;margin: 0.5px;border: 0.5px solid black" alt=""/><br>
                    <a href="{{route('show.post',$post->slug)}}" class="wd"><h3>{{$post->title}}</h3></a>
                    <p><h5>{{$post->short_description}}</h5></p>
                    <a class="read" href="{{route('show.post',$post->slug)}}">
                        ادامه مطلب
                    </a>
                </div>
                <div class="clearfix"></div><br>
            @endforeach
            {{$posts->links()}}
        </div>
    </div>
    <!--//articles-->
@endsection

