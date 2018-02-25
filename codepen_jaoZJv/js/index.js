$("body").on("click",".blah", function(e) {
	e.preventDefault();
	if($(this).hasClass("bleh")){
		$(this).removeClass("bleh").addClass("bloh");
		$(".meow").append("<div class='busk " + $(this).html() + "'>"+$(this).html()+"</div>");
	} else if ($(this).hasClass("bloh")) {
		$(".meow ."+$(this).html()).remove();
		$(this).removeClass("bloh").addClass("bleh");
	   }
});

$("body").on("click", ".busk", function() {
	var mlap = $(this).html().toLowerCase();
	$(".blah[data-label='" + mlap + "']").removeClass("bloh").addClass("bleh");
	console.log(mlap);
	$(this).remove();
});