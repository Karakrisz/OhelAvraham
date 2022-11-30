$(function() {

    let SCROLL_TIME = 1000;

    if (window.location.href.search('szombati-jelentkezes') == -1) {
        $(".scroll").click(menuClick)
    }

    function menuClick(event) {
        event.preventDefault();
        let id = '#' + $(this).attr("href").replace(/\.\/#/, '');
        $("html, body").animate({
            "scrollTop": $(id).offset().top
        }, SCROLL_TIME)
    }

})