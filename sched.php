
<div class="containerScroller">
    <div class="splash_container">
        <div class="top_container">
            <div class="span_3_of_3">
               <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/headerPhoto3.png);" class="blogHeader"  />

                <h1 id="blogHeadTitle"> WEEKLY SCHEDULE </h1>
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




                <div class="col_side right_span">

                    <h1 id="contactTitle">לוח אימונים שבועי</h1>
                    <hr class="style-one"/>

                   <div class="col_side span_2_of_2">

                        <div class="generalText">
                            <style>
                                table{
                                    direction:ltr;
                                }
                                table,th,td{
                                    border:1px solid black;
                                    white-space: nowrap;
                                    text-align:center;
                                }
                                td{
                                    padding:7px;
                                }
                                td:hover{
                                    color:white;
                                    background-color:black;
                                }
                                P{
                                    text-align:center;
                                }
                                ::selection {
                                  background: black; /* WebKit/Blink Browsers */
                                    color:white;
                                }
                            </style>
<? 
query_posts('category_name=sched');
while (have_posts()) : the_post();
the_title();
the_content();
?>
                            <p>Please notice that times might change! watch WOD section for updates</p>
                            <p>שימו לב כי מדי פעם יחולו שינויים בזמני האימון! השארו מעודכנים בעמוד האימון היומי</p>
<?
echo("<hr class='style-one' />");
endwhile;
    ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>