<?php
// sidebar
register_sidebar( array (
  'name' => 'Sidebar',
  'id' => 'sidebar-1',
  'before_widget' => '<section>',
  'after_widget' => "</section><hr>",
  'before_title' => '<h4>',
  'after_title' => '</h4>',
) );

//comments
function graceblogger_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?>">
<div class="comment-container">
<div class="comment-head">
<div class="avatar">
<?php echo get_avatar($comment,$size='36',$default='<http://www.tillhecomes.org/wp-content/themes/StandardTheme_261/admin/images/blank-gravatar.jpg>' ); ?></div>
<span class="name"><?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?></span>
<span class="date"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></span>
<span class="edit"><?php edit_comment_link(__('(Edit)'),' ','') ?></span>
<span class="perma"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"> #</a></span>
<div class="fix"></div>
</div>

<div class="comment-entry"><?php comment_text() ?></div>

<div class="reply">
<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</div>
</div>
</div>
<?php
}

?>

