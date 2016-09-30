// Javascript Closure - Best pratice
(function ($, Drupal, window) {
    // Shorthand for $( document ).ready()
    $(function() {
        // Can also be used with $(document).ready()
        $('.flexslider').flexslider({
            animation: "slide",
            directionNav: false,
            start: function(slider){
                var current = slider.find("li.flex-active-slide");
                $(current).find('.hangs').animate({opacity: 1}, 200);
            },
            after: function(slider){
                var current = slider.find("li.flex-active-slide");
                $(current).find('.hangs').animate({opacity: 1}, 200);
            },
            before: function(slider){
                var current = slider.find("li.flex-active-slide");
                $(current).find('.hangs').animate({opacity: 0}, 200);
            },
        });
    });
})(jQuery, Drupal, window);
