var adventuresId = ['IDDESTINATION', 'IDPARK', 'IDEXPERIENCE', 'IDWILDLIFE'];
var adventures = [destinations, parks, experiences, wildlifes];

var i = 0, j = 0;
var id;

init();
function init() {
	for (i in adventuresId) {
		for (j in adventures[i]) {
			if (adventures[i][j][adventuresId[i]] !== undefined) {
				adventures[i][j].id = adventures[i][j][adventuresId[i]];
				delete adventures[i][j][adventuresId[i]];
			}
		}
	}

	if ($.cookie("adventure") != undefined && $.cookie("adventure") != null && $.cookie("adventure") != "") {
		var cookie = JSON.parse($.cookie("adventure"));
		for (i in keys)
			listAdventure[keys[i]] = cookie[keys[i]];

		for (i in keys) {
			for (j in listAdventure[keys[i]]) {
				$("#adventure-" + keys[i]).append($(yourAdventure(listAdventure[keys[i]][j].id, listAdventure[keys[i]][j].TITLE, keys[i])));
				$("#adventure-modal-" + keys[i]).append($(yourAdventureModal(listAdventure[keys[i]][j].id, listAdventure[keys[i]][j].TITLE, keys[i])));
				changeToAddedButton(keys[i] + listAdventure[keys[i]][j].id);
			}
			if (listAdventure[keys[i]].length != 0)
				numberOfAdventure(keys[i], listAdventure[keys[i]].length);
		}
		removeAdventure();
	}
}


/***/
$(document).ready(function () {
	var show = true;
	$(`.add-itinerary-btn`).each(function () {
		$(this).on('click', function () {
			$(this).html("ADDED TO ITINERARY <span>+</span>");
			$(this).prop('disabled', true);
			if ($("#adventure-collapse").is(":hidden")) {
				$("#adventure-collapse").collapse('toggle');
			}
			$(this).css({ 'background': '#827E7B' });
			var tmp;
			for (i in adventures) {
				for (j in adventures[i]) {
					tmp = keys[i] + adventures[i][j].id;
					if (tmp == $(this).val()) {
						for (var k in listAdventure[keys[i]]) {
							if (adventures[i][j].id == listAdventure[keys[i]][k].id)
								return;
						}
						$("#adventure-" + keys[i]).append($(yourAdventure(adventures[i][j].id, adventures[i][j].TITLE, keys[i])));
						$("#adventure-modal-" + keys[i]).append($(yourAdventureModal(adventures[i][j].id, adventures[i][j].TITLE, keys[i])));
						removeAdventure();
						listAdventure[keys[i]].push(adventures[i][j]);
						createCookie();
						numberOfAdventure(keys[i], listAdventure[keys[i]].length);
						setCartNumber();
						if (show)
							$(`.show-adventure-container .show-adventure-btn`).fadeOut("normal", function () { $(this).remove(); });
						return;
					}
				}
			}
		});
	});

	$(`.show-adventure-container .show-adventure-btn`).on('click', function () {
		$(`.show-adventure-container .show-adventure-btn`).fadeOut("normal", function () {
			$(this).remove();
		});
	});
	$(`#adventure-collapse`).on('shown.bs.collapse', function () {
		$('.add-itinerary-btn[data-toggle=collapse]').each(function () {
			$(this).attr("data-toggle", "");
		});
	});

	for (i in keys) {
		$(`.adventure-` + keys[i] + `-search`).keypress(function (e) {
			if (e.which == 13) {
				return false;
			}
		});

		$(`.adventure-` + keys[i] + `-search`).on("search", function () {
			id = $('.side-menu-style-active').attr('data-index');
			$(`.itinerary-` + keys[id]).each(function () {
				$(this).fadeIn("normal", function () { $(this).css({ "display": "flex" }); });
			});
		});

		$(`.adventure-` + keys[i] + `-search`).on("keyup", function () {
			id = $('.side-menu-style-active').attr('data-index');
			if ($(this).val() != "") {
				$(`.itinerary-` + keys[id]).each(function () {
					if (!$(this).attr("data-text").toLowerCase().includes($(`.adventure-` + keys[id] + `-search`).val().toLowerCase())) {

						$(this).fadeOut("normal", function () { $(this).css({ "display": "none" }); });
					} else {
						$(this).fadeIn("normal", function () { $(this).css({ "display": "flex" }); });
					}
				});
			} else {
				$(`.itinerary-` + keys[id]).each(function () {
					$(this).fadeIn("normal", function () { $(this).css({ "display": "flex" }); });
				});
			}
		});
	}

	$("#adventure-form").submit(function (event) {
		event.preventDefault();
		var formData = $(this);
		grecaptcha.ready(function () {
			grecaptcha.execute('6LcS0soUAAAAADENjhERzn54gxfmOHPi4jepIVmB', { action: 'send_adventure_mail' }).then(function (token) {
				$('#adventure-form').prepend('<input type="hidden" name="token" value="' + token + '">');
				$('#adventure-form').prepend('<input type="hidden" name="action" value="send_adventure_mail">');
				$("#mailSpinner").removeClass("d-none");
				$.post(baseUrl + "adventure/mail", formData.serialize(), function (result) {
					$("#mailSpinner").addClass("d-none");
					if (result.success) {
						alert("Mail sent successfully");
					} else {
						alert(result.error);
					}
					$("#adventure-modal").modal("hide");
				});
			});;
		});
	});

});

function numberOfAdventure(key, nb) {
	$('.itinerary-menu-' + key + '> span').text('(' + nb + ')');
}

function removeAdventure() {
	$('.remove-itinerary-btn').each(function () {
		var events = $._data($(this)[0], "events");
		if (events == null) {
			$(this).on("click", function () {
				var i = 0;
				var tmp;
				for (i in keys) {
					for (j in listAdventure[keys[i]]) {
						tmp = keys[i] + listAdventure[keys[i]][j].id;
						if (tmp == $(this).val()) {
							$(`.your-adventure-content > div[data-index="${$(this).val()}"]`).fadeOut("normal", function () { $(this).remove(); });
							listAdventure[keys[i]].splice(j, 1);
							numberOfAdventure(keys[i], listAdventure[keys[i]].length);
							createCookie();
							setCartNumber();
							changeToAddButton(tmp);
						}
					}
				}
			});
		}
	});
}

function changeToAddButton(removed) {
	$('.add-itinerary-btn').each(function () {
		if ($(this).val() == removed) {
			$(this).html('ADD TO ITINERARY <span><i class="fas fa-plus"></i></span>');
			$(this).prop('disabled', false);
			$(this).css({ 'background': '#444443' });
		}
	});
}

function changeToAddedButton(added) {
	$('.add-itinerary-btn').each(function () {
		if ($(this).val() == added) {
			$(this).html('ADDED TO ITINERARY <i class="fas fa-plus"></i>');
			$(this).prop('disabled', true);
			$(this).css({ 'background': '#827E7B' });
		}
	});
}

function yourAdventure(id, title, pattern) {
	var adventure = `<div data-index="` + pattern + id + `" class="row your-adventure-list">
						<span class="col-lg-8 col-8">`+ capitalize_Words(title) + `</span>
						<div class="col-lg-4 col-4 text-right">
							<button class="remove-itinerary-btn" value="` + pattern + id + `" ><i class="fas fa-times"></i></button>
						</div>
					</div>`;
	return adventure;
}

function yourAdventureModal(id, title, pattern) {
	var adventure = `<div data-index="` + pattern + id + `" class="row your-adventure-list">
						<span class="col-lg-8 col-8"><input type="checkbox" name="` + pattern + `[]" value="` + capitalize_Words(title) + `" checked hidden>` + capitalize_Words(title) + `</span>
					</div>`;
	return adventure;
}

function createCookie() {
	if ($.cookie("adventure") != undefined || $.cookie("adventure") != null || $.cookie("adventure") != "")
		$.removeCookie("adventure");
	var date = new Date();
	hour = 1;
	date.setTime(date.getTime() + (hour * 3600 * 1000));
	$.cookie("adventure", JSON.stringify(listAdventure), { expires: date });
}

function capitalize_Words(str) {
	return str.replace(/\w\S*/g, function (txt) { return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase(); });
}

/* */
var slideIndex = 1;
var title = [
	'THE ADVENTURE BEGINS..',
	'THE ADVENTURE CONTINUES..',
	'ALMOST DONE',
	'YOUR ADVENTURE'
];

slide(slideIndex);

function slideTo(n) {
	slide(slideIndex += n);
}

function currentSlide(n) {
	slide(slideIndex = n);
}

function slide(n) {
	var slides = $(`.adventure-form > .form-row`);
	var dot = $(`.dot-content > .dot`);
	if (n > slides.length) { slideIndex = 1 }
	if (n < 1) { slideIndex = slides.length }
	$(`.adventure-btn-previous`).css({ 'display': 'flex' });
	$(`.adventure-btn-next`).css({ 'display': 'flex' });
	$(`#adventure-modal-title`).text(title[slideIndex - 1]);


	$(`#adventure-modal-title`).removeClass("advenutre-modal-header-title");
	$(`.dot-content`).css({ 'display': 'block' });
	$(`.adventure-modal-body-header`).css({ 'display': 'flex' });
	$(`.adventure-btn-next`).text("Next");
	$(`.adventure-btn-change`).css({ 'display': 'none' });
	$(`.adventure-btn-send`).css({ 'display': 'none' });


	if (slideIndex == 1)
		$(`.adventure-btn-previous`).css({ 'display': 'none' });

	if (slideIndex == slides.length) {
		$(`.adventure-btn-change`).css({ 'display': 'flex' });
		$(`.adventure-btn-send`).css({ 'display': 'flex' });


		$(`.adventure-btn-next`).css({ 'display': 'none' });
		$(`.dot-content`).css({ 'display': 'none' });
		$(`.adventure-modal-body-header`).css({ 'display': 'none' });
		$(`#adventure-modal-title`).addClass("advenutre-modal-header-title");
	}

	if (slideIndex == slides.length - 1)
		$(`.modal-footer .adventure-btn-next`).text("Finish");

	slides.each(function () {
		$(this).css({ "display": "none" });
	});
	dot.each(function () {
		$(this).removeClass("activeDot");
	});
	slides.eq(slideIndex - 1).css({ "display": "flex" });
	dot.eq(slideIndex - 1).addClass("activeDot");
}

// Date picker code
var dateToday = new Date();
var dates = $("#arrive, #depart").datepicker({
	defaultDate: "+1w",
	changeMonth: true,
	numberOfMonths: 3,
	minDate: dateToday,
	onSelect: function (selectedDate) {
		var option = this.id == "arrive" ? "minDate" : "maxDate",
			instance = $(this).data("datepicker"),
			date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
		dates.not(this).datepicker("option", option, date);
	}
});
