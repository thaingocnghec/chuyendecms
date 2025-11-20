<?php
/**
 * Template part để hiển thị một bình luận tùy chỉnh.
 * File này được gọi từ hàm callback trong functions.php.
 */

// Các biến $comment, $args, $depth được truyền tự động từ hàm callback
?>

<div class="comment-body p-3">
  <div class="d-flex align-items-start">
    <div class="comment-author-avatar mr-3">
      <?php 
            // Hiển thị avatar của người bình luận
            // Hàm get_avatar cần biến $comment, là biến toàn cục trong ngữ cảnh này
            echo get_avatar( $comment, 60, '', 'User Avatar', array('class' => 'rounded-circle') ); 
            ?>
    </div>

    <div class="comment-content flex-grow-1">
      <div class="comment-author-name font-weight-bold">
        <?php 
                // Hiển thị tên tác giả kèm link
                printf( __( '%s' ), get_comment_author_link() ); 
                ?>
      </div>

      <?php if ( '0' == $comment->comment_approved ) : // Kiểm tra nếu bình luận chưa được duyệt ?>
      <p class="comment-awaiting-moderation"><?php _e( 'Bình luận của bạn đang chờ được duyệt.' ); ?></p>
      <?php endif; ?>

      <div class="comment-text">
        <?php comment_text(); // Hiển thị nội dung chính của bình luận ?>
      </div>

      <div class="comment-meta mt-2 text-muted small">
        <span><?php printf( __( '%1$s at %2$s' ), get_comment_date(), get_comment_time() ); ?></span>
        <?php 
                // Hiển thị link "Reply"
                comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); 
                ?>
        <?php edit_comment_link( __( '(Edit)' ), '  ', '' ); // Hiển thị link "Edit" ?>
      </div>
    </div>
  </div>
</div>