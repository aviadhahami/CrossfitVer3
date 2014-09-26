"use strict";
$(document).ready(function() {
    $("#datepicker").datepicker({
        dateFormat: 'dd/mm/y'
    });

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
        var url = "../poll/pollData/" + dateOutput + "-Wod.xml";

        //Calculate exec time
        var a = performance.now();

        $("#output").append("<span id='loading'>Loading....</span>");
        $.ajax({
            type: "GET",
            url: url,
            datatype: "xml",
            success: function(xml) {
                var b = performance.now();
                $("#loading").remove();
                $("#output").html("<span>The search took " + ((b-a) & 0xFFFF) + " ms <br/> Showing results for : " + dateInput +"</span>");
                console.log(xml);
            },
            error: function(err) {
                $("#loading").remove();
                $("#output").html("<span>Some error occoured</span> <br />Error : " + err.statusText);
                console.error('ERROR');
                console.log(err);
            }
        });
    });
});