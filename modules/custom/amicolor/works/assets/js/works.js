// Javascript Closure - Best pratice
(function ($, Drupal, window) {
    // Shorthand for $( document ).ready()
    $(function() {
        $(document).on('mouseenter', '.works_block .works_list .work', function(){
            $(this).find('.work-hover').animate({opacity: .9}, 200);
        });
        $(document).on('mouseleave', '.works_block .works_list .work', function(){
            $(this).find('.work-hover').animate({opacity: 0}, 150);
        });
        // $(document).on('click', '.works_block .works_list .work-hover .inner .call-to-action', function(){
        //     $(this).find('.work-hover').animate({opacity: 0}, 150);
        // });
        $('.works_block .works_list .work-hover .inner .call-to-action').magnificPopup({
            type: 'ajax'
        });
    });
})(jQuery, Drupal, window);
