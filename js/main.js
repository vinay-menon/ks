// $(function () {

//     var sticky = $('.content-header-lnk-group');

//     var top = sticky.offset().top - parseFloat(sticky.css('margin-top').replace(/auto/, 0));

//     $(window).on('scroll', function(event) {
//         // what the y position of the scroll is
//         var y = $(this).scrollTop();

//         // whether that's below the form
//         if (y >= top) {
//             // if so, ad the fixed class
//             if ( sticky.is('.is-fixed') ) {
//                 return;
//             }
//             sticky.addClass('is-fixed');
//         } else {
//             // otherwise remove it
//             sticky.removeClass('is-fixed');
//         }
//     });

// });

$("body").on("click", ".artform-item", function(e) {
    e.preventDefault();

    var $label = $(this).attr('data-label');
    var $minMembers = $(this).attr('data-members');

	if($(this).hasClass("is-selectable")){
		$(this).removeClass("is-selectable").addClass("is-selected");
		$(".selected-artforms-group").prepend("<div class='selected-artform " + $label + "'><button class='selected-artform-close'>X</button>" + "<div class='selected-artform-img'><img src='" + $(this).find("img").attr("src") + "'></div>" + "<label><span class='selected-artform-name'>" + $label + "</span><span class='selected-artform-msg'>No. of Artists Required:</span>" + "<input type='number' min='" + $minMembers + "' value='" + $minMembers + "'></label></div>");
	} else if ($(this).hasClass("is-selected")) {
		$(".selected-artforms-group ."+$label).remove();
		$(this).removeClass("is-selected").addClass("is-selectable");
	   }
    if ($(".selected-artform").length > 0) {
        $("#form-part-2").addClass("is-active");
        } else if ($(".selected-artforms-group").not(":has(.selected-artform)")) {
            $("#form-part-2").removeClass("is-active");
            }
    $(".selected-artform-counter").html($(".selected-artform").length);
});

$("body").on("click", ".selected-artform-close", function() {
	var mlap = $(this).parent().attr("class").toLowerCase().replace("selected-artform ", "");

	$(".artform-item[data-label='" + mlap + "']").removeClass("is-selected").addClass("is-selectable");
	console.log(mlap);
	$(".selected-artform."+mlap).remove();
    if ($(".selected-artform").length > 0) {
        $("#form-part-2").addClass("is-active");
        } else if ($(".selected-artforms-group").not(":has(.selected-artform)")) {
            $("#form-part-2").removeClass("is-active");
            }
    $(".selected-artform-counter").html($(".selected-artform").length);
});

$("body").on("click", ".selected-artform:only-child .selected-artform-close", function() {
    $(".forms").removeClass("final-step");
});

$(".artform-selection-final-step-btn").on("click", function(e) {
    e.preventDefault();
    $(".forms").addClass("final-step");
});
$(".artform-selection-prev-step-btn").on("click", function(e) {
    e.preventDefault();
    $(".forms").removeClass("final-step");
});