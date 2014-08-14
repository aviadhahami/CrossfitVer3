<div class="span_3_of_3">

    <img src="<?php bloginfo('template_url'); ?>/img/blogbg.jpg" class="blogHeader" />
    <h1 id="blogHeadTitle"> WORKOUT OF THE DAY </h1>
</div>
<?php while (have_posts()) : the_post() ?>
<div class="col span_1_of_3 ">
    <div class="span_2_of_3 signup">
        <h2>הרשמה לאימונים <hr class="style-one" /></h2>

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
                    <select id="poll">

                    </select>
                </td>
                <td>
                    <label>בחר אימון</label>
                </td>
            </tr>
            <tr>
                <td>
                    <button id="viewPartButton" onclick="alert('vire parts');">משתתפים</button>
                    <button id="signButton">הרשם לאימון</button>
                </td>
            </tr>
        </table>


        <h2>אימוני עבר <hr class="style-one" /></h2>
        NEED TO BE IMPLEMENTED 232
    </div>
</div>


<div class="col span_2_of_3" style="margin:0;">
    <h1 id="blogTitle">
        <?php the_title(); ?>
            <hr class="style-one" />
    </h1>
    <div class="col span_2_of_2 blogData">
        <?php the_content(); ?>
    </div>

</div>







<?php previous_post( '&laquo; &laquo; %', '', 'yes'); ?>|
<?php next_post( '% &raquo; &raquo; ', '', 'yes'); ?>

<?php break; ?>
<?php endwhile; ?>