

/* CUSTOM FUNCTIONS */
$(document).ready(function(){

	/* Jigowatt AJAX Form */
	$('#contact-form').submit(function(){

		var action = $(this).attr('action');

		$('#contact-submit').after('<img src="images/ajax-loader.gif" class="loader" />');

		$("#ajax-console").slideUp(750,function() {
		$('#ajax-console').hide();
		$('#ajax-console-success').hide();

		$.post(action, {
			name: $('#contact-name').val(),
			email: $('#contact-email').val(),
			website: $('#contact-website').val(),
			comments: $('#contact-comments').val(),
			verify: $('#verify').val()
		},
			function(data){
				if(data.match('success') != null) {
					$('#contact-form').slideUp('slow', function(){
						$('#ajax-console-success').slideDown('slow');
					});
					document.getElementById('ajax-console-success').innerHTML = data;
				} else {
					document.getElementById('ajax-console').innerHTML = data;
					$('#ajax-console').slideDown('slow');
					$('#contact-form img.loader').fadeOut('fast',function(){$(this).remove()});
				}
			}
		);

		});

		return false;

	});
	
	/* Adding Automatic Navigation for the Tour */
	var navParentLinkPrev = null, navParentTextPrev = null, navParentLinkNext = null, navParentTextNext = null, tourNav = null;

    $('.tour-navigation ul li').each(function(i, elem){
    	navParentLinkPrev = $(elem).prev().children().attr('href');
    	navParentTextPrev = $(elem).prev().children().text();
    	navParentLinkNext = $(elem).next().children().attr('href');
    	navParentTextNext = $(elem).next().children().text();
    	
    	if (navParentLinkPrev == null) {
    		tourNav = '<div class="tour-nav-container clearfix">'+
			'<a href="'+navParentLinkNext+'" data-toggle="tab" class="external-tab-hook fr neutral-button ic-right">' + navParentTextNext + ' <i class="icon-arrow-right"></i></a>' +
        	'</div>';
        } else if (navParentLinkNext == null) {
    		tourNav = '<div class="tour-nav-container clearfix">'+
			'<a href="'+navParentLinkPrev+'" data-toggle="tab" class="external-tab-hook fl neutral-button ic-left"><i class="icon-arrow-left"></i> ' + navParentTextPrev + '</a>' +
        	'</div>';
        } else {
    		tourNav = '<div class="tour-nav-container clearfix">'+
			'<a href="'+navParentLinkNext+'" data-toggle="tab" class="external-tab-hook fr neutral-button ic-right">' + navParentTextNext + ' <i class="icon-arrow-right"></i></a>' +
			'<a href="'+navParentLinkPrev+'" data-toggle="tab" class="external-tab-hook fl neutral-button ic-left"><i class="icon-arrow-left"></i> ' + navParentTextPrev + '</a>' +
        	'</div>';
        }
    	
        $($(elem).children().attr("href")).prepend(tourNav);
    });	
	
	
	
	// Dynamically create the floating nav
	$('h2.spy-hook').each(function(){
		//$('.floating-nav ul').append('<li><a href="#'+$(this).attr('id')+'">'+$(this).text()+'</a></li>');
		$('.floating-nav ul').append('<li><a href="#'+$(this).attr('id')+'">'+($(this).attr('data-nav-title') || $(this).text())+'</a></li>');
	});

	// Extending Bootstrap tabs by adding support for outside links
	// Once clicked, these act as a tab
	$('.external-tab-hook').click(function(){
		var targetTab = $(this).attr("href");
		
		$('a[href="' + targetTab + '"]').tab('show');
	});

	// Scrollspy
	// Only activating this if viewed on a screen > 960px
	// TODO: enable late using Bootstrap's own
	/*
	if ($(window).width() > 960) {
		$('.floating-nav').scrollspy({
			min: $('.floating-nav').offset().top,
			max: 99999,
			onEnter: function(element, position) {
				$(".floating-nav").addClass('fixed').removeClass('container');
				$(".floating-nav div").addClass('container');
				$("body").addClass('fixed-nav');
			},
			onLeave: function(element, position) {
				$(".floating-nav").removeClass('fixed').addClass('container');
				$(".floating-nav div").removeClass('container');
				$("body").removeClass('fixed-nav');
			}
		});
		
		$('.spy-hook').each(function(i) {
			var position = $(this).position();
			$(this).scrollspy({
				min: position.top-220,
				max: position.top + $(this).parent().height()-220,
				onEnter: function(element, position) {
					$('a[href$=' + element.id + ']').parent().addClass('active')
				},
				onLeave: function(element, position) {
					$('a[href$=' + element.id + ']').parent().removeClass('active');
				}
			});
		});
	}
	*/
	

		
	/* Smooth Scrolling */
	$('.floating-nav ul li a, a[href$="top"]').click(function(event){		
		event.preventDefault();
		$('html, body').animate({scrollTop:$(this.hash).offset().top-50}, 500);
	});
	
	
	/* jQuery Slider for Testimonials */
	$('.slider li').each(function(i){
		$(this).attr('id', 'slide-' + (i+1));
		$('.slider-controls').append('<li><a href="#slide-'+(i+1)+'">'+ (i+1) +'</a></li>')
	});
	
	$('.slider li:gt(0)').hide();
	$('.slider-controls li a:lt(1)').addClass('controls-active');
	
	$('.slider-controls a').click(function(event){
		event.preventDefault();
		$('.slider-controls a').removeClass('controls-active');
		$(this).addClass('controls-active');
		$('.slider li:visible').fadeOut();
		var targetSlide = $(this).attr('href');
		$(targetSlide).fadeIn();
	});
	
	
	
	/* Create a secondary menu for the responsive navigation */
	$("<select />").addClass('responsive-nav').appendTo(".floating-nav");
	
	$("<option />", {
		"selected": "selected",
		"value"   : "",
		"text"    : "Jump to..."
	}).appendTo(".floating-nav select");
	
	/* Populate dropdown with menu items */
	$(".floating-nav ul li a").each(function() {
		var el = $(this);
		$("<option />", {
			"value"   : el.attr("href"),
			"text"    : el.text()
		}).appendTo(".floating-nav select");
	});
	
	/* Make the drop-down work */
	$(".floating-nav select").change(function() {
		window.location = $(this).find("option:selected").val();
	});
	
	/* Enable tooltips */
    $("a[rel=tooltip]").tooltip();
	$("a[rel=popover]").popover();
	
	/* Fix bootstrap dropdown bug for mobile touch browsers */
	/* See https://github.com/twitter/bootstrap/issues/2975#issuecomment-6659992 */
	$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
	
	/* Enable carousel */
	//$('.carousel').carousel();
	
	/* Submit the Sign-up Form */
	$('#signup-submit').click(function(event) {
		event.preventDefault();
		$('#signup-form').submit();
	});
});