<div class="containerScroller">
<div class="splash_container">
    <div class="top_container">
<div class="span_3_of_3">
    <img src="<?php bloginfo('template_url'); ?>/img/blogbg.jpg" class="blogHeader" />
    <h1 id="blogHeadTitle"> WORKOUT OF THE DAY </h1>
</div>
    </div>
<?php while (have_posts()) : the_post() ?>
<div class="content">
<div class="blogger">
<div class="col_side left_span">
    <div class="span_2_of_3 signup">
        <h2>הרשמה לאימונים <hr class="style-one" /></h2>

        <table>
            <tr>
                <td>
                    <input type="text" value="" id="name">
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
</div>

        <h2>אימוני עבר </h2><hr class="style-one" />
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

<div class="midspace_span"> </div>
<div class="col_side right_span">
    <h1 id="blogTitle">
        <?php the_title(); ?>
        </h1>
            <hr class="style-one" />
    
    <div class="col_side span_2_of_2">
     <!--   <?php the_content(); ?> -->
         <img style="background-image:url('http://1.bp.blogspot.com/-m8giKGQ8rkM/U90xSg9gRoI/AAAAAAAARTA/WMdcihPTl3Y/s1600/Josh-Deadlift.jpg');" class="blogImage" />
        
    
    <div class="generalText"><br>
        ...ריינה לע רקיעב יניצר אל הארנ הז ,ולזלזתו םירוביג ויהת לא
.ףרוצמה ןומיאה תא עצבל ידכ ןודעומה תיזחבש שיבכה לא ואצת ,םימואתה ירירשו גנירטסמה ,לסכ ןתומ - ןומיאל םייתייעבה םירירשב חתמה תא תולעהלו בוט בוט עיזהל םכל םורגיש ידוסי םומיח ירחא
!יטנגלאו טושפ ,הנורחאל ונישעש רתויב םישקה דחא תויהל לאיצנטופ שי ברעה ןומיאל
       </div>
        
          <h2 style="margin-top: 30px;">הרשמה לאימונים </h2><hr class="style-one" />
        
        <dl class="faq">
		
			<dt><div class="listText">How much wood would a wood chuck chuck if a wood chuck could chuck wood?</div></dt>
			
			<dt>What is the air-speed velocity of an unladen swallow?</dt>
			<dd>What do you mean? An African or European swallow?</dd>
			
			<dt>Why did the chicken cross the road?</dt>
			<dd>To get to the other side</dd>
			
		</dl>
</div></div>
    

</div>
</div>




<?php previous_post( '&laquo; &laquo; %', '', 'yes'); ?>|
<?php next_post( '% &raquo; &raquo; ', '', 'yes'); ?>

<?php break; ?>
<?php endwhile; ?>
</div>
</div>

