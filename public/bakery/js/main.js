jQuery(function ($) {

    $(document).ready(function () {
        "use strict"

		//Scrolling feature 

        $('.page-scroll a').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
		
        //	Back Top Link

        var offset =100;
        var duration = 500;
        $(window).scroll(function () {
            if ($(this).scrollTop() > offset) {
                $('.back-to-top').fadeIn(400);
            } else {
                $('.back-to-top').fadeOut(400);
            }
        });     		
		
        //Owl-sliders
		
		$("#owl-services").owlCarousel({
			dots: true,
			loop: true,
			autoplay: false,
			nav: true,
			margin:10,
			navText: [
				"<i class='fa fa-chevron-left'></i>",
				"<i class='fa fa-chevron-right'></i>"
			],
			 responsive: {
				1: {items: 1,},
				991: {items: 3,},
			}
		});
		
		$("#owl-about").owlCarousel({
			dots: true,
			loop: true,
			autoplay: false,
			nav: false,
			margin:20,
			 responsive: {
				1: {items: 1,},
				991: {items: 1,},
			}
		});
		
		$("#owl-icons").owlCarousel({
			dots: true,
			loop: true,
			autoplay: false,
			nav: true,
			navText: [
				"<i class='fa fa-chevron-left'></i>",
				"<i class='fa fa-chevron-right'></i>"
			],
			margin:5,
			 responsive: {
				1: {items: 1,},
				991: {items: 3,},
			}
		});
		
		$("#owl-testimonial").owlCarousel({
          dots: true,
			loop: true,
			autoplay: false,
			nav: false,
			margin:30,
			 responsive: {
				1: {items: 1,},
				991: {items: 2,},
			}
        });
		
		$("#owl-blog").owlCarousel({
          dots: true,
			loop: true,
			autoplay: false,
			nav: false,
			margin:30,
			 responsive: {
				1: {items: 1,},
				991: {items: 3,},
			}
        });	
		
		$("#owl-team").owlCarousel({
			dots: true,
			loop: true,
			autoplay: false,
			nav: true,
			margin:15,
			navText: [
				"<i class='fa fa-chevron-left'></i>",
				"<i class='fa fa-chevron-right'></i>"
			],
			 responsive: {
				1: {items: 1,},
				991: {items: 3,},
			}
		});				
		
		// Pretty Photo

        $("a[data-gal^='prettyPhoto']").prettyPhoto({
            hook: 'data-gal'
        });
        ({
            animation_speed: 'normal',
            opacity: 1,
            show_title: true,
            allow_resize: true,
            counter_separator_label: '/',
            theme: 'light_square',
            /* light_rounded / dark_rounded / light_square / dark_square / facebook */
        });

		
    });// end document ready function

    //On Click  function
	$(document).on('click',function(){
		
		//Navbar toggle
		$('.navbar .collapse').collapse('hide');
		
	})	
	
	
	// Window load function

    $(window).load(function () {   

	     // Page Preloader 	

        $("#loading").fadeOut(1000);
		
        //Load Skrollr

		var skr0llr = skrollr.init({
			mobileCheck: function() {
                //hack - forces mobile version to be off
                return false;
            }
		});			

        //Portfolio Isotope 
		
        var $container = $('#lightbox');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
				layoutMode : 'masonry'
            }

        });
		$(window).smartresize(function(){
			$container.isotope({
			columnWidth: '.col-sm-3'
			});
		});
		

		//Portfolio Nav Filter

        $('.cat a').on('click', function () {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
		
    });// end window load function
   
});