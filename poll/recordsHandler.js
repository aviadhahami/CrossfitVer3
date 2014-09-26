"use strict";
$(document).ready(function() {


    $("#datepicker").datepicker({
        dateFormat: 'dd/mm/y'
    });

    $("#sendButton").on("click", function() {
        $("#output").html("");
        $("#content").html("");
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
                $("#loading").remove();
                $("#output").html("Showing results for : " + dateInput + "</span><br /><br />");
                console.log(xml);
                sorter(xml);
                var b = performance.now();
                $("#output").append("<span>The search took " + ((b - a) & 0xFF) + " ms <br/>");
            },
            error: function(err) {
                $("#loading").remove();
                $("#output").html("<span>Some error occoured</span> <br />Error : " + err.statusText);
                console.error('ERROR');
                console.log(err);
            }
        });

        function sorter(xml) {
            var count = 0;
            var totalParts = 0;
            var localParts = 0;
            //Wod1 case
            $(xml).find('participant').each(function() {
                if ($(this).find('wod').text() == "wod1") {
                    totalParts++;
                    localParts++;
                    if (count == 0) {
                        count = 1;
                        $("#content").append("<hr /><span class='title'>" + $(this).find('rawData').text() + "</span>");
                    }
                    $("#content").append("<li>" + $(this).find('name').text() + "</li>");

                }
            });
            if (count > 0) {
                $("#content").append("<span class='subTitle'>this wod's participants: " + localParts + "</span>");
            }
            localParts = 0;
            count = 0;

            //*********************************//

            //Open1 case
            $(xml).find('participant').each(function() {
                if ($(this).find('wod').text() == "open1") {
                    totalParts++;
                    localParts++;
                    if (count == 0) {
                        count = 1;
                        $("#content").append("<hr /><span class='title'>" + $(this).find('rawData').text() + "</span>");
                    }
                    $("#content").append("<li>" + $(this).find('name').text() + "</li>");

                }
            });
            if (count > 0) {
                $("#content").append("<span class='subTitle'>this wod's participants: " + localParts + "</span>");
            }
            localParts = 0;
            count = 0;

            //*********************************//
            //*********** END OF CASE ***********//

            //wod2 case
            $(xml).find('participant').each(function() {
                if ($(this).find('wod').text() == "wod2") {
                    totalParts++;
                    localParts++;
                    if (count == 0) {
                        count = 1;
                        $("#content").append("<hr /><span class='title'>" + $(this).find('rawData').text() + "</span>");
                    }
                    $("#content").append("<li>" + $(this).find('name').text() + "</li>");

                }
            });
            if (count > 0) {
                $("#content").append("<span class='subTitle'>this wod's participants: " + localParts + "</span>");
            }
            localParts = 0;
            count = 0;

            //*********************************//
            //*********** END OF CASE ***********//

            //open2 case
            $(xml).find('participant').each(function() {
                if ($(this).find('wod').text() == "open2") {
                    totalParts++;
                    localParts++;
                    if (count == 0) {
                        count = 1;
                        $("#content").append("<hr /><span class='title'>" + $(this).find('rawData').text() + "</span>");
                    }
                    $("#content").append("<li>" + $(this).find('name').text() + "</li>");

                }
            });
            if (count > 0) {
                $("#content").append("<span class='subTitle'>this wod's participants: " + localParts + "</span>");
            }
            localParts = 0;
            count = 0;

            //*********************************//
            //*********** END OF CASE ***********//

            //wod3 case
            $(xml).find('participant').each(function() {
                if ($(this).find('wod').text() == "wod3") {
                    totalParts++;
                    localParts++;
                    if (count == 0) {
                        count = 1;
                        $("#content").append("<hr /><span class='title'>" + $(this).find('rawData').text() + "</span>");
                    }
                    $("#content").append("<li>" + $(this).find('name').text() + "</li>");

                }
            });
            if (count > 0) {
                $("#content").append("<span class='subTitle'>this wod's participants: " + localParts + "</span>");
            }
            localParts = 0;
            count = 0;

            //*********************************//
            //*********** END OF CASE ***********//

            //wod4 case
            $(xml).find('participant').each(function() {
                if ($(this).find('wod').text() == "wod4") {
                    totalParts++;
                    localParts++;
                    if (count == 0) {
                        count = 1;
                        $("#content").append("<hr /><span class='title'>" + $(this).find('rawData').text() + "</span>");
                    }
                    $("#content").append("<li>" + $(this).find('name').text() + "</li>");

                }
            });
            if (count > 0) {
                $("#content").append("<span class='subTitle'>this wod's participants: " + localParts + "</span>");
            }
            localParts = 0;
            count = 0;

            //*********************************//
            //*********** END OF CASE ***********//

            //wod5 case
            $(xml).find('participant').each(function() {
                if ($(this).find('wod').text() == "wod5") {
                    totalParts++;
                    localParts++;
                    if (count == 0) {
                        count = 1;
                        $("#content").append("<hr /><span class='title'>" + $(this).find('rawData').text() + "</span>");
                    }
                    $("#content").append("<li>" + $(this).find('name').text() + "</li>");

                }
            });
            if (count > 0) {
                $("#content").append("<span class='subTitle'>this wod's participants: " + localParts + "</span>");
            }
            localParts = 0;
            count = 0;

            //*********************************//
            //*********** END OF CASE ***********//


            //Outputing data

            $("#output").append("<span class='subtitle'>Total participants today is: " + totalParts + "</span><br />");
        }
    });
});