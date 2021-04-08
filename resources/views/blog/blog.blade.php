@extends('layouts.theme')
@section('title', 'Dark Movies')
@section('content')
<section class="blog-details" style="background-color:#222222;padding-top: 30px;padding-bottom: 30px;">
			<div class="container">
				<div class="row" style="background-color:rgb(10,10,10);">
					<div class="col-lg-9">
						<div class="news-details" style="color: #fff;">
							<div class="single-news">
								<div class="news-bg-1"><img src="{{asset('images/blog/'.$blog->image)}}" height="350" width="100%"></div>
								<div class="news-date">
									<h2><span>{{$blog->month}}</span> {{$blog->day}}</h2>
									<h1>{{$blog->year}}</h1>
								</div>
							</div>
							<h2 style="color: #fff;">{{ $blog->name}}</h2>
							<hr style="border: 1px solid #222222;">

							<p>{{ $blog->desc}}</p>
							<div class="detail-author">
								<div class="row flexbox-center">
									<div class="col-lg-6 text-lg-left text-center">
										<div class="details-author">
											<h4>By Admin:</h4>
											<img src="{{ URL::to('images/admin/admin.png') }}" alt="" />
										</div>
									</div>
									<div class="col-lg-6 text-lg-right text-center">
										<div class="details-author">
											<h4>Share:</h4>
											<a style="color: red;" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"><i class="fab fa-facebook-f"></i></a>
											<a style="color: red;" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"><i class="fab fa-twitter"></i></a>
											<a style="color: red;" href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"><i class="fab fa-google-plus-g"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="text-center">
								<img src="{{asset('images/ads/blog-detail.png') }}" alt="" />
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
							<div class="details-reply">
								<h2>Leave a Reply</h2>
								<form method="POST" action="/blog/posts/68{{$blog->id}}439">
									@csrf
									<div class="row">
										<div class="col-lg-6">
											<div class="select-container">
												<input type="text" name="firstname" placeholder="Name"/>

											</div>
										</div>
											<div class="col-lg-6">
											<div class="select-container">
												<input type="text" name="lastname" placeholder="Name"/>

											</div>
										</div>
										<div class="col-lg-6">
											<div class="select-container">
												<input type="text" name="email" placeholder="Email"/>

											</div>
										</div>
										<div class="col-lg-6">
											<div class="select-container">
												<input type="text" name="phone" placeholder="Phone"/>

											</div>
										</div>
										<div class="col-lg-12">
											<div class="textarea-container">
												<textarea name="comments" placeholder="Type Here Message" rows="4"></textarea>

											</div>
										</div>
									</div>

							</div>
							<div class="details-comment">
								<button style="margin-left: 40px;" name="submit" class="mvbutton" >Post Comment</button>
								<p style="flex: 6;"></p>
							</div>
						</form>
						@if($comment)
												 @foreach($comment as $comment)
					<button class="accordion">{{ $comment->firstname}}&nbsp;&nbsp;{{ $comment->lastname}}</button>
					<div class="panel" style="margin: 0;">
					<div class="card-body">

					<div class="card border-dark">
					<div class="card-header"><h6 style="text-align:right">{{ $comment->created_at}}</h6></div>
					<div class="card-body cmp">
					<div class="col-md-1" style="float:left;width:auto;padding-bottom:10px;"><img  src="{{$comment->image}}" alt=""></div>
					<div class="col-md-10" style="float:right">
					<p class="card-text" style="font-weight: bolder;text-align:justify;">{{$comment->comments}}</p></div>
					</div>
					</div>


					</div></div>
													 @endforeach
													 @endif
													 <div class="details-thumb">
							 <div class="details-thumb-prev">
								 @if($previous)
								 <div class="thumb-icon">
									 <i class="fa fa-caret-left" aria-hidden="true"></i>
								 </div>

								 <div class="thumb-text">
									 <p><h4><a style="color: #fff;text-decoration: none;" href="/blog/posts/68{{$previous}}439"> Previous Post</a></h4></p>
								 </div>
									 @endif
							 </div>
								<div class="details-thumb-next">
									@if($next)
									<div class="thumb-text">

										<p><h4><a style="color: #fff;text-decoration: none;" href="/blog/posts/68{{$next}}439">Next Post</a></h4></p>
									</div>
									<div class="thumb-icon">
										<i class="fa fa-caret-right" aria-hidden="true"></i>
									</div>
									@endif
								</div>

							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="blog-sidebar" style="color: #fff;padding-top: 30px">

							<img src="{{ asset('images/ads/sidebar1.png')}}" alt="sidebar" />
							<div class="portfolio-sidebar" style="padding-top: 10px;padding-bottom: 10px">
								<img src="{{ asset('images/ads/sidebar1.png')}}" alt="sidebar" />

							</div>
							<img src="{{ asset('images/ads/sidebar1.png')}}" alt="sidebar" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- blog area end -->
<div class="row block-border" id="bborder">
<div class="col d-md-none d-lg-none" style="background-color:#000000;height:45px;"></div></div>
@endsection
