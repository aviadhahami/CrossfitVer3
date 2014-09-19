<!-- PHP CODE PREP GOES HERE-->
<?
$idInput = mysql_real_escape_string($_GET["id"]);
$flag = false;
if (is_numeric($idInput)) {
    if ('publish' == get_post_status($idInput)) {
        // means id input is legit and post exists
        $flag = true;
        $idInput = (integer) $idInput;
        echo ("<script>console.log('POST EXISTS! seeking for " . $idInput . "');</script>");
    }
}
$counter = 0;
$blogContent;
$blogTitle;
$blogTags;
$prevID = array();
$prevTitle = array();

switch ($flag) {
    case (true):
    
        {
            
            //We need to query the posts and look for the one the user picked.
            query_posts('category_name=wod');
            while (have_posts()):
                the_post();                {
                    echo ("<script>console.log('counter is " . $counter. "');</script>");
                    echo ("<script>console.log('first loop - post exist');</script>");
                    echo ("<script>console.log(" . $post->ID . ");</script>");
                    switch ($counter) {
                        case (0):
                            {
                                if ($post->ID == $idInput) {
                                    echo ("<script>console.log('FOUND THE POST!');</script>");
                                    //we've found the post
                                    
                                    $blogContent = apply_filters( 'the_content', $post->post_content );
                                    $blogTitle = $post->post_title;
                                    $tags = wp_get_post_tags($post->ID);
                                    foreach ($tags as $tag) {
                                        $blogTags .= "<span>" . $tag->name . "</span>";
                                    }
                                    //let's raise the floor
                                    $counter++;
                                     echo ("<script>console.log('incremented counter, case 0');</script>");
                                }
                                break;
                            }
                        case (1):
                            {
                                $prevTitle[0] = $post->post_title;
                                $prevID[0] = $post->ID;
                                 echo '<script>console.log("' . $post->post_title . $post->ID .'");</script>';
                                $counter++;
                                echo ("<script>console.log('incremented counter, case 1');</script>");
                                break;
                            }
                        case (2):
                            {
                                $prevTitle[1] = $post->post_title;
                                $prevID[1] = $post->ID;
                                 echo "<script>console.log('" . $post->post_title . $post->ID ."');</script>";
                                $counter++;
                                echo ("<script>console.log('incremented counter, case 2');</script>");
                                break;

                            }
                        case (3):
                            {
                                $prevTitle[2] = $post->post_title;
                                $prevID[2] = $post->ID;
                                 echo "<script>console.log('" . $post->post_title . $post->ID ."');</script>";
                                echo ("<script>console.log('incremented counter, case 3');</script>");
                                break;
                            }
                        default:{
                            break;
                        }
                        
                    }
                }
            endwhile;
            break;
        }
    case(false):
        {
            //regular loop without ID search
            query_posts('category_name=wod');
            while (have_posts()):
                the_post();                {
                    echo ("<script>console.log('second loop');</script>");
                    switch ($counter) {
                        case (0):
                            {
                                echo "<script>console.log('" . $post->ID ." - MAIN BLOG');</script>";
                                $blogContent = $post->post_content;
                                $blogTitle = $post->post_title;

                                $tags = wp_get_post_tags($post->ID);
                                foreach ($tags as $tag) {
                                    $blogTags .= "<span>" . $tag->name . "</span>";
                                }
                                //let's raise the floor
                                $counter++;
                                break;
                            }
                        case 1:
                            {
                                $prevTitle[0] = $post->post_title;
                                $prevID[0] = $post->ID;
                                $counter++;
                                 echo "<script>console.log('" . $post->post_title . $post->ID ."');</script>";
                                break;
                            }
                        case 2:
                            {
                                $prevTitle[1] = $post->post_title;
                                $prevID[1] = $post->ID;
                                 echo "<script>console.log('" . $post->post_title . $post->ID ."');</script>";
                                $counter++;
                                break;

                            }
                        case 3:
                            {
                                $prevTitle[2] = $post->post_title;
                                $prevID[2] = $post->ID;
                                 echo "<script>console.log('" . $post->post_title . $post->ID ."');</script>";
                                break;
                            }

                    }
                }
            endwhile;
            break;
        }
}
for ($i = 0; $i < 3; $i++) {
    echo "<script>console.log('" . $prevID[$i] . $i ."');</script>";
    echo "<script>console.log('" + $prevTitle[$i] + "');</script>";
}

?>
<!-- END OF PREP CODE-->
<div class="containerScroller">
    <div class="splash_container">
        <div class="top_container">
            <div class="span_3_of_3">
                  <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/headerPhoto4.png); background-position: center 60%;" class="blogHeader" />
                <h1 id="blogHeadTitle"> WORKOUT OF THE DAY </h1>
            </div>
        </div>

        <div class="content">
            <div class="blogger">
                <div class="col_side left_span">
                    <div class="span_2_of_3 signup">
                        <h2>
                     הרשמה לאימונים 
                     </h2> 
                        <hr class="style-one" />

                        <table>
                            <tr>
                                <td>
                                    <label>שם</label>
                                </td>
                                <td>
                                    <input type="text" value="" id="name">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>בחר אימון</label>
                                    </select>
                                </td>
                                <td>
                                    <select id="poll">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button id="signButton">הרשם לאימון</button>
                                </td>
                                <td>
                                    <button id="viewPartButton">משתתפים</button>
                                </td>
                            </tr>
                        </table>
                        <div class="response" id="response">

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
                                <?php echo ("<a id='goBack' href='/?page=blog&id=" .
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
                    <h1 id="blogTitle">
                  <?php echo $blogTitle; ?>
               </h1>
                    <hr class="style-one" />
                    <div class="col_side span_2_of_2">
                        <div id="wodList">
                            <div id="postContainer">
                                <?php echo $blogContent; ?>
                            </div>
                        </div>

                        <!--   TAGS PART TO BE UPDATED-->
                        <hr class="style-one" />
                        <div class="tagsContainer" id="tagsContainer">
                         <?
echo $blogTags;
?>
                        </div>
                        <hr class="style-one" />
                     <!--   <div class="blogComments">
                            תגובות <b>3</b>
                            <div class="mainComment">

                                <div class="commentTop">
                                    <img src="<?php bloginfo('template_url'); ?>/img/nopic.jpg" />
                                    <p>רועי כפרי</p>
                                </div>
                                <div class="commentMid">
                                    10:32 העשב 2014 ילויב 24 ,ישימח םוי
                                    <button id="comment">תגובה</button>
                                </div>
                                <div class="commentBot">
                                    ?הלועפ ףותישב םיניינועמ - הרז תרושקת .ושפח קובסייפב קינרטור .רקובה ןולקשא רבעל יריל הבוגתב ז"עצר זכרמבו ןופצב ח"למא

                                </div>
                            </div>
                            <div class="mainComment">

                                <div class="commentTop">
                                    <img src="<?php bloginfo('template_url'); ?>/img/nopic.jpg" />
                                    <p>רועי כפרי</p>
                                </div>
                                <div class="commentMid">
                                    10:32 העשב 2014 ילויב 24 ,ישימח םוי
                                    <button id="comment">תגובה</button>
                                </div>
                                <div class="commentBot">
                                    ?הלועפ ףותישב םיניינועמ - הרז תרושקת .ושפח קובסייפב קינרטור .רקובה ןולקשא רבעל יריל הבוגתב ז"עצר זכרמבו ןופצב ח"למא

                                </div>
                            </div>
                            <div class="secComment">

                                <div class="commentTop">
                                    <img src="<?php bloginfo('template_url'); ?>/img/nopic.jpg" />
                                    <p>רועי כפרי</p>
                                </div>
                                <div class="commentMid">
                                    10:32 העשב 2014 ילויב 24 ,ישימח םוי
                                    <button id="comment">תגובה</button>
                                </div>
                                <div class="commentBot">
                                    ?הלועפ ףותישב םיניינועמ - הרז תרושקת .ושפח קובסייפב קינרטור .רקובה ןולקשא רבעל יריל הבוגתב ז"עצר זכרמבו ןופצב ח"למא

                                </div>
                            </div>

                        </div>

                                <img style="background-image:url('http://1.bp.blogspot.com/-m8giKGQ8rkM/U90xSg9gRoI/AAAAAAAARTA/WMdcihPTl3Y/s1600/Josh-Deadlift.jpg');" class="blogImage" />
                     <div class="generalText"><br>
                        ...ריינה לע רקיעב יניצר אל הארנ הז ,ולזלזתו םירוביג ויהת לא
                        .ףרוצמה ןומיאה תא עצבל ידכ ןודעומה תיזחבש שיבכה לא ואצת ,םימואתה ירירשו גנירטסמה ,לסכ ןתומ - ןומיאל םייתייעבה םירירשב חתמה תא תולעהלו בוט בוט עיזהל םכל םורגיש ידוסי םומיח ירחא
                        !יטנגלאו טושפ ,הנורחאל ונישעש רתויב םישקה דחא תויהל לאיצנטופ שי ברעה ןומיאל
                     </div>
                     <h2 style="margin-top: 30px;">הרשמה לאימונים </h2>
                     <hr class="style-one" />
                     <dl class="list">
                        <dt>
                           <div class="listText">How much wood would a wood chuck chuck if a wood chuck could chuck wood?
                              How much wood would a wood chuck chuck if a wood chuck could chuck wood?
                              How much wood would a wood chuck chuck if a wood chuck could chuck wood?
                           </div>
                        </dt>
                        <dt>
                           <div class="listText">How much wood would a wood chuck chuck if a wood chuck could chuck wood?</div>
                        </dt>
                        <dt>
                           <div class="listText">How much wood would a wood chuck chuck if a wood chuck could chuck wood?</div>
                        </dt>
                     </dl>

                    </div>
                </div>   -->
            </div>
        </div> 
<?
wp_reset_postdata(); ?>

    </div>
</div>