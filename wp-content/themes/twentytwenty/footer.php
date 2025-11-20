<?php
/**
 * Custom Footer for Group C (Bootstrap + Font Awesome)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
?>

<!-- =========================
     FOOTER CHÍNH (NỀN XANH) - Dynamic lists: recent comments, categories, latest posts
     ========================= -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome for social icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section id="footer" class="text-white" style="background:#007b5e;">
    <div class="container py-5">

        <!-- QUICK LINKS (dynamic) -->
        <div class="row text-center text-md-left">
            <!-- Recent Comments -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase mb-3">Comments</h5>
                <?php
                $recent_comments = get_comments( array(
                    'number' => 5,
                    'status' => 'approve',
                ) );

                if ( ! empty( $recent_comments ) ) :
                    echo '<ul class="list-unstyled quick-links">';
                    foreach ( $recent_comments as $comment ) {
                        $link   = esc_url( get_comment_link( $comment ) );
                        $author = esc_html( $comment->comment_author );
                        printf( '<li><a href="%1$s">%2$s</a></li>', $link, $author );
                    }
                    echo '</ul>';
                else :
                    echo '<p class="text-light">No recent comments.</p>';
                endif;
                ?>
            </div>

            <!-- Categories -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase mb-3">Categories</h5>
                <ul class="list-unstyled">
                    <?php
                    wp_list_categories( array(
                        'title_li' => '',
                        'number'   => 10,
                        'orderby'  => 'name',
                        'hide_empty' => 0,
                    ) );
                    ?>
                </ul>
            </div>

            <!-- Latest Posts -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase mb-3">Latest Posts</h5>
                <?php
                $recent_posts = wp_get_recent_posts( array(
                    'numberposts' => 5,
                    'post_status' => 'publish',
                ) );

                if ( ! empty( $recent_posts ) ) :
                    echo '<ul class="list-unstyled">';
                    foreach ( $recent_posts as $post ) {
                        $title = esc_html( $post['post_title'] );
                        $perma = esc_url( get_permalink( $post['ID'] ) );
                        printf( '<li><a href="%1$s">%2$s</a></li>', $perma, $title );
                    }
                    echo '</ul>';
                else :
                    echo '<p class="text-light">No posts yet.</p>';
                endif;
                wp_reset_query();
                ?>
            </div>
        </div>

        <hr class="bg-light">

        <!-- SOCIAL ICONS -->
        <div class="text-center mb-3">
            <a href="https://www.facebook.com/" target="_blank" class="text-white mx-2"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="https://twitter.com/" target="_blank" class="text-white mx-2"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="text-white mx-2"><i class="fa fa-instagram fa-lg"></i></a>
            <a href="mailto:youremail@gmail.com" class="text-white mx-2"><i class="fa fa-envelope fa-lg"></i></a>
            <a href="https://www.youtube.com/" target="_blank" class="text-white mx-2"><i class="fa fa-youtube-play fa-lg"></i></a>
        </div>

        <hr class="bg-light">

        <!-- COPYRIGHT -->
        <div class="text-center small text-light">
            <p>
                <u><a href="https://www.nationaltransaction.com/" class="text-white">National Transaction Corporation</a></u>
                is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]
            </p>
            <p class="h6 mb-0"> uuuuuuurr<a href="https://www.sunlimetech.com" class="text-warning">Sunlimetech</a></p>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>
