(function ($) {
	Drupal.behaviors.creative_init = {
		attach: function (context, settings) {
			
			var win = $(window);
			var doc = $(document);
			var win_w = win.width();
			var win_h = win.height();
			var header = $('#header');
			var connect = $('#connect');
		
			$('#plane, #open-btn').click(function(event) {
				header.addClass('header-open');
				return false;
			});

			$('.arrow-down a').click(function(event) {
				$('html, body').animate({
			      scrollTop: $("#main").offset().top
			   }, 800);
				return false;
			});

			$('a[href*="contact"]').click(function(){
				showConnect();
				return false;
			});

			$('#connect .icon-cross, #connect .bg').click(function(){
				hideConnect();
				return false;
			});

			function showConnect(){
				hideHeader();
				connect.fadeIn(300);
			}

			function hideConnect(){
				connect.fadeOut(300);
			}



			$('#header .close-btn').click(function(event) {
				header.removeClass('header-open');
				return false;
			});

			function showHeader(){
				header.addClass('header-open');
			}

			function hideHeader(){
				header.removeClass('header-open');
			}

			$('body').mousemove(function(event) {
				var mouseY = event.pageY;
				var scroll = win.scrollTop();
				var wPos = 260 + win.scrollTop();
				win_w = win.width();

				// if(mouseY > wPos && win_w > 600){
				// 	//showHeader();
				// 	hideHeader();
				// }else{
					
				// }
			});

			$('#intro-1 .slide-1, #intro-1 .slide-2, #intro-1 .slide-3, #intro-1 .slide-4').css({'opacity':'0', 'top' : 20});
			//$('#services .slide-1, #services .slide-2, #services .slide-3').css({'opacity':'0', 'top' : 20});

			win.scroll( function(){
		    
		       fadeOnScroll('#intro-1 .slide-1, #intro-1 .slide-2, #intro-1 .slide-3, #intro-1 .slide-4');
		    
		    });

			function fadeOnScroll(target){
	        $(target).each( function(i){
	            var $this = $(this);

	            var bottom_of_object = $this.offset().top + $this.outerHeight() / 2;
	            var bottom_of_window = win.scrollTop() + win.height();
	            
	            if( bottom_of_window > bottom_of_object ){ 
               	$this.animate({'opacity':'1', 'top' : 0}, 500);   
	            }
	            
	        }); 
			}

			fadeOnScroll('#intro-1 .slide-1, #intro-1 .slide-2, #intro-1 .slide-3, #intro-1 .slide-4');
			//fadeOnScroll('#services .slide-1, #services .slide-2, #services .slide-3');

		}
	}

	Drupal.behaviors.bg_init = {
		attach: function (context, settings) {
			
			if(Drupal.settings.bg_settings){
				var settings = Drupal.settings.bg_settings;
				var bg_image = settings.bg_image_url;
				var bg_holder = $('.bg .bg-image');

				//console.log(bg_image);

				bg_holder.css({
					'background': 'url(' + bg_image + ') no-repeat top center',
				  '-webkit-background-size': 'cover',
				  '-moz-background-size': 'cover',
				  '-o-background-size': 'cover',
				  'background-size': 'cover',
				});
			}

			//$('body').tubular({videoId: 'sOVfuvPgA6I'});
			

		}
	}


	Drupal.behaviors.translate = {
		attach: function (context, settings) {
			
			function translate(holder){
				var holder = $(holder);
				$('.translate', holder).hide();
				

				$('.translate.first').show();

				$('.translate .trigger', holder).click(function(event) {
					var target_index = $(this).data('target');
					var this_target = $('[data-index="' + target_index + '"]', holder);
					nextItem(holder, this_target);

					return false;
				});


			}

			function nextItem(holder, target){
				$('.translate', holder).hide();
				target.show();
			}

			translate('#intro-1 .slide-4');
			translate('#cta');

		}
	}

	Drupal.behaviors.scrollmagic = {
		attach: function (context, settings) {
				
			var onCenterController = new ScrollMagic.Controller();
			var onEnterController = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter"}});
			var onLeaveController = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onLeave"}});

			// var bg_layer_1 = new ScrollMagic.Scene({triggerElement: "#main", duration: "100%"})
			// 	.setTween("#creative-home", {'background-position-y': -100, ease: Linear.easeNone})
			// 	.addIndicators()
			// 	.addTo(onEnterController);

		}
	}
})(jQuery);


