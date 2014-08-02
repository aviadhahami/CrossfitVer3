<div class="span_3_of_3">

    <img src="<?php bloginfo('template_url'); ?>/img/blogbg.jpg" class="blogHeader" />
    <h1 id="blogHeadTitle"> WORKOUT OF THE DAY </h1>
</div>
<?php while (have_posts()) : the_post() ?>
<div class="col span_1_of_3 ">
    <div class="span_2_of_3 signup">
        <h2>הרשמה לאימונים <hr class="style-one" /></h2>
        <input type="text" value="" id="name">שם
        <br />
        <input type="text" value="" id="phone">טלפון
        <br />
        <input type="text" value="" id="mail">אימייל
        <br />
        <button id="viewPartButton" onclick="alert('U CLICKED ME');">משתתפים</button>
        <button id="signButton" onclick="alert('U CLICKED ME');">הרשם לאימון</button>
        <br />
        <br />
        <h2>אימוני עבר <hr class="style-one" /></h2>
        <br/>

    
    
    
        <p>
            <input type="hidden" name="GreetingAll" id="GreetingAll" value="Hello Everyone!" />
            <input type="submit" id="PleasePushMe" />
            <div id="test-div1">
            </div>
        </p>

        <ul id='PaginationExample'>
            <li>
                <?php next_post( '% &raquo; &raquo; ', '', 'yes'); ?>
            </li>
            <li>
                <?php previous_post( '&laquo; &laquo; %', '', 'yes'); ?>|
            </li>
        </ul>
        <div id='mycontent'>
            <div id='contentInner'>
                All the Posts & navigations are located here
            </div>
        </div>
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










<?php break; ?>
<?php endwhile; ?>