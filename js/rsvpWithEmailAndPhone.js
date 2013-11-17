ad = {
    approvedNames: [],
    errorMsg: ""
};

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
    if (event.keyCode !== 8 && curVal.length > 2) {
        $elem.val(formatPhoneNumber(curVal));
    }
};

var compileNames = function() {
    var compiledNames = "";

    $("input[name='otherGuest']").each(function() {
        if (this.value.length < 6) {
            ad.errorMsg = "Make sure to tell us the full name of everyone in your party.";
            return "";
        }
        if (compiledNames !== "") {
            compiledNames += ", " + $.trim(this.value);
        } else {
            compiledNames = $.trim(this.value);
        }
    });

    return compiledNames;
};

// var getApprovedNames = function() {
//     $.ajax({
//         type: 'GET',
//         url: '/getNames.php',
//         dataType: 'json',
//         success: function(response) {
//             ad.approvedNames = response.names;
//         },
//         error: function(response) {
//             ad.errorMsg = "Uh oh. Something went wrong. Try to submit again in a few minutes. If all else fails, call David.";
//         }
//     });
// };

// var getLastName = function() {
//     var fullName = $("#name").val(),
//         words = fullName.match(/\w+/g); // tokenize into list of words
//     return words !== null ? words[words.length-1]: "";
// };

// var isApproved = function(lastName) {
//     return $.inArray(lastName.toLowerCase(), ad.approvedNames) !== -1 ? true : false;
// };

var addAttendeeField = function() {
    var totalGuests = $("input[name='otherGuest']").size() + 1;
    if (totalGuests < 10) {
        $(".otherGuest").last()
            .after('<span class="otherGuest">' +
                '<input type="text" name="otherGuest" maxlength="50" placeholder="Guest ' +
                (totalGuests+1) +
                '"></span>');
    }
};

var removeAttendeeField = function() {
    if ($("input[name='otherGuest']").size() > 1) {
        $("input[name='otherGuest']").last().remove();
    }
};

// var checkApproved = function() {
//     if (isApproved(getLastName())) {
//         $("#othersAllowed").removeClass("notApproved");
//     } else {
//         $("#othersAllowed").addClass("notApproved");
//     }
// };

var checkAttendance = function() {
    if ($("input[name='attending']:checked").val() === "t") {
        $("#details").removeClass("notAttending");
    } else {
        $("#details").addClass("notAttending");
    }
};

var checkIfBringingOthers = function() {
    if ($("input[name='others']:checked").val() === "t") {
        $("#otherGuests").removeClass("noOthers");
    } else {
        $("#otherGuests").addClass("noOthers");
    }
};

// bind events
$(function() {
    // getApprovedNames();
    $("input[name='attending']").on("click", checkAttendance);
    $("#phone").on("keyup", phoneFormatHandler);
    // $("#name").on("keyup", checkApproved);
    $("input[name='others']").on("click", checkIfBringingOthers);
    $("#addGuest").on("click", addAttendeeField);
    $("#removeGuest").on("click", removeAttendeeField);
    $("form").on("submit", validateAndSubmit);
});

var validateAndSubmit = function() {
    var emailRegex = /.+@.+\..+/i;
    ad.errorMsg = "";

    // set required fields
    var name = $.trim($('#name').val()),
        attending = $("input[name='attending']:checked").val(),
        email = $.trim($('#email').val()),
        phone = $.trim($('#phone').val()),
        otherGuests = "";

    if (! name) {
        ad.errorMsg = "Please enter your full name.";
    } else if (name.length < 6) {
        ad.errorMsg = "Is that really your full name? Please enter your actual full name.";
    } else if (attending === undefined) {
        ad.errorMsg = "Please let us know if you are coming or not!";
    } else if (attending === "t") {
        var phoneNumLength = stripPhoneNumOfNonDigits(phone).length,
            othersAreInParty = $("input[name='others']:checked").val();
        if(! emailRegex.test(email)) {
            ad.errorMsg = "Please enter a valid email.";
        } else if (phoneNumLength !== 10) {
            ad.errorMsg = "Please enter a valid phone number.";
        } else if (othersAreInParty === undefined) {
            ad.errorMsg = "Please let us know if there will be anyone else in your party!";
        } else if (othersAreInParty === "t") {
            otherGuests = compileNames();
        }
    }

    // if all is well, send away
    if (! ad.errorMsg) {
        $.ajax({
            type: 'POST',
            url: '/connect',
            data: {
                name: name,
                attending: attending,
                email: email,
                phone: phone,
                otherGuests: otherGuests
            },
            dataType: 'json',
            async: false,
            success: function(response) {
                if (response.status == 200) {
                    $("form").animate({ opacity : 0 }, 500);
                } else {
                    ad.errorMsg = "Uh oh. Something went wrong. Try to submit again in a few minutes. If all else fails, call David.";
                }
            },
            error: function(response) {
                ad.errorMsg = "Uh oh. Something went wrong. Try to submit again in a few minutes. If all else fails, call David.";
            }
        });
    }

    if (ad.errorMsg) {
        var $errorMsg = $("#errorMsg");
        $errorMsg.text(ad.errorMsg);
        $errorMsg.removeClass("hidden");
        $('html,body').animate({
          scrollTop: $('header').height()
      }, 200);
    } else {
        $("#errorMsg").addClass("hidden");
    }

    return false;
};
