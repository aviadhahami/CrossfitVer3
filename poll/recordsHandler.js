"use strict";
$(document).ready(function() {
    $("#datepicker").datepicker({ dateFormat: 'dd/mm/y' });

    $("#sendButton").on("click", function() {
        $("#output").text(" ");
        var dateInput = $("#datepicker").val();


        //Check date validation

        // regular expression to match required date format
        var re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
        if (dateInput == '' && !dateInput.match(re)) {
            alert("Invalid date format: " + dateInput);
            //form.startdate.focus();
            document.getElementById("datepicker").focus();
            return false;
        }
        //END OF DATE VALIDATION

        var dateOutput = dateInput.replace(/\//g, '');
        $("#output").text("Showing results for : " + dateInput);
        var url = "../poll/pollData/" + dateOutput + "-Wod.xml";
        $.ajax({
            type: "GET",
            url: url,
            datatype: "xml",
            success: function(xml) {
                console.log(xml)
            },
            error: function(err) {
                console.error('ERROR');
                console.log(err);
            }
        });

    });
});