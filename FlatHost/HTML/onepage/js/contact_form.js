// JavaScript Document
$(document).ready(function() {
    $("#phpcontactform").submit(function(e) {
        e.preventDefault();
        var name = $("#name");
        var email = $("#email");
        var mobile = $("#mobile");
        var msg = $("#message");
        var flag = false;
        if (name.val() == "") {
            name.closest(".control-group").addClass("error");
            name.focus();
            flag = false;
            return false;
        } else {
            name.closest(".control-group").removeClass("error").addClass("success");
        } if (email.val() == "") {
            email.closest(".control-group").addClass("error");
            email.focus();
            flag = false;
            return false;
        } else {
            email.closest(".control-group").removeClass("error").addClass("success");
        } if (msg.val() == "") {
            msg.closest(".control-group").addClass("error");
            msg.focus();
            flag = false;
            return false;
        } else {
            msg.closest(".control-group").removeClass("error").addClass("success");
            flag = true;
        }
        var dataString = "name=" + name.val() + "&email=" + email.val() + "&mobile=" + mobile.val() + "&msg=" + msg.val();
        $(".loading").fadeIn("slow").html("Loading...");
        $.ajax({
            type: "POST",
            data: dataString,
            url: "contact.php",
            cache: false,
            success: function (d) {
                $(".control-group").removeClass("success");
             if(d == 'success') // Message Sent? Show the 'Thank You' message and hide the form
 $('.loading').fadeIn('slow').html('<font color="green">Mail sent Successfully.</font>').delay(3000).fadeOut('slow');

     else
     $('.loading').fadeIn('slow').html('<font color="red">Mail not sent.</font>').delay(3000).fadeOut('slow');

            }
        });
        return false;
    });
    $("#reset").click(function () {
        $(".control-group").removeClass("success").removeClass("error");
    });
})



