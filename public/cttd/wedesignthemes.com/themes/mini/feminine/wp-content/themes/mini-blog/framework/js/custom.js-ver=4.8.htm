jQuery.noConflict();
jQuery(document).ready(function($){
	
	"use strict";
	if( dttheme_urls.loadingbar === "enable") {
		Pace.on("done", function(){
			$(".loader").fadeOut(500);
			$(".pace").remove();
		});
	}
	
	if( $('.dt-sc-icon-box-type9').length ) {
		setTimeout(function(){
			$('.dt-sc-icon-box-type9').each(function(){
				$(this).find('.icon-wrapper').css('height', $(this).find('.icon-content').outerHeight(true) );
			});
		},1000);
    }
	   	
	if( $('ul.dt-sc-tabs-vertical-frame').length ) {
		$('ul.dt-sc-tabs-vertical-frame').each(function(){
			$(this).css('min-height', $(this).height() );
		});
	}

	if( $('ul.dt-sc-tabs-vertical').length ) {
		$('ul.dt-sc-tabs-vertical').each(function(){
			$(this).css('min-height', $(this).height() );
		});
	}
	
	if( $(".single-post").length ) {
		$(".dt_like_btn a").on("click",function() {
			var btn = $(this);
			var post_id = btn.data("postid");
			var act = btn.data("action");

			$.ajax({
				type: "post",
				url: dttheme_urls.ajaxurl,
				data: { action: 'miniblog_rating_like',
						nonce: dttheme_urls.wpnonce,
						post_id: post_id,
						doaction: act
					  },
				success: function(data, textStatus, XMLHttpRequest){
						btn.find('i').text(data);
				},
				error: function(MLHttpRequest, textStatus, errorThrown){
					//alert(textStatus);
				}
			});
			return false;
		});
	}

	// <select>	
	$("select").each(function(){
		if($(this).css('display') != 'none') {
			$(this).wrap( '<div class="selection-box"></div>' );
		}
	});

	// Live Search...
	if( $('.dt-sc-search-form').length ) {
		$('.dt-sc-search-form').each(function(){
			$(this).find('input#s').liveSearch({
				url: dttheme_urls.ajaxurl+'?q='
			});
		});
	}

	//To Top...
	$().UItoTop({ easingType: 'easeOutQuart' });

	$('.activity-type-tabs > ul >li:first').addClass('selected');
	$('.dir-form > .item-list-tabs > ul > li:first').addClass('selected');

	//Menu...
	function miniblogMegaMenu() {
		var screenWidth = $(document).width(),
		containerWidth = $("#header .container").width(),
		containerMinuScreen = (screenWidth - containerWidth)/2;
		if( containerWidth == screenWidth ){

			$("li.menu-item-megamenu-parent .megamenu-child-container").each(function(){

				var ParentLeftPosition = $(this).parent("li.menu-item-megamenu-parent").offset().left,
				MegaMenuChildContainerWidth = $(this).width();

				if( (ParentLeftPosition + MegaMenuChildContainerWidth) > screenWidth ){
					var SwMinuOffset = screenWidth - ParentLeftPosition;
					var marginFromLeft = MegaMenuChildContainerWidth - SwMinuOffset;
					var marginFromLeftActual = (marginFromLeft) + 25;
					var marginLeftFromScreen = "-"+marginFromLeftActual+"px";
					$(this).css('left',marginLeftFromScreen);
				}

			});
		} else {

			$("li.menu-item-megamenu-parent .megamenu-child-container").each(function(){
				var ParentLeftPosition = $(this).parent("li.menu-item-megamenu-parent").offset().left,
				MegaMenuChildContainerWidth = $(this).width();

				if( (ParentLeftPosition + MegaMenuChildContainerWidth) > containerWidth ){
					var marginFromLeft = ( ParentLeftPosition + MegaMenuChildContainerWidth ) - screenWidth;
					var marginLeftFromContainer = containerMinuScreen + marginFromLeft + 20;

					if( MegaMenuChildContainerWidth > containerWidth ){
						var MegaMinuContainer	= ( (MegaMenuChildContainerWidth - containerWidth)/2 ) + 10;
						var marginLeftFromContainerVal = marginLeftFromContainer - MegaMinuContainer;
						marginLeftFromContainerVal = "-"+marginLeftFromContainerVal+"px";
						$(this).css('left',marginLeftFromContainerVal);
					} else {
						marginLeftFromContainer = "-"+marginLeftFromContainer+"px";
						$(this).css('left',marginLeftFromContainer);
					}
				}

			});
		}
	}
	
	miniblogMegaMenu();
	
	$(window).smartresize(function(){
		miniblogMegaMenu();
	});

	//Menu Hover Animation...
	
	function miniblogMenuHover() {
		
		$("li.menu-item-depth-0,li.menu-item-simple-parent ul li" ).hover(function(){
			//mouseover 
			if( $(this).find(".megamenu-child-container").length  ){
				$(this).find(".megamenu-child-container").stop().fadeIn('fast');
			} else {
				$(this).find("> ul.sub-menu").stop().fadeIn('fast');
			}
		
		},function(){
			//mouseout
			if( $(this).find(".megamenu-child-container").length ){
				$(this).find(".megamenu-child-container").stop(true, true).hide();
			} else {
				$(this).find('> ul.sub-menu').stop(true, true).hide(); 
			}
		});
	}//Menu Hover End
	
	$("div.dt-video-wrap").fitVids();

	var isMobile = (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/Blackberry/i)) || (navigator.userAgent.match(/Windows Phone/i) || navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i) ) ? true : false;
	
	var currentWidth = window.innerWidth || document.documentElement.clientWidth;
	
	if(typeof dttheme_urls !== 'undefined') {
		
        if (dttheme_urls.nicescroll == "enable") {
            $("html").niceScroll({
                zindex: 999999,
                cursorborder: "1px solid #424242"
            });
        }
		
		//Sticky Navigation
		if( isMobile && dttheme_urls.mobilestickynav == "enable" ) {
			$(dttheme_urls.stickyele).sticky({ topSpacing: 0 });
		}
		if( dttheme_urls.stickynav === "enable" && currentWidth > 767 ) {
			$(dttheme_urls.stickyele).sticky({ topSpacing: 0 });
			
		}		
    }

	//Mobile Menu
	$("#dt-menu-toggle").click(function( event ){
		event.preventDefault();
		
		var $menu = $("nav#main-menu").find("ul.menu:first");
		$menu.slideToggle(function(){
			$menu.css('overflow' , 'visible');
			$menu.toggleClass('menu-toggle-open');
		});
		
		var $right = $("nav#main-menu").find("ul.menu-right");
		if( $right.length ) {
			$right.slideToggle(function(){
				$right.css('overflow' , 'visible');
				$right.toggleClass('menu-toggle-open');
			});			
		}		
	});

	$(".dt-menu-expand").click(function(){
		if( $(this).hasClass("dt-mean-clicked") ){
			$(this).text("+");
			if( $(this).prev('ul').length ) {
				$(this).prev('ul').slideUp(300);
			} else {
				$(this).prev('.megamenu-child-container').find('ul:first').slideUp(300);
			}
		} else {
			$(this).text("-");
			if( $(this).prev('ul').length ) {
				$(this).prev('ul').slideDown(300);
			} else{
				$(this).prev('.megamenu-child-container').find('ul:first').slideDown(300);
			}
		}
		
		$(this).toggleClass("dt-mean-clicked");
		return false;
	});

	currentWidth = window.innerWidth || document.documentElement.clientWidth;
	if( currentWidth > 767 ){
		miniblogMenuHover();
	}
	//Mobile Menu End	
	
	$('.dt-search-icon').on('click', function(e){
		e.stopPropagation();
		$('#header .top-menu-search-container').toggleClass('show-top-menu-search');
	});
	
	//Portfolio single
	if( $(".dt-portfolio-single-slider").find("li").length > 1 ) {
		$(".dt-portfolio-single-slider").bxSlider({ auto:false, video:true, useCSS:false, pagerCustom: '#bx-pager', autoHover:true, adaptiveHeight:true, controls:false });
	}

	var $pphoto = $('.dt-sc-portfolio-container');
	if ($pphoto.length) {

		$('.links').magnificPopup({
		  delegate: 'a.mag-popup',
		  type: 'image',
		  tLoading: 'Loading image #%curr%...',
		  closeOnContentClick: false,
		  closeBtnInside: false,
		  mainClass: 'mfp-img-mobile',
		  gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1]
		  },
		  image: {
			verticalFit: true,
			tError: '<a href="---l%/index.htm">The image #%curr%</a> could not be loaded.'
		  }
		});
	}

	$('.downcount').each(function(){
		var el = $(this);
		el.downCount({
			date	: el.attr('data-date'),
			offset	: el.attr('data-offset')
		});
	});
	
	$('p:empty').each(function (){
		$(this).next('br').remove();
		$(this).remove();
	});

	if( currentWidth > 767 ){
		if( $('#primary').hasClass('with-both-sidebar') ) {
		   if( ( $('#secondary-left').is(':empty') && $('#secondary-right').is(':empty')) ){
				$('#primary').css({'width': '100%', 'margin': 0});
		   }
		} else if( $('#primary').hasClass('with-left-sidebar') ) {
		   if( $('#secondary-left').is(':empty') ){
				$('#primary').css({'width': '100%', 'margin': 0});
		   }
		} else if( $('#primary').hasClass('with-right-sidebar') ) {
		   if( $('#secondary-right').is(':empty') ){
				$('#primary').css({'width': '100%', 'margin': 0});
		   }
		}
	}

	$('.dt-sc-contact-details-on-map a.map-switch-icon').on( "click", function() {
		$(this).parents('.dt-sc-contact-details-on-map').toggleClass('hide-overlay');
		$('.dt-sc-map-overlay').toggle();		
		return false;
	});

	$('.dt-sc-contact-details-on-map a.switch-icon').on( "click", function() {
		$(this).parents('.dt-sc-contact-details-on-map').addClass('hide-overlay');
		$('.dt-sc-map-overlay').toggle();
		$('.back-to-contact').toggle();
		return false;
	});

	$('.dt-sc-contact-details-on-map a.back-to-contact').on( "click", function() {
		$(this).parents('.dt-sc-contact-details-on-map').removeClass('hide-overlay');
		$('.dt-sc-map-overlay').toggle();
		$(this).toggle();
		return false;
	});

	//Smart Resize Start
	$(window).smartresize(function(){
		//Blog Template
		if( $(".apply-isotope").length ) {
			$(".apply-isotope").isotope({itemSelector : '.column',transformsEnabled:false,masonry: { gutter: 20} });
		}

		//Portfolio Template
		if( $('.dt-sc-portfolio-container').length ) {
			var $width = $('.dt-sc-portfolio-container').hasClass("no-space") ? 0 : 20;
			$('.dt-sc-portfolio-container').css({overflow:'hidden'}).isotope({itemSelector : '.column',masonry: { gutter: $width } });
		}//Portfolio Template : Sorting End

		//Blog Masonry Shortcode
		if( $('.blog-masonry').length ) {
			$('.blog-masonry').each(function(){
				$(this).css({overflow:'hidden'}).isotope({itemSelector : '.blog-entry',masonry: { gutter: 5 } });	
			});
		}//Blog Masonry Shortcode End
	});
	
	// Window Load Start
	$(window).load(function(){

		var portfolioHeight = $('.dt-sc-portfolio-wrapper .portfolio:first').height();
		$('.icon-link-title').css('height', portfolioHeight+'px');
		
		//Portfolio Template : Sorting
		var $container = $('.dt-sc-portfolio-container');
		if( $container.length) {
			var $width = $container.hasClass("no-space") ? 0 : 20;
			
			$container.isotope({
				filter: '*',
				masonry: { gutter: $width },
				animationOptions: { duration: 750, easing: 'linear', queue: false  }
			});
		}//Isotope End
		
		if($("div.dt-sc-portfolio-sorting").length){
			
			$("div.dt-sc-portfolio-sorting a").on('click',function(){
				$("div.dt-sc-portfolio-sorting a").removeClass("active-sort");
				var $width = $container.hasClass("no-space") ? 0 : 20;
				var selector = $(this).attr('data-filter');
				$(this).addClass("active-sort");

				$('.dt-sc-portfolio-container').isotope({
					filter: selector,
					masonry: { gutter: $width },
					animationOptions: { duration:750, easing: 'linear',  queue: false }
				});

				return false;
			});
		}//Portfolio Template : Sorting End
		
		//Gallery Post Slider
		if( ($("ul.entry-gallery-post-slider").length) && ( $("ul.entry-gallery-post-slider li").length > 1 ) ){
			$("ul.entry-gallery-post-slider").bxSlider({auto:false, video:true, useCSS:false, pager:'', autoHover:true, adaptiveHeight:true});
		}
		
		//Blog Template
		if( $(".apply-isotope").length ) {
			$(".apply-isotope").isotope({itemSelector : '.column',transformsEnabled:false,masonry: { gutter: 20} });
		}//Blog Template End
		
		//Blog Masonry Shortcode
		if( $('.blog-masonry').length ) {
			$('.blog-masonry').each(function(){
				$(this).css({overflow:'hidden'}).isotope({itemSelector : '.blog-entry',masonry: { gutter: 5 } });	
			});
		}//Blog Masonry Shortcode End
		
		var  $tab = $('.dt-sc-tabbed-post-widget');
		if($tab.length) {
			$tab.tabs({ show:500  });
		}
	});

	$(".dt-like-this").click(function(){

		var el = jQuery(this);

		if( el.hasClass('liked') ) {
			return false;
		}

		var post = {
			action: 'miniblog_like_love',
			post_id: el.attr('data-id')
		};

		$.post(dttheme_urls.ajaxurl, post, function(data){
			el.find('span').html(data);
			el.addClass('liked');
		});
		return false;
	});

	if($('body').hasClass('page-template-tpl-onepage')) {
		$('nav#main-menu ul.menu').visualNav({
			selectedClass     : 'current_page_item',
			externalLinks     : 'external',
			useHash           : false
		});
		$('nav#main-menu ul.menu-left').visualNav({
			selectedClass     : 'current_page_item',
			externalLinks     : 'external',
			useHash           : false
		});
		$('nav#main-menu ul.menu-right').visualNav({
			selectedClass     : 'current_page_item',
			externalLinks     : 'external',
			useHash           : false
		});
		$('.left-header nav#main-menu ul.menu, .left-header-boxed nav#main-menu ul.menu, .left-header-creative nav#main-menu ul.menu').visualNav({
			selectedClass     : 'current_page_item',
			externalLinks     : 'external',
			useHash           : false
		});
	} else {
		if($('nav#main-menu ul.menu li a[href^="#"]').length){
			$('nav#main-menu ul.menu li a[href^="#"]').on('click', function(e) {
				$(location).attr('href', dttheme_urls.url+'/' + $(this).attr('href'));
			});
		}
	}

	if($('body').hasClass('left-header-creative')) {
		$('#header-wrapper').simpleSidebar({
			opener: '#toggle-sidebar',
			wrapper: '#main',
			animation: {
				easing: "easeOutQuint"
			},
			sidebar: {
				align: 'left',
				width: 260
			},
			sbWrapper: {
				display: true
			}
		});
		
		$('#toggle-sidebar, div[data-simplesidebar="mask"]').click(function(){
			$('#toggle-sidebar').toggleClass('close-icon');
		});		
	}
	$('input, textarea').placeholder();

	if($(".dt-sc-scroll-wrapper").length){
		var scroll_wrapper = $(".dt-sc-scroll-wrapper").niceScroll({ cursorcolor:"#ffffff", cursorwidth: "2px"});
		scroll_wrapper.rail.addClass('dt-sc-skin');
	}

	//Ajax masonry load more items
	$('.dt-sc-posts-list-wrapper').each(function(){
		var $page = 1;
		var $T = $(this);
		var $data = "", $content = $T.find('.tpl-blog-holder');

		var $b = $T.find('.loadmore-btn.more-items');

		if( $b.length ) {
			// When load more button click...
			$($b).live( "click", function() {

			  var $this = $(this);
			  var $count = $this.attr('data-count'), $pos = $this.attr('data-pos'), $alayout = $this.attr('data-alayout'),
			  $style = $this.attr('data-style'), $mpages = $this.attr('data-maxpage'), $column = $this.attr('data-column'),
			  $gpageid = $this.attr('data-gpageid'), $cats = $this.attr('data-cats');

			  $content.addClass('loading');

			  if( $this.hasClass('more-items') ) {
				$page++;
			  }

			  $.ajax({
				 type : "post",
				 dataType : "html",
				 url : dttheme_urls.ajaxurl,
				 data : { action: "miniblog_ajax_load_more_post", count : $count, pos: $pos, alayout: $alayout, style: $style, column: $column, pageNumber : $page, gpageid : $gpageid, cats : $cats },
				 cache: true,
				 success: function (data) {
					var $res = data.split('#####$$$$$');
					if ($res.length > 0) {

						$content.append($res[0]);
						$T.children('.loadmore-btn').attr('data-pos', $res[1]);
						$T.children('.loadmore-btn').attr('data-column', $res[2]);

						var newbx = $content.find('ul.entry-gallery-post-slider');
						if(newbx !== null){
							newbx.bxSlider({auto:false, video:true, useCSS:false, pager:'', autoHover:true, adaptiveHeight:true});
						}

						if(parseInt($page) >= parseInt($mpages)) {
							$T.children('.loadmore-btn').removeClass('more-items').html('All Posts Loaded');
						} else {
							$T.children('.loadmore-btn').addClass('more-items');
						}
					}
					$content.removeClass('loading');
				 },
				 error: function (jqXHR, textStatus, errorThrown) {
					$content.html('No More Posts Found');
				 }
			  });
			  return false;
			});
		}

		$(window).scroll(function(){
			var $c = $T.find('.infinite-btn.more-items');

			if( ($(window).scrollTop() == $(document).height() - $(window).height()) && $c.length > 0 ){

				var $count = $c.attr('data-count'), $pos = $c.attr('data-pos'), $alayout = $c.attr('data-alayout'),
				$style = $c.attr('data-style'), $mpages = $c.attr('data-maxpage'), $column = $c.attr('data-column'),
				$gpageid = $c.attr('data-gpageid'), $cats = $c.attr('data-cats');

				$content.addClass('loading');

				$page++;

				$.ajax({
				   type : "post",
				   dataType : "html",
				   url : dttheme_urls.ajaxurl,
				   data : { action: "miniblog_ajax_load_more_post", count : $count, pos: $pos, alayout: $alayout, style: $style, column: $column, pageNumber : $page, gpageid: $gpageid, cats : $cats },
				   cache: true,
				   success: function (data) {
					  var $res = data.split('#####$$$$$');
					  if ($res.length > 0) {

						  $content.append($res[0]);
						  $T.children('.infinite-btn').attr('data-pos', $res[1]);
						  $T.children('.infinite-btn').attr('data-column', $res[2]);

						  var newbx = $content.find('ul.entry-gallery-post-slider');
						  if(newbx !== null){
							  newbx.bxSlider({auto:false, video:true, useCSS:false, pager:'', autoHover:true, adaptiveHeight:true});
						  }

						  if(parseInt($page) >= parseInt($mpages)) {
							  $c.removeClass('more-items');
						  }
					  }
					  $content.removeClass('loading');
				   },
				   error: function (jqXHR, textStatus, errorThrown) {
					  $content.html('No More Posts Found');
				   }
				});
				return false;
			}
		});
	});

	$(".dt_scroll_down a").click(function(a) {
		a.preventDefault();

		var st = 0;
		if(dttheme_urls.stickynav === 'enable') {
			st = 90;
		}

		$("html, body").stop();
		$("html, body").animate({
			scrollTop: $('.entry-details.within-image').offset().top - st
		}, {
			duration: 1000,
			easing: "easeInOutQuart"
		});
	});
	
	var $mainSidebar = $( "#sidebar-main" );
	$mainSidebar.simplerSidebar( {
		align: "right",
		attr: "sidebar-main",
		zIndex: 10000,
		selectors: {
			trigger: "#sidebar-main-trigger",
			quitter: ".quitter"
		},
		animation: {
			easing: "easeOutQuint"
		},
		mask: {
			display: true,
			css: {
				zIndex: 9999,
			}
		},
		events: {
			callbacks: {
				animation: {
					freezePage: false
				}
			}
		}
	});
});

(function() {

	function miniblogtoggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
		}
	}
	
	if(jQuery('div.overlay.overlay-hugeinc').length) {
	
		var triggerBttn = document.getElementById( 'trigger-overlay' ),
			overlay = document.querySelector( 'div.overlay' ),
			closeBttn = overlay.querySelector( 'div.overlay-close' );
			transEndEventNames = {
				'WebkitTransition': 'webkitTransitionEnd',
				'MozTransition': 'transitionend',
				'OTransition': 'oTransitionEnd',
				'msTransition': 'MSTransitionEnd',
				'transition': 'transitionend'
			},
			transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
			support = { transitions : Modernizr.csstransitions };
			
		triggerBttn.addEventListener( 'click', miniblogtoggleOverlay );
		closeBttn.addEventListener( 'click', miniblogtoggleOverlay );
	}

	if(jQuery('div.overlay.overlay-search').length) {
		
		var triggerBttn = document.getElementById( 'overlay-search-icon' ),
			overlay = document.querySelector( 'div.overlay' ),
			closeBttn = overlay.querySelector( 'div.overlay-close' );
			transEndEventNames = {
				'WebkitTransition': 'webkitTransitionEnd',
				'MozTransition': 'transitionend',
				'OTransition': 'oTransitionEnd',
				'msTransition': 'MSTransitionEnd',
				'transition': 'transitionend'
			},
			transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
			support = { transitions : Modernizr.csstransitions };
			
		triggerBttn.addEventListener( 'click', miniblogtoggleOverlay );
		closeBttn.addEventListener( 'click', miniblogtoggleOverlay );
	}
})();