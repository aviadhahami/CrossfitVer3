

    <?php while (have_posts()) : the_post() ?>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"
  title="<?php printf(__('Go to %s', 'your-theme'), the_title_attribute('echo=0')); ?>"
  rel="bookmark"><?php the_title(); ?></a></h1>

    <?php the_content(); ?>
    <?php previous_post( '&laquo; &laquo; %', '', 'yes'); ?>|
    <?php next_post( '% &raquo; &raquo; ', '', 'yes'); ?>

    <?php break; ?>
    <?php endwhile; ?>

    
