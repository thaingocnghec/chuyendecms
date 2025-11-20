<?php

/**
 * Template để hiển thị khu vực bình luận.
 * Bao gồm cả danh sách bình luận và form bình luận.
 */

if (post_password_required()) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if (have_comments()) : ?>
		<h2 class="comments-title">
			<?php
			$comment_count = get_comments_number();
			if ('1' === $comment_count) {
				esc_html_e('One comment', 'your-theme-domain');
			} else {
				printf(
					esc_html(_nx('%1$s comment', '%1$s comments', $comment_count, 'comments title', 'your-theme-domain')),
					number_format_i18n($comment_count)
				);
			}
			?>
		</h2>

		<?php if (have_posts()) : ?>

			<ol class="comment-list">
				<?php
				wp_list_comments(array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 60,
					'callback'    => 'my_custom_comment_format',
				));
				?>
			</ol>

		<?php endif;  ?>

		<?php
		the_comments_navigation();

		if (! comments_open()) :
		?>
			<p class="no-comments"><?php esc_html_e('Comments are closed.', 'your-theme-domain'); ?></p>
	<?php
		endif;

	endif;
	?>


	<?php

	if (comments_open()) {
		if (is_user_logged_in()) {
			comment_form();
		} else {
			echo '<div class="must-log-in-to-comment alert alert-info mt-4">';
			printf(
				wp_kses(
					__('You must be <a href="%s">logged in</a> to post a comment.', 'your-theme-domain'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				),
				esc_url(wp_login_url(apply_filters('the_permalink', get_permalink())))
			);
			echo '</div>';
		}
	}
	?>

</div>