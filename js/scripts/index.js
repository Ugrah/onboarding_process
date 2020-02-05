jQuery(function ($) {

    $('.advantage').on('click', function(e) {
        e.preventDefault();
        $(this).find('span.hidden').fadeToggle();
    });

});