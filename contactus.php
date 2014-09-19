<div id="superOverlay" style="
    background-color: rgba(70, 138, 48, 0.8);
    width: 100%;
    height: 20%;
    margin: 0;
    position: fixed;
    z-index: 20;
    border-radius: 20px;
    /* display: none; */
    color: white;
                              display:none;
">
    <h1 style="
    color: white;
">Your mail has been sent !</h1>
</div>
<div class="containerScroller">
    <div class="splash_container">
        <div class="top_container">
            <div class="span_3_of_3">
              <img style="background-image:url(<?php bloginfo('template_url'); ?>/img/headerPhoto1.png);" class="blogHeader" />

                <h1 id="blogHeadTitle"> Contact US </h1>
            </div>
        </div>


        <div class="content">
            <!--<div class="blogger">
                <div class="col_side left_span"></div>
                <div class="midspace_span"></div>
                <div class="col_side right_span">
                    <div class="superheader">
                        איך מגיעים?

                    </div>
                </div>
            </div>-->
            <div class="blogger">
                <div class="col_side left_span">

                    <h2>פרטי התקשרות </h2>
                    <hr class="style-one" />

                    <div class="contactdetails">

                        <div class="generalText">
                            אנחנו ממוקמים ברחוב הרב קוק 101 בהרצליה,
מרחק 10 דקות הליכה מתחנת הרכבת בהרצליה, ו-4 דקות מקניון שבעת הכוכבים.
יש חניה בשפע בכל שעה בתוך מתחם המועדון
                            <address class="address">
                        <!--<b>המטווח האולימפי, ברחוב ז'בוטינסקי 9 בהרצליה. </b>-->
                        <dl>
                            <dt>
                            לברור לגבי אופי האימונים, תאום אימונים אישיים וסדנאות ולכל שאלה מקצועית.
                            <br>

                            </dt>
                            <dd>
                                <span>
                                050-6981866 </span></dd>
                             <dt>

                            לתאום אימוני יסודות, הצטרפות למועדון, ברורים לגבי מנוי וכל מה שקשור לתזונה.
                            <br></dt>

                            <dd><span>גלי: 050-7215768</span></dd>


                            <dd><a href="#">gali@crossfitherzliya.com</a></dd>

                        </dl>
                        </div>
                    </address>

                        </div>
                    </div>


                    <div class="midspace_span"></div>



                    <div class="col_side right_span">

                        <h1 id="contactTitle">צור קשר</h1>
                        <hr class="style-one" />


                        <div class="map">
                            <iframe class="map_c" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3377.5212813868097!2d34.828574700000004!3d32.16321509999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d48659ceab2ef%3A0xce5edea094c74d40!2sHaRav+Kuk+St+101%2C+Herzliya!5e0!3m2!1sen!2sil!4v1408879204359" width="800" height="600" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>

                    <div class="contactform">
                        <h2>שלח הודעה </h2>
                        <hr class="style-one" />

                        <div class="width: 100%;">
                            <form id="contact-form">
                                <div class="contact-form-loader"></div>
                                <fieldset>
                                    <div class="col_side right_span">
                                        <label class="name" id="nameLabel">
                                            <input type="text" name="name" placeholder="שם" data-constraints="@Required @JustLetters" id="contactName">
                                        </label>
                                        <label class="email" id="emailLabel">
                                            <input type="text" name="email" placeholder="E-mail" data-constraints="@Required @Email" id="contactEmail">
                                        </label>
                                        <label class="message" id="messageLabel">
                                            <textarea name="message" data-constraints="@Required @Length(min=20,max=999999)" id="contactTextarea" style="width: 875px; " placeholder="תוכן ההודעה"></textarea>
                                        </label>
                                    </div>
                                    <div>
                                        <a id="submitForm" class="link2 btn" data-type="submit">שליחה</a>
                                    </div>
                                </fieldset>
                                <input type="hidden" name="stripHTML" value="true">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>