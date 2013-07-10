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



?>

<?php
//comments
function darkstripes_commenter_link() {
    $commenter = get_comment_author_link();
    if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
        $commenter = preg_replace( '/(<a[^>]* class=[\'"]?)/', '\\1url ' , $commenter );
    } else {
        $commenter = preg_replace( '/(<a )/', '\\1class="url "' , $commenter );
    }
    $avatar_email = get_comment_author_email();
    $avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( $avatar_email, 80 ) );
    echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
}

function darkstripes_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    $GLOBALS['comment_depth'] = $depth;
?>
    <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
        <?php darkstripes_commenter_link() ?>
        <?php 
            printf(
                __('%1$s at %2$s | '),
                get_comment_date(),
                get_comment_time() 
            );
            edit_comment_link(__('Edit'), ' | ', ''); 
        ?>
        <?php if ($comment->comment_approved == '0') _e("Your comment is awaiting moderation.") ?>
            <?php comment_text() ?>
        <?php
            if($args['type'] == 'all' || get_comment_type() == 'comment') :
                comment_reply_link(
                    array_merge($args, array(
                            'reply_text' => __('Reply','blankslate'),
                            'login_text' => __('Log in to reply.','blankslate'),
                            'depth' => $depth,
                            'before' => '',
                            'after' => ''
                        )
                    )
                );
            endif;
        ?>
<?php } ?>
