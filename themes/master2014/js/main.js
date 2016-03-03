// @codekit-prepend "vendor/bootstrap.min.js"
// @codekit-prepend "vendor/bootstrap.hover.min.js"
// @codekit-prepend "vendor/jquery.unveil.min.js"
// @codekit-prepend "vendor/imagesloaded.pkgd.min.js"
// @codekit-prepend "vendor/slick.min.js"


$(document).ready(function() {

	if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function () {
	        return $(this).attr('src').replace('.svg', '.png');
	    });
	}


	$("img.unveil").unveil();


	$('.start-slider').slick({
	  dots: true,
	  slide: '.slide-item',
	  speed: 700,
	  arrows: true
	});

	$('.project-slider').slick({
	  dots: true,
	  slide: '.slide-item',
	  speed: 700,
	  autoplay: true,
	  autoplaySpeed: 3000,
	  arrows: true
	});

	var accordiontoggle = $('a.accordion-toggle');

	accordiontoggle.on('click', function () {
	    if( $(this).hasClass('collapsed') !== true ){
	        $(this).removeClass('active');
	    }else{
	    	accordiontoggle.removeClass('active');
	        $(this).addClass('active');
	    }
	});
});



