$(document).ready(function () {
    console.log("JQ LOADED");
    fakeCarousel();

    function fakeCarousel() {
        console.log("in fun");

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
        }, 6000);
        windo0w.setTimeout(function () {
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