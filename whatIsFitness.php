<div class="containerScroller">
    <div class="splash_container">
        <div class="top_container">
            <div class="span_3_of_3">
                 <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/headerPhoto3.png);" class="blogHeader"  />

                <h1 id="blogHeadTitle">WHAT IS FITNESS </h1>
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
                        <h2> מהו כושר גופני ומי בכושר? </h2>
                        <hr class="style-one"/>
                        <div style="background-image:url(<?php bloginfo('template_url'); ?>/img/headerPhoto5.png); background-size: cover;
}" class="blockImg"> </div>

                        <div class="generalText">
                            <br>
                          מגזין "אאוטסייד" (Outside magazin) הכתיר את מתחרה הטריאתלון מארק אלן כ-"Fittest man on earth".<br> בואו נניח לרגע שזוכה שש הפעמים המפורסם בטריאתלון "איש הברזל" אכן מתאים להגדרה, אז איזה תואר ניתן לזוכה הדקאתלון סיימון פולמן אשר גם בעל סיבולת וכושר עמידה בלתי יאומן, אך ינצח את מר אלן בכל השוואה הכוללת חוזק, עוצמה, מהירות וקואורדינאציה?
אולי ההגדרה לכושר לא כוללת חוזק, מהירות, עוצמה וקואורדינאציה למרות שזה נראה די מוזר.<br> מילון ובסטר מגדיר כושר ולהיות בכושר כיכולת למסור גנים ולהיות בריא. זה לא ממש עוזר לנו. חיפוש באינטרנט אחר הגדרה הגיונית לכושר מניבה באופן מאכזב מעט מאוד. גרוע יותר, ה NSCA, המוציא לאור המכובד ביותר בפעילות גופנית, בסמכותם הרמה לא מנסים אפילו להגדיר.
                        </div>
                    </div>

                   <!-- <h2>אימוני עבר </h2>
                    <hr class="style-one"/>
                    <div class="recentPosts">
                        <div class="recentPostSingle">
                            <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic2.jpg);"
                                 class="recentPostImg"/>

                            <div class="generalText">
                                <span class="recentPostTextHeader">Nigga nigga nigga</span>
                                <br> try one two three
                            </div>
                        </div>

                        <div class="recentPostSingle">
                            <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic2.jpg);"
                                 class="recentPostImg"/>

                            <div class="generalText">
                                <span class="recentPostTextHeader">Nigga nigga nigga</span>
                                <br> try one two three
                            </div>
                        </div>

                        <div class="recentPostSingle">
                            <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic2.jpg);"
                                 class="recentPostImg"/>

                            <div class="generalText">
                                <span class="recentPostTextHeader">Nigga nigga nigga</span>
                                <br> try one two thee
                            </div>
                        </div>


                    </div>-->
                </div>

                <div class="midspace_span"></div>


                <div class="col_side right_span">

                    <h1 id="contactTitle">מהו כושר</h1>
                    <hr class="style-one"/>

                    <div class="col_side span_2_of_2">

                        <div class="generalText">

<? 
query_posts('category_name=wif');
while (have_posts()) : the_post();
the_title();
the_content();
echo("<hr class='style-one' />");
endwhile;
    ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>