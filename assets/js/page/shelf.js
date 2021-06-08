let travelerId = 0;
let travelers = [];
let selectedTravel = null;

openFormular = (index) => {
    $('#trip-modal').modal();
    selectedTravel = tripList[index];
    $('#slide-modal-title').text(selectedTravel['_name']);
}

editTravelerNumber = (type) => {
    if (travelers.length <= 0 && type == -1)
        return;
    if (type == 1) {
        addFormTraveler(travelerId);
        travelers.push(travelerId++);
    } else {
        $(`#traveler-form-${travelers[travelers.length - 1]}`).remove();
        travelers.pop();
    }
    console.log(travelers);
    $('#travelerNumber').val(travelers.length);
}

addFormTraveler = (id) => {
    const elements = `
    <div class="form-row col-12" id="traveler-form-${id}">
        <div class="form-group col-lg-4 col-md-6">
            <label>last name*</label>
            <input type="text" class="form-control form-input" name="lastNames[]" placeholder="Write">
        </div>
        <div class="form-group col-lg-4 col-md-6">
            <label>first name*</label>
            <input type="text" class="form-control form-input" name="firstNames[]" placeholder="Write">
        </div>
        <div class="form-group col-lg-4 col-md-12 traveler-form-ages">
            <label>child/adult*</label>
            <div>
                <div class="col-lg-6 traveler-form-inline">
                    <input class="form-check-input" type="radio" value="child" name="age${id}" id="child${id}">
                    <label class="form-check-label" for="child${id}">child</label>
                </div>
                <div class="col-lg-6 traveler-form-inline">
                    <input class="form-check-input" type="radio" value="adult" name="age${id}" id="adult${id}">
                    <label class="form-check-label" for="adult${id}">adult</label>
                </div>
                <button class="remove-traveler-btn" onclick="removeTraveler(${id}); return false;" type="button"><i class="fas fa-times"></i></button>
            </div>
        </div>
    </div>
    `;
    $('#slide-traveler-nb').append(elements);
}

removeTraveler = (id) => {
    for (let i = 0; i < travelers.length; i++) {
        if (travelers[i] == id) {
            $(`#traveler-form-${id}`).remove();
            travelers.splice(i, 1);
            $('#travelerNumber').val(travelers.length);
            break;
        }
    }
}

$("#slide-form").submit(function (event) {
    event.preventDefault();
    var formData = $(this);
    // alert("coucou");
    $('#slide-form').prepend('<input type="hidden" name="nbTraveler" value="' + travelers.length + '"/>');
    $("#mailSpinner").removeClass("d-none");
    $.post(baseUrl + "shelf/mail", formData.serialize(), function (result) {
        $("#mailSpinner").addClass("d-none");
        if (result.success) {
            alert("Mail sent successfully");
        } else {
            alert(result.error);
        }
    });
});