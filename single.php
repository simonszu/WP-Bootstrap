<?php get_header(); ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="hidden-phone">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="hidden-desktop hidden-tablet">
      <h4><?php the_title(); ?></h4>
    </div>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content">
        <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <?php the_content(); ?>
        <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:' ) . '&after=</div>') ?>
      </div>
    </div>

    <div class="well well-small">
      <i class="icon-calendar"></i> <?php the_time( get_option( 'date_format' ) ); ?> | 
      <i class="icon-user"></i> <?php the_author_posts_link(); ?> | 
      <?php
      printf( 
          __( '<i class="icon-folder-open"></i> %1$s%2$s | <i class="icon-bookmark"></i> <a href="%3$s" title="Permalink to %4$s" rel="bookmark">Permalink</a> | <i class="icon-bullhorn"></i> <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">Comments RSS</a> | ', 'blankslate' ),
          get_the_category_list(', '),
          get_the_tag_list( __( ' | <i class="icon-tags"></i> '), ', ', '' ),
          get_permalink(),
          the_title_attribute('echo=0'),
          get_post_comments_feed_link() 
      ) 
      ?>
      <?php if ( ('open' == $post->comment_status) && ('open' == $post->ping_status) ) : ?>
        <?php printf( __( '<i class="icon-comment"></i> <a class="comment-link" href="#respond" title="Post a Comment">Post a Comment</a> | <i class="icon-magnet"></i> <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.'), get_trackback_url() ) ?>
      <?php elseif ( !('open' == $post->comment_status) && ('open' == $post->ping_status) ) : ?>
        <?php printf( __( '<i class="icon-magnet"></i> <a class="trackback-link" href="%s" title="Trackback URL for post" rel="trackback">Trackback URL</a>.'), get_trackback_url() ) ?>
      <?php elseif ( ('open' == $post->comment_status) && !('open' == $post->ping_status) ) : ?>
        <?php _e( '<i class="icon-comment"></i> <a class="comment-link" href="#respond" title="Post a Comment">Post a Comment</a>.', 'blankslate' ) ?>
      <?php elseif ( !('open' == $post->comment_status) && !('open' == $post->ping_status) ) : ?>
        <?php _e( ' Both comments and trackbacks are closed.') ?>
      <?php endif; ?>
      <?php edit_post_link( __( '<i class="icon-pencil"></i> Edit'), ' | ') ?>
    </div>
    <?php comments_template( '', true ); ?>
  <?php endwhile; ?>
<?php get_footer(); ?>
