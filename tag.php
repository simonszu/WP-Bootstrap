<?php get_header(); ?>
  <h1><?php _e( 'Tag Archives for' ) ?><?php single_tag_title() ?></h1>
  <?php rewind_posts(); ?>
  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <?php get_template_part( 'content', 'miniposts' ); ?>
  <?php endwhile; else: ?>
    <?php _e('No posts were found'); ?>
  <?php endif; ?>
<?php get_footer(); ?>