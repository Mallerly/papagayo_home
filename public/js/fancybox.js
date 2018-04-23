(function ($) {
    $("[data-fancybox]").fancybox({
        toolbar  : true,
        smallBtn : false,
        protect: true,
        thumbs : {
            autoStart : true
        },
        helpers	: {
            title	: {
                type: 'outside'
            }
        },
        media : {
            youtube : {
                params : {
                    autoplay : 0
                }
            }
        }
    });
})(jQuery);
