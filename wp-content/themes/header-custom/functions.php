<?php
// Kế thừa style của parent theme
function header_custom_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('header-style', get_stylesheet_directory_uri() . '/assets/header.css');

    // FontAwesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'header_custom_enqueue_styles');


/**
 * Hàm Callback tùy chỉnh để hiển thị mỗi bình luận.
 * Hàm này sẽ gọi một template part riêng để xử lý HTML.
 *
 * @param object $comment Đối tượng bình luận.
 * @param array  $args    Các tham số.
 * @param int    $depth   Độ sâu của bình luận.
 */
function my_custom_comment_format($comment, $args, $depth)
{
?>
    <li <?php comment_class('comment-item mb-3'); ?> id="li-comment-<?php comment_ID(); ?>">

        <?php
        // Thay vì viết HTML ở đây, chúng ta gọi file template part
        // WordPress sẽ tự động tìm file /template-parts/content-comment.php
        get_template_part('template-parts/content-comment', null, array(
            'comment' => $comment,
            'args'    => $args,
            'depth'   => $depth,
        ));
        ?>

    </li>
<?php
}


?>