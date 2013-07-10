<?php get_header(); ?>
  <h1>
    <?php if ( is_day() ) : ?>
      <?php printf( __( 'Daily Archives: %s' ), get_the_time(get_option('date_format')) ) ?>
    <?php elseif ( is_month() ) : ?>
      <?php printf( __( 'Monthly Archives: %s' ), get_the_time('F Y') ) ?>
    <?php elseif ( is_year() ) : ?>
      <?php printf( __( 'Yearly Archives: %s'), get_the_time('Y') ) ?>
    <?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
      Blog Archives
    <?php endif; ?>
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