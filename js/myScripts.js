"use strict";
$(document).ready(function() {
    console.log("JQ LOADED");



    // Trying to create parallax effect
    var fixadent = $(".top_container"),
        pos = fixadent.offset();
    $(window).scroll(function() {
        if ($(this).scrollTop() > pos.top && $(fixadent.css('position') === 'initial')) {
            $(fixadent).css('position', 'fixed');
        }
    });


    // fakeCarousel();
    setInterval(function() {
        var i = $('#carImg').attr("src").charAt($('#carImg').attr("src").length - 5);
        var index = parseInt(i);
        if (index === 5) {
            index = 1;
        } else {
            index++;
        }
        i = index.toString();


        var finalStr = $('#carImg').attr("src").substring(0, $('#carImg').attr("src").length - 5) + i + ".png";

        $('#carImg').animate({
            opacity: 0
        }, 500, function() {
            $('#carImg').attr('src', finalStr);
            $('#carImg').animate({
                opacity: 1
            }, 500);

        });

    }, 30000);

    //submit button listener
    $('#signButton').click(function() {
        submitWork();
    });
    $('#viewPartButton').click(function() {
        showPoll();
    });
    $('.signup').on('click', '#showSignUp', function() {
        //General event listener for newly appended child
        showSignUp();
    });
    $("#submitForm").click(function() {
        submitForm();
    });


    //Get previous post click listener
    $('#goBack').click(function() {
        getPreviousPost();
    });
    $('#goBack').css('cursor', 'pointer');
    //Change the post h2
    //$("#wodPlan").text("תוכנית האימון");

    //Get previous post via ajax
    function getPreviousPost() {
        var id = $("#goBack").text();

        console.log(id);
        $.ajax({
            //URL MIGHT NEED TO BE CHANGED !
            type: "GET",
            url: "../poll/pollHandler.php",
            data: {
                selection: selection,
                name: name,
                rawSelect: rawSelect
            },
            datatype: "html",
            success: function(result) {
                console.log(result + "ver2");
                //var element = document.getElementById("signButton").parentNode;
                var element = document.getElementById("response");
                var para = document.createElement("p");
                para.setAttribute("class", "success");
                para.setAttribute("style", "border: 1px solid black;");
                var node = document.createTextNode("Thank you " + name + "! You've signed up for " + rawSelect);
                para.appendChild(node);
                element.appendChild(para);
                //document.getElementById("success").fadeOut("slow").delay(2000);
                //$('p', element)[0].fadeOut("slow").delay(2000);
                setTimeout(function() {
                    $(".success").fadeOut("slow");
                }, 10000);

            },
            error: function(result) {
                alert("something went wrong, please try again later.");
                console.error(result);
            }


        });

    }

    //Mail validator - regex based
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    /* Form Handeling Script*/
    function submitForm() {
        //TODO: should handle the empty slots option
        var contactName = $("#contactName").val();
        var contactMail = $("#contactEmail").val();
        var contactText = $("#contactTextarea").val();
        if (contactName.length < 5 || contactName == "" || contactName == " ") {
            $("#contactName").css("border-color", "red");
            $("#nameLabel").append("<p id='error'>Please enter a valid name</p>");
            $("#nameLabel > p").delay(5000).fadeOut(500);
            //$("#error").html("");
            return;
        } else {
            $("#contactName").css("border-color", "green");
        }


        if (!validateEmail(contactMail)) {
            $("#contactEmail").css("border-color", "red");
            $("#emailLabel").append("<p id='error'>Please enter a valid mail</p>");
            $("#emailLabel > p").delay(5000).fadeOut(500);
            //$("#error").html("");
            return;
        } else {
            $("#contactEmail").css("border-color", "green");
        } if (contactText.length < 5 || contactText == "" || contactText == " ") {
            $("#contactTextarea").css("border-color", "red");
            $("#messageLabel").append("<p id='error'>Please enter a valid text</p>");
            $("#messageLabel > p").delay(5000).fadeOut(500);
            //$("#error").html("");
            return;
        } else {
            $("#contactTextarea").css("border-color", "green");
        }




        var post_data = {
            'userName': contactName,
            'userMail': contactMail,
            'userText': contactText
        };
        //now we send to the server
        console.log("Sending mail with the following attr " + contactName + " " + contactMail + " " + contactText);

        $.post('../mail/mailHandler.php', post_data, function(response) {

            if (response === "1") {
                //we're good
                console.log(response);
                $("#superOverlay").css("display", "block");
                $("#superOverlay").css("background-color", "rgba(70, 138, 48, 0.8)");
                $("#superOverlay > h1").text("Your mail was sent successfuly !");
                $("#superOverlay").delay(5000).fadeOut();
            } else {
                //we're not good
                console.error(response);
                $("#superOverlay").css("display", "block");
                $("#superOverlay").css("background-color", "rgba(178, 36, 0, 0.8)");
                $("#superOverlay > h1").text("An error has occoured, please try again later.");
                $("#superOverlay > h1").css("width", "100%");
                $("#superOverlay").delay(5000).fadeOut();
            }

        });
    }


    function submitWork() {


        //this part sends to the server the chosen option from the SELECT
        var selection = $('#poll').val();
        var rawSelect = $("#poll option:selected").text();
        var name = $('#name').val();
        if (name == "" || name == " ") {
            //no name given
            console.log("no input");
            $('#noInput').fadeIn("slow");
            setTimeout(function() {
                $('#noInput').fadeOut("slow");
            }, 10000);
        } else {

            $.ajax({
                //URL MIGHT NEED TO BE CHANGED !
                type: "GET",
                url: "../poll/pollHandler.php",
                data: {
                    selection: selection,
                    name: name,
                    rawSelect: rawSelect
                },
                datatype: "html",
                success: function(result) {
                    console.log(result);
                    //var element = document.getElementById("signButton").parentNode;
                    var element = document.getElementById("response");
                    var para = document.createElement("p");
                    para.setAttribute("class", "success");
                    para.setAttribute("style", "border: 1px solid black;");
                    var node = document.createTextNode("Thank you " + name + "! You've signed up for " + rawSelect);
                    para.appendChild(node);
                    element.appendChild(para);
                    //document.getElementById("success").fadeOut("slow").delay(2000);
                    //$('p', element)[0].fadeOut("slow").delay(2000);
                    setTimeout(function() {
                        $(".success").fadeOut("slow");
                    }, 10000);

                },
                error: function(result) {
                    alert("something went wrong, please try again later.");
                    console.error(result);
                }


            });
        }

    }

    function showPoll() {
        console.log("show poll");
        $(".signup table").css("display", "none");
        $(".signup").append("<div id='results'></div>")
        $("#results").append("<p>Loading please wait...</p>");
        $("#results").append("<button id='showSignUp'>Back</button>");

        //Ajax call to XML file
        var d = new Date();

        var month = d.getMonth() + 1;
        var day = d.getDate();

        var dateOutput = (('' + day).length < 2 ? '0' : '') + day +
            (('' + month).length < 2 ? '0' : '') + month + (d.getFullYear() % 100);


        //Generating URL string with the current file to date
        var url = "../poll/pollData/" + dateOutput + "-Wod.xml";

        $.ajax({
            //URL MIGHT NEED TO BE CHANGED !
            type: "GET",
            url: url,
            datatype: "xml",
            success: function(xml) {
                console.log(xml);
                $("#results p").remove();
                $("#poll option").each(function() {
                    var optionRawData = $(this).text();
                    var optionCode = $(this).val();
                    $("#results").append("<p>" + $(this).text() + "</p>");
                    var counter = 0;
                    var totalPart = 0;
                    $(xml).find('participant').each(function() {
                        var xmlName = $(this).find('name').text();
                        var xmlRawData = $(this).find('rawData').text();
                        totalPart++;
                        if (xmlRawData == optionRawData) {
                            counter++;
                        }

                    });

                    var percentage = (counter / totalPart) * 100;
                    $("#results").append("<p>" + counter + " which is " + (percentage | 0) + "% of the total participants today</p>");
                    $("#results").append("<div id='" + optionCode + "' style='width: 300px;height:20px; border: 1px solid #ddd;border-radius: 5px; overflow: hidden; display:inline-block;margin:0px 10px 5px 5px;vertical-align:top;'></div>");
                    $("#" + optionCode).append("<div id='" + optionCode + "Child' style='color: #fff;text-align: right;height: 25px;width: 0;background-color: #0ba1b5;border-radius: 3px; '></div>");
                    var progressBarWidth = percentage * $("#" + optionCode).width() / 100;
                    $("#" + optionCode + "Child").width(progressBarWidth).html((percentage | 0) + "% ");
                });

            },
            error: function(result) {
                alert("something went wrong, please try again later.");
                console.error(result);
            }


        });

    }

    function showSignUp() {
        console.log("showing signup");
        $("#results").remove();
        $(".signup table").css("display", "block");
    }

    //regulat regex-based getCookie func
    function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? unescape(value[1]) : null;
    }


    //SELECT options script
    $.urlParam = function(name, url) {
        if (!url) {
            url = window.location.href;
        }
        var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(url);
        if (!results) {
            return 0;
        }
        return results[1] || 0;
    }
    var pageVal = $.urlParam('page');
    if (pageVal === "blog") {
        //edit the image size in the blog
        var originWidth = $("div#wodList img").width();
        $("div#wodList img").css("max-width", originWidth / 2);


        //insert the daily sched
        var d = new Date();
        var day = d.getDay() + 1;
        insertSelectOptions(day);
    }

    function insertSelectOptions(day) {
        switch (day) {
            case 1:
                {
                    appendSun();
                    break;
                }
            case 2:
                {
                    appendMon();
                    break;
                }
            case 3:
                {
                    appendTue();
                    break;
                }
            case 4:
                {
                    appendWed();
                    break;
                }
            case 5:
                {
                    appendThu();
                    break;
                }
            case 6:
                {
                    appendFri();
                    break;
                }
            case 7:
                {
                    appendSat();
                    break;
                }


        }
    }

    function appendSun() {
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod1")
                .text("06:00 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "open1")
                .text("06:00-11:00 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "open2")
                .text("15:00-21:30 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod2")
                .text("17:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod3")
                .text("18:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod4")
                .text("19:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod5")
                .text("20:30 WOD"));
    }

    function appendMon() {

        $('#poll')
            .append($("<option></option>")
                .attr("value", "open1")
                .text("06:00-11:00 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod1")
                .text("09:00 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "open2")
                .text("15:00-21:30 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod2")
                .text("17:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod3")
                .text("18:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod4")
                .text("19:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod5")
                .text("20:30 WOD"));
    }

    function appendTue() {
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod1")
                .text("06:00 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "open1")
                .text("06:00-11:00 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "open2")
                .text("15:00-21:30 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod2")
                .text("17:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod3")
                .text("18:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod4")
                .text("19:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod5")
                .text("20:30 WOD"));
    }

    function appendWed() {

        $('#poll')
            .append($("<option></option>")
                .attr("value", "open1")
                .text("06:00-11:00 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod1")
                .text("09:00 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "open2")
                .text("15:00-21:30 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod2")
                .text("17:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod3")
                .text("18:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod4")
                .text("19:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod5")
                .text("20:30 Mobility"));
    }

    function appendThu() {
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod1")
                .text("06:00 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "open1")
                .text("06:00-11:00 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "open2")
                .text("15:00-21:30 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod2")
                .text("17:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod3")
                .text("18:30 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod4")
                .text("19:30 Endurance"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod5")
                .text("20:30 RX club"));
    }

    function appendFri() {

        $('#poll')
            .append($("<option></option>")
                .attr("value", "open1")
                .text("08:00-14:00 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod2")
                .text("10:00 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod3")
                .text("11:00 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod4")
                .text("12:00 WOD"));

    }

    function appendSat() {
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod1")
                .text("10:00 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "open1")
                .text("10:00-12:00 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "open2")
                .text("19:00-21:00 OPEN GYM"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod2")
                .text("19:00 WOD"));
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod3")
                .text("20:00 WOD"));

    }

    //DONE WITH THE OPTIONS INJECTIONS

});