 
<?
if (isset($the_post())){
    echo '<script>alert("yes");';
}
?>
<div class="carousel">
        <img alt="pic 1" id="carImg" class="carImg" src="<?php bloginfo('template_url'); ?>/img/headerPhoto1.png" />
    </div>
    <div class="span_3_of_3">
        <div class="overlayText">
            <h1 id="title">INSPERATIONAL TEXT LIKE MOJO</h1>
            <h2 id="title">This is version #2 of this website</h2>
            <button id="overlay" class="buttontext" onclick='alert("clicked");'>FIND OUT NOW</button>
            <br>
            <br>
            <br>
        </div>
    </div>
    <div class="foot">
        <div class="section">
            <div class="col_cus span_1_of_4_cus">
                <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic1.jpg);" class="footImg" />
                <br>
                <p class="blogsubtext">
                    <span class="introtext2">Some intro text</span>
                    <br>ניסיון אחת שתיים שלוש</p>
            </div>
            <div class="col_cus span_1_of_4_cus">
                <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic2.jpg);" class="footImg" />

                <p class="blogsubtext">
                    <span class="introtext2">Nigga nigga nigga</span>
                    <br>ניסיון אחת שתיים שלוש</p>
            </div>
            <div class="col_cus span_1_of_4_cus">
                <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic3.jpg);" class="footImg" />

                <p class="blogsubtext">
                    <span class="introtext2">EAT ME ALIVE</span>
                    <br>ניסיון אחת שתיים שלוש</p>
            </div>
            <div class="col_cus span_1_of_4_cus">
                <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic4.jpg);" class="footImg" />

                <p class="blogsubtext">
                    <span class="introtext2">MOO MOO SAYS THE COW</span>
                    <br>ניסיון אחת שתיים שלוש</p>
            </div>
        </div>
    </div>

