(function($) {
	
	'use strict';
	
	/*---------------------------------
			fixed-menu
	----------------------------------*/
	if ( matchMedia( 'only screen and (min-width: 768px)' ).matches ) {
		$(window).on('scroll', function (){
			if ($(this).scrollTop() > 50){ 
				$('.header-one .navbar-default').addClass('fixed-menu'); 
			} 
			else { 
				$('.header-one .navbar-default').removeClass('fixed-menu'); 
			}
		});
	}
	/*---------------------------------
			one-page-nav
	----------------------------------*/
	$(".header-one .navbar-nav > li > a").on('click', function() {
		var TargetId = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(TargetId).offset().top - 0
		}, 1000, 'swing');
		return false;
	});
	
	$('#nav').onePageNav({
		currentClass: 'active',
		changeHash: false,
		scrollSpeed: 750,
		scrollThreshold: 0.5,
		filter: '',
		easing: 'swing',
		begin: function() {
			//I get fired when the animation is starting
		},
		end: function() {
			//I get fired when the animation is ending
		},
		scrollChange: function($currentListItem) {
			//I get fired when you enter a section and I pass the list item of the section
		}
	});
	/*-------------------------------------------------------
			Responsive Expandable Navigation
	----------------------------------------------------------*/
	
	$( ".has-sub-menu" ).append("<button class='plus'>+</button><button class='minus'>-</button>");
	$( ".has-sub-menu > .minus" ).hide();
	if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
		$( ".has-sub-menu > .sub-menu" ).hide();
	}
	
	$('.has-sub-menu > .plus').each(function() {
		$(this).on('click',function(){
			$(this).parent().children(".sub-menu").slideToggle( "slow", function() {
				$(this).parent().children( ".plus" ).hide();
				$(this).parent().children( ".minus" ).show();
			});
		})
	});
	
	$('.has-sub-menu > .minus').each(function() { 
		$(this).on('click',function(){
			$(this).parent().children(".sub-menu").slideToggle( "slow", function() {
				$(this).parent().children( ".minus" ).hide();
				$(this).parent().children( ".plus" ).show();
			});
		});
	});
	/*------------------------------------------
					slider-main
	------------------------------------------*/
	$("#slider_one").owlCarousel({
		items : 1,
		nav: true,
		navText: [
		  "<i class='fa fa-angle-left' aria-hidden='true'></i>",
		  "<i class='fa fa-angle-right' aria-hidden='true'></i>"
		],
		loop: true,
		autoPlay: true,
		slideSpeed : 500,
		paginationSpeed : 600,
		pagination: false
 
	});
 
	if ( $( "#gallary_grid" ).length ) {
		var container = document.querySelector('#gallary_grid');
		var msnry;
		imagesLoaded( container, function() {
			msnry = new Masonry( container, {
				columnWidth: 0,
				itemSelector: '.grid-item'
			});
		});
	}
	var $grid = $('#gallary_grid').isotope();
	$('.gallary-filter-button ').on( 'click', 'button', function() {
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({ filter: filterValue });
		var $buttonGroup = $(this).parents('.filter-button-group');
		$buttonGroup.find('.is-checked').removeClass('is-checked');
		$( this ).addClass('is-checked');
	});
	
	$('.gallary-filter-button button').on('click',function(){
		$('.gallary-filter-button button').removeClass('active');
		$(this).addClass('active');
	});
	
	/*---------------------------------
		magnificPopup
	----------------------------------*/
	
	$('.gallery-item-popup').magnificPopup({
		type: 'image',
		gallery:{
		enabled:true
		},
		disableOn: 700,
		removalDelay: 160,
		preloader: true,
		fixedContentPos: true
	});
	
	/*---------------------------------
		partnar-logo
	----------------------------------*/
	$("#parnar_carousel").owlCarousel({
 
    nav : false,
	dots: false,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
	items : 5, 
    responsive: {
			1024:{
				items : 5
			},
			768: {
				items: 3
			},
			736: {
				items: 3
			},
			667:{
				items: 3
			},
			414: {
				items: 2,
				margin: 50
			},
			375:{
				items: 1
			},
			320:{
				items: 1
			}
		}
 
	});
	
	/*---------------------------------
		 WOW
	----------------------------------*/
	
	var wow = new WOW(
	{
		mobile: false
	});
	wow.init();
	
})(jQuery);
