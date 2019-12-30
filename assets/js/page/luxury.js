var typeList = ["Miavana", "Tsarabanjina", "Anjajavy Le Lodge", "Madagascar Classic Collection"];
$(document).ready(function () {
    $("#luxury-form").submit(function (event) {
        event.preventDefault();

        var e = $(".itinerary-menu .list-group .side-menu-style-active").attr("data-index"),
            t = $("<input>").attr("type", "hidden").attr("name", "type").val(typeList[e]);
        $("#luxury-form").prepend(`<input type="hidden name="type" value="${typeList[e]}">`);
        $("#luxury-form").append(t);  
        var formData = $(this);  
        
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcS0soUAAAAADENjhERzn54gxfmOHPi4jepIVmB', {action: 'send_luxury_mail'}).then(function(token) {
                $('#luxury-form').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#luxury-form').prepend('<input type="hidden" name="action" value="send_luxury_mail">');
				$("#mailSpinner").removeClass("d-none");
                $.post(baseUrl + "luxury/mail", formData.serialize(), function(result) {
					$("#mailSpinner").addClass("d-none");
                    if(result.success) {
                        alert("Mail sent successfully");
                    } else {
                        alert(result.error);
                    }
                    $("#modal").modal("hide");
                });
            });;
        });
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
