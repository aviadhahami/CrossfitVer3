<!DOCTYPE_html>
<html>

<head>
    <title>
        <?php wp_title( '|', true, 'right'); bloginfo( 'name'); ?>
    </title>
    <?php wp_enqueue_script( "jquery"); ?>
    <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">  -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/2cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/3cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/4cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/5cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/6cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/7cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/8cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/9cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/10cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/11cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/12cols.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/480.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/768.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/1024.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/col.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/html5reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsivegridsystem.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/xFitStyle.css">

    <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/myScripts.js"></script> 
   
    <script src="<?php bloginfo('template_url'); ?>/js/modernizr-2.5.3-min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/responsivegridsystem.js"></script>
    <?php wp_head(); ?>
</head>

<body>

    <div class="container group">
        <div class="header group span_3_of_3">
            <div class="logo">
                <a href="<?php echo get_option('home'); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_white.png" class="logopic" alt="logo" />
                        </a>
            </div>


            <div class="nav-bar">
                <div class="main-nav">
                    <? wp_nav_menu(array( 'container_class'=>'main-nav', 'container' => 'nav-bar')); ?>
                </div>
            </div>

            <div class="search">
                <img src="<?php bloginfo('template_url'); ?>/img/searchIcon.png" class="searchicon" />
                <input placeholder="HI AMIR" class="searchbar"></input>
            </div>
        </div>


        <!-- <div class="container">
        <header>
            <div class="main-nav" id="show-nav">
                <a href="#">Toggle Navigation</a>
            </div>
            <div class="main-nav" id="close-nav">
                <a href="#">Close Navigation</a>
            </div>
            <div class="nav-container">
                <nav class="nav-bar">

                             title="<?php bloginfo('title'); ?>"></a>
                </nav>
            </div>
        </header>
        -->

