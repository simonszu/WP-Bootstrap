<div class="hidden-phone">
  <h3>
    <a href="<?php the_permalink(); ?>" title="<?php printf( __('Read') ) ?>" rel="bookmark"><?php the_title(); ?></a>
  </h3>
</div>
<div class="hidden-desktop hidden-tablet">
  <h4>
    <a href="<?php the_permalink(); ?>" title="<?php printf( __('Read') ) ?>" rel="bookmark"><?php the_title(); ?></a>
  </h4>
</div>
<div class="well well-small">
        <i class="icon-calendar"></i> <?php the_time( get_option( 'date_format' ) ); ?> | <i class="icon-folder-open"></i> <?php echo get_the_category_list(', '); ?>
</div>