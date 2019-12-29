var typeList = ["Miavana", "Tsarabanjina", "Anjajavy Le Lodge", "Madagascar Classic Collection"];
$(document).ready(function () {
    $("#luxury-form").submit(function (event) {
        event.preventDefault();

        var e = $(".itinerary-menu .list-group .side-menu-style-active").attr("data-index"),
            t = $("<input>").attr("type", "hidden").attr("name", "type").val(typeList[e]);
        t.addClass("luxury-type");
        $("#modal").modal("hide");
        $("#luxury-form").append(t); 
        $.ajax({
            type: "POST",
            url: baseUrl + "luxury/mail",
            data: $(this).serialize(),
            success: function (message) {
                console.log(message), $(".luxury-type").remove()
            },
            error: function (error) {
                alert("Error posting feed."), $(".luxury-type").remove()
                console.log(error);
            }
        })
    })
});
