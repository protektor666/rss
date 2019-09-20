<!DOCTYPE html>
<html lang="en" xmlns:og="http://opengraphprotocol.org/schema/">
<head>
    <title>Full-Text RSS FAQ | fivefilters.org</title>
	<meta name="description" content="Frequently asked questions about Full-Text RSS from FiveFilters.org.">
			<meta charset="utf-8">
	<meta name="author" content="FiveFilters.org">
	<meta property="og:image" content="https://fivefilters.org/images/icons/apple-touch-icon-114x114.png" />
	<meta property="og:image" content="https://fivefilters.org/images/logo.png" />

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1">

	<!-- Stylesheets -->
	<link href="../css/bootstrap-2.1.1-combined.min.css" rel="stylesheet">
	<link href="../css/jquery.fancybox.2.1.0.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="../css/rrssb.css" />

	<!-- Favicon and Apple Touch Icons -->
	<link rel="shortcut icon" href="../images/icons/favicon.ico">
	<link rel="apple-touch-icon" href="../images/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/icons/apple-touch-icon-114x114.png">
	
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

	<link rel="stylesheet" href="../css/ads.css" />

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
					  <li role="menuitem"><a href="../content-only/">Full-Text RSS</a></li>
					  <li role="menuitem"><a href="http://createfeed.fivefilters.org">Feed Creator</a></li>
					  <li role="menuitem"><a href="https://pdf.fivefilters.org/simple-print/">Simple Print</a></li>
					  <li role="menuitem"><a href="../pdf-newspaper/">PDF Newspaper</a></li>
					  <li role="menuitem"><a href="../kindle-it/">Push to Kindle</a></li>
					  <li role="menuitem"><a href="../term-extraction/">Term Extraction</a></li>
					  <li role="menuitem"><a href="../explore_independent_media.php">Explore Independent Media</a></li>
					</ul>
				  </li>
					<li><a href="../pricing.php">Pricing</a></li>
				  <li><a href="http://blog.fivefilters.org">Blog</a></li>
				  <li><a href="https://member.fivefilters.org">Login</a></li>
				  <li><a href="https://help.fivefilters.org">Help</a></li>
				  <li><a href="../about.php">About</a></li>
				  <li id="use-adblock"><a href="https://blockads.fivefilters.org" style="background-color: lightyellow">Block Ads!</a></li>				  
				</ul>
			</div> <!-- end span8 -->
		
		</div> <!-- end row -->
	</header> <!-- end container -->
	<!-- BANNER -->
	<div class="banner-container">
		<div class="container">
			<div class="row">
				<div class="span12 clearfix header-contents">
					<h1>Full-Text RSS &mdash; Frequently Asked Questions</h1>
				</div>
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div> <!-- end banner-container -->
	
	<!-- Browser Extensions -->	
	<section class="container">
		<div class="tabbable row">
		
			<!-- Sidebar -->
			<div class="span3">
				<ul class="nav nav-list" style="padding-left: 0; margin-bottom: 2em;">
					<li class="active"><a href="#general" data-toggle="tab"><i class="icon-chevron-right"></i>General info</a></li>
					<li><a href="#users-developers" data-toggle="tab"><i class="icon-chevron-right"></i>Users and developers</a></li>
					<li><a href="#publishers" data-toggle="tab"><i class="icon-chevron-right"></i>Publishers</a></li>
				</ul>
			</div>
			
			<div class="tab-content span8 regular-section" id="download-section">
			
				<div class="tab-pane active clearfix" id="general">
					<h2>General info</h2>
					<h3>What is it?</h3>
					<p class="answer"><a href="index.php">Full-Text RSS</a> is a <a href="https://www.gnu.org/philosophy/free-sw.html">free software</a> and open source web page content extraction tool developed for the <a href="https://fivefilters.org">Five Filters</a> project. It tries, and usually succeeds in, separating actual content from other web page elements &mdash; e.g. presentational elements and navigation bars.</p>
					
					<h3>How does it work?</h3>
					<p class="answer">It is designed to work with any web page carrying an article. It can accept as input a single web page (identified by its URL) or a list of web pages (identified by a feed URL). It then retrieves each page and uses a set of rules to identify the title and content block that's most likely to hold only the article's content (usually paragraphs of text). These blocks are then extracted and returned in the RSS feed format.</p>
					<p class="answer">This process of content detection and extraction is <a href="https://www.keyvan.net/2011/03/content-extraction/">outlined here</a>. For the majority of extractions we use a piece of free and open source software called Readability - it was developed by Arc90 and was <a href="https://www.keyvan.net/2010/08/php-readability/" title="PHP Readability">ported to PHP</a> for use in this tool. It is also <a href="https://www.theregister.co.uk/2010/06/08/safari_reader_based_on_open_source_project/">used by Apple</a> in the Safari browser.</p>
				</div>

				<div class="tab-pane" id="users-developers">
					<h2>Users and developers</h2>
					<h3>How can I use it?</h3>

					<p class="answer">In the simplest and most popular case, Full-Text RSS is used with news reader software (e.g. <a href="https://www.newsblur.com">NewsBlur</a>, <a href="https://feedly.com">Feedly</a>). If you use software, on any platform, that can read RSS feeds, you can use Full-Text RSS. Simply copy and paste the URL generated by Full-Text RSS (you'll see it in your browser's address bar when you click 'Create Feed') into your application.</p>

					<h3>What other uses are there for this?</h3>

					<p class="answer">Full-Text RSS is also used by developers and researchers to extract articles from web pages. The extracted content can then be repackaged (e.g. for easy mobile reading, converted to epub or mobi format to be read on an e-reader such as the Kindle), or used for statistical analysis.</p>

					<h3>I'm a developer but I don't use PHP, can I still use this?</h3>

					<p class="answer">Full-Text RSS is designed to be used as web service. We have a <a href="https://market.mashape.com/fivefilters/full-text-rss">hosted API</a>, but you can also host the software yourself (see our <a href="https://help.fivefilters.org/full-text-rss/hosting.html">hosting suggestions</a>). Full-Text RSS outputs the extracted content as an RSS file or as JSON.</p>

					<p class="answer">There's more information in our <a href="https://help.fivefilters.org/full-text-rss/">user guide</a>.</p>
					
					<h3 id="why-pay">Why, if it's "free software", do I have to pay to download a zip copy?</h3>
					<p class="answer">There's often confusion around the word 'free' in <a href="http://www.gnu.org/philosophy/free-sw.html">free software</a>. The Free Software Foundation explains it as follows: 'When we speak of "free software", we're talking about freedom, not price' (<a href="http://www.gnu.org/philosophy/selling.html">read more</a>). We are a free software project because we believe in the benefits of free software and we want people who use our code to be able to examine it, run it for themselves, and even change it if they want to. But we're not a big business with a big budget. We simply want to do the work we enjoy, and to do it we really need to make enough to sustain the project. We've tried to keep the price of the zip download reasonable and, in addition to sending you the code itself, we give you additional benefits such as free updates for a limited time and support if you have trouble using it.</p>

					<h3>What if I pay and it doesn't work on my server?</h3>
					<p class="answer">If you pay and it doesn't work, and we can't help you get it to work, then we'll happily refund your money (email us at help (at) fivefilters.org and we'll do our best to help).</p>
				</div>
				
				<div class="tab-pane" id="publishers">
					<h2>Publishers</h2>
					<h3>How can I specify what gets extracted from my site?</h3>
					<p class="answer">The best way to ensure we pick out the correct content is to mark up your content using <a href="https://schema.org/Article">Schema.org Article markup</a>.</p>
				
					<h3>Why is my content appearing on website X?</h3>
					<p class="answer">We occasionally receive emails from publishers who find their content republished on other websites completely unrelated to fivefilters.org - usually <a href="https://en.wikipedia.org/wiki/Spam_blog">spam blogs</a> (or splogs). The reason some of these complaints reach us, rather than the site owners who republish the content, is that some site owners have started using our Full-Text RSS service as part of their publication process. In doing so, they are also inadvertently republishing the reference to fivefilters.org that appears at the bottom of each feed item. This reference often gives the mistaken impression that we endorse or are responsible for the republication of such material.</p>
					
					<h3>What should I do to remove my content from website X?</h3>
					<p class="answer">fivefilters.org has no control over other websites. We urge publishers to contact the site owner carrying the content and request that it be removed.</p>
					
					<h3>Can you stop my content appearing on other sites?</h3>
					<p class="answer">If you suspect that your content is being republished with the aid of our service, please contact us with your feed URL and we will be happy to block access to your feed from fivefilters.org.</p>
					<p class="answer">But please note that republishing content is fairly trivial for those determined to do it. Having your feed blocked on fivefilters.org is unlikely to stop those determined to republish it.</p>
					
					<h3>What is the point of the service, if not to help people steal content?</h3>
					<p class="answer">RSS feeds are typically used by individuals to (1) more conveniently receive updates to a website and (2) to read that content in an environment of their choosing (usually a deicated news reading application such as Google Reader or RSS Owl). Full-Text RSS helps users with the second scenario.</p> 
					<p class="answer">Aside from helping individuals read the content they like in their chosen environment, the ability to extract web content is also very useful for application developers. We use the code ourselves as part of our PDF Newspaper project and Kindle service to make web articles, especially those published by smaller, independent sites, more accesible &mdash; this can also benefit authors and publishers of these sites (many of whom don't have the resources of the big media companies) by allowing them to offer their content in multiple convenient formats without much effort.</p>
					<p class="answer">To give another example, researchers in the field of natural language processing use our tools to do linguistic and statistical analysis on web content.</p>
					<p class="answer">Like many technologies, however, it is a double edged sword. We often use the copy and paste commands as an analogy: they <em>can</em> be used to help people "steal" content but were not designed for that purpose.</p>
				</div>
				
			</div>
		</div>
		<hr class="hr-dots" />
	</section>	
	
	<section class="container regular-section">
		<div class="row">
			<div class="span12">
			
			<h2>I still have questions, who do I contact?</h2>
			<p class="answer">We're happy to answer any questions you may have. Feel free to ask questions over in our <a href="https://help.fivefilters.org/">support centre</a>, or alternatively, email help (at) fivefilters.org</p>
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
							<li><a href="../about.php">About Us</a></li>
							<li><a href="../pricing.php">Pricing</a></li>	
							<li><a href="../privacy.php">Privacy Policy</a></li>
							<li><a href="../terms.php">Terms and Conditions</a></li>
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
				    <a href="mailto:?subject=Check%20out%20this%20page%20from%20FiveFilters.org&amp;body=https%3A%2F%2Ffivefilters.org%2Fcontent-only%2Ffaq.php" style="border-radius: 0;" title="Email">
				      <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M20.11 26.147c-2.335 1.05-4.36 1.4-7.124 1.4C6.524 27.548.84 22.916.84 15.284.84 7.343 6.602.45 15.4.45c6.854 0 11.8 4.7 11.8 11.252 0 5.684-3.193 9.265-7.398 9.3-1.83 0-3.153-.934-3.347-2.997h-.077c-1.208 1.986-2.96 2.997-5.023 2.997-2.532 0-4.36-1.868-4.36-5.062 0-4.75 3.503-9.07 9.11-9.07 1.713 0 3.7.4 4.6.972l-1.17 7.203c-.387 2.298-.115 3.3 1 3.4 1.674 0 3.774-2.102 3.774-6.58 0-5.06-3.27-8.994-9.304-8.994C9.05 2.87 3.83 7.545 3.83 14.97c0 6.5 4.2 10.2 10 10.202 1.987 0 4.09-.43 5.647-1.245l.634 2.22zM16.647 10.1c-.31-.078-.7-.155-1.207-.155-2.572 0-4.596 2.53-4.596 5.53 0 1.5.7 2.4 1.9 2.4 1.44 0 2.96-1.83 3.31-4.088l.592-3.72z"/></svg></span>
				      <span class="rrssb-text">email</span>
				    </a>
				  </li>
				  <li class="rrssb-facebook">
				    <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header: https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
				    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffivefilters.org%2Fcontent-only%2Ffaq.php" class="popup" style="border-radius: 0;" title="Share on Facebook">
				      <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg></span>
				      <span class="rrssb-text">facebook</span>
				    </a>
				  </li>
				  <li class="rrssb-twitter">
				    <!-- Replace href with your Meta and URL information  -->
				    <a href="https://twitter.com/intent/tweet?text=Check%20out%20this%20page%20from%20%40fivefilters%3A%20https%3A%2F%2Ffivefilters.org%2Fcontent-only%2Ffaq.php"
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
	<script src="../js/jquery.1.8.1.min.js"></script>
	<script src="../js/bootstrap.2.1.1.min.js"></script>
	<script src="../js/jquery.fancybox.2.1.0.min.js"></script>
	<script src="../js/functions.js"></script>
	<script src="../js/rrssb.min.js"></script>

		
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