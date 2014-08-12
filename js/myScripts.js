"use strict";
$(document).ready(function() {
    console.log("JQ LOADED");


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


    //nav-bar hover submenu display
    $('.main-nav ul li').hover(
        function() {
            //show its submenu  
            $('ul:first', this).css('display', 'block');
            console.log("hovered");
        },
        function() {
            //hide its submenu  
            $('ul:first', this).css('display', 'none');
        }
    );


    //submit button handler
    $('#signButton').click(submitWork());

    function submitWork() {
        //checking if voted or not
        var voted = getCookie("xFitVoted");
        if (voted === "" || voted == null) {
            //user didnt vote
            var now = new Date();
            var expireDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            var expires = "expires=" + expireDate;
            document.cookie = "xFitVoted=1; " + expires;

            //this part sends to the server the chosen option from the SELECT
            //TODO: IMPLEMENT
        } else {
            //user voted
            alert("We're sorry, but you've already voted");
        }

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

    //DONE WITH THE OPTIONS INJETIONS

});