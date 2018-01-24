var $navTrigger = $(".main-nav-trigger button");

var $mainHeader = $(".main-header");

$navTrigger.on("click", function(e){
    e.preventDefault();
    console.log("clicked");
    $mainHeader.toggleClass("nav-open");
    $(this).toggleClass("is-active");
    $("body").toggleClass("no-scroll");
    $(".main-nav").toggleClass("is-hidden");
    if ($(this).hasClass("is-active")) {
        $(this).html("close");
        } else {
            $(this).html("menu");
        }
});

$(document).on("keydown", function(e){
    e.preventDefault();
    if ($navTrigger.hasClass("is-active") && e.keyCode == 27) {
        $mainHeader.removeClass("nav-open");
        $navTrigger.removeClass("is-active").html("menu");
        $(".main-nav").addClass("is-hidden");
        }
})