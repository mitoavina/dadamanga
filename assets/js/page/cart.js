console.log("cartjs loaded");
var cookie = JSON.parse($.cookie("adventure"));
console.log(cookie);


var numeric_array = new Array();
for (var items in cookie){
    numeric_array.push( cookie[items] );
}
console.log(numeric_array);
for(var i = 0; i < numeric_array.length; i++) {
    for(var j = 0; j < numeric_array[i].length; j++) {
        console.log(numeric_array[i][j]);
        $("#items").append(`
        <tr class="item">
            <td><img src="${numeric_array[i][j]["IMAGE"]}"/></td>
            <td class="trip">${numeric_array[i][j]["TITLE"]}</td>
            <td class="date">20 Jan 2020 - 20 Feb 2020</td>
            <td class="price">10.00$</td>
            <td class="remove">X</td>
        </tr>
        `);
    }
}