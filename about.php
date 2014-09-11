<!-- PHP PREP PREV POSTS SECTION -->

<?
$prevID = array();
$prevTitle = array();
$counter=0;
query_posts('category_name=wod');
  while (have_posts()):
                the_post();                {
                 switch ($counter) {
                    case 0:{
                        $prevTitle[0] = $post->post_title;
                        $prevID[0] = $post->ID;  
                        $counter++;   
                        break;
                    }
                     case 1:{
                         $prevTitle[1] = $post->post_title;
                         $prevID[1] = $post->ID;  
                         $counter++;    
                         break;
                     }
                     case 2:{
                        $prevTitle[2] = $post->post_title;
                        $prevID[2] = $post->ID;  
                        break;   
                     }
                 }
                }
endwhile;

?>
<!-- END OF PHP PREP SECTION -->


<div class="containerScroller">
    <div class="splash_container">
        <div class="top_container">
            <div class="span_3_of_3">
                 <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/headerPhoto3.png); top:0;" class="blogHeader" />
                <h1 id="blogHeadTitle"> ABOUT US </h1>
            </div>
        </div>


        <div class="content">
            <!--   <div class="blogger">
                <div class="col_side left_span"></div>
                <div class="midspace_span"></div>
                <div class="col_side right_span">
                    <div class="superheader">
                        כושר גופני על-פי קרוספיט

                        
                    </div>
                </div>
            </div>-->
            <div class="blogger">
                <div class="col_side left_span">
                  <div class="span_2_of_3 signup">
                        <h2> עקבו אחרינו </h2>
                        <hr class="style-one"/>
                        <div style="margin-right: -27px;">
                    <iframe src="//www.facebook.com/plugins/likebox.php?locale=he_IL&href=https%3A%2F%2Fwww.facebook.com%2FCFHIL&amp;width=340&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=181197471933726" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:340px; height:258px;" allowTransparency="true"></iframe>
                            </div>
                    </div>

                     <h2>אימוני עבר </h2>
                    <hr class="style-one" />
                    <div class="recentPosts">

<?

for ($i = 0; $i < 3; $i++) {

    if ($prevTitle[$i] == '' || $prevTitle[$i] == " ") {
        $i++;
        break;
    }
?>


                        <div class="recentPostSingle">
                            <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic2.jpg);" class="recentPostImg" />
                            <div class="generalText">
                                <span class="recentPostTextHeader">
                                <?php echo ("<a id='goBack' href='/crossfit/?page=blog&id=" .
    $prevID[$i] . "'>" . $prevTitle[$i] . "</a>"); ?></span>
                                <br>
                                <? echo get_the_time('d-m-Y', $prevID[$i]); ?>
                            </div>
                        </div>
                        <? } //END OF FOR LOOP ?>
                    </div>
                </div>

                <div class="midspace_span"></div>


                <div class="col_side right_span">

                    <h1 id="contactTitle"> מה זה קרוספיט ומי אנחנו</h1>
                    <hr class="style-one" />


                    <div class="col_side spanralText">
<div class="generalText">
                        <? 
query_posts('category_name=about');
while (have_posts()) : the_post();
the_title();
the_content();
echo("<hr class='style-one' />");
endwhile;
    ?> 
                </div>     </div>
                </div>
            </div>
        </div>
    </div>
</div>