<?php get_header(); ?>
  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
  <?php endwhile; else: ?>
    //No posts
    <?php _e('No posts were found'); ?>
  <?php endif; ?>
  <?php if ( $wp_query->max_num_pages > 1 ) : ?>
  <ul class="pager">
    <?php if ( get_next_posts_link() ) : ?>
      <li class="previous"><?php next_posts_link(__( '&laquo; Older articles')) ?></li>
    <?php endif; ?>
    <?php if ( get_previous_posts_link() ) : ?>
      <li class="next"><?php previous_posts_link(__( 'Newer articles &raquo;')) ?></li>
    <?php endif; ?>
    </ul>
  <?php endif ?>
<?php get_footer(); ?>