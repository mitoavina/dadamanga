let trips = getCookie('trips');
if(trips != null) {
    for(var i = 0; i < trips.length; i++) {
            $("#items").append(`
            <div class="item body-trip-content" data-index="${trips[i]._id}">
                <div class="img"><img src="${trips[i]._img}"/></div>
                <div class="trip">${trips[i]._name}</div>
                <div class="price">${trips[i]._currency} ${trips[i]._price}</div>
                <div class="remove"><button class="remove-trip-btn" value="${trips[i]._id}" ><i class="fas fa-times"></i></button></div>
            </div>
            `);
    }
    removeTrip();
}

checkEmptyTrip();
calcTotal();

function calcTotal() {
    let total = 0;
    if(trips != null) {
        trips.forEach(trip => {
            total += parseFloat(trip._price.replace(/,/g, ''));
        });
    }
    $('#trip-price').html(total.toLocaleString('en-US', {minimumFractionDigits: 2}));
}

function removeTrip() {
	$('.remove-trip-btn').each(function () {
		var events = $._data($(this)[0], "events");
		if (events == null) {
			$(this).on("click", function () {
                for(let i = 0; i < trips.length; i++) {
                        let tmp = trips[i]._id;
						if (tmp == $(this).val()) {
                            console.log($(`.item[data-index="${$(this).val()}"]`));;
							$(`.item[data-index="${$(this).val()}"]`).fadeOut("normal", function () {
                                console.log($(this));
                                $(this).remove();
                            });
                            trips.splice(i, 1);
                            createCookie();
                            setCartNumber();
                            calcTotal();
                            checkEmptyTrip();
						}
				}
			});
		}
	});
}

function createCookie() {
	if (getCookie('trips'))
		$.removeCookie("trips");
	var date = new Date();
	hour = 1;
	date.setTime(date.getTime() + (hour * 3600 * 1000));
	$.cookie("trips", JSON.stringify(trips), { expires: date });
}

function checkEmptyTrip() {
    if(trips != null) {
        if(trips.length) {
            $('#trip-exist').css("display", "grid");
            $('#trip-empty').css("display", "none");
        } else {
            $('#trip-exist').css("display", "none");
            $('#trip-empty').css("display", "block");
        }
    }
}