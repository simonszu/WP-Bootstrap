<?php get_header(); ?>
  <div class="hidden-phone">
    <h1><?php _e( 'Search Results for '); ?><?php the_search_query(); ?></h1>
  </div>
  <div class="hidden-desktop hidden-tablet">
    <h4><?php _e( 'Search Results for '); ?><?php the_search_query(); ?></h4>
  </div>
  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <div class="hidden-phone">
      <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    </div>
    <div class="hidden-desktop hidden-tablet">
      <h4><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
    </div>
    <p class="lead">
      <time datetime="<?php the_time('Y-m-d\TH:i:sO') ?>" pubdate="" data-updated="true">
        <?php the_time( get_option( 'date_format' ) ); ?>
      </time>
    </p>   
    <p>
      By <?php the_author_posts_link(); ?><?php edit_post_link( __( 'Edit'), ' | ') ?>
    </p>

    <?php the_excerpt( __( 'continue reading &raquo;') ); ?>

    <div class="well well-small">
      <?php _e( 'Posted in '); ?><?php echo get_the_category_list(', '); ?>
      <?php the_tags( ' | ' . __('Tagged: '), ', ', '' ) ?> | 
      <?php comments_popup_link( __( 'Leave a comment'), __( '1 Comment'), __( '% Comments') ) ?>
      <?php edit_post_link( __( 'Edit'), ' | ' ) ?>
    </div>
  <?php endwhile; else: ?>
    //No posts
    <?php _e('No posts were found'); ?>
  <?php endif; ?>
<?php get_footer(); ?>