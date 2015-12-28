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

        $(document).on('click', '.works_block .works_list .work-hover .inner .call-to-action, .mfp-content .works_detail .works_detail-prev, .mfp-content .works_detail .works_detail-next', function(event){
            event.preventDefault();
            var url = $(this).attr('href');

            if( $(this).hasClass('disabled') == false ){
                $.magnificPopup.open({
                  type: 'ajax',
                  items: {
                      src: url
                  },
                }, 0);
            }
        });

        $(document).on('click', '.mfp-content .works_detail .close .mfp-content .works_detail .close', function(event){
            event.preventDefault();
            $.magnificPopup.close();
        });


    });
})(jQuery, Drupal, window);
