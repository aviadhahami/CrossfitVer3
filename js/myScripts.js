"use strict";
$(document).ready(function () {
    console.log("JQ LOADED");


    // fakeCarousel();
    setInterval(function () {
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
        }, 500, function () {
            $('#carImg').attr('src', finalStr);
            $('#carImg').animate({
                opacity: 1
            }, 500);

        });

    }, 30000);


    //nav-bar hover submenu display
    $('.main-nav ul li').hover(
        function () {
            //show its submenu  
            $('ul:first', this).css('display', 'block');
            console.log("hovered");
        },
        function () {
            //hide its submenu  
            $('ul:first', this).css('display', 'none');
        }
    );


    //submit button listener
    $('#signButton').click(function () {
        submitWork();
    });
    $('#viewPartButton').click(function () {
        showPoll();
    });
    $('.signup').on('click', '#showSignUp', function () {
        //General event listener for newly appended child
        showSignUp();
    });

    function submitWork() {

        /**
         //checking if voted or not
         var voted = getCookie("xFitVoted");
         if (voted === "" || voted == null) {
            //user didnt vote
            var now = new Date();
            var expireDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            var expires = "expires=" + expireDate;
            document.cookie = "xFitVoted=1; " + expires;
        }
         */

        //this part sends to the server the chosen option from the SELECT
        var selection = $('#poll').val();
        var rawSelect = $("#poll option:selected").text();
        var name = $('#name').val();
        if (name == "" || name == " ") {
            //no name given
            console.log("no input");
            $('#noInput').fadeIn("slow");
            setTimeout(function () {
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
                success: function (result) {
                    console.log(result);
                    var element = document.getElementById("signButton").parentNode;
                    var para = document.createElement("p");
                    para.setAttribute("class", "success");
                    para.setAttribute("style", "border: 1px solid black;");
                    var node = document.createTextNode("Thank you " + name + "! You've signed up for " + rawSelect);
                    para.appendChild(node);
                    element.appendChild(para);
                    //document.getElementById("success").fadeOut("slow").delay(2000);
                    //$('p', element)[0].fadeOut("slow").delay(2000);
                    setTimeout(function () {
                        $(".success").fadeOut("slow");
                    }, 10000);

                },
                error: function (result) {
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
            success: function (xml) {
                console.log(xml);
                $("#results p").remove();
                $("#poll option").each(function () {
                    var optionRawData = $(this).text();
                    var optionCode = $(this).val();
                    $("#results").append("<p>" + $(this).text() + "</p>");
                    var counter = 0;
                    var totalPart = 0;
                    $(xml).find('participant').each(function () {
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
            error: function (result) {
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
    $.urlParam = function (name, url) {
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
                .attr("value", "wod1")
                .text("07:00 WOD"));
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

    function appendThu() {
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod1")
                .text("07:00 WOD"));
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

    function appendFri() {
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod1")
                .text("07:00 WOD"));
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

    function appendSat() {
        $('#poll')
            .append($("<option></option>")
                .attr("value", "wod1")
                .text("07:00 WOD"));
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

    //DONE WITH THE OPTIONS INJECTIONS

});