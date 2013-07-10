<?php if ( post_password_required() ) : ?>
  <?php _e('This post is password protected. Enter the password to view any comments.'); ?>
<?php
    return;
    endif;
?>

<?php if ( have_comments() ) : ?>
  <h3>
    <?php
      printf( 
          _n( 'One Comment', '%1$s Comments', get_comments_number()),
              number_format_i18n( get_comments_number() )
            );
    ?>
  </h3>
  <ol>
    <?php wp_list_comments( array( 'callback' => 'darkstripes_comments' ) ); ?>
  </ol>
  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <ul class="pager">
      <li class="previous"><?php previous_comments_link( __( '&larr; Older Comments' ) ); ?></li>
      <li class="next"><?php next_comments_link( __( 'Newer Comments &rarr;' ) ); ?></li>
    </ul
  <?php endif;?>
<?php else: ?>
  <?php if ( comments_open() ) : ?>
    <?php //add your message ?>
  <?php else :?>
    <?php _e( 'Comments are closed.'); ?>
  <?php endif; ?>
<?php endif; ?>

<?php
  $fields =  array(
  'author' => '<div class="control-group">
               <label for="author" class="control-label"><small>' . __( 'Name' ) . ( $req ? ' (required)' : '' ) .'</small></label>
               <input type="text" name="author" id="author" value="' . esc_attr( $commenter['comment_author'] ) . '" value="" class="input-block-level" tabindex="1" ' . $aria_req . '>
               </div>',
  'email' => '<div class="control-group">
              <label for="email" class="control-label"><small>' . __( 'Mail (will not be published)' ) . ( $req ? ' (required)' : '' ) .'</small></label> 
              <input type="text" name="email" id="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" class="input-block-level" tabindex="2" ' . $aria_req . '>' . '
              </div>',
  'url' => '<div class="control-group">
            <label for="url" class="control-label"><small>' . __( 'Website' ) .'</small></label> 
            <input type="text" name="url" id="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" value="" class="input-block-level" tabindex="3">' . '
            </div>',
  );
  comment_form(
      array(
          'fields' => apply_filters( 'comment_form_default_fields', $fields ),
          'comment_notes_before' =>__( ''),
          'comment_notes_after' => '',
          'comment_field'  => '<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" class="input-block-level"></textarea></p>',
      )   
  ); 
?>

