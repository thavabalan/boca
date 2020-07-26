// Custom Javascript

$(document).ready(function () {

	/* Initialise wow */
	new WOW().init();

	/* Navbar */
	$(window).resize(function () {
		if ($(window).width() >= 980) {

			// when you hover a toggle show its dropdown menu
			$(".navbar .dropdown-toggle").hover(function () {
				$(this).parent().toggleClass("show");
				$(this).parent().find(".dropdown-menu").toggleClass("show");
			});

			// hide the menu when the mouse leaves the dropdown
			$(".navbar .dropdown-menu").mouseleave(function () {
				$(this).removeClass("show");
			});

		}
	});




	/* Scroll to Top */
	var amountScrolled = 700;
	var backBtn = $("a.back-to-top");
	$(window).on("scroll", function () {
		if ($(window).scrollTop() > amountScrolled) {
			backBtn.fadeIn("slow");
		} else {
			backBtn.fadeOut("slow");
		}
	});
	backBtn.on("click", function () {
		$("html, body").animate({
			scrollTop: 0
		}, 700);
		return false;
	});


	/* Sticky Navbar on Scroll */
	//window.onscroll = function() {myFunction()};
	//var header = document.getElementById("header");

	//var sticky = header.offsetTop;

	//function myFunction() {
	//  if (window.pageYOffset > sticky) {
	//    header.classList.add("sticky");
	//  } else {
	//    header.classList.remove("sticky");
	//  }
	//}

	/* Scroll down */
	$('.scroll-down').on('click', function (e) {
		var $next = $(e.target).closest('section').next();

		var offset = $next.offset();
		$('html, body').stop().animate({
			scrollTop: offset.top - 100
		}, 600, 'linear');
	});

	/*Hover Play on Video */

	var figure = $(".hover-video").hover(playVideo, pauseVideo);

	function playVideo(e) {
		$('video', this).get(0).play();
	}

	function pauseVideo(e) {
		$('video', this).get(0).pause();
	}


	/* Journey Popover */
	$("[data-toggle='popover']").popover({
			trigger: "manual",
			html: true,
			animation: false
		})
		.on("mouseenter", function () {
			var _this = this;
			$(this).popover("show");
			$(".popover").on("mouseleave", function () {
				$(_this).popover('hide');
			});
		}).on("mouseleave", function () {
			var _this = this;
			setTimeout(function () {
				if (!$(".popover:hover").length) {
					$(_this).popover("hide");
				}
			}, 300);
		});




	/* Deportes Carousel*/
	$('#deportes').owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		items: 1,
		responsiveClass: true,
		nav: false,
		dots: true,
		autowidth: true,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],

		responsive: {
			0: {
				items: 1,
				stagePadding: 0
			},
			768: {
				items: 1,
				stagePadding: 0
			},
			992: {
				items: 1,
				stagePadding: 0
			},
			1200: {
				items: 1,
				stagePadding: 0
			},
			1800: {
				items: 1,
				stagePadding: 0
			}
		}
	});


	/* Noticias Carousel*/
	$('#noticias').owlCarousel({
		loop: true,
		margin: 15,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		responsiveClass: true,
		dots: true,
		responsive: {
			0: {
				items: 1,
				nav: false
			},
			600: {
				items: 2,
				nav: false
			},
			1000: {
				dots: true,
				items: 5,
				nav: false

			}
		}
	});



	/* News Sidbear*/
	$('#news-sidebar').owlCarousel({
		loop: true,
		margin: 15,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		items: 1,
		dots: true
	});




	/* Videos Carousel*/
	$('#videos').owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		items: 1,
		responsiveClass: true,
		video: true,
		nav: true,
		dots: false,
		autowidth: true,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],

		responsive: {
			0: {
				items: 1,
				stagePadding: 0
			},
			768: {
				items: 2,
				stagePadding: 0
			},
			992: {
				items: 1,
				stagePadding: 200
			},
			1200: {
				items: 1,
				stagePadding: 400
			},
			1800: {
				items: 3,
				stagePadding: 200
			}
		}
	});




	/* RSS Carousel*/
	$('#rss').owlCarousel({
		loop: true,
		margin: 15,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		responsiveClass: true,
		nav: false,
		dots: true,
		responsive: {
			0: {
				items: 1,
				nav: false
			},
			600: {
				items: 2,
				nav: false
			},
			1000: {
				dots: true,
				items: 5,
				nav: false

			}
		}
	});


	/* Momentos Carousel*/
	$('#momentos').owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		items: 1,
		responsiveClass: true,
		video: true,
		nav: true,
		dots: true,
		autowidth: true,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],

		responsive: {
			0: {
				items: 1,
				stagePadding: 0
			},
			768: {
				items: 2,
				stagePadding: 0
			},
			992: {
				items: 1,
				stagePadding: 200
			},
			1200: {
				items: 1,
				stagePadding: 400
			},
			1800: {
				items: 3,
				stagePadding: 200
			}
		}
	});



 


	/* Inside-Page Carousel*/
	$('.page-graphics').owlCarousel({
		loop: true,
		margin: 15,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		items: 1,
		dots: false,
		nav: true,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});

	/* Add Animations to page elements */
	$('.banner-img').addClass("animated scaleOut");
	$('.breadcrumb').addClass("animated fadeInDown");
	$('.page-banner p.lead').addClass("animated fadeInUp");

});





(function ($) {
	"use strict";
	var POTENZA = {};

	/*************************
    Predefined Variables
  *************************/
	var $window = $(window),
		$document = $(document),
		$body = $('body'),
		$countdownTimer = $('.countdown'),
		$bar = $('.bar'),
		$pieChart = $('.round-chart'),
		$progressBar = $('.skill-bar'),
		$counter = $('.counter'),
		$datetp = $('.datetimepicker');
	//Check if function exists
	$.fn.exists = function () {
		return this.length > 0;
	};


	/*************************
	       Mega menu
	*************************/
	POTENZA.megaMenu = function () {
		loadScript(plugin_path + '/mega_menu.js', function () {
			var nav = $('#menu');
			var l = nav.attr('data-pos');
			var pos = 'horizontal';
			if (l) pos = l;
			nav.megaMenu({
				// DESKTOP MODE SETTINGS
				logo_align: 'left', // align the logo left or right. options (left) or (right)
				links_align: 'left', // align the links left or right. options (left) or (right)
				socialBar_align: 'left', // align the socialBar left or right. options (left) or (right)
				searchBar_align: 'right', // align the search bar left or right. options (left) or (right)
				trigger: 'hover', // show drop down using click or hover. options (hover) or (click)
				effect: 'expand-top', // drop down effects. options (fade), (scale), (expand-top), (expand-bottom), (expand-left), (expand-right)
				effect_speed: 400, // drop down show speed in milliseconds
				sibling: true, // hide the others showing drop downs if this option true. this option works on if the trigger option is "click". options (true) or (false)
				outside_click_close: true, // hide the showing drop downs when user click outside the menu. this option works if the trigger option is "click". options (true) or (false)
				top_fixed: false, // fixed the menu top of the screen. options (true) or (false)
				sticky_header: true, // menu fixed on top when scroll down down. options (true) or (false)
				sticky_header_height: 50, // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
				menu_position: pos, // change the menu position. options (horizontal), (vertical-left) or (vertical-right)
				full_width: false, // make menu full width. options (true) or (false)
				// MOBILE MODE SETTINGS
				mobile_settings: {
					collapse: true, // collapse the menu on click. options (true) or (false)
					sibling: true, // hide the others showing drop downs when click on current drop down. options (true) or (false)
					scrollBar: true, // enable the scroll bar. options (true) or (false)
					scrollBar_height: 400, // scroll bar height in px value. this option works if the scrollBar option true.
					top_fixed: false, // fixed menu top of the screen. options (true) or (false)
					sticky_header: false, // menu fixed on top when scroll down down. options (true) or (false)
					sticky_header_height: 200 // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
				}
			});
			// Dynamic active menu
			//var path = window.location.pathname.split("").pop();
			//var target = $('header .mega-menu a[href="' + path + '"]');
			//target.parent().addClass('active');
			//$('header .mega-menu li.active').parents('li').addClass('active');

		});
	};



	/****************************************************
	          javascript
	****************************************************/
	var _arr = {};

	function loadScript(scriptName, callback) {
		if (!_arr[scriptName]) {
			_arr[scriptName] = true;
			var body = document.getElementsByTagName('body')[0];
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = scriptName;
			// then bind the event to the callback function
			// there are several events for cross browser compatibility
			// script.onreadystatechange = callback;
			script.onload = callback;
			// fire the loading
			body.appendChild(script);
		} else if (callback) {
			callback();
		}
	}

	//Document ready functions
	$document.ready(function () {
		POTENZA.megaMenu();
	});
})(jQuery);






/****************************************************
		  load more
****************************************************/


$(document).ready(function () {
	$(".content").slice(0, 6).show();
	$("#loadMore").on("click", function (e) {
		e.preventDefault();
		$(".content:hidden").slice(0, 3).slideDown();
		if ($(".content:hidden").length == 0) {
			$("#loadMore").hide();
		}
	});

})









/****************************************************
		  Mega Menu
****************************************************/
 
	$(function () {
	 var current = location.pathname.toLowerCase();
	 if(current.indexOf('home') <= 0)
	 {
		$('.menu-bar li a').each(function () {
			var $this = $(this);
			var StrCount = current.split('index.html').length - 1;

			 //if the current path is like this link, make it active
			//if ($this.attr('href').toLowerCase().indexOf(current) !== -1 && StrCount >= 2) {
			//	$this.addClass('active');
			//	$this.closest('.menu-item-parent').addClass('active');
			//	$this.closest('.menu-item-child').addClass('active');
			//} 
			//else {

			//	if ($this.attr('href').toLowerCase().indexOf(current) !== -1 && StrCount <= 1) {                           
			//		$this.closest('.menu-item-parent').addClass('active');
			//	}
		//	}

		});
	 }
	});
  





 
