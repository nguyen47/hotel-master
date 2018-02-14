(function($){
	$(document).ready(function(){
		// nav area
		var nav = $('#nav');
		var content = $('#content');
		
		nav.find('.main-nav-item').click(function(){
			var current = $(this).parent();
			
			$(this).siblings('.sub-nav').slideToggle(function(){
				current.toggleClass('active');
			});
		});
		
		nav.find('.sub-nav-item').click(function(){
			nav.find('.sub-nav-item').removeClass('active');
			$(this).addClass('active');
			
			content.children($(this).attr('href')).fadeIn().siblings('.content-section').hide();
			return false;
		});
		
		jQuery('a[href$=".jpg"],a[href$=".png"],a[href$=".gif"]').not('[data-rel="fancybox"]').attr("data-rel", "fancybox");
		$('[data-rel="fancybox"]').fancybox({	
		  helpers: {
		    overlay: {
		      locked: false
		    }
		  }			
		});
	});
})(jQuery);