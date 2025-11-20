<?php
/**
 * Custom Comment Template (Group C)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/* Nếu bài viết có mật khẩu mà chưa nhập thì không hiển thị comment */
if (post_password_required()) {
    return;
}
?>

<style>
/* ===============================
   CUSTOM COMMENT AREA
   =============================== */
.comment-area {
    font-family: "Segoe UI", sans-serif;
    max-width: 820px;
    margin: 60px auto;
}

.comment-card {
    background: #ffffff;
    border-radius: 14px;
    border: 1px solid #e5e7eb;
    box-shadow: 0 8px 22px rgba(15, 23, 42, 0.06);
    overflow: hidden;
}

.comment-card__tab {
    display: inline-block;
    padding: 16px 26px 14px;
    background: #f3f4f6;
    font-weight: 600;
    color: #1f2937;
    border-bottom: 1px solid #e5e7eb;
}

.comment-card__body {
    padding: 26px 32px 32px;
    background: #ffffff;
}

.comment-card__body .comment-form-author,
.comment-card__body .comment-form-email,
.comment-card__body .comment-form-url,
.comment-card__body .comment-notes {
    display: none;
}

.comment-form textarea {
    width: 100%;
    border: 1px solid #d1d5db;
    border-radius: 10px;
    padding: 18px 20px;
    font-size: 15px;
    resize: none;
    height: 140px;
    background: #f9fafb;
    color: #1f2937;
    transition: border-color 0.2s ease, background 0.2s ease;
}

.comment-form textarea:focus {
    background: #ffffff;
    border-color: #3b82f6;
    outline: none;
}

.comment-form .form-submit {
    display: flex;
    justify-content: flex-end;
    margin-top: 18px;
}

.comment-form input[type="submit"] {
    background-color: #0b74ff;
    color: #ffffff;
    border: none;
    padding: 10px 26px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    text-transform: lowercase;
    box-shadow: 0 10px 18px rgba(59, 130, 246, 0.26);
    transition: transform 0.15s ease, box-shadow 0.15s ease;
}

.comment-form input[type="submit"]:hover {
    transform: translateY(-1px);
    box-shadow: 0 12px 22px rgba(59, 130, 246, 0.32);
}

.comment-form input[type="submit"]:active {
    transform: translateY(0);
    box-shadow: 0 6px 14px rgba(59, 130, 246, 0.24);
}

/* Nếu chưa đăng nhập */
.comment-login-message {
    text-align: center;
    font-size: 16px;
    color: #374151;
    padding: 40px 30px;
    background: rgba(209, 213, 219, 0.25);
    border-radius: 12px;
    border: 1px dashed #cbd5f5;
    line-height: 1.6;
}

.comment-login-message a {
    color: #2563eb;
    font-weight: 600;
}

.comment-area h3 {
    font-size: 18px;
    font-weight: 600;
    color: #1f2937;
    margin-bottom: 18px;
}

.comment-form textarea {
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 6px;
    padding: 12px;
    font-size: 15px;
    resize: none;
    height: 120px;
    background: #fafafa;
    transition: all 0.2s ease;
}

.comment-form textarea:focus {
    background: #fff;
    border-color: #007bff;
    outline: none;
}

.comment-form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 25px;
    border-radius: 6px;
    font-size: 15px;
    cursor: pointer;
    margin-top: 10px;
}

.comment-form input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Nếu chưa đăng nhập */
.comment-login-message {
    text-align: center;
    font-size: 16px;
    color: #777;
    padding: 40px;
    background: #fafafa;
    border-radius: 8px;
    margin: 40px auto;
    border: 1px dashed #ccc;
}

/* Danh sách bình luận */
.comment-list {
    list-style: none;
    padding: 0;
    margin-top: 40px;
}

.comment-list li {
    border-bottom: 1px solid #eee;
    padding: 15px 0;
}

.comment-author {
    font-weight: 600;
    color: #333;
}

.comment-metadata {
    font-size: 13px;
    color: #777;
}
</style>

<div class="comment-area">
    <?php if (have_comments()) : ?>
        <h3><?php echo get_comments_number(); ?> Comments</h3>
        <ul class="comment-list">
            <?php
            wp_list_comments([
                'style' => 'ul',
                'avatar_size' => 50,
                'short_ping' => true,
            ]);
            ?>
        </ul>
    <?php endif; ?>

    <?php if (comments_open()) : ?>
        <?php if (is_user_logged_in()) : ?>
            <div class="comment-card">
                <div class="comment-card__tab">Make a Post</div>
                <div class="comment-card__body">
                    <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post" class="comment-form">
                        <textarea name="comment" placeholder="What are you thinking..."></textarea>
                        <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                        <p class="form-submit">
                            <input type="submit" name="submit" value="share">
                        </p>
                    </form>
                </div>
            </div>
        <?php else : ?>
            <div class="comment-card">
                <div class="comment-card__tab">Make a Post</div>
                <div class="comment-card__body">
                    <div class="comment-login-message">
                        Bạn cần <a href="<?php echo wp_login_url(get_permalink()); ?>">đăng nhập</a> để đăng bình luận.
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php else : ?>
        <div class="comment-login-message">
            Comments are closed.
        </div>
    <?php endif; ?>
</div>
