@extends('layouts.theme')
@section('title', 'Dark Movies')
@section('content')
    <!-- slider-->
    <div class="row" style="background-color:#222222;margin:0;">
        <div class="col" style="height:500px;background-color:#121212;padding-right:0px;padding-left:0px;margin:0px;">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($movies as $movie)
                        <div class="swiper-slide">
                            <div class="imgBox">
                                <img src="{{ asset('images/poster/'.$movie->poster)}}"></div>
                            <div class="details">
                                <h3>{{$movie->name}}<br>
                                    @if($movie->director)
                                        <span>{{$movie->director->name}}</span>
                                    @endif
                                </h3></div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- /slider -->
    <!-- border-->
    <div class="row"
         style="background-color:#000000;margin-right:0px;margin-left:0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="col" style="background-color:#000000;height:45px;"></div>
    </div>
    <!-- /border-->

    <div class="row" style="padding-top: 50px;padding-left: 4%;padding-right: 4%;background-color: #222222;margin:0;">
        <div class="box-menu">
            <!-- Box 1 -->
            @foreach ($movies as $movie)
                <div class="box">
                    <div class="card">
                        <div class="poster"><img src="{{asset('images/poster/'.$movie->poster)}}"></div>
                        <div class="details">
                            <h2>{{$movie->name}}<br>@if($movie->director)
                                    <span>Directed By {{$movie->director->name}}</span>@endif</h2>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fas fa-star-half-alt"></i>
                                <span>4/5</span>
                            </div>
                            <div class="tags">
                                @if($movie->genre)
                                    <span class="thriller">{{$movie->genre->name}}</span>
                                @endif
                                @if($movie->year)
                                    <span class="romance">{{$movie->year->name}}</span>
                                @endif
                            </div>
                            <div class="infos">
                                <p style="text-align: justify;">{{ substr($movie->desc,0,140) }}</p>
                                <a class="rbtn" href="/movie/68{{$movie->id}}439">Read More</a>
                            </div>
                            <div class="star">
                                <h4>Cast</h4>
                                <ul>
                                    @if($movie->director)
                                        <li><img src="{{asset('images/director/'.$movie->director->image)}}"></li>
                                    @endif
                                    @if($movie->actor)
                                        <li><img src="{{asset('images/actor/'.$movie->actor->image)}}"></li>
                                    @endif
                                    @if($movie->actress)
                                        <li><img src="{{asset('images/actress/'.$movie->actress->image )}}"></li>
                                    @endif
                                    @if($movie->writer)
                                        <li><img src="{{asset('images/writer/'.$movie->writer->image )}}"></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div style="margin-left: 45%">
            {{$movies->links()}}
        </div>
    </div>

    <!-- box end-->
    <div class="row block-border" id="bborder">
        <div class="col d-md-none d-lg-none" style="background-color:#000000;height:45px;"></div>
    </div>
    <div class="projects-horizontal" style="background-color:#121212;">
        <div class="container" style="background-color:#121212;">
            <div data-aos="slide-up" class="intro">
                <h2 class="text-center" style="color:rgb(255,255,255);font-family:Montserrat, sans-serif;">Upcoming
                    Projects </h2>
                <p class="text-center" style="color:rgb(254,255,255);font-family:Montserrat, sans-serif;">Nunc luctus in
                    metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet
                    vitae. </p>
            </div>
            <div class="row projects">
                @foreach($blog as $post)
                    <div class="col-sm-6 item">
                        <div class="row" data-aos="flip-down">
                            <div class="col-md-12 col-lg-5"><a href="/blog/posts"><img class="img-fluid"
                                                                                       src="{{asset('/images/blog/'.$post->image)}}"
                                                                                       data-bs-hover-animate="pulse"></a>
                            </div>
                            <div class="col">
                                <h3 class="name"
                                    style="color:rgb(255,255,255);padding-top: 0;margin-top: 0;">{{$post->name}}
                                </h3>
                                <p class="description"
                                   style="color:rgb(255,255,255);">{{ substr($post->desc,0,120)}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if($message = Session::get('status'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
    @endif
    <form method="post" action="{{url('/')}}">
        <div id="newsltr" class="clean-block add-on newsletter-sign-up">
            @csrf
            <h2>Join our Newsletter</h2>
            <input name="user_email" type="text" placeholder="Email" inputmode="email" class="form-control">
            <button class="btn btn-light" type="submit" name="submit" data-aos="flip-right"
                    style="background-color:rgba(0,0,0,0.93);color:rgb(255,255,255);font-family:Aclonica, sans-serif;">
                Subscribe
            </button>
        </div>
    </form>
@endsection
