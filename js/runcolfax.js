// jQuery Functions

$(function(){

	$('#mobilenav').mmenu({
		position: 'right'
	});
	
	$('ul.nav').superfish({ 
		animation: {opacity:'show', height:'show'},
		speed: 'fast',
		delay: 0,
		autoArrows: false
	});
	
	$('.mobile-search-button').click(function() {
		$('#mobile-search-wrap').slideToggle("fast");
	});
	
	$('.categories-wrap a').click(function() {		
		$(this).toggleClass('active');
		$('.charities-wrap li').hide();
		indCategory = $(this).attr('ID');
		if ($(this).hasClass('active')) {
			$('#allcategories').addClass(indCategory);
		} else {
			$('#allcategories').removeClass(indCategory);
		}
		var activeCategories = $('#allcategories').attr('class').toString().split(' ');		
		$.each(activeCategories, function (i, activeCategory) {
            $('.charities-wrap li.' + activeCategory).show();
        });
    });
    
    $('.categories-wrap-full a').click(function() {		
		$(this).toggleClass('active');
		$('.charities-list div.parent').hide();
		indCategory = $(this).attr('ID');
		if ($(this).hasClass('active')) {
			$('#allcategories').addClass(indCategory);
		} else {
			$('#allcategories').removeClass(indCategory);
		}
		var activeCategories = $('#allcategories').attr('class').toString().split(' ');		
		$.each(activeCategories, function (i, activeCategory) {
            $('.charities-list div.' + activeCategory).show();
        });
    });
    
	$('.charities-list').easyListSplitter({
		colNumber: 3,
		direction: 'vertical'
	});
	
	$('.accordion-toggle').click(function(){
		if($(this).hasClass('open')) {
			$(this).removeClass('open');
		} else { 
			$('.accordion-toggle').removeClass('open');
			$(this).addClass('open');
		}
		$(this).next().slideToggle('fast');
		$('.accordion-content').not($(this).next()).slideUp('fast');
    });
    
	$('#full-width-slider').royalSlider({
		arrowsNav: true,
		loop: true,
		controlsInside: true,
		imageScaleMode: 'fill',
		arrowsNavAutoHide: false,
		autoScaleSlider: true,
		controlNavigation: 'bullets',
		thumbsFitInViewport: false,
		navigateByClick: true,
		startSlideId: 0,
		autoPlay: {
    		enabled: true,
    		pauseOnHover: false,
    		delay: 4000,
    	}
	});
	
});

