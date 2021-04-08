@extends('layouts.theme')
@section('title', 'Dark Movies')
@section('content')
<div class="wall">
<div class="container mov">
<div class="row">
  @foreach($movies as $movie)
        <div class="col-md-3 col-sm-6">
            <div class="movie-grid" data-bs-hover-animate="pulse">
                <div class="movie-image">
                    <a href="/movie/68{{$movie->id}}439">
                        <img class="pic-1" src="{{ asset('images/poster/'.$movie->poster)}}">
                        <img class="pic-2" src="{{ asset('images/poster/'.$movie->poster)}}">
                    </a>

                </div>
            </div>
        </div>
@endforeach
    </div></div>
    <div style="margin-left: 45%;margin-top:10px;">
                     {{$movies->links()}}
    </div>
  </div>
  <!-- border-->
  <div class="row" style="background-color:#000000;margin-right:0px;margin-left:0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <div class="col" style="background-color:#000000;height:45px;"></div>
  </div>
  <!-- /border-->
@endsection
