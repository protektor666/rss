<!DOCTYPE html>
<html lang="en" xmlns:og="http://opengraphprotocol.org/schema/">
<head>
  <title>Full-Text RSS Feeds | fivefilters.org</title>
	<meta name="description" content="Full-Text RSS can transform partial web feeds to deliver the full content. Read articles in full, in peace, in your favourite news reading application.">

	<style>
	/* JSON Prettify CSS from http://chris.photobooks.com/json/default.htm */
	.jsonOutput.PRETTY {
		font-family: Consolas, "Courier New", monospace;
		background-color: #333;
		color: #fff;
		padding: 10px; 
		border-radius: 4px;
	}
	.ERR             { color: #FF0000; font-weight: bold; }
	.FUNC            { color: #FF0000; font-weight: bold; }
	.IDK             { color: #FF0000; font-weight: bold; }
	.KEY             { color: #FFFFFF; font-weight: bold; }
	.BOOL            { color: #00FFFF; }
	.NUMBER          { color: #7FFF00; }
	.DATE            { color: #6495ED; }
	.REGEXP          { color: #DEB887; }
	.STRING          { color: #D8FFB0; }
	.UNDEF           { color: #91AA9D; font-style: italic; }
	.NULL            { color: #91AA9D; font-style: italic; }
	.EMPTY           { color: #91AA9D; font-style: italic; }
	.HTML span.ARRAY { color: #91AA9D; font-style: italic; }
	.HTML span.OBJ   { color: #91AA9D; font-style: italic; }
	table.OBJ        { background-color: #22353C; }
	table.ARRAY      { background-color: #252C47; }
	</style>

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
				<div class="span6 clearfix header-contents">
					<h1>Full-Text RSS <span style="color: #999; font-size: .5em;"> 3.9.1</span></h1>
					<form class="form-horizontal" id="form" method="post" action="check.php">
						<label for="url">Extract content at URL</label>
						<input type="text" name="url" id="url" placeholder="http://…" class="span5 dim" required>	
						<div id="toggle-advanced" class="advanced-button" tabindex="2">
							<label><i class="icon-arrow-down icon-white" style="opacity: .5;"></i> show options</label>
						</div>
						<div id="advanced">
							<fieldset>
								<legend>Premium options <a href="#limits" title="Info on the premium plan"><i class="icon-question-sign icon-white" style="vertical-align: sub; opacity: .7"></i></a></legend>
								
								<div class="control-group">
									<label class="control-label" for="key">API key</label>
									<div class="controls">
										<input type="text" id="key" name="key" class="dim span3" tabindex="4" />
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="max">Item limit</label>
									<div class="controls">
										<select id="max" name="max" class="dim span3" tabindex="5">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3" selected="selected">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>				

								<div class="control-group">
									<label class="control-label" for="links">Links</label>
									<div class="controls">
										<select id="links" class="dim span3" name="links" tabindex="6">
											<option value="preserve" selected="selected">preserve</option>
											<option value="footnotes">add to footnotes</option>
											<option value="remove">remove</option>
										</select>
									</div>
								</div>	
								
								<div class="control-group">
									<label class="control-label" for="exc">If extraction fails</label>
									<div class="controls">
										<select class="dim span3" id="exc" name="exc" tabindex="7">
											<option value="" selected="selected">keep item in feed</option>
											<option value="1">remove item from feed</option>
										</select>
									</div>
								</div>
								<div style="clear: both;"></div>
								<label class="checkbox" style="margin-bottom: 10px;"><input type="checkbox" name="summary" value="1" /> Include excerpt</label>
								<div style="clear: both;"></div>
								<label class="checkbox" style="margin-bottom: 10px;"><input type="checkbox" name="debug" value="1" /> Debug output</label>
							</fieldset>								
						</div>
						<div class="clearfix">
							<button type="submit" class="btn btn-large primary">Create Feed</button>
						</div>
					</form>				
				</div> <!-- end span8 -->
				
				<!-- field help and video section -->
				<div class="span6" id="help-intro">
					<div class="field-help" id="field-help-url"><h3>Extract content at URL</h3><p>This can be a URL for a web article or a partial web feed. We will transform a partial feed into a full-text feed. If it's a web article, we'll extract its content and return it in a 1-item feed. Examples (click to insert):</p>
					<ul>
						<li><a href="#" onclick="$('#url').val('www.medialens.org/index.php/alerts/current-alert.feed?type=rss');return false;">partial feed</a> (medialens.org)</li>
						<li><a href="#" onclick="$('#url').val('https://feeds.feedburner.com/jonathanCooksBlog');return false;">partial feed</a> (jonathan-cook.net)</li>
						<li><a href="#" onclick="$('#url').val('www.medialens.org/index.php/alerts/alert-archive/2012/713-the-illusion-of-democracy.html');return false;">web page article</a> (medialens.org)</li>
					</ul></div>
				
					<div class="field-help" id="field-help-key"><h3>Premium access key</h3><p>If you pay for premium access, enter your key here. A valid key will remove the link we insert at the end of each feed item and enables the options below.</p><p><a style="white-space: nowrap;" target="_blank" href="https://secure.avangate.com/order/checkout.php?PRODS=4545147&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&PAY_TYPE=PAYPAL"><strong>Subscribe</strong></a> &mdash; from 4€ per month</p><ul><li>Instant activation</li><li>Cancel any time</li></ul></div>

					<div class="field-help" id="field-help-max"><h3>Feed item limit</h3><p>Set the maximum number of feed items we should process. The smaller the number, the faster the new feed is produced.</p><p>If your URL refers to a standard web page, this will have no effect: you will only get 1 item.</p></div>					
				
					<div class="field-help" id="field-help-links"><h3>Link handling</h3><p>By default, links within the content are preserved. Change this field if you'd like links removed, or included as footnotes.</p></div>				
				
					<div class="field-help" id="field-help-exc"><h3>Item handling when extraction fails</h3><p>If the extraction pattern above fails to match, we can remove the item from the feed or keep it in.</p><p>Keeping the item will keep the title, URL and original description (if any) found in the feed. In addition, we insert a message before the original description notifying you that extraction failed.</p></div>
				
					<div class="video-wrapper feat-media">
						<div class="video-container">
							<iframe src="https://player.vimeo.com/video/41213542?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div> <!-- end video-container -->

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
			<h2 id="section-about" class="spy-hook">What is Full-Text RSS?</h2>
			<!--<div class="row">
				<div class="span6">-->
				
				<div class="row-fluid">
				<div class="span6">
				<p><strong><i class="icon-user" style="opacity: .7; vertical-align: inherit;"></i> News enthusiasts</strong><br />Full-Text RSS can transform partial web feeds &mdash; often summary-only feeds which expect you to visit cluttered, ad-ridden site to read the full story &mdash; to deliver the full content stripped of clutter and ads. Read articles in full, in peace, in your favourite news reading application.</p>
				</div>
				
				<div class="span6">
				<p><strong><i class="icon-wrench" style="opacity: .7; vertical-align: inherit;"></i> Developers</strong><br />Full-Text RSS is a free software PHP application to help you extract article content from web pages. Extract from a standard HTML page or transform partial feeds to full text. Designed to be run as a web service, but one which you control.</p>
				</div>
				</div>
				<!--</div>
			</div>-->
		</div>
		<hr class="hr-dots" />
	</section>
			
	
	<!-- FEATURES -->
	<section class="container">
		<h2 id="section-features" class="spy-hook">Features</h2>
		<div class="feature-list">
			<div class="row">
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_152_new_window@2x.png" alt="Icon" style="opacity: .5" /></figure>
					<h3>Speedy article extraction</h3>
					<p>Extraction rules ensure accurate results for popular sites and blog platforms.</p>
				</div>
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_319_sort@2x.png" alt="Icon" style="opacity: .5" /></figure>
					<h3>Multi-page support</h3>
					<p>Articles split across a number of pages can be joined back together.</p>
				</div>
			</div> <!-- end row -->
		
			<div class="row">
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_185_screenshot@2x.png" alt="Icon"  style="opacity: .5" /></figure>
					<h3>Autodetection</h3>
					<p>Where extraction rules do not exist, Full-Text RSS relies on heuristics to detect content automatically.</p>
				</div>
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_023_cogwheels@2x.png" alt="Icon" style="opacity: .5" /></figure>
					<h3>Customisable</h3>
					<p>Add custom extraction rules for fine-grained extraction.</p>
				</div>
			</div> <!-- end row -->	

			<div class="row">
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_340_globe@2x.png" alt="Icon" style="opacity: .5" /></figure>
					<h3>Language detection</h3>
					<p>Full-Text RSS can figure out the language of the article being processed.</p>
				</div>
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_397_rss@2x.png" alt="Icon" style="opacity: .5" /></figure>
					<h3>Multiple formats</h3>
					<p>Extract articles from HTML pages and partial web feeds, and get result as RSS, JSON, or JSONP for easy parsing.</p>
				</div>
			</div> <!-- end row -->
			
			<div class="row">
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_342_hdd@2x.png" alt="Icon"  style="opacity: .5" /></figure>
					<h3>Easy hosting</h3>
					<p>Host on your own servers or deploy to the cloud. Pre-configured. No database required. See our <a href="https://help.fivefilters.org/full-text-rss/hosting.html">hosting suggestions</a>.</p>
				</div>
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_254_fishes@2x.png" alt="Icon" style="opacity: .5" /></figure>
					<h3>Freedom and transparency</h3>
					<p>Full-Text RSS is <a href="https://www.gnu.org/philosophy/free-sw.html">free software</a> &mdash; no restrictive corporate APIs, no secret back doors.</p>
				</div>
			</div> <!-- end row -->
			
		</div> <!-- end feature-list -->
		<hr class="hr-dots" />
	</section> <!-- end container -->
	
	<!-- TESTIMONIALS -->
	<section class="container">
		<!--<h2 style="text-align: center;">Happy users</h2>-->
	    <div id="myCarousel" class="carousel slide" data-interval="false">
			<!-- Carousel items -->
			<div class="carousel-inner" style="text-align: center; font-stylse:italic; min-height: 8em; font-size: 1.4em;">
				<div class="active item">
					&ldquo;Full-Text RSS is a well developed and easy to use solution for everybody who likes to read their curated information stream in one central place. Don’t settle for summaries and intro texts, read the whole article in your reader!&rdquo;
					<small><a href="https://janpeter.wiersma.me" target="_blank">Jan Peter Wiersma</a></small>
				</div>
				<div class="item">
					&ldquo;Full-Text RSS is a great tool that enabled us improve our service a lot. If only there were other such easy and well functioning tools out there.&rdquo;
					<small><a href="https://www.socialmind.gr" target="_blank">Social Mind</a></small>
				</div>
				<div class="item">
					&ldquo;We have tried some similar systems before but Full-Text RSS is the most complete, functional and robust one by far. It simply works flawlessly!&rdquo;
					<small><a href="https://seonatural.net" target="_blank">SEO Natural</a></small>
				</div>
				<div class="item">
					&ldquo;Easy to set up and yet very powerful. For an accessible price you will get a professional tool.&rdquo;
					<small>The Gamer’s Reader</small>
				</div>
				<div class="item">
					&ldquo;Faster reading, less clicking: Full-Text RSS makes my work more efficient every day.&rdquo;
					<small>Journalist, Germany</small>
				</div>
				<div class="item">
					&ldquo;We’re building a news analysis system and we had been looking for a tool to retrieve full articles from RSS feeds for quite a while. Your program saved us a lot of time!.&rdquo;
					<small>Sylvain Rochleau</small>
				</div>
				<div class="item">
					&ldquo;Full-Text RSS is a great fit for training our natural language processing and detection applications.&rdquo;
				</div>
				<div class="item">
					&ldquo;Extremely useful and easy to use. Many thanks!&rdquo;
				</div>
				<div class="item">
					&ldquo;Full-Text RSS allows me to read websites objectively, without being influenced by flashy design and aesthetics.&rdquo;
				</div>
				<div class="item">
					&ldquo;Full-Text provides me with the news I care about in the format I prefer. Including the added bonus of being private (self-hosted version).&rdquo;
				</div>
			</div>
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev" style="top: 20px;">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next" style="top: 20px;">&rsaquo;</a>
		</div>
		<hr class="hr-dots" style="margin-top: 1em" />
	</section>
	
	<!-- PRICING -->
	<section class="container">
		<h2 id="section-pricing" class="spy-hook">Pricing</h2>
		<div class="row">
		
			<div class="span3 pricing-table-column special most-popular" rel="popover" data-title="Best for..." data-content="<strong>Developers</strong> and <strong>news enthusiasts</strong> who want ownership and control over the application. Provides maximum configurability." data-trigger="hover" data-placement="right">
				<span class="featured-icon"></span>
				<h3>Self-hosted</h3>
				<div class="pricing">
					<span>From 35€ one-off</span>
					<!--<span>from</span>
					<p>30€</p>
					<span>one-off</span>-->
				</div> <!-- end pricing -->
				<ul>
					<li>You host it</li>
					<li>Unlimited feeds</li>
					<li>Language detection</li>
					<li>Customisable items per feed</li>
					<li>Caching: disabled or 10 min</li>
					<li>Links preserved or removed</li>
					<li>No link to FiveFilters.org</li>
					<li>JSON output</li>
					<li>Custom extraction rules</li>
				</ul>
				<div class="cta-area"><a href="#download" class="button">Buy Now <i class="icon-chevron-right icon-white"></i></a></div>
			</div> <!-- end span3 -->
		
			<div class="span3 pricing-table-column">
				<span class="featured-icon"></span>
				<h3>Basic</h3>
				<div class="pricing">
					<span>Free</span>
					<!--<span>&nbsp;</span>
					<span>&nbsp;</span>-->
					<!--<span>per month</span>-->
				</div> <!-- end pricing -->
				<ul>
					<li>We host it</li>
					<li>Unlimited feeds</li>
					<li>Language detection</li>
					<li>1-3 items per feed</li>
					<li>Caching: 20 min</li>
					<li>Links preserved</li>
					<li>Link to FiveFilters.org</li>
					<li>No JSON output</li>
				</ul>
				<div class="cta-area"><a href="#top" class="button">Start Now <i class="icon-chevron-right icon-white"></i></a></div>
			</div> <!-- end span3 -->

			<div class="span3 pricing-table-column" rel="popover" data-title="Best for..." data-content="<strong>News enthusiasts</strong> who want to subscribe to feeds in their news reading applications without seeing the FiveFilters.org notice appended at the end of each feed item.<br /><br />14-day money back guarantee on bi-annual and annual plans if you're not happy." data-trigger="hover" data-placement="left">
				<span class="featured-icon"></span>
				<h3>Premium</h3>
				<div class="pricing">
					<span>From 4€ per month</span>
					<!--<span>&nbsp;</span>-->
				</div> <!-- end pricing -->
				<ul>
					<li>We host it</li>
					<li>Unlimited feeds</li>
					<li>Language detection</li>
					<li><span style="background-color: lightyellow;">1-10 items per feed</span></li>
					<li><span style="background-color: lightyellow;">Caching: 10 min</span></li>
					<li><span style="background-color: lightyellow;">Links preserved or removed</span></li>
					<li><span style="background-color: lightyellow;">No link to FiveFilters.org</span></li>	
					<li>No JSON output</li>	
				</ul>
				<div class="cta-area"><a href="https://secure.avangate.com/order/checkout.php?PRODS=4545147&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&PAY_TYPE=PAYPAL" class="button">Buy Now <i class="icon-chevron-right icon-white"></i></a></div>
			</div> <!-- end span3 -->			
			
			<div class="span3 pricing-table-column" rel="popover" data-title="Best for..." data-content="<strong>Developers</strong> who want to get started quickly with article extraction without installing the application on their own server. Not suitable for subscribing to generated feeds." data-trigger="hover" data-placement="left">
				<span class="featured-icon"></span>
				<h3>Developer</h3>
				<div class="pricing">
					<span>Pay as you go</span>
					<!--<span>&nbsp;</span>-->
				</div> <!-- end pricing -->
				<ul>
					<li>We host it</li>
					<li>Unlimited feeds</li>
					<li>Language detection</li>
					<li><span style="background-color: lightyellow;">1-10 items per feed</span></li>
					<li><span style="background-color: lightyellow;">Caching: 10 min</span></li>
					<li><span style="background-color: lightyellow;">Links preserved or removed</span></li>
					<li><span style="background-color: lightyellow;">No link to FiveFilters.org</span></li>
					<li><span style="background-color: lightyellow;">JSON output</span></li>						
				</ul>
				<div class="cta-area"><a href="https://www.mashape.com/fivefilters/full-text-rss#!" class="button">Start Now <i class="icon-chevron-right icon-white"></i></a></div>
			</div> <!-- end span3 -->			
			
		</div> <!-- end row -->
		<hr class="hr-dots" />
	</section> <!-- end container -->
	
	
	<!-- DOWNLOAD -->	
	<section class="container">
		<h2 id="download" class="spy-hook">Download</h2>
		<div class="tabbable row">
		
			<!-- Sidebar -->
			<div class="span3">
				<ul class="nav nav-list" style="padding-left: 0; margin-bottom: 2em;">
					<li class="active"><a href="#download1" data-toggle="tab"><i class="icon-chevron-right"></i>Latest release</a></li>
					<li><a href="#download2" data-toggle="tab"><i class="icon-chevron-right"></i>What you get</a></li>
					<li><a href="#download3" data-toggle="tab"><i class="icon-chevron-right"></i>Older versions</a></li>
				</ul>
			</div>
			
			<div class="tab-content span8 regular-section" id="download-section">
			
				<!-- Full-Text RSS -->
				<div class="tab-pane active clearfix" id="download1">
					<h3>Full-Text RSS 3.9.1</h3>
					<p>Released <strong>10 May 2018</strong> &mdash; <a href="http://blog.fivefilters.org/post/173653199252/full-text-rss-39">What's new?</a> &mdash; <a href="changelog.txt">Changelog</a></p>
					
					<p>We offer two purchase options. They come with the same license, but if you intend to use Full-Text RSS as part of a commercial project, or require more support, please purchase the one for business use.</p>
					
					<div class="row-fluid" style="text-align: center;">
						<div class="span6 well" style="background-color: lightyellow;">
						<h3 style="margin-bottom: 0">Individual</h3>
						<hr />
						<p><a href="https://forum.fivefilters.org/c/full-text-rss">Community support forum</a></p>
						<p>Automatic update of <a href="https://github.com/fivefilters/ftr-site-config">extraction rules</a></p>
						<p>Custom rules via <a href="http://siteconfig.fivefilters.org/">builder</a></p>
						<p>Free updates for a year</p>
						<a class="btn btn-success btn-medium" style="text-shadow: 1px 1px 2px #4B5D1F; margin-bottom: 4px;" href="https://secure.avangate.com/order/checkout.php?PRODS=4731419&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&PAY_TYPE=PAYPAL&OPTIONS4731419=personal"><i class="icon-shopping-cart icon-white"></i> Buy Now &mdash; 35 €</a>
						<hr />
						<h3>Bundle Offer!</h3>
						<p>Everything above plus</p>
						<p>Feed Creator<br />Term Extraction<br />PDF Newspaper</p>
						<p><strong>Free updates for 2 years!</strong></p>
						<a class="btn btn-success btn-large" style="text-shadow: 1px 1px 2px #4B5D1F; margin-bottom: 4px;" href="https://secure.avangate.com/order/checkout.php?PRODS=4719908&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&PAY_TYPE=PAYPAL&OPTIONS4719908=personal"><i class="icon-shopping-cart icon-white"></i> Buy Bundle &mdash; 60 €</a>
						</div>

						<div class="span6 well" style="background-color: lightyellow;">
						<h3 style="margin-bottom: 0">Business</h3>
						<hr />
						<p><a href="https://help.fivefilters.org">Email support</a></p>
						<p>Automatic update of <a href="https://github.com/fivefilters/ftr-site-config">extraction rules</a></p>
						<p>1 request for custom rules + <a href="http://siteconfig.fivefilters.org/">builder</a></p>
						<p>Free updates for a year</p>
						<a class="btn btn-success btn-medium" style="text-shadow: 1px 1px 2px #4B5D1F; margin-bottom: 4px;" href="https://secure.avangate.com/order/checkout.php?PRODS=4731419&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&PAY_TYPE=PAYPAL&OPTIONS4731419=business"><i class="icon-shopping-cart icon-white"></i> Buy Now &mdash; 75 €</a>
						<hr />
						<h3>Bundle Offer!</h3>
						<p>Everything above plus</p>
						<p>Feed Creator<br />Term Extraction<br />PDF Newspaper</p>
						<p><strong>Free updates for 2 years!</strong></p>
						<a class="btn btn-success btn-large" style="text-shadow: 1px 1px 2px #4B5D1F; margin-bottom: 4px;" href="https://secure.avangate.com/order/checkout.php?PRODS=4719908&QTY=1&CART=1&CARD=1&DESIGN_TYPE=1&PAY_TYPE=PAYPAL&OPTIONS4719908=business"><i class="icon-shopping-cart icon-white"></i> Buy Bundle &mdash; 150 €</a>
						</div>
					</div>
					
				</div>

				<!-- What you get -->
				<div class="tab-pane" id="download2">
					<h3>What you get</h3>
					<p>Full-Text RSS 3.9.1 from FiveFilters.org includes:</p>
					<ul>
					<li>Easy installation (no database setup required)</li>
					<li>Technical support via our forum</li>
					<li>Free updates for 1 year (half price after that)</li>
					<li>Full source code</li>
					<li>Business use customers: Email support + custom extraction rules for a site of your choice *</li>					
					</ul>
					<p><small>* If extraction does not work well on a particular site, contact us with details of what you're trying to extract and we'll send you a custom site config file.</small></p>				
					
					<p>After paying you will automatically receive an email with a download link to the zip package. The zip package contains a readme file with instructions for uploading the code to your web host via FTP.</p>
				</div>
				
				<!-- Older versions -->
				<div class="tab-pane" id="download3">
					<h3>Older versions</h3>
					<p>Older versions of Full-Text RSS can be downloaded free of charge from our <a href="https://bitbucket.org/fivefilters/full-text-rss">code repository</a>.</p>
					<p>Note: we do not offer any support for these and for best extraction results we recommend buying the latest version.</p>
				</div>
				
			</div>
		</div>
		<hr class="hr-dots" />
	</section>
	
	
	<!-- More information -->	
	<section class="container">
		<h2 id="more-info" class="spy-hook">More information</h2>
		<div class="tabbable row">
		
			<!-- Sidebar -->
			<div class="span3">
				<ul class="nav nav-list" style="padding-left: 0; margin-bottom: 2em;">
					<li class="active"><a href="#extras-documentation" data-toggle="tab"><i class="icon-chevron-right"></i>Documentation</a></li>					
					<li><a href="#extras1" data-toggle="tab"><i class="icon-chevron-right"></i>Hosted or self-hosted?</a></li>					
					<li><a href="#extras2" data-toggle="tab"><i class="icon-chevron-right"></i>API</a></li>
					<li><a href="#extras3" data-toggle="tab"><i class="icon-chevron-right"></i>System requirements</a></li>
					<li><a href="#extras4" data-toggle="tab"><i class="icon-chevron-right"></i>Software components</a></li>				
					<li><a href="#extras5" data-toggle="tab"><i class="icon-chevron-right"></i>License</a></li>
				</ul>
			</div>
			
			<div class="tab-content span8 regular-section" id="download-section">

				<!-- Documentation -->
				<div class="tab-pane active clearfix" id="extras-documentation">
					<h3>Documentation and support</h3>
					<p>Our <a href="https://help.fivefilters.org/full-text-rss/">help site</a> covers most of what you'll need to know to get Full-Text RSS up and running and customised to work the way you want.</p>
					<p>Our <a href="https://forum.fivefilters.org/c/full-text-rss">public forum</a> is the place to ask questions and browse previous answers.</p>
				</div>
			
				<!-- Hosted or self-hosted -->
				<div class="tab-pane" id="extras1">
					<h3>Hosted or self-hosted?</h3>
					<p>We want our users to be free to examine and run the code behind FiveFilters.org
					however they like. So rather than simply invite you to sign up for our premium hosted plan, 
					we've gone to great effort to make the software easy to use and install on your own hosting account.</p>
					<p>Using our hosted service (Free, Premium) is the easiest option as we manage everything. You do not have to worry about staying up to date because we maintain the code and any changes we make will automatically be made available to you.</p>
					<p>If, however, you have your own hosting account or manage your own server, the self-hosted option gives you the freedom to run the code and manage things yourself &mdash; including writing custom extraction rules. We also have a help page on <a href="https://help.fivefilters.org/full-text-rss/hosting.html">hosting options</a> which should help you get started.</p>
					<p><strong>Note:</strong> We monitor our hosted service to prevent abuse. For developers needing to process very large amounts of data, we highly recommend downloading the self-hosted version.</p>
				</div>

				<!-- API -->
				<div class="tab-pane" id="extras2">
					<h3>API</h3>
					
<p>The details here are mainly intended for developers using our self-hosted copy of Full-Text RSS for article extraction and feed conversion. 
	News enthusiasts who simply want to subscribe to a full-text feed in their news reading application can safely ignore the details here and use the form above.</p>

	<p>Full-Text RSS offers two endpoints: <a href="#article-extraction">Article Extraction</a> and <a href="#feed-conversion">Feed Conversion</a>. If you've restricted access to Full-Text RSS, the final section on <a href="#api-keys">API keys</a> will tell you how to pass your key along in the request.</p>

	<h3 id="article-extraction">1. Article Extraction</h3>
	<p>To extract article content from a web page and get a simple JSON response, use the following endpoint:</p>
	<ul>
		<li style="font-family: monospace;">/extract.php?url=<strong>[url]</strong></li>
	</ul>
	
	<h3>Request Parameters</h3>
	
	<p>When making HTTP requests, you can pass the following parameters to <tt>extract.php</tt> in a GET or POST request.</p>
	<p>Note: for many of these parameters, the configuration file will ultimately determine if and how they can be used.</p>
	<table width="100%" border="0" class="parameters table table-bordered">
		<thead>
		<tr style="background-color: #ddd">
			<th width="13%">Parameter</th>
			<th width="19%">Value</th>
			<th width="68%">Description</th>
		</tr>
		</thead>
		<tbody>

		<tr>
			<td>url</td>
			<td>string (URL)</td>
			<td>This is the only required parameter. It should be the URL to a standard HTML page. You can omit the 'http://' prefix if you like.</td>
		</tr>
		
		<tr>
			<td>inputhtml</td>
			<td>string (HTML)</td>
			<td>If you already have the HTML, you can pass it here. We will not make any HTTP requests for the content if this parameter is used. Note: The input HTML should be UTF-8 encoded. And you will still need to give us the URL associated with the content (the URL may determine how the content is extracted, if we have extraction rules associated with it).</td>
		</tr>

		<tr>
			<td>content</td>
			<td><tt>0</tt>, <tt>1</tt> (default)</td>
			<td>If set to 0, the extracted content will not be included in the output.</td>
		</tr>
		
		<tr>
			<td>links</td>
			<td><tt>preserve</tt> (default), <tt>footnotes</tt>, <tt>remove</tt></td>
			<td>Links can either be preserved, made into footnotes, or removed. None of these options affect the link text, only the hyperlink itself.</td>
		</tr>
		
		<tr>
			<td>xss</td>
			<td><tt>0</tt>, <tt>1</tt> (default)</td>
			<td><p>Use this to enable/disable XSS filtering. It is enabled by default, but if your application/framework/CMS already filters HTML for XSS vulnerabilities, you can disable XSS filtering here.</p>
<p>If enabled, we'll pass retrieved HTML content through htmLawed (safe flag on and style attributes denied). Note: when enabled this will remove certain elements you may want to preserve, such as iframes.</p></td>
		</tr>

		<tr>
			<td>lang</td>
			<td><tt>0</tt>, <tt>1</tt> (default), <tt>2</tt>, <tt>3</tt></td>
			<td><p>Language detection. If you'd like Full-Text RSS to find the language of the articles it processes, you can use one of the following values:</p>
			<dl>
				<dt>0</dt><dd>Ignore language</dd>
				<dt>1</dt><dd>Use article metadata (e.g. HTML lang attribute) (Default value)</dd>
				<dt>2</dt><dd>As above, but guess the language if it's not specified.</dd>
				<dt>3</dt><dd>Always guess the language, whether it's specified or not.</dd>
			</dl>
			</td>
		</tr>
		
		<tr>
			<td>debug</td>
			<td>[no value], <tt>rawhtml</tt>, <tt>parsedhtml</tt></td>
			<td><p>If this parameter is present, Full-Text RSS will output the steps it is taking behind the scenes to help you debug problems.</p>
			<p>If the parameter value is <tt>rawhtml</tt>, Full-Text RSS will output the HTTP response (headers and body) of the first response after redirects.</p> 
			<p>If the parameter value is <tt>parsedhtml</tt>, Full-Text RSS will output the reconstructed HTML (after its own parsing). This version is what the extraction rules are applied to, and it may differ from the original (<tt>rawhtml</tt>) output. If your extraction rules are not picking out any elements, this will likely help identify the problem.</p>
			<p>Note: Full-Text RSS will stop execution after HTML output if one of the last two parameter values are passed. Otherwise it will continue showing debug output until the end.</p></td>
		</tr>
		
		<tr>
			<td>parser</td>
			<td><tt>html5php</tt>, <tt>libxml</tt></td>
			<td>The default parser is libxml as it's the fastest. HTML5-PHP is an HTML5 parser implemented in PHP. It's slower than libxml, but can often produce better results. You can request HTML5-PHP be used as the parser in a site-specific config file (to ensure it gets used for all URLs for that site), or explicitly via this request parameter.</td>
		</tr>
		
		<tr>
			<td>siteconfig</td>
			<td>string</td>
			<td>Site-specific extraction rules are usually stored in text files in the site_config folder. You can also submit <a href="https://help.fivefilters.org/full-text-rss/site-patterns.html">extraction rules</a> directly in your request using this parameter.</td>
		</tr>		
		
		<tr>
			<td>proxy</td>
			<td><tt>0</tt>, <tt>1</tt>, string (proxy name)</td>
			<td>This parameter has no effect if proxy servers have not been entered in the config file. If they have been entered and enabled, you can pass the following values: 0 to disable proxy use (uses direct connection). 1 for default proxy behaviour (whatever is set in the config), or a string to identify a specific proxy server (has to match the name given to the proxy in the config file).</td>
		</tr>
	
		</tbody>
	</table>


	<h3>Response (example)</h3>
	<p>Simple JSON output containing extracted article title, content, and more. It was produced from the following input URL: http://chomsky.info/articles/20131105.htm</p>
	<!-- Generated by http://chris.photobooks.com/json/default.htm -->
	<output style="display: block; font-size: 12px;" for="jsonInput jsonStrict jsonEval json2HTML json2JSON jsonTrunc jsonDate jsonData jsonSpace" class="jsonOutput PRETTY"><span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;<span>"title": <span title="String" class="STRING">"De-Americanizing the World"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span>"excerpt": <span title="String" class="STRING">"During the latest episode of the Washington farce that has astonish…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span>"date": <span title="null" class="NULL">null</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span>"author": <span title="String" class="STRING">"Noam Chomsky"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span>"language": <span title="String" class="STRING">"en"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span>"url": <span title="String" class="STRING">"http://chomsky.info/articles/20131105.htm"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span>"effective_url": <span title="String" class="STRING">"http://chomsky.info/articles/20131105.htm"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span>"content": <span title="String" class="STRING">"&lt;p&gt;During the latest episode of the Washington farce that has aston…"</span></span><br>}</span></output>
	<p>Note: For brevity the output above is truncated.</p>

	<hr />
	<h3 id="feed-conversion">2. Feed Conversion</h3>
	<p>To transform a partial feed to a full-text feed, pass the URL (<a href="https://meyerweb.com/eric/tools/dencoder/">encoded</a>) in the querystring to the following URL:</p>
	<ul>
		<li style="font-family: monospace;">/makefulltextfeed.php?url=<strong>[url]</strong></li>
	</ul>
	
	<p>All the parameters in the form at the top of this page can be passed in this way. Examine the URL in the address bar after you click 'Create Feed' to see the values.</p>
	
	<h3>Request Parameters</h3>
	
	<p>When making HTTP requests, you can pass the following parameters to <tt>makefulltextfeed.php</tt> in a GET request. Most of these parameters have default values suitable for news enthusiasts who simply want to subscribe to a full-text feed in their news reading application. If that's what you're doing, you can safely ignore the details here. For developers, or others who need more control over the output produced by Full-Text RSS, this section should give you an idea of what you can do.</p>
	<p>We do not provide form fields for all of these parameters, but you can modify the URL in your browser after clicking 'Create Feed' to use them.</p>
	<p>Note: for many of these parameters, the configuration file will ultimately determine if and how they can be used.</p>
	<table width="100%" border="0" class="parameters table table-bordered">
		<thead>
		<tr style="background-color: #ddd">
			<th width="13%">Parameter</th>
			<th width="19%">Value</th>
			<th width="68%">Description</th>
		</tr>
		</thead>
		<tbody>

		<tr>
			<td>url</td>
			<td>string (URL)</td>
			<td>This is the only required parameter. It should be the URL to a partial feed or a standard HTML page. You can omit the 'http://' prefix if you like.</td>
		</tr>
		
		<tr>
			<td>format</td>
			<td><tt>rss</tt> (default), <tt>json</tt></td>
			<td>The default Full-Text RSS output is RSS. The only other valid output format is JSON. To get JSON output, pass format=json in the querystring. Exclude it from the URL (or set it to ‘rss’) if you’d like RSS.</td>
		</tr>	
		
		<tr>
			<td>summary</td>
			<td><tt>0</tt> (default), <tt>1</tt></td>
			<td>If set to 1, an excerpt will be included for each item in the output.</td>
		</tr>			
		
		<tr>
			<td>content</td>
			<td><tt>0</tt>, <tt>1</tt> (default)</td>
			<td>If set to 0, the extracted content will not be included in the output.</td>
		</tr>			
		
		<tr>
			<td>links</td>
			<td><tt>preserve</tt> (default), <tt>footnotes</tt>, <tt>remove</tt></td>
			<td>Links can either be preserved, made into footnotes, or removed. None of these options affect the link text, only the hyperlink itself.</td>
		</tr>			
		
		<tr>
			<td>exc</td>
			<td><tt>0</tt> (default), <tt>1</tt></td>
			<td>If Full-Text RSS fails to extract the article body, the generated feed item will include a message saying extraction failed followed by the original item description (if present in the original feed). You ask Full-Text RSS to remove such items from the generated feed completely by passing 1 in this parameter.</td>
		</tr>			
		
		<tr>
			<td>accept</td>
			<td><tt>auto</tt> (default), <tt>feed</tt>, <tt>html</tt></td>
			<td><p>Tell Full-Text RSS what it should expect when fetching the input URL. By default Full-Text RSS tries to guess whether the response is a feed or regular HTML page. It's a good idea to be explicit by passing the appropriate type in this parameter. This is useful if, for example, a feed stops working and begins to return HTML or redirecs to a HTML page as a result of site changes. In such a scenario, if you've been explicit about the URL being a feed, Full-Text RSS will not parse HTML returned in response. If you pass accept=html (previously html=1), Full-Text RSS will not attempt to parse the response as a feed. This increases performance slightly and should be used if you know that the URL is not a feed.</p>

			<p>Note: If excluded, or set to <tt>auto</tt>, Full-Text RSS first tries to parse the server's response as a feed, and only if it fails to parse as a feed will it revert to HTML parsing. In the default parse-as-feed-first mode, Full-Text RSS will identify itself as PHP first and only if a valid feed is returned will it identify itself as a browser in subsequent requests to fetch the feed items. In parse-as-html mode, Full-Text RSS will identify itself as a browser from the very first request.</p></td>
		</tr>
		
		<tr>
			<td>xss</td>
			<td><tt>0</tt> (default), <tt>1</tt></td>
			<td><p>Use this to enable XSS filtering. We have not enabled this by default because we assume the majority of our users do not display the HTML retrieved by Full-Text RSS in a web page without further processing. If you subscribe to our generated feeds in your news reader application, it should, if it's good software, already filter the resulting HTML for XSS attacks, making it redundant for Full-Text RSS do the same. Similarly with frameworks/CMSs which display feed content - the content should be treated like any other user-submitted content.</p>

<p>If you are writing an application yourself which is processing feeds generated by Full-Text RSS, you can either filter the HTML yourself to remove potential XSS attacks or enable this option. This might be useful if you are processing our generated feeds with JavaScript on the client side - although there's client side xss filtering available too.</p>

<p>If enabled, we'll pass retrieved HTML content through htmLawed (safe flag on and style attributes denied). Note: if enabled this will also remove certain elements you may want to preserve, such as iframes.</p></td>
		</tr>
		
		<tr>
			<td>callback</td>
			<td>string</td>
			<td>This is for JSONP use. If you're requesting JSON output, you can also specify a callback function (Javascript client-side function) to receive the Full-Text RSS JSON output.</td>
		</tr>				
		
		<tr>
			<td>lang</td>
			<td><tt>0</tt>, <tt>1</tt> (default), <tt>2</tt>, <tt>3</tt></td>
			<td><p>Language detection. If you'd like Full-Text RSS to find the language of the articles it processes, you can use one of the following values:</p>
			<dl>
				<dt>0</dt><dd>Ignore language</dd>
				<dt>1</dt><dd>Use article metadata (e.g. HTML lang attribute) or feed metadata. (Default value)</dd>
				<dt>2</dt><dd>As above, but guess the language if it's not specified.</dd>
				<dt>3</dt><dd>Always guess the language, whether it's specified or not.</dd>
			</dl>
			<p>If language detection is enabled and a match is found, the language code will be returned in the &lt;dc:language&gt; element inside the &lt;item&gt; element.</p>
			</td>
		</tr>				
		
		<tr>
			<td>debug</td>
			<td>[no value], <tt>rawhtml</tt>, <tt>parsedhtml</tt></td>
			<td><p>If this parameter is present, Full-Text RSS will output the steps it is taking behind the scenes to help you debug problems.</p>
			<p>If the parameter value is <tt>rawhtml</tt>, Full-Text RSS will output the HTTP response (headers and body) of the first response after redirects.</p> 
			<p>If the parameter value is <tt>parsedhtml</tt>, Full-Text RSS will output the reconstructed HTML (after its own parsing). This version is what the extraction rules are applied to, and it may differ from the original (<tt>rawhtml</tt>) output. If your extraction rules are not picking out any elements, this will likely help identify the problem.</p>
			<p>Note: Full-Text RSS will stop execution after HTML output if one of the last two parameter values are passed. Otherwise it will continue showing debug output until the end.</p></td>
		</tr>
		
		<tr>
			<td>parser</td>
			<td><tt>html5php</tt>, <tt>libxml</tt></td>
			<td>The default parser is libxml as it's the fastest. HTML5-PHP is an HTML5 parser implemented in PHP. It's slower than libxml, but can often produce better results. You can request HTML5-PHP be used as the parser in a site-specific config file (to ensure it gets used for all URLs for that site), or explicitly via this request parameter.</td>
		</tr>
		
		<tr>
			<td>siteconfig</td>
			<td>string</td>
			<td>Site-specific extraction rules are usually stored in text files in the site_config folder. You can also submit <a href="https://help.fivefilters.org/full-text-rss/site-patterns.html">extraction rules</a> directly in your request using this parameter.</td>
		</tr>		
		
		<tr>
			<td>proxy</td>
			<td><tt>0</tt>, <tt>1</tt>, string (proxy name)</td>
			<td>This parameter has no effect if proxy servers have not been entered in the config file. If they have been entered and enabled, you can pass the following values: 0 to disable proxy use (uses direct connection). 1 for default proxy behaviour (whatever is set in the config), or a string to identify a specific proxy server (has to match the name given to the proxy in the config file).</td>
		</tr>			
	
		</tbody>
	</table>

	<p><strong>Feed-only parameters</strong> &mdash; These parameters only apply to web feeds. They have no effect when the input URL points to a web page.</p>
	
	<table width="100%" border="0" class="parameters table table-bordered">
		<thead>
		<tr style="background-color: #ddd">
			<th width="13%">Parameter</th>
			<th width="19%">Value</th>
			<th width="68%">Description</th>
		</tr>
		</thead>
		<tbody>
		
		<tr>
			<td>use_extracted_title</td>
			<td>[no value]</td>
			<td>By default, if the input URL points to a feed, item titles in the generated feed will not be changed - we assume item titles in feeds are not truncated. If you'd like them to be replaced with titles Full-Text RSS extracts, use this parameter in the request (the value does not matter). To enable/disable this for for all feeds, see the config file - specifically <tt>$options->favour_feed_titles</tt></td>
		</tr>			

		<tr>
			<td>max</td>
			<td>number</td>
			<td>The maximum number of feed items to process. (The default and upper limit will be found in the configuration file.)</td>
		</tr>	
		
		</tbody>
	</table>

	<h3>Response (example)</h3>
	<p>JSON output produced for the BBC feed http://feeds.bbci.co.uk/news/rss.xml. You can also request regular RSS.</p>
	<!-- Generated by http://chris.photobooks.com/json/default.htm -->
	<output style="display: block; font-size: 11px;" for="jsonInput jsonStrict jsonEval json2HTML json2JSON jsonTrunc jsonDate jsonData jsonSpace" class="jsonOutput PRETTY"><span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;<span>"rss": <span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"@attributes": <span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"version": <span title="String" class="STRING">"2.0"</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"channel": <span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"title": <span title="String" class="STRING">"BBC News - Home"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"link": <span title="String" class="STRING">"http://www.bbc.co.uk/news/#sa-ns_mchannel=rss&amp;amp;ns_source=PublicR…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"description": <span title="String" class="STRING">"The latest stories from the Home section of the BBC News web site."</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"ttl": <span title="Number" class="NUMBER">15</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"image": <span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"title": <span title="String" class="STRING">"BBC News - Home"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"link": <span title="String" class="STRING">"http://www.bbc.co.uk/news/#sa-ns_mchannel=rss&amp;amp;ns_source=PublicR…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"url": <span title="String" class="STRING">"http://news.bbcimg.co.uk/nol/shared/img/bbc_news_120x60.gif"</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"item": <span class="ARRAY">[<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"title": <span title="String" class="STRING">"Russia's Putin visits annexed Crimea"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"link": <span title="String" class="STRING">"http://www.bbc.co.uk/news/world-europe-27344029#sa-ns_mchannel=rss&amp;…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"guid": <span title="String" class="STRING">"http://www.bbc.co.uk/news/world-europe-27344029#sa-ns_mchannel=rss&amp;…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"description": <span title="String" class="STRING">"President Putin: \"[Crimeans have] proved their loyalty to a histor…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"content_encoded": <span title="String" class="STRING">"&lt;!-- Adding hypertab --&gt;&amp;#13;\n&amp;#13;\n&amp;#13;\n&lt;!-- end of hypertab -…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"pubDate": <span title="String" class="STRING">"Fri, 09 May 2014 15:02:04 +0000"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"dc_language": <span title="String" class="STRING">"en-gb"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"dc_format": <span title="String" class="STRING">"text/html"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"dc_identifier": <span title="String" class="STRING">"http://www.bbc.co.uk/news/world-europe-27344029"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"media_thumbnail": <span class="ARRAY">[<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"@attributes": <span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"url": <span title="String" class="STRING">"http://news.bbcimg.co.uk/media/images/74751000/jpg/_74751301_ycst2i…"</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"@attributes": <span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"url": <span title="String" class="STRING">"http://news.bbcimg.co.uk/media/images/74751000/jpg/_74751302_ycst2i…"</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"title": <span title="String" class="STRING">"Harris 'assaulted daughter's friend'"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"link": <span title="String" class="STRING">"http://www.bbc.co.uk/news/uk-27340134#sa-ns_mchannel=rss&amp;ns_source=…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"guid": <span title="String" class="STRING">"http://www.bbc.co.uk/news/uk-27340134#sa-ns_mchannel=rss&amp;amp;ns_sou…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"description": <span title="String" class="STRING">"Rolf Harris arrives at court flanked by his wife and daughter Rolf …"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"content_encoded": <span title="String" class="STRING">"&lt;!--  Embedding the video player --&gt;&amp;#13;\n&lt;!--  This is the embedd…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"pubDate": <span title="String" class="STRING">"Fri, 09 May 2014 15:21:52 +0000"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"dc_language": <span title="String" class="STRING">"en-gb"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"dc_format": <span title="String" class="STRING">"text/html"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"dc_identifier": <span title="String" class="STRING">"http://www.bbc.co.uk/news/uk-27340134"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"media_thumbnail": <span class="ARRAY">[<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"@attributes": <span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"url": <span title="String" class="STRING">"http://news.bbcimg.co.uk/media/images/74740000/jpg/_74740642_hi0221…"</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"@attributes": <span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"url": <span title="String" class="STRING">"http://news.bbcimg.co.uk/media/images/74740000/jpg/_74740643_hi0221…"</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"title": <span title="String" class="STRING">"Nigeria 'ignored' school warning"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"link": <span title="String" class="STRING">"http://www.bbc.co.uk/news/world-africa-27344863#sa-ns_mchannel=rss&amp;…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"guid": <span title="String" class="STRING">"http://www.bbc.co.uk/news/world-africa-27344863#sa-ns_mchannel=rss&amp;…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"description": <span title="String" class="STRING">"Nigeria's military had advance warning of the attack on a school at…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"content_encoded": <span title="String" class="STRING">"&lt;div class=\"caption full-width\"&gt;&amp;#13;\n  &lt;img src=\"http://news.b…"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"pubDate": <span title="String" class="STRING">"Fri, 09 May 2014 15:48:34 +0000"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"dc_language": <span title="String" class="STRING">"en-gb"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"dc_format": <span title="String" class="STRING">"text/html"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"dc_identifier": <span title="String" class="STRING">"http://www.bbc.co.uk/news/world-africa-27344863"</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"media_thumbnail": <span class="ARRAY">[<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"@attributes": <span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"url": <span title="String" class="STRING">"http://news.bbcimg.co.uk/media/images/74749000/jpg/_74749855_747495…"</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"@attributes": <span class="OBJ">{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"url": <span title="String" class="STRING">"http://news.bbcimg.co.uk/media/images/74749000/jpg/_74749856_747495…"</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;}</span></span><br>}</span></output>	
	<p>Note: For brevity the output above is truncated.</p>

	<hr />
	<h3 id="api-keys">API Keys</h3>
	<p>To restrict access to your copy of Full-Text RSS, you can specify API keys in the config file.</p>
	<p>Note: Full-text feeds produced by Full-Text RSS are intended to be publically accessible to work with feed readers. As such, the API key should not appear in the final URL for feeds.</p>
	
	<table width="100%" border="0" class="parameters table table-bordered">
		<thead>
		<tr style="background-color: #ddd">
			<th width="13%">Parameter</th>
			<th width="19%">Value</th>
			<th width="68%">Description</th>
		</tr>
		</thead>
		<tbody>
	    <tr>
        <td>key</td>
        <td>string or number</td>
        <td><p>This parameter has two functions.</p><p>If you're calling Full-Text RSS programattically, it's better to use this parameter to provide the API key index number together with the hash parameter (see below) so that the actual API key does not get sent in the HTTP request.</p><p>If you pass the actual API key in this parameter, the hash parameter is not required. If you pass the actual API key to makefulltextfeed.php, Full-Text RSS will find the index number and generate the hash value automatically and redirect to a new URL to hide the API key. If you'd like to link to a generated feed publically while protecting your API key, make sure you copy and paste the URL that results after the redirect.</p><p>If you've configured Full-Text RSS to require a key, an invalid key will result in an error message.</p></td>
    </tr>
    
 	    <tr>
        <td>hash</td>
        <td>string</td>
        <td>A SHA-1 hash value of the API key (actual key, not index number) and the URL supplied in the <tt>url</tt> parameter, concatenated. This parameter must be passed along with the API key's index number using the <tt>key</tt> parameter (see above). In PHP, for example: <tt>$hash = sha1($api_key.$url);</tt></td>
    </tr>
    
    </tbody>
	</table>					

				</div>
				
				<!-- System requirements -->
				<div class="tab-pane" id="extras3">
					<h3>System requirements</h3>
					<p>PHP 5.2 or above is required. The code has been tested on local, shared hosting and cloud environments. We recommend you download and run our simple 
					<a href="https://fivefilters.org/content-only/ftr_compatibility_test.zip">compatibility test</a> 
					before purchasing. It's a single (zipped) PHP file  you can upload to your server and access through your browser. 
					It will tell you whether your server is capable of running Full-Text RSS.</p>
					<p>On our help site, we have a list of <a href="https://help.fivefilters.org/full-text-rss/hosting.html">recommended hosts</a>.</p>
				</div>
				
				<!-- Software components -->
				<div class="tab-pane" id="extras4">
					<h3>Software Components</h3>
					<p>Full-Text RSS is written in PHP and relies on the following <strong>primary</strong> components:</p>
					<ul>
						<li><a href="https://www.keyvan.net/2010/08/php-readability/">PHP Readability</a></li>
						<li><a href="https://github.com/simplepie/simplepie/">SimplePie</a></li>
						<li>FeedWriter</li>
						<li>Humble HTTP Agent</li>
					</ul>
					<p>Depending on your configuration, these <strong>secondary</strong> components may also be used:</p> 
					<ul>
						<li><a href="https://github.com/Masterminds/html5-php">HTML5-PHP</a></li>
						<li><a href="https://www.bioinformatics.org/phplabware/internal_utilities/htmLawed/">htmLawed</a></li>		
						<li><a href="https://code.google.com/archive/p/rolling-curl/">Rolling Curl</a></li>
						<li><a href="https://framework.zend.com/">Zend Cache</a></li>
						<li><a href="https://github.com/pear/Text_LanguageDetect">Text_LanguageDetect</a></li>
					</ul>
				</div>			
				
				<!-- License -->
				<div class="tab-pane" id="extras5">
					<h3>License</h3>
					<p><a href="https://en.wikipedia.org/wiki/Affero_General_Public_License" style="border-bottom: none;"><img src="images/agplv3.png" alt="AGPL logo" /></a><br />This web application is licensed under the <a href="https://en.wikipedia.org/wiki/Affero_General_Public_License">AGPL version 3</a>. (<a href="https://clipperz.is/blog/2008/05/30/freedom_and_privacy_cloud_call_action/">More on why this is important.</a>)</p> 
					<p>The software components in this application are licensed as follows...</p>
					<ul>
						<li>PHP Readability: <a href="https://www.apache.org/licenses/LICENSE-2.0">Apache License v2</a></li>
						<li>SimplePie: <a href="https://en.wikipedia.org/wiki/BSD_license">BSD</a></li>
						<li>FeedWriter: <a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GPL v2</a></li>
						<li>Humble HTTP Agent: <a href="https://en.wikipedia.org/wiki/Affero_General_Public_License">AGPL v3</a></li>
						<li>Zend: New BSD</li>
						<li>Rolling Curl: <a href="https://www.apache.org/licenses/LICENSE-2.0">Apache License v2</a></li>
						<li>HTML5-PHP: <a href="https://opensource.org/licenses/mit-license.php">MIT</a></li>
						<li>htmLawed: <a href="https://en.wikipedia.org/wiki/GNU_Lesser_General_Public_License">LGPL v3</a></li>
						<li>Text_LanguageDetect: <a href="https://en.wikipedia.org/wiki/BSD_license">BSD</a></li>		
					</ul>
				</div>
			</div>
		</div>
		<hr class="hr-dots" />
	</section>
	
	
	<!-- GET IN TOUCH -->
	<section class="container">
		<h2 id="section-support" class="spy-hook">Support</h2>
		<div class="feature-list">
			<div class="row">
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_194_circle_question_mark@2x.png" alt="Icon" style="opacity: .5" /></figure>
					<h3><a href="faq.php">Frequently Asked Questions</a></h3>
					<p>What is this? How does it work? How can I use it? Why is my content appearing on other sites? See our Frequently Asked Questions page for answers.</p>
				</div>
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_244_conversation@2x.png" alt="Icon" style="opacity: .5" /></figure>
					<h3><a href="https://help.fivefilters.org">Help</a></h3>
					<p>Our help site contains articles to get you started, and a forum to ask question.</p>
				</div>
			</div> <!-- end row -->
		
			<div class="row">
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_399_e-mail@2x.png" alt="Icon"  style="opacity: .5" /></figure>
					<h3><a href="mailto:help@fivefilters.org">Email</a></h3>
					<p>Direct your questions to <a href="mailto:help@fivefilters.org">help@fivefilters.org</a>.</p>
				</div>
				<div class="span6">
					<figure><img src="../../../images/glyphicons/png/glyphicons_392_twitter@2x.png" alt="Icon" style="opacity: .5" /></figure>
					<h3><a href="https://twitter.com/fivefilters/" title="@fivefilters">Twitter</a></h3>
					<p>Direct your questions to <a href="https://twitter.com/fivefilters/">@fivefilters</a>. Why not follow us too?</p>
				</div>
			</div> <!-- end row -->	
			
		</div> <!-- end feature-list -->
		<!--<hr class="hr-dots" />-->
	</section> <!-- end container -->
	
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
				<p style="margin-bottom: 1em;">Stay up to date with Full-Text RSS by subscribing to our newsletter.</p>
				<form class="form-inline" action="https://ymlp.com/subscribe.php?id=gehyumqgmgj" method="post">
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
				    <a href="mailto:?subject=Check%20out%20this%20page%20from%20FiveFilters.org&amp;body=https%3A%2F%2Ffivefilters.org%2Fcontent-only%2Findex.php" style="border-radius: 0;" title="Email">
				      <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M20.11 26.147c-2.335 1.05-4.36 1.4-7.124 1.4C6.524 27.548.84 22.916.84 15.284.84 7.343 6.602.45 15.4.45c6.854 0 11.8 4.7 11.8 11.252 0 5.684-3.193 9.265-7.398 9.3-1.83 0-3.153-.934-3.347-2.997h-.077c-1.208 1.986-2.96 2.997-5.023 2.997-2.532 0-4.36-1.868-4.36-5.062 0-4.75 3.503-9.07 9.11-9.07 1.713 0 3.7.4 4.6.972l-1.17 7.203c-.387 2.298-.115 3.3 1 3.4 1.674 0 3.774-2.102 3.774-6.58 0-5.06-3.27-8.994-9.304-8.994C9.05 2.87 3.83 7.545 3.83 14.97c0 6.5 4.2 10.2 10 10.202 1.987 0 4.09-.43 5.647-1.245l.634 2.22zM16.647 10.1c-.31-.078-.7-.155-1.207-.155-2.572 0-4.596 2.53-4.596 5.53 0 1.5.7 2.4 1.9 2.4 1.44 0 2.96-1.83 3.31-4.088l.592-3.72z"/></svg></span>
				      <span class="rrssb-text">email</span>
				    </a>
				  </li>
				  <li class="rrssb-facebook">
				    <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header: https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
				    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffivefilters.org%2Fcontent-only%2Findex.php" class="popup" style="border-radius: 0;" title="Share on Facebook">
				      <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg></span>
				      <span class="rrssb-text">facebook</span>
				    </a>
				  </li>
				  <li class="rrssb-twitter">
				    <!-- Replace href with your Meta and URL information  -->
				    <a href="https://twitter.com/intent/tweet?text=Check%20out%20this%20page%20from%20%40fivefilters%3A%20https%3A%2F%2Ffivefilters.org%2Fcontent-only%2Findex.php"
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