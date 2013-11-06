<div class="hidden-phone">
<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
</div>
<div class="hidden-desktop hidden-tablet">
<h4><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
</div>
<p>            
  <?php the_content(); ?>               
</p>
<div class="well well-small">
  <i class="icon-calendar"></i> <?php the_time( get_option( 'date_format' ) ); ?> | <i class="icon-user"></i> <?php the_author_posts_link(); ?> | <i class="icon-folder-open"></i> <?php echo get_the_category_list(', '); ?><?php the_tags( ' | ' . __('<i class="icon-tags"></i>'), ', ', '' ) ?> | <?php comments_popup_link( __( '<i class="icon-comment"></i> Leave a comment'), __( '<i class="icon-comment"></i> 1 comment'), __( '<i class="icon-comment"></i> % comments') ) ?> <?php edit_post_link( __( '<i class="icon-pencil"></i> Edit'), ' | ') ?>
</div>