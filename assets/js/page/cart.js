var numeric_array = new Array();
if($.cookie("adventure") != undefined && $.cookie("adventure") != null && $.cookie("adventure") != "") {
    var cookie = JSON.parse($.cookie("adventure"));
    
    
    for (var items in cookie){
        numeric_array.push( cookie[items] );
    }
    console.log(numeric_array);
    for(var i = 0; i < numeric_array.length; i++) {
        for(var j = 0; j < numeric_array[i].length; j++) {
            $("#items").append(`
            <tr class="item" data-index="${keys[i]}${numeric_array[i][j]["id"]}">
                <td><img src="${numeric_array[i][j]["IMAGE"]}"/></td>
                <td class="trip">${numeric_array[i][j]["TITLE"]}</td>
                <td class="date">20 Jan 2020 - 20 Feb 2020</td>
                <td class="price">10.00$</td>
                <td class="remove"><button class="remove-trip-btn" value="${keys[i]}${numeric_array[i][j]["id"]}" ><i class="fas fa-times"></i></button></td>
            </tr>
            `);
        }
    }
    removeTrip();
}
checkEmptyTrip();

function removeTrip() {
	$('.remove-trip-btn').each(function () {
		var events = $._data($(this)[0], "events");
		if (events == null) {
			$(this).on("click", function () {
				var i = 0;
                var tmp;
                for(var i = 0; i < numeric_array.length; i++) {
                    for(var j = 0; j < numeric_array[i].length; j++) {
				// for (i in keys) {
				// 	for (j in cookie[keys[i]]) {
                        tmp = keys[i] + numeric_array[i][j].id;
						if (tmp == $(this).val()) {
							$(`.item[data-index="${$(this).val()}"]`).fadeOut("normal", function () {
                                $(this).remove();
                            });
                            numeric_array[i].splice(j, 1);
							createCookie();
                            setCartNumber();
                            checkEmptyTrip();
						}
					}
				}
			});
		}
	});
}

function createCookie() {
	if ($.cookie("adventure") != undefined || $.cookie("adventure") != null || $.cookie("adventure") != "")
		$.removeCookie("adventure");
	var date = new Date();
	hour = 1;
	date.setTime(date.getTime() + (hour * 3600 * 1000));
	$.cookie("adventure", JSON.stringify(cookie), { expires: date });
}

function checkEmptyTrip() {
    console.log(numeric_array.length);
    let exist = false;
    for(var i = 0; i < numeric_array.length; i++) {
        if(numeric_array[i].length) {
            exist = true;
        }
    }
    if(exist) {
        $('#trip-exist').css("display", "block");
        $('#trip-empty').css("display", "none");
    } else {
        $('#trip-exist').css("display", "none");
        $('#trip-empty').css("display", "block");
    }
}