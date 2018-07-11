(function($) {

    $(document).ready($(window).scroll(function(){
        var windowpos = $(window).scrollTop();
		if (windowpos >= 50) {
            $("#menu").addClass("scrolled-nav");
        } else {
            $("#menu").removeClass("scrolled-nav");
        }
    }));

})(jQuery);

