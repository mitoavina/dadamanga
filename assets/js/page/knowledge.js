$(document).ready(function () {
	var e = $(`.knowledge-menu > li[data-index="${knowledge}"]`);
	$(e).addClass("side-menu-style-active");
	var a = $(`.dadamanga-special-card-container > div[data-index="${knowledge}"]`);
	a.removeClass("d-none"), $(a).css({
		position: "relative",
		left: "300px"
	}).show().animate({
		left: 0
	}, 500), a.addClass("active");
	var n = $(e).siblings();
	$(n).each(function () {
		$(this).removeClass("side-menu-style-active")
    });
    
    $(".list-group-item > a").on("click", function(){
        $(".knowledge-title").text($(this).text());
    });
});