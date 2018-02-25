var $navTrigger = $(".main-nav-trigger button");

var $mainHeader = $(".main-header");
var elem = document.querySelector(".main-header");
var theCSSprop = window.getComputedStyle(elem,null).getPropertyValue("height");

$navTrigger.on("click", function(e){
    e.preventDefault();
    $mainHeader.toggleClass("nav-open");
    $(this).toggleClass("is-active");
    $("body").toggleClass("no-scroll");
    $(".main-nav").toggleClass("is-hidden");
    if ($(this).hasClass("is-active")) {
        $(this).html("close");
        $("body").attr("style", "padding-top: " + theCSSprop + "");
        } else {
            $(this).html("menu");
            $("body").attr("style", "");
        }
});

$(document).on("keydown", function(e){
    e.preventDefault();
    if ($navTrigger.hasClass("is-active") && e.keyCode == 27) {
        $mainHeader.removeClass("nav-open");
        $navTrigger.removeClass("is-active").html("menu");
        $(".main-nav").addClass("is-hidden");
        $("body").removeClass("no-scroll");
        $("body").attr("style", "");
        }
});
