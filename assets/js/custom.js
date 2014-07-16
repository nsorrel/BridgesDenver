$(document).ready(function() {

    // Collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });

    // Page scrolling feature - requires jQuery Easing plugin
    $(function() {
        $('.page-scroll a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    // Hide navbar onclick
    $(".navbar a").click(function(event) {
        $(".navbar-collapse").removeClass("in").addClass("collapse");
    });

    // Initializing Magnific Popup
    $('.popup').magnificPopup({
        type:'image',
        mainClass: 'mfp-with-zoom',

         gallery: {
            enabled: true
        },

        zoom: {
            enabled: true, 
            duration: 300,
            easing: 'ease-in-out',
        }
    });

});
