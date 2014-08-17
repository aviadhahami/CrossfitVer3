<div class="span_3_of_3">

    <img src="<?php bloginfo('template_url'); ?>/img/blogbg.jpg" class="blogHeader" />
    <?php while (have_posts()) : the_post() ?>
    <h1 id="blogHeadTitle"> WORKOUT OF THE DAY </h1>
</div>
<div class="col span_1_of_3 ">
    <div class="span_2_of_3 signup">
        <h2>הרשמה לאימונים
                <hr class="style-one"/>
            </h2>

        <table>
            <tr>
                <td>
                    <input type="text" id="name">
                </td>

                <td>
                    <label>שם</label>
                </td>

            </tr>
            <tr>
                <td>
                    <p style="display:none;" id="noInput">Please enter a valid name</p>
                </td>
            </tr>
            <tr>
                <td>
                    <select id="poll">
                    </select>
                </td>
                <td>
                    <label>בחר אימון</label>
                </td>
            </tr>
            <tr>
                <td>
                    <button id="viewPartButton">משתתפים</button>
                    <button id="signButton">הרשם לאימון</button>
                </td>
            </tr>
        </table>


        <h2>אימוני עבר </h2>



        <hr class="style-one" />
        <div class="recentPosts">

            <?php $prev_post=get_previous_post(); if (!empty( $prev_post )): ?>
            <div class="recentPostSingle">
                <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic2.jpg);" class="recentPostImg" />

                <div class="generalText">
                    <span class="recentPostTextHeader"><?php echo "<a id='goBack'>" . $prev_post->post_title . "</a>";?></span>
                    <br>
                    <? echo get_the_time( 'd-m-Y', $prev_post->ID); ?>
                </div>

                <?php endif; ?>
            </div>
        </div>




    </div>
</div>


<div class="col span_2_of_3" style="margin:0;">
    <h1 id="blogTitle">
            <?php the_title(); ?>
            <hr class="style-one"/>
        </h1>
    <div class="col span_2_of_2 blogData">
        <?php the_content(); ?>


    </div>

</div>







<?php previous_post( '&laquo; &laquo; %', '', 'yes'); ?>|
<?php next_post( '% &raquo; &raquo; ', '', 'yes'); ?>

<?php break; ?>
<?php endwhile; ?>