<?php get_header(); ?>

<body>
    <? $term=mysql_real_escape_string($_GET[ "page"]); echo "<script>alert(123);</script>";?>
    <? /* <section class="main-post eleven columns row">
    <?php while (have_posts()) : the_post() ?>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"
  title="<?php printf(__('Go to %s', 'your-theme'), the_title_attribute('echo=0')); ?>"
  rel="bookmark"><?php the_title(); ?></a></h1>

    <?php the_content(); ?>
    <?php previous_post( '&laquo; &laquo; %', '', 'yes'); ?>|
    <?php next_post( '% &raquo; &raquo; ', '', 'yes'); ?>

    <?php break; ?>
    <?php endwhile; ?>
    </section>

    */ ?>
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
                <img style='background-image:url(<?php bloginfo(' template_url '); ?>/img/mpic1.jpg);' class="footImg" />
                <br>
                <p class="blogsubtext">
                    <span class="introtext2">בין השירים הישראלים הבודדים</span>
                    <br>שאני ישראלי שאתה אוהב?</p>
            </div>
            <div class="col_cus span_1_of_4_cus">
                <img style="background-image:url(<?php bloginfo(' template_url '); ?>/img/mpic2.jpg);" class="footImg" />

                <p class="blogsubtext">
                    <span class="introtext2">בין השירים הישראלים הבודדים</span>
                    <br>שאני ישראלי שאתה אוהב?</p>
            </div>
            <div class="col_cus span_1_of_4_cus">
                <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic3.jpg);" class="footImg" />

                <p class="blogsubtext">
                    <span class="introtext2">בין השירים הישראלים הבודדים</span>
                    <br>שאני ישראלי שאתה אוהב?</p>
            </div>
            <div class="col_cus span_1_of_4_cus">
                <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic4.jpg);" class="footImg" />

                <p class="blogsubtext">
                    <span class="introtext2">בין השירים הישראלים הבודדים</span>
                    <br>שאני ישראלי שאתה אוהב?</p>
            </div>
        </div>
    </div>


    <?php //get_sidebar(); ?>
    <?php //get_footer(); ?>