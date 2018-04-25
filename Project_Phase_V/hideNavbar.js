$(window).scroll(function() {
    if (window.pageYOffset > 200) {
        $("#normal-nav").css("display", "flex");
    } else {
        if ($("#normal-nav").css("display") == "flex") {
            $("#normal-nav").css("display", "none");
        }
    }
});