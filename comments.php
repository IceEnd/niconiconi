<?php if ( post_password_required() ) return; ?>

<div id="cmt" class="cmt">

	<?php if ( have_comments() ) : ?>

		<ol id="comments" class="cmt_list">
			<?php wp_list_comments( array( 'callback' => 'dpt_comment', 'style' => 'ol' ) ); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="cmt-nav" class="navigation" role="navigation">
			<span class="cmt-nav-prev"><?php previous_comments_link('<img src="<?php echo get_template_directory_uri(); ?>/img/left.png" />'); ?></span>
			<span class="cmt-nav-next"><?php next_comments_link('<img src="<?php echo get_template_directory_uri(); ?>/img/right.png" />'); ?></span>
		</nav>
		<?php endif; ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e('要和谐，不要吐槽~','dpt'); ?></p>
		<?php endif; ?>

	<?php endif; ?>

<?php

$comments_args = array(
  'id_form'           => 'cmt_form',
  'id_submit'         => 'cmt_submit',
  'title_reply'       => __('来一发吐槽'),
  'title_reply_to'    => __('吐槽 %s','dpt'),
  'cancel_reply_link' => __('放弃治疗','dpt'),
  'label_submit'      => __('发射','dpt'),

  'comment_field' =>  '<p class="comment-form-comment"><textarea id="comment" name="comment" required aria-required="true" placeholder="' . __('Ctrl + Enter 快速发送') .'">' .
    '</textarea></p>',

  'must_log_in' => '<p class="must-log-in">' .
    sprintf(
      __( '你必须 <a href="%s">登录</a> 后吐槽。','dpt' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __('以 <a href="%1$s">%2$s</a> 登录。 <a href="%3$s" title="Log out of this account">退出</a>','dpt'),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before' => '',

  'comment_notes_after' => '',

  'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<div id="cmt_form_meta"><input placeholder="'.__('称呼','dpt').'" id="author" name="author" type="text" required="required" value="' . esc_attr( $commenter['comment_author'] ) .
      '" />',

    'email' =>
      '<input placeholder="'.__('邮箱','dpt').'" id="email" name="email" type="email" required="required" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" />',

    'url' =>
      '<input placeholder="'.__('站点','dpt').'" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" /></div>'
    )
  ),
); ?>

	<?php comment_form($comments_args); ?>

</div>