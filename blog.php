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
                  <h2>
                     הרשמה לאימונים 
                     </h2> <hr class="style-one" />
                 
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
                        <td> <button id="viewPartButton">משתתפים</button>
                        </td>
                     </tr>      
             </table>
             <div class="response" id="response">
                 AVIAD FILL ME WITH NOTIFICATIONS
                 </div>
             
               </div>
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
            <div class="midspace_span"> </div>
            <div class="col_side right_span">
               <h1 id="blogTitle">
                  <?php the_title(); ?>
               </h1>
               <hr class="style-one" />
               <div class="col_side span_2_of_2">
                  <div id="wodList">
                      <div id="postContainer">
                     <?php the_content(); ?>
                          </div></div>
                      
                   <!--   TAGS PART TO BE UPDATED-->
                  <hr class="style-one" />  
                      <div class="tagsContainer">
                      <span>boxJumps</span>
                           <span>boxJumps</span>
                           <span>boxJumps</span>
                           <span>boxJumps</span>
                           <span>boxJumps</span>
                      </div>
                      <hr class="style-one" />  
                      <div class="blogComments">
                         תגובות <b>3</b>
                           <div class="mainComment">
                        
                          <div class="commentTop">
                                <img src="<?php bloginfo('template_url'); ?>/img/nopic.jpg" />
                              <p>  רועי כפרי</p>
                          </div>
                          <div class="commentMid">
                                10:32 העשב 2014 ילויב 24 ,ישימח םוי
                                <button id="comment">תגובה</button>
                          </div>
                         <div class="commentBot">
                        ?הלועפ ףותישב םיניינועמ - הרז תרושקת .ושפח קובסייפב קינרטור 
                             .רקובה ןולקשא רבעל יריל הבוגתב ז"עצר זכרמבו ןופצב ח"למא 
                      
                        </div>
                     </div>
                             <div class="mainComment">
                        
                          <div class="commentTop">
                                <img src="<?php bloginfo('template_url'); ?>/img/nopic.jpg" />
                              <p>  רועי כפרי</p>
                          </div>
                          <div class="commentMid">
                                10:32 העשב 2014 ילויב 24 ,ישימח םוי
                                <button id="comment">תגובה</button>
                          </div>
                         <div class="commentBot">
                        ?הלועפ ףותישב םיניינועמ - הרז תרושקת .ושפח קובסייפב קינרטור 
                             .רקובה ןולקשא רבעל יריל הבוגתב ז"עצר זכרמבו ןופצב ח"למא 
                      
                        </div>
                     </div>
                             <div class="secComment">
                        
                          <div class="commentTop">
                                <img src="<?php bloginfo('template_url'); ?>/img/nopic.jpg" />
                              <p>  רועי כפרי</p>
                          </div>
                          <div class="commentMid">
                                10:32 העשב 2014 ילויב 24 ,ישימח םוי
                                <button id="comment">תגובה</button>
                          </div>
                         <div class="commentBot">
                        ?הלועפ ףותישב םיניינועמ - הרז תרושקת .ושפח קובסייפב קינרטור 
                             .רקובה ןולקשא רבעל יריל הבוגתב ז"עצר זכרמבו ןופצב ח"למא 
                      
                        </div>
                     </div>
                          
                 </div>
                      
             <!--        <img style="background-image:url('http://1.bp.blogspot.com/-m8giKGQ8rkM/U90xSg9gRoI/AAAAAAAARTA/WMdcihPTl3Y/s1600/Josh-Deadlift.jpg');" class="blogImage" />
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
                     </dl>-->
                  
               </div>
            </div>
         </div>
      </div>
      <!--WE DONT NEED THIS REALLY ...
         <?php previous_post( '&laquo; &laquo; %', '', 'yes'); ?>|
         <?php next_post( '% &raquo; &raquo; ', '', 'yes'); ?>
         -->
      <?php break; ?>
      <?php endwhile; ?>
   </div>
</div>