@extends('layouts.theme')
@section('title', 'Dark Movies')
@section('content')
<section class="blog-details" style="background-color:#222222;padding-top: 30px;padding-bottom: 30px;">
				<div class="container">

				<div class="transformers-box">
					<div class="row flexbox-center">

						<div class="col-lg-5 text-lg-left text-center">
							<div class="transformers-content">
								<img  src="{{asset('images/writer/'.$writer->image )}}" alt="about"  />
							</div>
						</div>
						<div class="col-lg-7" style="height: auto">
							<div class="transformers-content mtr-30">
								<h2 style="color: #fff;padding-left: 20px;">{{ $writer->name }}</h2>
								<ul>
								<li>
										<div class="transformers-left">
											 Bio:
										</div>
										<div class="transformers-right" style="color: #fff;">
											{{ $writer->desc}}
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Follow:
										</div>
										<div class="transformers-right" style="color: #fff;">
											<a style="color: #fff;margin: 5px;" href="https://www.facebook.com/{{ $writer->facebook }}"><i class="fab fa-facebook-f"></i></a>
											<a style="color: #fff;margin: 5px;" href="https://twitter.com/{{ $writer->twitter }}"><i class="fab fa-twitter"></i></a>
											<a style="color: #fff;margin: 5px;" href="https://ml.wikipedia.org/wiki/{{ $writer->wiki }}"><i class="fab fa-wikipedia-w"></i></a>

										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-9" style="padding-right: 0;max-width: 840px;">
						<div class="details-content">
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
								<form method="POST" action="/writer/68{{$writer->id}}439">
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
								<button name="submit" class="mvbutton">Post Comment</button>
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
										<p><h4><a style="color: #fff;text-decoration: none;" href="/writer/68{{$previous}}439"> Previous Post</a></h4></p>
									</div>
								    @endif
								</div>
								<div class="details-thumb-next">
									@if($next)
									<div class="thumb-text">

										<p><h4><a style="color: #fff;text-decoration: none;" href="/writer/68{{$next}}439">Next Post</a></h4></p>
									</div>
									<div class="thumb-icon">
										<i class="fa fa-caret-right" aria-hidden="true"></i>
									</div>
									@endif
								</div>

							</div>
						</div>
					</div>
					<div class="col-lg-3 text-center text-lg-left" style="padding-left:0;background-color:rgb(10,10,10);border-top: 1px solid red;border-bottom: 1px solid red;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						<div class="share">
	            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"><div class="twitter-hover social-slide"></div></a>
	            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"><div class="facebook-hover social-slide"></div></a>
	            <a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"><div class="google-hover social-slide"></div></a>
	            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(Request::fullUrl()) }}"><div class="linkedin-hover social-slide"></div></a>
	            <a href="http://pinterest.com/pin/create/link/?url={{ urlencode(Request::fullUrl()) }}"><div class="pinterest-hover social-slide"></div></a></div>
							<div class="portfolio-sidebar" style="padding: 10px;">
							<img  style="margin-top: 10px;"  src="{{asset('images/ads/sidebar1.png') }}" alt="sidebar" />
							<img  style="margin-top: 10px;"  src="{{asset('images/ads/sidebar1.png') }}" alt="sidebar" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- details area end -->
<div class="row block-border" id="bborder">
<div class="col d-md-none d-lg-none" style="background-color:#000000;height:45px;"></div></div>
@endsection
