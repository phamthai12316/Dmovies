<head>
       <link rel="stylesheet" type="text/css" href="{{ asset('css/stellar.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('css/stellar-font-awesome.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.css') }}" />
       <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	   <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
       <script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
       <script type="text/javascript" src="{{ asset('js/videoPlayer.js') }}"></script>
       <script type="text/javascript" src="{{ asset('js/Playlist.js') }}"></script>
       <script type="text/javascript"  src="{{ asset('js/iphone-inline-video.js') }}"></script>
       <script src="https://player.vimeo.com/api/player.js"></script>
        <script src="js/starrr.js"></script>

@extends('layouts.theme')
@section('title', 'Dark Movies')
@section('content')
<!-- video frame start-->
<script type="text/javascript" charset="utf-8">
    $(document).ready(function($) {
        videoPlayer = $("#Stellar_video_player").Video({ <!-- ALL PLUGIN OPTIONS -->
            <!-- GLOBAL SETTINGS -->
            instanceName: "player1", //name of the player instance (for multiple players per page change this name)
            instanceTheme: "dark", //choose video player theme: "dark", "light"
            playerLayout: "fixedSize", //Select player layout: "fitToContainer" (responsive mode), "fixedSize" (fixed size on page load,responsive on resize), "fitToBrowser" (fill the browser window)
            playerOrientation: "LTR", //adjust player text orientation: "LTR", "RTL" (left to right or right to left for eastern countries)
            autohideControls: 5, //autohide controls
            hideControlsOnMouseOut: false, //hide controls on mouse out of the player: true, false
            videoPlayerWidth: 1108, //fixed total player width (only for playerLayout: "fixedSize")
            videoPlayerHeight: 620, //fixed total player height (only for playerLayout: "fixedSize")
            videoRatio: 16 / 9, //set any video ratio (calculate video width/video height)
            videoRatioStretch: false, //adjust video ratio for case when playlist is "opened" : true/false
            iOSPlaysinline: true, //on iOS device: play videos inline (like on desktop) or in Fullscreen by default: true/false
            autoplay: false, //autoplay when webpage loads: true/false
            colorAccent: "#ff0000", //plugin colors accent (hexadecimal or RGB value - http://www.colorpicker.com/)
            videoAnimationTime: 350, //video transition animation when using show/hide playlist [miliseconds], 0-instant animation, larger number will increase animation time
            playSpecificVideo: 0, //load and play specific video from playlist on page load [0-first video, 1-second video...]
            progressBarThickness: 3, //adjust progress bar height [px]
            progressBarThicknessOnMouseover: 6, //adjust video progress bar height on mouse over [px]
            tooltipFontSize: 12, //adjust tooltip font size
            videoPlayerShadow: "effect1", //choose player shadow:  "effect1" , "effect2", "effect3", "effect4", "effect5", "effect6", "off"
            loadRandomVideoOnStart: false, //choose to load random video when webpage loads: true, false
            shuffle: false, //choose to shuffle videos when playing one after another: true, false (shuffle button enabled/disabled on start)
            posterImg: "{{asset('images/cover/'.$movie->cover )}}", //player poster image
            posterImgOnVideoFinish: "{{asset('storage/imges/cover/kaala.jpg')}}", //player poster image on video finish (works if enabled onFinish:"Stop video")
            onFinish: "Play next video", //"Play next video","Restart video", "Stop video",
            nowPlayingText: true, //enable disable now playing title: true, false
            showAllControls: true, //enable/disable all player controls: true/false
            allowSkipAd: true, //enable/disable "Skip advertisement" option: true/false
            infoShow: true, //enable/disable info option: true, false
            nextShow: true, //enable/disable next video option: true, false
            rewindShow: true, //enable/disable rewind video option: true, false
            qualityShow: true, //enable/disable rewind video option: true, false
            <!-- LIGHTBOX SETTINGS -->
            lightBox: false, //lightbox mode :true/false
            lightBoxAutoplay: false, //autoplay when lightbox opens: true/false
            lightBoxThumbnail: "{{asset('images/cover/'.$movie->cover )}}", //lightbox thumbnail image
            lightBoxThumbnailWidth: 400, //lightbox thumbnail image width
            lightBoxThumbnailHeight: 220, //lightbox thumbnail image height
            lightBoxCloseOnOutsideClick: true, //close lightbox when clicked outside of player area
            <!-- PLAYLIST SETTINGS -->
            playlist: "Off", //choose playlist type: "Right playlist", "Bottom playlist", "Off"
            playlistScrollType: "inset", //choose scrollbar type: "light","minimal","light-2","light-3","light-thick","light-thin","inset","inset-2","inset-3","rounded","rounded-dots","3d","dark","minimal-dark","dark-2","dark-3","dark-thick","dark-thin","inset-dark","inset-2-dark","inset-3-dark","rounded-dark","rounded-dots-dark","3d-dark","3d-thick-dark"
            playlistBehaviourOnPageload: "opened (default)", //choose playlist behaviour when webpage loads: "closed", "opened (default)" (not apply to Vimeo player)
            <!-- VIMEO PLAYER SETTINGS -->
            vimeoColor: "00adef", //set "hexadecimal value", default vimeo color is "00adef"
            <!-- YOUTUBE SETTINGS -->
            youtubeControls: "custom controls", //choose youtube player controls: "custom controls", "default controls"
            youtubeSkin: "dark", //default youtube controls theme: light, dark
            youtubeColor: "red", //default youtube controls bar color: red, white
            youtubeQuality: "default", //choose youtube quality: "small", "medium", "large", "hd720", "hd1080", "highres", "default"
            youtubeShowRelatedVideos: true, //choose to show youtube related videos when video finish: true, false (onFinish:"Stop video" needs to be enabled)
            <!-- HTML5 SELF HOSTED VIDEOS SETTINGS -->
            HTML5VideoQuality: "HD", //choose HTML5 video quality (HD, SD)
            preloadSelfHosted: "none", //choose preload buffer for self hosted mp4 videos (video type HTML5): "none", "auto"
            rightClickMenu: true, //enable/disable right click over HTML5 player: true/false
            hideVideoSource: false, //option to hide self hosted video 'src' attribute from <video> tag (to prevent users from download/steal your videos): true/false
            <!-- SHARE SETTINGS  -->
            shareShow: true, //enable/disable complete share options (facebook/twitter/googlePlus): true, false
            facebookShow: true, //enable/disable facebook option individually: true, false
            twitterShow: true, //enable/disable twitter option individually: true, false
            googlePlusShow: true, //enable/disable googlePlus option individually: true, false
            facebookShareName: "{{$movie->name }}", //first parametar of facebook share in facebook feed dialog is title
            facebookShareLink: "http://yoursite.com/", //second parametar of facebook share in facebook feed dialog is link below title
            facebookShareDescription: "{{$movie->name }} Watch Online", //third parametar of facebook share in facebook feed dialog is description below link
            facebookSharePicture: "{{asset('images/cover/'.$movie->cover )}}", //fourth parametar in facebook feed dialog is picture on left side
            twitterText: "{{$movie->name}}", //first parametar of twitter share in twitter feed dialog is text
            twitterLink: "http://codecanyon.net/", //second parametar of twitter share in twitter feed dialog is link
            twitterHashtags: "Dark Movies", //third parametar of twitter share in twitter feed dialog is hashtag
            twitterVia: "Darkmovies", //fourth parametar of twitter share in twitter feed dialog is via (@)
            googlePlus: "http://yoursite.com/", //share link over Google +
            <!-- LOGO SETTINGS  -->
            logoShow: true, //true, false
            logoClickable: true, //true, false
            logoPath: "/assets/images/logo.png", //logo image url
            logoGoToLink: "http://yoursite.com/", //redirect to specific page when logo clicked
            logoPosition: "bottom-left", //choose logo position: "bottom-right","bottom-left"
            <!-- EMBED SETTINGS  -->
            embedShow: false, //enable/disable embed option: true, false
            <!-- GLOBAL PREROLL ADS SETTINGS  -->
            showGlobalPrerollAds: false, //enable/disable 'global' ads and overwrite each individual ad in 'videos' :true/false
            globalPrerollAds: "url1;url2;url3;url4;url5", //set 'pool' of url's that are separated by ; (global prerolls will play randomly)
            globalPrerollAdsSkipTimer: 5, //skip global advertisement seconds
            globalPrerollAdsGotoLink: "http://codecanyon.net/", //global advertisement goto link
            <!-- TRANSLATE TEXTS TO YOUR LANGUAGE  -->                         //translate all texts to any language
            advertisementTitle: "Advertisement",
            skipAdvertisementText: "Skip advertisement",
            skipAdText: "You can skip this ad in",
            playBtnTooltipTxt: "Play",
            pauseBtnTooltipTxt: "Pause",
            rewindBtnTooltipTxt: "Rewind",
            downloadVideoBtnTooltipTxt: "Download video",
            qualityBtnOpenedTooltipTxt: "Close quality",
            qualityBtnClosedTooltipTxt: "Select quality",
            muteBtnTooltipTxt: "Mute",
            unmuteBtnTooltipTxt: "Unmute",
            fullscreenBtnTooltipTxt: "Fullscreen",
            exitFullscreenBtnTooltipTxt: "Exit fullscreen",
            infoBtnTooltipTxt: "Show info",
            embedBtnTooltipTxt: "Embed",
            shareBtnTooltipTxt: "Share",
            volumeTooltipTxt: "Volume",
            playlistBtnClosedTooltipTxt: "Show playlist",
            playlistBtnOpenedTooltipTxt: "Hide playlist",
            facebookBtnTooltipTxt: "Share on Facebook",
            twitterBtnTooltipTxt: "Share on Twitter",
            googlePlusBtnTooltipTxt: "Share on Google+",
            nextBtnTooltipTxt: "Next video",
            previousBtnTooltipTxt: "Previous video",
            playlistSearchText: "Search for video...",
            nextVideoInPlaylistText: "UP NEXT",
            autoplayNextVideoInPlaylistOn: "Autoplay next video on",
            autoplayNextVideoInPlaylistOff: "Autoplay next video off",
            countVideos: "of",
            shuffleBtnOnTooltipTxt: "Shuffle on",
            shuffleBtnOffTooltipTxt: "Shuffle off",
            videos: [{
                videoType: "HTML5",
                title: "{{ $movie->name }}",
                mp4HD: "{{ $movie->video_link }}",
                mp4SD: "{{ $movie->video_link }}",
                enable_mp4_download: false,
                imageUrl: "{{asset('images/ads/popup.png')}}",
                imageTimer: 4,
                prerollAD: true,
                prerollGotoLink: "http://facebook.com/",
                preroll_mp4: "http://www.onirikal.com/videos/mp4/zopo.mp4",
                prerollSkipTimer: 5,
                midrollAD: true,
                midrollAD_displayTime: "00:20",
                midrollGotoLink: "http://facebook.com/",
                midroll_mp4: "http://dl8.heyserver.in/trailer/Office%20Uprising%202018%20trailer.mp4",
                midrollSkipTimer: 5,
                postrollAD: true,
                postrollGotoLink: "http://facebook.com/",
                postroll_mp4: "http://dl8.heyserver.in/trailer/The_Walking_Dead_Season_1_HD_Trailer_AMC_.136.mp4",
                postrollSkipTimer: 5,
                popupImg: "{{asset('images/ads/popup.png')}}",
                popupAdShow: true,
                popupAdStartTime: "00:07",
                popupAdEndTime: "00:17",
                popupAdGoToLink: "http://facebook.com/",
                description: "{{ substr($movie->desc,0,150) }}",
                thumbImg: "{{asset('images/cover/'.$movie->cover )}}",
                info: "Directed By {{$movie->director->name}}"
            }]
        });
    });

</script>
</head>
<!--   video frame end..-->
		<div class="player" style="color:red;">
			<div class="container">
				<a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
				<div class="player-area" id="Stellar_video_player" >

				</div>
			</div>
		</div>




		<section class="movie-area" id="home" style="background-color: #222222;">
			<div class="container">
				<div class="movie-area-slider">
					<div class="row movie-area-slide">
						<div class="card col-lg-6 col-md-5" style="background-color: rgb(10,10,10); max-width: 450px;">
							<div class="movie-area-content">
								<img src="{{asset('images/poster/'.$movie->poster )}}" data-bs-hover-animate="pulse" alt="about" />
							</div>
						</div>
						<div class="card col-lg-6 col-md-7" style="background-color: rgb(10,10,10); ">

							<div class="movie-area-content pr-50">
								<h2 style="color: #fff;">{{ $movie->name}}</h2>
								<hr>
								<div class="review">
									<div class="author-review">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<h4>4/5</h4>
								</div>
								<div class="card" style="background-color: rgb(10,10,10); ">
								<p>{{ substr($movie->desc,0,350) }}</p></div>
								<h3>Cast:</h3>
								<div class="slide-cast">

									<div class="single-slide-cast">
										<a href="/director/68{{ $movie->director->id }}439"><img src="{{asset('images/director/'.$movie->director->image )}}" alt="" /></a>
									</div>
									<div class="single-slide-cast">
										<a href="/actor/68{{ $movie->actor->id }}439"><img src="{{asset('images/actor/'.$movie->actor->image )}}" alt="" /></a>
									</div>

									<div class="single-slide-cast">
										<a href="/actress/68{{ $movie->actress->id }}439"><img src="{{asset('images/actress/'.$movie->actress->image )}}" alt="" /></a>
									</div>

									<div class="single-slide-cast">
										<a href="/writer/68{{ $movie->writer->id }}439"><img src="{{asset('images/writer/'.$movie->writer->image )}}" alt="" /></a>
									</div>
								</div>
								<div class="slide-trailor">

									<button class="button"><span>Watch Now</span></button>
								</div>
							</div>
						</div>
					</div>

				</div>



                <div class="movie-area-slider">
				<div class="row">
					<div class="col-lg-9" style="padding: 0;max-width:680px;">
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
							<div  class="details-overview">
								<h2>Overview</h2>
								<p>{{ $movie->desc}}</p>
							</div>
							<div class="details-reply">
								<h2>Leave a Reply</h2>
								<form  method="POST" action="/movie/68{{$movie->id}}439">
									@csrf
									<div class="row">

										<div class="col-lg-6">
											<div class="select-container">
												<input type="text" name="firstname" placeholder="First Name"/>

											</div>
										</div>
										<div class="col-lg-6">
											<div class="select-container">
												<input type="text" name="lastname" placeholder="Last Name"/>

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
												<textarea name="comments"  placeholder="Type Here Message" rows="4"></textarea>

											</div>
										</div>
									</div>

							</div>
							<div class="details-comment">
								<button class="mvbutton" name="submit" href="">Post Comment</button>
								<p style="flex: 4;"></p>
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
      <p><h4><a style="color: #fff;text-decoration: none;" href="/movie/68{{$previous}}439"> Previous Post</a></h4></p>
    </div>
      @endif
  </div>
  <div class="details-thumb-next">
    @if($next)
    <div class="thumb-text">

      <p><h4><a style="color: #fff;text-decoration: none;" href="/movie/68{{$next}}439">Next Post</a></h4></p>
    </div>
    <div class="thumb-icon">
      <i class="fa fa-caret-right" aria-hidden="true"></i>
    </div>
    @endif
  </div>

</div>
						</div>
					</div>
					<div class="col-lg-4 text-center text-lg-left" style="padding: 0;border-top: 1px solid red;max-width: 300px;background-color:rgb(10,10,10);border-bottom: 1px solid red;">
          <div class="share">
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"><div class="twitter-hover social-slide"></div></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"><div class="facebook-hover social-slide"></div></a>
            <a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"><div class="google-hover social-slide"></div></a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(Request::fullUrl()) }}"><div class="linkedin-hover social-slide"></div></a>
            <a href="http://pinterest.com/pin/create/link/?url={{ urlencode(Request::fullUrl()) }}"><div class="pinterest-hover social-slide"></div></a></div>
					    <div class="portfolio-sidebar">
					    	<div class="card" style="background-color:rgb(10,10,10);max-width: 300px;margin-top: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-bottom: 1px solid red;">
					    		<div class="card-header" style="color:#fff;background-color: rgb(10,10,10);text-align: center;font-size:22px;border-bottom: 1px solid red;">Director</div>
                           <img class="dimg" src="{{asset('images/director/'.$movie->director->image )}}" alt="Card image cap">
                            <div class="card-body">
                               <h5 class="card-title" style="color: #fff;text-align: center;">{{ $movie->director->name}}</h5>
                                 <p class="card-text" style="color: #fff;text-align: justify;">
                                 	{{ substr($movie->director->disc,0,100)}}</p>
                                    <a style="margin-left: 70px;margin-right: 70px;text-decoration: none;" href="/director/68{{ $movie->director->id}}439" class="button">Read More</a>
                                 </div>
                                      </div>
							<img src="{{asset('images/ads/ad300.jpg') }}" alt="sidebar" />
							<!-- <img src="{{ URL::to('imges/ads/ads.png') }}" alt="sidebar" /> -->
							<!-- <img src="{{ URL::to('imges/ads/ads.png') }}" alt="sidebar" /> -->
						</div>
					</div>
				</div>
			</div></div>






















		</section>
    <div class="row block-border" id="bborder">
<div class="col d-md-none d-lg-none" style="background-color:#000000;height:45px;"></div></div>
@endsection
