<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<footer id="site-footer" role="contentinfo" class="header-footer-group">
  <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5 class="footer-title">Danh mục nổi bật</h5>
          <ul class="list-unstyled footer-list">
            <?php
            $categories = get_categories([
              'orderby' => 'count',
              'order'   => 'DESC',
              'number'  => 5
            ]);
            if ($categories) :
              foreach ($categories as $cat) :
                echo '<li><a href="' . esc_url(get_category_link($cat->term_id)) . '" class="footer-link"> <i class="fa fa-angle-double-right mr-2"></i>'
                  . esc_html($cat->name) . '</a></li>';
              endforeach;
            else :
              echo '<li>Chưa có danh mục nào.</li>';
            endif;
            ?>
          </ul>

        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5 class="footer-title">Bài viết mới nhất</h5>
          <ul class="list-unstyled footer-list">
            <?php
            $recent_posts = wp_get_recent_posts([
              'numberposts' => 5,
              'post_status' => 'publish'
            ]);
            if ($recent_posts) :
              foreach ($recent_posts as $post) :
                echo '<li><a href="' . esc_url(get_permalink($post['ID'])) . '" class="footer-link"><i class="fa fa-angle-double-right mr-2"></i>'
                  . esc_html($post['post_title']) . '</a></li>';
              endforeach;
            else :
              echo '<li>Chưa có bài viết mới.</li>';
            endif;
            wp_reset_query();
            ?>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5 class="footer-title">Bình luận gần đây</h5>
          <ul class="list-unstyled footer-list">
            <?php
            $comments = get_comments(['number' => 5, 'status' => 'approve']);
            if ($comments) :
              foreach ($comments as $comment) :
                echo '<li><a href="' . esc_url(get_comment_link($comment)) . '" class="footer-link"><i class="fa fa-angle-double-right mr-2"></i>'
                  . esc_html($comment->comment_author) . ': '
                  . wp_trim_words($comment->comment_content, 6) . '</a></li>';
              endforeach;
            else :
              echo '<li>Chưa có bình luận nào.</li>';
            endif;
            ?>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-google"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa-solid fa-envelope"></i></a></li>

          </ul>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href=" https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a
            Registered
            MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
          <p class="h4">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com"
              target="_blank">Sunlimetech</a></p>
        </div>
        <hr>
      </div>
    </div>
  </section>
</footer>



<?php wp_footer(); ?>

</body>

</html>