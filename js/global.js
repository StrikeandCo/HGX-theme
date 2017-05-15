$ = jQuery;
$(document).ready(function () {

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
	
	//animate nav icon
	var hamburger = $('#hamburger-icon');
	hamburger.click(function () {
		hamburger.toggleClass('active');
		if($(this).hasClass('active')) {
			$('body').css('overflow-y','hidden');
		}
		else {
			$('body').css('overflow-y','visible');
		}
		$('nav').toggleClass('active');
		$('#wrapper').toggleClass('shifted');
		$('body').toggleClass('noscroll');
	});
	
	//add/remove backgorund color based on scroll position
	$(window).scroll(function(e){
		var pos = $(window).scrollTop();
		//console.log(pos);
		if (pos > 200)  {
			$('header').addClass('scrolled');
		}
		else {
			$('header').removeClass('scrolled');
		}
		// on scroll, let the interval function know the user has scrolled
		didScroll = true;
	});
	
	
	// run hasScrolled() and reset didScroll status
	setInterval(function() {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 50);
	
	function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').addClass('downward');
			setTimeout(function() {
				$('header').addClass('fixed');
			}, 250)
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('downward');
						if (st == 0) {
							$('header').removeClass('fixed');
						}
        }
    }
    
    lastScrollTop = st;
}
});

$(document).ready(function(){
	var isHero = $('.hero, #hp-carousel').length;
	if (isHero < 1) {
		$('header').css('background-color','#191A1B');
	}
	
	console.log(isHero);
	$('.to-the-top').remove();
	var contentHeight = $('.hero .thectas').outerHeight();
	var theposition = 'calc(50% - ' + (contentHeight/2) + 'px)'
	$('.hero .thectas').css('top',theposition);
	$(window).resize(function() {
		var contentHeight = $('.hero .thectas').outerHeight();
		var theposition = 'calc(50% - ' + (contentHeight/2) + 'px)'
		$('.hero .thectas').css('top',theposition);
	});

	
	//formoverlay
	
	$('a[href="#form-overlay"]').each(function(){
		$(this).click(function(e){
			$('#form-overlay').fadeIn();
			$('body').css('overflow-y','hidden');
			e.preventDefault;
		});
	});
	$('#form-overlay .close-button').click(function(){
		$('#form-overlay').fadeOut();
		$('body').css('overflow-y','scroll');
	});
	
});


		


