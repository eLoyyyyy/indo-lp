<?php
$commentargs = array(
  'id_form'           => 'commentform',
  'id_submit'         => 'submit',
  'class_submit'      => 'btn btn-default',
  'name_submit'       => 'submit',
  'title_reply'       => __( 'Comment on this:' ),
  'title_reply_to'    => __( 'Reply to %s' ),
  'cancel_reply_link' => __( 'Cancel Reply' ),
  'label_submit'      => __( 'Post Comment' ),
  'format'            => 'xhtml', 
  'fields'              =>
    apply_filters( 'comment_form_default_fields', array(
            'author'    => '<div class="form-group col-sm-12">' . 
                                '<label for="author"><i class="fa fa-user fa-fw" aria-hidden="true"></i> ' . __( 'Name' ) . '</label>
                                <input id="author" name="author" type="text" class="form-control" required="true" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" />
                            </div>',  
            'email'     => '<div class="form-group col col-sm-12">' . 
                                '<label for="email"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i> ' . __( 'Email' ) . '</label>
                                <input id="email" name="email" type="text" class="form-control" required="true" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" />'
                                .
                            '</div>',
            'url'       => ''
    )),
  'comment_field' =>  
            '<div class="form-group col-sm-12">
                <label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
                <textarea id="comment" name="comment" class="form-control">' . '</textarea>
            </div>',
  'must_log_in' => '<p class="must-log-in">' .
                        sprintf(
                          __( 'You must be <a href="%s">logged in</a> to post a comment.' ), 
                            wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
                        ) . 
                    '</p>',
 
  'logged_in_as' => '<p class="logged-in-as">' .
                        sprintf(
                        __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
                          admin_url( 'profile.php' ),
                          $user_identity,
                          wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                        ) . 
                    '</p>',
  'comment_notes_after' => '<span class="help-block">' .
                                sprintf(
                                  __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
                                  ' <code>' . allowed_tags() . '</code>'
                                ) . 
                            '</span>'
 
);
?>

<div class="thumbnail hoverable">
    <div class="content">
        <?php comment_form($commentargs); ?>
    </div>
</div>

<?php if( have_comments() ) : ?>

    <div>
        <h3 class="h5" id="comments">Comments</h3>
        <ul class="media-list">
            <?php
                // Display comments
                wp_list_comments( array(
                    'style'       => 'div',
                    'short_ping'  => true,
                    'avatar_size' => 42,
                    'walker' => new WP_Bootstrap_Comments_Walker(),
                ) );
            ?>
        </ul>
    </div>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
    <div id="comment-nav-below" class="navigation comment-navigation" role="navigation">
        <div class="nav-links row clearfix">
            <div class="nav-previous col l6 m6 s6 center-align"><?php previous_comments_link( __( '&laquo; Older Comments', 'materialized' ) ); ?></div>
            <div class="nav-next col l6 m6 s6 center-align"><?php next_comments_link( __( 'Newer Comments &raquo;', 'materialized' ) ); ?></div>

        </div><!-- .nav-links -->
    </div><!-- #comment-nav-below -->
    <?php endif; // check for comment navigation ?>
    

<?php else : ?>
    <?php if ('open' == $post->comment_status) : ?>

    <?php else : ?>
        <p class="nocomments">Comments are closed.</p>

    <?php endif; ?>

<?php endif; ?>