@extends('layouts.theme')
@section('title', 'Dark Movies')
@section('content')
<section class="blog-details" style="background-color:#222222;padding-top: 30px;padding-bottom: 30px;">
               <div class="container" style="padding-bottom: 40px;">
				<div class="row">
					@foreach($blog as $post)
					<div class="col-lg-12" style="background-color:rgb(10,10,10);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						<div class="single-news" style="margin: 30px;">
							<div class="news-bg-1"><img src="{{asset('images/blog/'.$post->image)}}" height="350" width="100%"></div>
							<div class="news-date">
								<h2><span>{{$post->month}}</span> {{$post->day}}</h2>
									<h1>{{$post->year}}</h1>
							</div>
							<div class="news-content">
								<h2>{{ $post->name}}</h2>
								<p style="text-align: justify;">{{ substr($post->desc,0,172) }}</p>
							</div>
							<a class="button" style="text-decoration: none;" href="/blog/posts/68{{ $post->id}}439">Read More</a>
						</div>

					</div>
					@endforeach
				</div>
			</div>
			<div style="margin-left: 45%;">
			{{$blog->links()}}
		</div>
		</section>
<div class="row block-border" id="bborder">
<div class="col d-md-none d-lg-none" style="background-color:#000000;height:45px;"></div></div>


@endsection
