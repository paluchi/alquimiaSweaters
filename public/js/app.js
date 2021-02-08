$(".navTrigger").click(function () {
    $(this).toggleClass("active");
    $("#mainListDiv").toggleClass("show_list");
    $("#navbar").toggleClass("nav-active");
    $("#sections-mobile").toggleClass("d-none");
    $("#mainListDiv").fadeIn();
});

$(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $(".nav").addClass("affix");
    } else {
        $(".nav").removeClass("affix");
    }
});

function onetime(node, type, callback) {
    node.addEventListener(type, function (e) {
        e.target.removeEventListener(e.type, arguments.callee);
        return callback(e);
    });
}

onetime(document, "scroll", function (e) {
    const content = $("#content");
    //$([document.documentElement, document.body]).animate({
        //scrollTop: content.offset().top - 70
    //}, 0);
});
