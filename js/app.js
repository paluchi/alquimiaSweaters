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

$('#f-logo').click(function() {
    const eE = document.createElement('p');
    eE.innerHTML = 'Te quiero mucho ma, perdon por a veces ser mal hijo y no hablarte';
    $('#eE').append(eE);
});