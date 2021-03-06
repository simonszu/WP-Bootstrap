<?php get_header(); ?>
  <?php the_post(); ?>
  <div class="hidden-phone">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="hidden-desktop hidden-tablet">
    <h4><?php the_title(); ?></h4>
  </div>
  <div>
    <?php the_content(); ?>
    <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:') . '&after=</div>') ?>
  </div>
  <div class="well well-small">
    <i class="icon-user"></i> <?php the_author_posts_link(); ?><?php edit_post_link( __( '<i class="icon-pencil"></i> Edit'), ' | ') ?>
  </div>
  <?php comments_template('', true); ?>
<?php get_footer(); ?>