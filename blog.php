<div class="span_3_of_3">

    <img src="<?php bloginfo('template_url'); ?>/img/blogbg.jpg" class="blogHeader" />
    <h1 id="blogHeadTitle"> WORKOUT OF THE DAY </h1>
</div>
<?php while (have_posts()) : the_post() ?>
<div class="col span_1_of_3 ">
    <div class="span_2_of_3 signup">
        <h2>הרשמה לאימונים <hr class="style-one" /></h2>
        <table id="formTable">
            <tr>
                <td>
                    <input type="text" value="" id="name" />
                </td>
                <td>
                    <label class="formLabel">שם</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" value="" id="phone" />
                </td>
                <td>
                    <label class="formLabel">טלפון</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" value="" id="mail" />
                </td>
                <td>
                    <label class="formLabel">אימייל</label>
                </td>
                <tr>
                    <td>
                        <button id="viewPartButton" onclick="alert('U CLICKED ME');">משתתפים</button>

                        <button id="signButton" onclick="alert('U CLICKED ME');">הרשם לאימון</button>
                    </td>
                </tr>
            </tr>
        </table>


        <h2>אימוני עבר <hr class="style-one" /></h2>
        <br/>
    
        <p>
            <input type="hidden" name="GreetingAll" id="GreetingAll" value="Hello Everyone!" />
            <input type="submit" id="PleasePushMe" />
            <div id="test-div1">
            </div>
        </p>


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