/* global wp, jQuery */


	jQuery( function($) {
		
		// menu lateral para mobile 
		$('#mobile_menu, .menu_back').on('click', function () {
			$('#sidebar').toggleClass('active');
			$('html').toggleClass('overflow');
			$('body').toggleClass('overflow');
		});


	


		

		// Sticky
		$(window).bind('scroll', function() {
			if ($(window).scrollTop() > 150) {
				$('.bg-secondary-container .bg-white').addClass('fixed');
				$('.hide_mobile_scroll1').addClass('scrolled');
			}
			else{
				$('.bg-secondary-container .bg-white').removeClass('fixed');
				$('.hide_mobile_scroll1').removeClass('scrolled');
			}

			if ($(window).scrollTop() > 500) {
				$('#my_nav').addClass('hide_nav');
				$('#search-box').addClass('hide_search');
				
			}
			else{
				$('#my_nav').removeClass('hide_nav');
				$('#search-box').removeClass('hide_search');
			}
		});
	} );


			