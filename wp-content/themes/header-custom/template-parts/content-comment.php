<?php

/**
 * Template part để hiển thị một bình luận tùy chỉnh.
 * File này được gọi từ hàm callback trong functions.php.
 */

// Các biến $comment, $args, $depth được truyền tự động từ hàm callback
?>

<div class="d-flex align-items-start">
  <div class="comment-author-avatar mr-3"><?php echo get_avatar($comment, 60, '', 'User Avatar', array('class' => 'rounded-circle'));
                                          ?></div>
  <div class="comment-content flex-grow-1">
    <div class="comment-author-name font-weight-bold comment-font-size"><?php printf(__('%s'), get_comment_author_link());
                                                                        ?></div>
    <?php if ('0' == $comment->comment_approved) : ?><p class="comment-awaiting-moderation"><?php _e('Bình luận của bạn đang chờ được duyệt.');
                                                                                            ?></p><?php endif;
                                                                                                  ?><div
      class="comment-text comment-font-size "><?php comment_text();
                                              ?></div>
    <div class="comment-meta mt-2 text-muted small comment-font-size "><span><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time());
                                                                              ?></span><?php // Hiển thị link "Reply"
                                                                                        comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'])));
                                                                                        ?><?php edit_comment_link(__('(Edit)'), '  ', ''); // Hiển thị link "Edit" 
                                                                                          ?></div>
  </div>
</div>
</div>