<div class="containerScroller">
    <div class="splash_container">
        <div class="top_container">
            <div class="span_3_of_3">
                     <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/headerPhoto2.png);" class="blogHeader" />
                
                <h1 id="blogHeadTitle"> PROTEIN POWDERS </h1>
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
                        <h2> עקבו אחרינו</h2>
                        <hr class="style-one"/>
                    

                           <div style="margin-right: -27px;">
                    <iframe src="//www.facebook.com/plugins/likebox.php?locale=he_IL&href=https%3A%2F%2Fwww.facebook.com%2FCFHIL&amp;width=340&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=181197471933726" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:340px; height:258px;" allowTransparency="true"></iframe>
                            </div>
                    </div>

                    <h2>אימוני עבר </h2>
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


                    </div>
                </div>

                <div class="midspace_span"></div>


                <div class="col_side right_span">

                    <h1 id="contactTitle">כיצד לבחור אבקות חלבון</h1>
                    <hr class="style-one"/>

                    <div class="col_side span_2_of_2">

                        <div class="generalText">

<? 
query_posts('category_name=prot');
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