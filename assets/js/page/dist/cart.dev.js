"use strict";

console.log("cartjs loaded");
var cookie = JSON.parse($.cookie("adventure"));
console.log(cookie);
var numeric_array = new Array();

for (var items in cookie) {
  numeric_array.push(cookie[items]);
}

console.log(numeric_array);

for (var i = 0; i < numeric_array.length; i++) {
  for (var j = 0; j < numeric_array[i].length; j++) {
    $("#items").append("\n        <tr class=\"item\" data-index=\"".concat(keys[i]).concat(numeric_array[i][j]["id"], "\">\n            <td><img src=\"").concat(numeric_array[i][j]["IMAGE"], "\"/></td>\n            <td class=\"trip\">").concat(numeric_array[i][j]["TITLE"], "</td>\n            <td class=\"date\">20 Jan 2020 - 20 Feb 2020</td>\n            <td class=\"price\">10.00$</td>\n            <td class=\"remove\"><button class=\"remove-trip-btn\" value=\"").concat(keys[i]).concat(numeric_array[i][j]["id"], "\" ><i class=\"fas fa-times\"></i></button></td>\n        </tr>\n        "));
  }
}

checkEmptyTrip();
removeTrip();

function removeTrip() {
  $('.remove-trip-btn').each(function () {
    var events = $._data($(this)[0], "events");

    if (events == null) {
      $(this).on("click", function () {
        var i = 0;
        var tmp;

        for (var i = 0; i < numeric_array.length; i++) {
          for (var j = 0; j < numeric_array[i].length; j++) {
            // for (i in keys) {
            // 	for (j in cookie[keys[i]]) {
            tmp = keys[i] + numeric_array[i][j].id;

            if (tmp == $(this).val()) {
              $(".item[data-index=\"".concat($(this).val(), "\"]")).fadeOut("normal", function () {
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
  if ($.cookie("adventure") != undefined || $.cookie("adventure") != null || $.cookie("adventure") != "") $.removeCookie("adventure");
  var date = new Date();
  hour = 1;
  date.setTime(date.getTime() + hour * 3600 * 1000);
  $.cookie("adventure", JSON.stringify(cookie), {
    expires: date
  });
}

function checkEmptyTrip() {
  console.log(numeric_array.length);
  var exist = false;

  for (var i = 0; i < numeric_array.length; i++) {
    if (numeric_array[i].length) {
      exist = true;
    }
  }

  if (exist) {
    $('#trip-exist').css("display", "block");
    $('#trip-empty').css("display", "none");
  } else {
    $('#trip-exist').css("display", "none");
    $('#trip-empty').css("display", "block");
  }
}