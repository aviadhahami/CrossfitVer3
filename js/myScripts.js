"use strict";
$(document).ready(function () {
        $('body').css('display', 'none');
        $('body').fadeIn(1000);

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




});