var stripPhoneNumOfNonDigits = function (phoneNum) {
    return phoneNum.replace(/\D/g, '');
};

var formatPhoneNumber = function (pnum) {
    var phoneNum = stripPhoneNumOfNonDigits(pnum);
    return "(" +
        phoneNum.substring(0, 3) + ") " +
        phoneNum.substring(3, 6) + " - " +
        phoneNum.substring(6);
};

var phoneFormatHandler = function(event) {
    var $elem = $(this),
        curVal = $elem.val();
    if (stripPhoneNumOfNonDigits(curVal).length === 10 && event.keyCode !== 8) {
        $elem.val(formatPhoneNumber(curVal));
    }
};

$(document).ready(function() {
    $(document).on('keyup', '#phone', phoneFormatHandler);
});

function validateAndSubmit() {
    var errorMsg = "";
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;

    // set required fields
    var name = $.trim($('#name').val());
    var email = $.trim($('#email').val());
    var phone = $.trim($('#phone').val());

    if (! name) {
        errorMsg = "Please enter your full name.";
    } else if (name.length < 6) {
        errorMsg = "Is that really your full name? Please enter your actual full name.";
    } else if(! emailRegex.test(email)) {
        errorMsg = "Please enter a valid email.";
    } else if (stripPhoneNumOfNonDigits(phone).length !== 10) {
        errorMsg = "Please enter a valid phone number.";
    }

    // set non-required fields
    var plusOne = $("#plusOne").is(":checked");
    var plusOnesName = $.trim($('#plusOnesName').val());

    if (plusOne) {
        if (plusOnesName.length < 6) {
            errorMsg = "Since you're bringing a plus one, it would be best to include their name.";
        }
    }

    // if all is well, send away
    if (! errorMsg) {
        $.ajax({
            type: 'POST',
            url: '/connect.php',
            data: {
                name: name,
                email: email,
                phone: phone,
                plusOne: plusOne,
                plusOnesName: plusOnesName
            },
            dataType: 'json',
            async: false,
            success: function(response) {
                if (response.status === "0") {
                    errorMsg = "Uh oh. Something went wrong. Try to submit again in a few minutes. If all else fails, call David.";
                } else {
                    errorMsg = "Thank You!";
                }
            },
            error: function(response) {
                errorMsg = "Uh oh. Something went wrong. Try to submit again in a few minutes. If all else fails, call David.";
            }
        });
    }
            
    if (errorMsg) {
        $("#errorMsg").html(errorMsg);
        $("#errorMsg").removeClass('hidden');
    } else if (! $('#errorMessage').hasClass('hidden')) {
        $("#errorMsg").addClass('hidden');
    }

    return false;
}

// toggle visibility of plus one's name
// clear the field if necessary
$(document).on('click', '#plusOne', function() {
    if ($("#plusOnesName").val()) {
        $("#plusOnesName").val("");
    }
    $("#hiddenInput").toggleClass('hidden');
});

