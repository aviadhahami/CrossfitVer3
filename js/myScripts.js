"use strict";
$(document).ready(function () {
    console.log("JQ LOADED");
    // fakeCarousel();
    setInterval(function () {
        var i = $('#carImg').attr("src").charAt($('#carImg').attr("src").length - 5);
        var index = parseInt(i);
        //console.log(index);
        if (index === 5) {
            index = 1;
        } else {
            index++;
        }
        i = index.toString();
        // console.log($('#carImg').attr("src").substring(0, $('#carImg').attr("src").length - 5) + i + ".png");


        var finalStr = $('#carImg').attr("src").substring(0, $('#carImg').attr("src").length - 5) + i + ".png";

        /** $('#carImg').fadeOut(500, function () {
            $('#carImg').attr('src', finalStr);
            $('#carImg').fadeIn(500);
        });**/


        $('#carImg').animate({
            opacity: 0
        }, 500, function () {
            $('#carImg').attr('src', finalStr);
            $('#carImg').animate({
                opacity: 1
            }, 500);

        });

    }, 30000);


    function fakeCarouselTwo() {
        var i = $('#carImg').attr("src").charAt($('#carImg').attr("src").length - 5);
        var index = parseInt(i);
        console.log(index);
        if (index === 5) {
            i = "1";
        } else {
            index++;
            i = index.toString();
            console.log($('#carImg').attr("src").substring(0, $('#carImg').attr("src").length - 5) + i + ".png");
            var finalStr = $('#carImg').attr("src").substring(0, $('#carImg').attr("src").length - 5) + i + ".png";
            $('#carImg').attr('src', finalStr);
        }
    }






    function fakeCarousel() {

        $('#carImg').fadeOut(500, function () {
            $('#carImg').attr("src", "img/headerPhoto1.png");
            $('#carImg').fadeIn(500);
        });

        window.setTimeout(function () {
            $('#carImg').fadeOut(500, function () {
                $('#carImg').attr("src", "img/headerPhoto2.png");
                $('#carImg').fadeIn(500);
            });
        }, 30000);
        window.setTimeout(function () {
            $('#carImg').fadeOut(500, function () {
                $('#carImg').attr("src", "img/headerPhoto3.png");
                $('#carImg').fadeIn(500);
            });
        }, 60000);
        window.setTimeout(function () {
            $('#carImg').fadeOut(500, function () {
                $('#carImg').attr("src", "img/headerPhoto4.png");
                $('#carImg').fadeIn(500);
            });
        }, 90000);
        window.setTimeout(function () {
            $('#carImg').fadeOut(500, function () {
                $('#carImg').attr("src", "img/headerPhoto5.png");
                $('#carImg').fadeIn(500);
            });
        }, 120000);
        setTimeout(fakeCarousel, 150000);
    }


});