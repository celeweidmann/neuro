(function($) {

    function setupScroll() {
        var width = $(window).width();
        var height = $(window).height();

        if (width > 980 && height > 500) {
            $.scrollify({
                section: ".row",
                sectionName: "section-name",
                interstitialSection: "",
                easing: "easeOutExpo",
                scrollSpeed: 1100,
                offset: 0,
                scrollbars: true,
                standardScrollElements: "",
                // setHeights: true,
                setHeights: false,
                overflowScroll: true,
                // updateHash: true,
                updateHash: false,
                // touchScroll: true,
                touchScroll: false,
                before: function() {},
                after: function() {},
                afterResize: function() {},
                afterRender: function() {}
            });
        }
    }

    $(document).ready(setupScroll());

})(jQuery);