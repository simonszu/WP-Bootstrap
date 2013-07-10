<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
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

