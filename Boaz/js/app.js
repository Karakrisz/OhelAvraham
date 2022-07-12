$(document).ready(function() {
    jQuery(window).scroll(startCounter)
});


function startCounter() {

    let hT = jQuery('.love_counter').offset().top
    hH = jQuery('.love_counter').outerHeight(),
        wH = jQuery(window).height()

    if (jQuery(window).scrollTop() > hT + hH - wH) {

        jQuery(window).off("scroll", startCounter)

        jQuery('.love_count').each(function() {

            let $this = jQuery(this)
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.ceil(this.Counter))
                }
            });
        });

    }

}