var typeList = ["Miavana", "Tsarabanjina", "Anjajavy Le Lodge", "Madagascar Classic Collection"];
$(document).ready(function () {
    $("#luxury-form").submit(function (event) {
        event.preventDefault();

        var e = $(".itinerary-menu .list-group .side-menu-style-active").attr("data-index"),
            t = $("<input>").attr("type", "hidden").attr("name", "type").val(typeList[e]);
        $("#luxury-form").prepend(`<input type="hidden name="type" value="${typeList[e]}">`);
        $("#modal").modal("hide");
        $("#luxury-form").append(t);  
        var dataSerialized = $(this);  
 
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcR38oUAAAAAAJxLlnNnVxoYq-LLliRuAvRnnIx', {action: 'send_luxury_mail'}).then(function(token) {
                $('#luxury-form').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#luxury-form').prepend('<input type="hidden" name="action" value="send_luxury_mail">');
                $.post(baseUrl + "luxury/mail", dataSerialized.serialize(), function(result) {
                    console.log(result);
                    if(result.success) {
                        alert("Mail sent successfully");
                    } else {
                        alert(result.error);
                    }
                });
            });;
        });
        // $.ajax({
        //     type: "POST",
        //     url: baseUrl + "luxury/mail",
        //     data: $(this).serialize(),
        //     success: function (message) {
        //         console.log(message), $(".luxury-type").remove()
        //     },
        //     error: function (error) {
        //         alert("Error posting feed."), $(".luxury-type").remove()
        //         console.log(error);
        //     }
        // })
    })
});


// Date picker code
var dateToday = new Date();
var dates = $("#begin, #end").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 3,
    minDate: dateToday,
    onSelect: function(selectedDate) {
        var option = this.id == "begin" ? "minDate" : "maxDate",
            instance = $(this).data("datepicker"),
            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
    }
});
