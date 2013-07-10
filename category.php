<?php get_header(); ?>
  <h1>
    <?php _e( 'Category Archives for' ) ?> <?php single_cat_title() ?>
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