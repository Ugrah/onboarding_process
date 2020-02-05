$(function() {
    /**
     * display affect on hover categories
     */
    $('ul.categories li').on('mouseover', function() {
        $('ul.categories li').removeClass('current-cat');
        $(this).addClass('current-cat');
    });
})