jQuery(function ($) {

    $('.advantage').on('click', function(e) {
        e.preventDefault();
        $(this).find('span.hidden').fadeToggle();
    });
    $('.cic-menu').on('mouseenter', function(){
        console.log('mouseenter');
        $(this).css({"background-color": "#C40F11", "color": "#FFF"});
    });

    $('.cic-menu').on('mouseleave', function(){
        console.log('mouseleave');
        $(this).css({ 'background-color': '#ddd', 'color':'#000'});
    });

});