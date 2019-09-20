<!DOCTYPE html>
<html lang="en" xmlns:og="http://opengraphprotocol.org/schema/">
<head>
    <title>Explore Independent Media | fivefilters.org</title>
	<meta name="description" content="Give us a news article and we'll give you related stories from non-corporate sources.">
			<meta charset="utf-8">
	<meta name="author" content="FiveFilters.org">
	<meta property="og:image" content="https://fivefilters.org/images/icons/apple-touch-icon-114x114.png" />
	<meta property="og:image" content="https://fivefilters.org/images/logo.png" />

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1">

	<!-- Stylesheets -->
	<link href="css/bootstrap-2.1.1-combined.min.css" rel="stylesheet">
	<link href="css/jquery.fancybox.2.1.0.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/rrssb.css" />

	<!-- Favicon and Apple Touch Icons -->
	<link rel="shortcut icon" href="images/icons/favicon.ico">
	<link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">
	
	<style>
		#use-adblock { display: none; }
		.corner-ribbon{
		  display: none;
		  width: 200px;
		  background: #e43;
		  position: absolute;
		  top: 25px;
		  left: -50px;
		  text-align: center;
		  line-height: 50px;
		  color: #f0f0f0;
		  transform: rotate(-45deg);
		  -webkit-transform: rotate(-45deg);
		}
		.corner-ribbon a {
		  font-weight: bold;
		  color: #111;
		  text-decoration: none;
		  font-family: sans-serif;
		}
		.corner-ribbon.shadow{
		  box-shadow: 0 0 3px rgba(0,0,0,.3);
		}
		.corner-ribbon.top-right{
		  top: 25px;
		  right: -50px;
		  left: auto;
		  transform: rotate(45deg);
		  -webkit-transform: rotate(45deg);
		}		
		.corner-ribbon.red{background: #e43;}
	</style>

	<link rel="stylesheet" href="css/ads.css" />

</head>
<body>
	<!-- div id="use-adblock" class="corner-ribbon top-right red shadow"><a href="https://blockads.fivefilters.org">Block Ads!</a></div -->
	<!-- HEADER -->
	<header class="container" id="top">
		<div class="row">
			<div class="span12" style="float: left;">
				<h1 class="logo"><a href="/" class="ir">FiveFilters.org</a></h1>	
				<ul class="header-information nav nav-pills">
				  <li class="dropdown">
					<a href="/" data-target="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu" role="button">
					  Apps
					  <b class="caret"></b>
					</a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
					  <li role="menuitem"><a href="content-only/">Full-Text RSS</a></li>
					  <li role="menuitem"><a href="http://createfeed.fivefilters.org">Feed Creator</a></li>
					  <li role="menuitem"><a href="https://pdf.fivefilters.org/simple-print/">Simple Print</a></li>
					  <li role="menuitem"><a href="pdf-newspaper/">PDF Newspaper</a></li>
					  <li role="menuitem"><a href="kindle-it/">Push to Kindle</a></li>
					  <li role="menuitem"><a href="term-extraction/">Term Extraction</a></li>
					  <li role="menuitem"><a href="explore_independent_media.php">Explore Independent Media</a></li>
					</ul>
				  </li>
					<li><a href="pricing.php">Pricing</a></li>
				  <li><a href="http://blog.fivefilters.org">Blog</a></li>
				  <li><a href="https://member.fivefilters.org">Login</a></li>
				  <li><a href="https://help.fivefilters.org">Help</a></li>
				  <li><a href="about.php">About</a></li>
				  <li id="use-adblock"><a href="https://blockads.fivefilters.org" style="background-color: lightyellow">Block Ads!</a></li>				  
				</ul>
			</div> <!-- end span8 -->
		
		</div> <!-- end row -->
	</header> <!-- end container -->
	<!-- BANNER -->
	<div class="banner-container">
		<div class="container">
			<div class="row">
				<div class="span7 clearfix header-contents">
					<h1>Explore Independent Media <span style="color: #999; font-size: .5em;"> beta</span></h1>
					<form class="form-horizontal" method="POST" action="explore-independent-media/explore.php" id="form">
						<label for="text">Enter a URL or paste some text</label>
						<textarea id="text" name="query" rows="7" class="span6">Iran concealed a partially-built second uranium enrichment plant in defiance of calls for transparency over its nuclear plans, US President Barack Obama says.

The US, UK and France said the UN had to be given immediate access and urged tough new sanctions, while Russia also said it was "seriously concerned".

But Iranian President Mahmoud Ahmadinejad denied that the facility was in breach of IAEA rules.</textarea>	
						<div class="clearfix" style="margin-top: 15px;">
							<button type="submit" class="btn btn-large primary">Explore</button>
						</div>
					</form>				
				</div> <!-- end span8 -->
	
				<!-- field help and video section -->
				<div class="span5" id="help-intro">
					<div class="feat-media">
						<img src="images/feat-image-explore.png" alt="" />
					</div> <!-- end video-wrapper -->
					
				</div> <!-- end span4 -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div> <!-- end banner-container -->

	
	<!-- FLOATING MENU -->
	<div class="nav-replacement"><!--  --></div>
	<nav class="floating-nav container">
		<div>
			<!-- The navigation is generated automatically based on the sections with the class .spy-hook -->
			<!-- JavaScript must be enabled in the browser in order for this to work -->
			<ul></ul>
			<!--<a href="#" class="button nav-cta-button">Buy Now <i class="icon-chevron-right"></i></a>-->
		</div>
	</nav> <!-- end floating-nav -->
		
	<!-- ABOUT -->
	<section class="container">
		<div class="hero-unit">
			<h2 id="section-about" class="spy-hook">What is Explore Independent Media?</h2>
			<!--<div class="row">
				<div class="span6">-->
				
				<div class="row-fluid">
					<div class="span12">
						<p>Explore Independent Media extracts key terms from a piece of text or a web article and offers related stories from non-corporate sources. It is being developed as part of the Five Filters project to promote independent, non-corporate media.</p>
					</div>
				</div>
				<!--</div>
			</div>-->
		</div>
		<hr class="hr-dots" />
	</section>	
	
	
	<!-- More info -->	
	<section class="container">
		<h2 id="download" class="spy-hook">More info</h2>
		<div class="tabbable row">
		
			<!-- Sidebar -->
			<div class="span3">
				<ul class="nav nav-list" style="padding-left: 0; margin-bottom: 2em;">
					<li class="active"><a href="#how-to-use" data-toggle="tab"><i class="icon-chevron-right"></i>How to use</a></li>
					<li><a href="#medialab-installation" data-toggle="tab"><i class="icon-chevron-right"></i>Medialab-Prado installation</a></li>
				</ul>
			</div>
			
			<div class="tab-content span8 regular-section" id="download-section">
			
				<div class="tab-pane active clearfix" id="how-to-use">
					<h3>How to use</h3>
					<ol>
						<li>Copy and paste some text or a URL into the box above and click 'Explore'</li>
						<li>Wait for terms to appear</li>
						<li>Select a term and wait for news stories to appear</li>
						<li>Select a news story to load</li>
					</ol>
					<br />
					<img src="images/five_filters_process_web.jpg" alt="" />
				</div>

				<div class="tab-pane" id="medialab-installation">
					<h3>Medialab-Prado installation</h3>
					<img src="images/five_filters_process_medialab.jpg" alt="" />
					<p>The application was developed during the <a href="http://medialab-prado.es/article/taller-seminario_interactivos09_ciencia_de_garaje">Interactivos 09</a> workshop at <a href="https://medialab-prado.es/">Medialab-Prado</a> in Madrid, Spain. It was made up of three parts:
					<ul>
						<li>Webcam to scan printed text (corporate newspapers being the intended input)</li>
						<li>Display to show the extracted terms and related content</li>
						<li>Printer to print a newspaper from selected stories</li>
					</ul>
					</p>
					<h3>Sketch and video of newspaper-scanning prototype</h3>
					<div class="row-fluid">
						<div class="span5">
							<figure class="figure"><img src="images/plan.jpg" /></figure>
						</div>
						<div class="span7">
							<figure class="figure">
								<div class="video-container">
									<iframe src="https://player.vimeo.com/video/4110798?title=0&amp;byline=0&amp;portrait=0" frameborder="0" allowfullscreen></iframe>
								</div>
							</figure>
						</div>
					</div>
				
	
						
				</div>
				
			</div>
		</div>
		<hr class="hr-dots" />
	</section>	
	
	<!-- Source code -->	
	<section class="container">
		<h2 id="more-info" class="spy-hook">Source code</h2>
		<div class="tabbable row">
		
			<!-- Sidebar -->
			<div class="span3">
				<ul class="nav nav-list" style="padding-left: 0; margin-bottom: 2em;">
					<li class="active"><a href="#extras1" data-toggle="tab"><i class="icon-chevron-right"></i>View source code</a></li>
					<li><a href="#extras2" data-toggle="tab"><i class="icon-chevron-right"></i>System requirements</a></li>
					<li><a href="#extras3" data-toggle="tab"><i class="icon-chevron-right"></i>Installation</a></li>					
				</ul>
			</div>
			
			<div class="tab-content span8 regular-section" id="download-section">
	
				<div class="tab-pane active clearfix" id="extras1">
					<h3>View source code</h3>
					<p><a href="https://code.launchpad.net/~fivefilters/fivefilters/explore-independent-media/">Source code</a></p>
					<p><strong>Note:</strong> the bulk of this code was written in a very short space of time with the intention of getting a working system up and running very quickly (see our <a href="https://web.archive.org/web/20100109064629/http://wiki.medialab-prado.es/index.php/The_Five_Filters">working diary</a> to see how it was developed and some of the problems encountered). Since then it has been refined a little bit, but it is still very rough. The source code here is more for those who are curious about implementation details rather than those who want to download and run the code &mdash; that's possible too, but will probably require some hard work and lots of path modifications in the code.</p>
				</div>

		
				<div class="tab-pane" id="extras2">
					<h3>System requirements</h3>
					<ul>
						<li><a href="https://www.gnu.org/gnu/linux-and-gnu.html">GNU/Linux</a></li>
						<li>Java + libraries (<a href="https://processing.org">Processing</a>, <a href="https://web.archive.org/web/20090225040248/http://www.cs.princeton.edu/~traer/physics/">Traer's Physics</a>, <a href="https://web.archive.org/web/20090212114652/http://www.json.org/java/">JSON</a>, <a href="http://www.sojamo.de/controlP5/">controlP5</a>, <a href="http://hc.apache.org/httpcomponents-client/">HttpClient</a>)</li>
						<li>PHP</li>
						<li>Web services
							<ul><li><a href="https://fivefilters.org/pdf-newspaper/">PDF Newspaper</a> (originally we relied on Tabbloid.com)</li>
							<li><a href="https://web.archive.org/web/20100208021027/http://code.google.com/apis/ajaxsearch/documentation/" rel="nofollow">Google Search</a></li>
							<li><a href="https://web.archive.org/web/20091228041530/http://developer.yahoo.com/search/content/V1/termExtraction.html" rel="nofollow">Yahoo's Term Extraction</a></li>
							</ul></li>
					</ul>
					
					<p>For the installation we also used: </p>
					<ul>
						<li><a href="https://web.archive.org/web/20090505225020/http://linux-uvc.berlios.de/">GNU/Linux UVC drivers</a> for controlling the webcam.</li>
						<li><a href="https://web.archive.org/web/20100818163445/http://piratestudios.com/v4ljmyron/">JMyron for Processing</a> for detecting motion and capturing frames from the webcam</li>
						<li><a href="https://code.google.com/p/ocropus/">OCROpus</a> for digitizing newspaper texts</li>
					</ul>
				</div>
				
				<div class="tab-pane" id="extras3">
					<h3>Installation</h3>
					<p>As noted above, the code in its current state is probably only useful for those curious about implementation details. We hope to work on a new web-based version with the ability to customise news sources to use for recommendations. In the meantime the instruction below are only for downloading the code.</p>
					<ol>
						<li>Make sure you have the Bazaar client (bzr) installed</li>
						<li>Change to the directory where you want to place the application files</li>
						<li>Enter <kbd>bzr co http://bazaar.launchpad.net/~fivefilters/fivefilters/explore-independent-media</kbd></li>
						<li>Look inside the src folder for the Java code and public_html for the PHP code</li>
					</ol>
				</div>				
				
			</div>
		</div>
	</section>


	<!-- CTA SECTION -->
	<div class="cta-section">
		<div class="container">
			<div class="row-fluid">
				<div class="span3 twitter-margin"></div>
				<div class="span6" style="padding: 0 20px;">
					<h3 style="color: #ccc;">Latest tweets and re-tweets</h3>

					<style>
					.tweet blockquote { border-left: none; }
					.tweet { color: #cfcfcf; text-align: left; background-color: #222; border-radius: 15px; padding: 2px; margin-bottom: 10px; }
					.tweet a { text-decoration: none; border-bottom: none; color: #fcfcfc;}
					</style>

					<div class="tweet"><div class="tweet-profile" style="position: absolute; padding: 13px; padding-top: 17px;"><img style="border-radius: 5px;" src="https://pbs.twimg.com/profile_images/868124921402150912/V0SkMhCD_normal.jpg" /></div><div class="tweet-text" style="margin-left: 57px; margin-right: 15px;"><blockquote class="twitter-tweet"><p lang="en" dir="ltr">The political elite and establishment have let people down across our country. <a href="https://twitter.com/hashtag/Marr?src=hash&amp;ref_src=twsrc%5Etfw">#Marr</a> <a href="https://t.co/jCd4lcFrHy">pic.twitter.com/jCd4lcFrHy</a></p>&mdash; Jeremy Corbyn (@jeremycorbyn) <a href="https://twitter.com/jeremycorbyn/status/1084424607598301185?ref_src=twsrc%5Etfw">January 13, 2019</a></blockquote>
</div></div><div class="tweet"><div class="tweet-profile" style="position: absolute; padding: 13px; padding-top: 17px;"><img style="border-radius: 5px;" src="https://pbs.twimg.com/profile_images/1378843257/medialens_twitter_logo_cherry_normal.jpg" /></div><div class="tweet-text" style="margin-left: 57px; margin-right: 15px;"><blockquote class="twitter-tweet"><p lang="en" dir="ltr">Our response to looming catastrophe:<br><br>&#39;Around the world, airlines carried 4.3 billion passengers in 2018, an increase of 38 million compared to the year before. Aviation accounts for about 2 percent of global greenhouse gas emissions.&#39;<a href="https://t.co/md8jXuBIde">https://t.co/md8jXuBIde</a></p>&mdash; Media Lens (@medialens) <a href="https://twitter.com/medialens/status/1084759823516950529?ref_src=twsrc%5Etfw">January 14, 2019</a></blockquote>
</div></div><div class="tweet"><div class="tweet-profile" style="position: absolute; padding: 13px; padding-top: 17px;"><img style="border-radius: 5px;" src="https://pbs.twimg.com/profile_images/1079763304996835328/5eUni1fe_normal.jpg" /></div><div class="tweet-text" style="margin-left: 57px; margin-right: 15px;"><blockquote class="twitter-tweet"><p lang="en" dir="ltr">BBC Climate Watch 13th Jan ‘19<br><br>Mentions of climate change on BBC website:<br><br>Homepage 1/69, News 0/46, most read 0/10.<br><br>Total score: 1/125.<br><br>(Homepage: ‘7 ways’ as 12 Jan. 3 pieces on plastics/waste – fashion, newspaper wrappers, art – but no further context re climate change) <a href="https://t.co/h3jQ3XYRmo">pic.twitter.com/h3jQ3XYRmo</a></p>&mdash; BBC Climate Watch (@BbcClimate) <a href="https://twitter.com/BbcClimate/status/1084580096135127040?ref_src=twsrc%5Etfw">January 13, 2019</a></blockquote>
</div></div>
					<p><a href="https://twitter.com/fivefilters/">Follow us on Twitter for more</a></p>
				</div>
			   <div class="span2 twitter-margin"></div>
			</div>
		</div> <!-- end container -->
	</div> <!-- end cta-section -->	
	
	<!-- FOOTER -->
	<footer class="container">
		<div class="row footer-style">
			<div class="span6">
				<div class="row">
					<div class="span3">
						<h3>Apps</h3>
						<ul class="footer-list">
							<li><a href="https://fivefilters.org/content-only/">Full-Text RSS</a></li>
							<li><a href="http://createfeed.fivefilters.org">Feed Creator</a></li>
							<li><a href="https://pdf.fivefilters.org/simple-print/">Simple Print</a></li>
							<li><a href="https://fivefilters.org/pdf-newspaper/">PDF Newspaper</a></li>
							<li><a href="https://fivefilters.org/kindle-it/">Push to Kindle</a></li>
							<li><a href="https://fivefilters.org/term-extraction/">Term Extraction</a></li>
							<li><a href="https://fivefilters.org/explore_independent_media.php">Explore Independent Media</a></li>
						</ul>
					</div> <!-- end span3 -->

					<div class="span3">
						<h3>About</h3>
						<ul class="footer-list">
							<li><a href="http://blog.fivefilters.org">Blog</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="pricing.php">Pricing</a></li>	
							<li><a href="privacy.php">Privacy Policy</a></li>
							<li><a href="terms.php">Terms and Conditions</a></li>
						</ul>
					</div> <!-- end span3 -->
				</div> <!-- end row -->
			</div> <!-- end span6 -->
			
			<div class="span6" id="stay-up-to-date">
				<h3>Stay Up to Date</h3>
				<p style="margin-bottom: 1em;">Stay up to date with FiveFilters.org by subscribing to our newsletter.</p>
				<form class="form-inline" action="https://ymlp.com/subscribe.php?id=gehyumqgmgy" method="post">
				<div class="input-prepend input-append">
					<span class="add-on"><i class="icon-envelope" style="opacity: .6"></i></span>
					<input type="email" name="YMP0" class="span3" placeholder="Email" required>
					<button type="submit" class="btn">Subscribe</button>
				</div>
				</form>
				<h3 style="margin-top: 10px">Share</h3>

				<!-- Buttons start here. -->
				<ul class="rrssb-buttons clearfix" style="width: 90px; height: 35px;">
				  <li class="rrssb-email">
				    <!-- Replace subject with your message using URL Endocding: http://meyerweb.com/eric/tools/dencoder/ -->
				    <a href="mailto:?subject=Check%20out%20this%20page%20from%20FiveFilters.org&amp;body=https%3A%2F%2Ffivefilters.org%2Fexplore_independent_media.php" style="border-radius: 0;" title="Email">
				      <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M20.11 26.147c-2.335 1.05-4.36 1.4-7.124 1.4C6.524 27.548.84 22.916.84 15.284.84 7.343 6.602.45 15.4.45c6.854 0 11.8 4.7 11.8 11.252 0 5.684-3.193 9.265-7.398 9.3-1.83 0-3.153-.934-3.347-2.997h-.077c-1.208 1.986-2.96 2.997-5.023 2.997-2.532 0-4.36-1.868-4.36-5.062 0-4.75 3.503-9.07 9.11-9.07 1.713 0 3.7.4 4.6.972l-1.17 7.203c-.387 2.298-.115 3.3 1 3.4 1.674 0 3.774-2.102 3.774-6.58 0-5.06-3.27-8.994-9.304-8.994C9.05 2.87 3.83 7.545 3.83 14.97c0 6.5 4.2 10.2 10 10.202 1.987 0 4.09-.43 5.647-1.245l.634 2.22zM16.647 10.1c-.31-.078-.7-.155-1.207-.155-2.572 0-4.596 2.53-4.596 5.53 0 1.5.7 2.4 1.9 2.4 1.44 0 2.96-1.83 3.31-4.088l.592-3.72z"/></svg></span>
				      <span class="rrssb-text">email</span>
				    </a>
				  </li>
				  <li class="rrssb-facebook">
				    <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header: https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
				    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffivefilters.org%2Fexplore_independent_media.php" class="popup" style="border-radius: 0;" title="Share on Facebook">
				      <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg></span>
				      <span class="rrssb-text">facebook</span>
				    </a>
				  </li>
				  <li class="rrssb-twitter">
				    <!-- Replace href with your Meta and URL information  -->
				    <a href="https://twitter.com/intent/tweet?text=Check%20out%20this%20page%20from%20%40fivefilters%3A%20https%3A%2F%2Ffivefilters.org%2Fexplore_independent_media.php"
				    class="popup" style="border-radius: 0;" title="Share on Twitter">
				      <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg></span>
				      <span class="rrssb-text">twitter</span>
				    </a>
				  </li> 
				</ul>
				<!-- Buttons end here -->

			</div> <!-- end span6 -->
			
		</div> <!-- end row -->
	</footer> <!-- end container -->
	
	
	
	<!-- COPYRIGHT -->
	<div class="copyright-container">
		<p>&copy; 2019 <a href="/" style="border-bottom: none;">FiveFilters.org</a></p>
		<p class="link-go-top"><a href="#top">go to top</a></p>
	</div> <!-- end footer-container -->




	<!-- JS -->
	<script src="js/jquery.1.8.1.min.js"></script>
	<script src="js/bootstrap.2.1.1.min.js"></script>
	<script src="js/jquery.fancybox.2.1.0.min.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/rrssb.min.js"></script>

		
	<script type="text/javascript">
	$(document).ready(function() {
		$('*[rel=popover]').popover();
		$('#advanced').hide();
		$('#toggle-advanced').click(function() {
			if (!$('#advanced').is(':visible')) {
				$('#toggle-advanced label').html('<i class="icon-arrow-up icon-white" style="opacity: .5;"></i> hide options');
				$('#advanced').stop(true, true).slideToggle('fast');
			} else {
				$('#toggle-advanced label').html('<i class="icon-arrow-down icon-white" style="opacity: .5;"></i> show options');
				$('#advanced').stop(true, true).slideToggle('fast');
			}
		});
		
		// remove 'http://' from URLs
		$('#form').submit(function() {
			$('#url').val($('#url').val().replace(/^http:\/\//i, ''));
			if ($.trim($('#url').val()) == '') {
				$('#url').focus();
				return false;
			}
			return true;
		});
		// show field help (see http://stackoverflow.com/questions/1779971/how-can-i-show-ui-hints-for-form-controls-like-the-stack-overflow-career-cv-form)
		$('#form .dim').bind('focus', function(e) {
			turnOffTheLights();
			//$(e.target).next('.field-help').show();				
			$('#field-help-'+e.target.id).show();
		}).bind('blur', function(e) {
			//turnOnTheLights();			
		});
		// shadow
		$('body').click(function(e) { 
				//alert('here');
				if ($('.feat-media').is(':hidden') // video wrapper is hidden - ie. help showing
					&& $('.field-help').get(0) != e.target // clicked element is not .field-help element
					&& !jQuery.contains($('.field-help').get(0), e.target) // clicked element is not within .field-help element
					&& !$(e.target).hasClass('dim')) { // clicked element is not a form field triggering help display
						turnOnTheLights(); 
				}
		});
		// turn on the lights with escape key		
		$(document).keyup(function(e) {
		  if (e.keyCode == 27) { turnOnTheLights(); }   // esc
		});
		
		// Fancybox for media
		$('.fancybox').fancybox();
	});
	function turnOffTheLights() {
		$('.field-help').hide();
		$('.feat-media').hide();
		// clear timer if it's active
		//$('#shadow').stop().fadeTo('fast', 0.9);
	}	
	function turnOnTheLights() {
		// set timer to fade out the shadow box (in case we're switching fast)
		$('.field-help').hide();
		$('.feat-media').show();
		//$(e.target).next('.field-help').hide();
	}
	</script>
	
</body>
</html>