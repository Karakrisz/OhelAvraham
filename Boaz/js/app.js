/************* Boaz jQuery start *************/

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

/************* Boaz jQuery end *************/

/************* Boaz ajax start *************/

$("#AddSaturdayPeople").submit(function(event) {

    event.preventDefault();

    let user_name = $("#user_name").val()
    let user_email = $("#user_email").val()

    $.ajax({

        type: "POST",
        url: "/AddSaturdayPeopleSubmit",
        data: "user_name=" + user_name + "&user_email=" + user_email,

        success: function() {
            $('.inserted-alert-success').fadeIn()
            $('#inserted').text('Sikeresen jelentkeztél. Köszönjük!')
            $('#beep__active').delay(50).get(0).play()
            $('.application-form-content__btn-box').hide()
        }

    })
})

/************* Boaz ajax end *************/

/************* Boaz Vanilla start *************/

/*************  Slide start *************/

const splide = new Splide('.splide', {
    type: 'loop',
    // autoplay: 'true',
    interval: '5000',
    pagination: false
});

splide.mount();



/*************  Slide end /*************/

/************* Boaz Vanilla end *************/