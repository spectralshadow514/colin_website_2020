jQuery(document).ready(function($) {
	$(document).scroll(function() {
        console.log($(document).scrollTop());
        var docscrolled = $(document).scrollTop();
        var header = $('header.header');

        if(docscrolled > 100 && !header.hasClass('shrink')) {
            header.addClass('shrink');
        }
        else if(docscrolled <= 100 && header.hasClass('shrink')) {
            header.removeClass('shrink');
        }
    })
});