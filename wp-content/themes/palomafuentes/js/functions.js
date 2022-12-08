jQuery(function() {

        if(jQuery(".pf__dark")[0]) {
            jQuery("pf__header__options-contrast__black").addClass("active");
        }else{
            jQuery("pf__header__options-contrast__white").addClass("active");
        }
    
    jQuery(".pf__works__slider").slick({
        prevArrow: jQuery(".pf__works__slider__btn-prev"),
        nextArrow: jQuery(".pf__works__slider__btn-next"),
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [
            {
                reakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    jQuery(".pf__header__options-contrast__white").on("click", function(event) {
        jQuery("body").removeClass("pf__dark");
        jQuery(".pf__header__options-contrast span").removeClass("active");
        jQuery(this).addClass("active");
    });
    
    jQuery(".pf__header__options-contrast__black").on("click", function(event) {
        jQuery("body").addClass("pf__dark");
        jQuery(".pf__header__options-contrast span").removeClass("active");
        jQuery(this).addClass("active");
    });
});

