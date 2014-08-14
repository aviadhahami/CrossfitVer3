<div class="containerScroller">
    <div class="splash_container">
        <div class="top_container">
            <div class="span_3_of_3">
                <img src="<?php bloginfo('template_url'); ?>/img/blogbg.jpg" class="blogHeader" />
                <h1 id="blogHeadTitle"> ABOUT US </h1>
            </div>
        </div>
        <?php while (have_posts()) : the_post() ?>
        <div class="content">
            <div class="blogger">
                <div class="col_side left_span"></div>
                <div class="midspace_span"></div>
                <div class="col_side right_span">
                    <div class="superheader">
                        עמוד ראשי
                    </div>
                </div>
            </div>
            <div class="blogger">
                <div class="col_side left_span">
                    <div class="span_2_of_3 signup">
                        <h2>הרשמה לאימונים <hr class="style-one" /></h2>
                        <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic2.jpg);" class="blockImg" />
                        <div class="generalText">
                            <br>לכב ןלא רמ תא חצני ךא ,ןמואי יתלב הדימע רשוכו תלוביס לעב םג רשא ןמלופ ןומייס ןולתאקדה הכוזל ןתינ ראות הזיא זא ,הרדגהל םיאתמ ןכא "לזרבה שיא" ןולתאירטב םסרופמה םימעפה שש הכוזש עגרל חיננ ואוב earth". on man tsettiF"-כ ןלא קראמ ןולתאירטה הרחתמ תא ריתכה magazin) (Outside "דייסטואא" ןיזגמ
                        </div>
                    </div>

                    <h2>אימוני עבר </h2>
                    <hr class="style-one" />
                    <div class="recentPosts">
                        <div class="recentPostSingle">
                            <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic2.jpg);" class="recentPostImg" />
                            <div class="generalText">
                                <span class="recentPostTextHeader">Nigga nigga nigga</span>
                                <br>ניסיון אחת שתיים שלוש</div>
                        </div>

                        <div class="recentPostSingle">
                            <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic2.jpg);" class="recentPostImg" />
                            <div class="generalText">
                                <span class="recentPostTextHeader">Nigga nigga nigga</span>
                                <br>ניסיון אחת שתיים שלוש</div>
                        </div>

                        <div class="recentPostSingle">
                            <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/mpic2.jpg);" class="recentPostImg" />
                            <div class="generalText">
                                <span class="recentPostTextHeader">Nigga nigga nigga</span>
                                <br>ניסיון אחת שתיים שלוש</div>
                        </div>


                    </div>
                </div>

                <div class="midspace_span"></div>


                <div class="col_side right_span">
                    <h2>הרשמה לאימונים <hr class="style-one" /></h2>

                    <div class="col_side span_2_of_2">

                        <div class="generalText">
                            <br>...ריינה לע רקיעב יניצר אל הארנ הז ,ולזלזתו םירוביג ויהת לא .ףרוצמה ןומיאה תא עצבל ידכ ןודעומה תיזחבש שיבכה לא ואצת ,םימואתה ירירשו גנירטסמה ,לסכ ןתומ - ןומיאל םייתייעבה םירירשב חתמה תא תולעהלו בוט בוט עיזהל םכל םורגיש ידוסי םומיח ירחא !יטנגלאו טושפ ,הנורחאל ונישעש רתויב םישקה דחא תויהל לאיצנטופ שי ברעה ןומיאל
                        </div>

                        <h2 style="margin-top: 30px;">הרשמה לאימונים </h2>
                        <hr class="style-one" />

                        <dl class="faq">

                            <dt><div class="listText">How much wood would a wood chuck chuck if a wood chuck could chuck wood?</div></dt>

                            <dt>What is the air-speed velocity of an unladen swallow?</dt>
                            <dd>What do you mean? An African or European swallow?</dd>

                            <dt>Why did the chicken cross the road?</dt>
                            <dd>To get to the other side</dd>

                        </dl>
                    </div>
                </div>






            </div>
        </div>

        <?php previous_post( '&laquo; &laquo; %', '', 'yes'); ?>|
        <?php next_post( '% &raquo; &raquo; ', '', 'yes'); ?>

        <?php break; ?>
        <?php endwhile; ?>
    </div>

</div>