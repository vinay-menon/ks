$(".gal-vid").on("click", function(e) {
    e.preventDefault();

    $("body").append("<div class='gal-vid-box'><div class='gal-vid-box-dismiss'><svg width='30' height='30'><g stroke='rgb(160,160,160)' stroke-width='4'><line x1='5' y1='5' x2='25' y2='25'></line><line x1='5' y1='25' x2='25' y2='5'></line></g></svg></div></div>");

    var $vidURL = $(this).attr('href') + "?enablejsapi=1";

    if($(this).hasClass("gal-vid--yt")) {
        $(".gal-vid-box").append('<div class="gal-vid-container"><div class="aspect-ratio-box_56"><iframe src="' + $vidURL + '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div></div>');
        }
});
$("body").on("click",".gal-vid-box-dismiss", function() {
    $(".gal-vid-box").remove();
});
$("body").on("keydown", function(e) {
    if($(".gal-vid-box").length == 1 && e.keyCode == 27) {
        $(".gal-vid-box").remove();
    }
});