jQuery(document).ready(function($) {
    var header = $('header.header');
    var docscrolled = $(document).scrollTop();
    var headerHeight = header.outerHeight(true);
    header.next().css('padding-top', headerHeight + 'px');
	$(document).scroll(function() {
        docscrolled = $(document).scrollTop();
        if(docscrolled > 100 && !header.hasClass('shrink')) {
            header.addClass('shrink');
        }
        else if(docscrolled <= 100 && header.hasClass('shrink')) {
            header.removeClass('shrink');
        }
    });

});