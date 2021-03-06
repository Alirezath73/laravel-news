@extends('layouts.frontLayout')
@section('banner')
    <div class="banner">
        <div class="container">
            <div class="banner-inner">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">
                        <li class="callbacks1_on"
                            style="display: block; float: right; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
                            <div class="banner-info">
                                <h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است</h3>
                                <p>

                                    لورم ایپسوم یا طرح‌نما</p>
                            </div>
                        </li>
                        <li class=""
                            style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                            <div class="banner-info">
                                <h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است</h3>
                                <p>

                                    لورم ایپسوم یا طرح‌نما</p>
                            </div>
                        </li>
                        <li class=""
                            style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                            <div class="banner-info">
                                <h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است</h3>
                                <p>

                                    لورم ایپسوم یا طرح‌نما</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--banner-Slider-->
                <script src="{{asset('/front/js/responsiveslides.min.js')}}"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider4").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });

                    });
                </script>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="latest-articles">
        <h3 class="tittle"><i class="glyphicon glyphicon-file"></i>
            آخرین مقالات
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
@endsection
