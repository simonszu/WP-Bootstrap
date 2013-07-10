<?php get_header(); ?>
  <h1>
    <?php printf( __( 'Author Archives: %s' ), get_the_author()); ?>
  </h1>
  <div>
    <?php rewind_posts(); ?>
    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
      <?php get_template_part( 'content', 'miniposts' ); ?>
    <?php endwhile; else: ?>
      //No posts
      <?php _e('No posts were found'); ?>
    <?php endif; ?>
  </div>
<?php get_footer(); ?>