import $ from 'jquery'

$(document).ready(function() {
    var buttonPagination = $('.product__slideshow-pagination-item');

    buttonPagination.click(function() {
        var contentSlider = $(this).parent().parent();
        var color = $(this).attr('attr-color');
        var slider = contentSlider.children('a').children('div');
        var images = slider.find('img');
        
        images.each(function() {
            $(this).hide();

            if( color == $(this).attr('attr-color') ){
                $(this).fadeIn();
            }
        })
    })
})


