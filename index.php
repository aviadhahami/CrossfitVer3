<?php get_header(); ?>

<body>
    <?
    $term = mysql_real_escape_string($_GET["page"]);
    //if($term=='' ){ $term="empty get" ;} echo "<script>alert('" . $term. "');</script>";
    try {
        if ($term == "blog") {
            require_once "blog.php";
        } else if ($term == "about") {
            require_once "about.php";
        } else if ($term == "whatIsFitness") {
            require_once "whatIsFitness.php";
        }else if($term == "sched"){
             require_once "sched.php";
        }else if ($term == "prot") {
            require_once "prot.php";
        }else if ($term == "fitness") {
            require_once "fitness.php";
        } else if ($term == "contactus") {
            require_once 'contactus.php';
        }else if ($term == "FAQ") {
            require_once 'FAQ.php';
        } else if ($term == "about" || $term == "") {
            require_once "landing.php";
        }
        else if ($term == "trainers") {
            require_once "trainers.php";
        }  
    } catch (Exception $e) {

        echo '<h1>Some error happened, please refresh</h1>';
    }
    ?>
    <? /* <section class="main-post eleven columns row">
      <?php while (have_posts()) : the_post() ?>
      <h1 class="entry-title"><a href="<?php the_permalink(); ?>"
      title="<?php printf(__('Go to %s', 'your-theme'), the_title_attribute('echo=0')); ?>"
      rel="bookmark"><?php the_title(); ?></a></h1>

      <?php the_content(); ?>
      <?php previous_post( '&laquo; &laquo; %', '', 'yes'); ?>|
      <?php next_post( '% &raquo; &raquo; ', '', 'yes'); ?>

      <?php break; ?>
      <?php endwhile; ?>
      </section>

     */ ?>

    <?php //get_sidebar(); ?>
    <?php get_footer(); ?>