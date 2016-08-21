(function(l){
	l = jQuery.noConflict();


	submenu_effect = function(){
		l('#main_tab ul li').hover(function(){
			l(this).find('ul').slideDown();
		},function(){
			l(this).find('ul').hide();
		});
	}


	submenu_effect();
})(jQuery);