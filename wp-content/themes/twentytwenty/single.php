<?php get_header(); ?>

<style>
  .single-wrapper {
    max-width: 800px;
    margin: 50px auto;
    background: #fff;
    padding: 40px;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    background-color: #FCFAF5;
  }

  .single-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    border-bottom: 1px solid #f0f0f0;

  }

  .single-title {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 3rem;
    line-height: 1.3;
    margin-left: 0px;
  }



  .single-date {
    position: absolute;
    right: 20px;
    /* hoặc right: 0 nếu muốn sát mép */
    top: 20px;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #f4d26b;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 14px;
  }


  .date-left {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 70%;
    /* giúp khoảng cách giữa ngày và tháng đẹp hơn */
  }

  .date-right {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 5px;
  }

  .single-content {
    margin-top: 3rem;
  }

  .single-content p {
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 15px;
  }

  /*  */
  @media (max-width: 600px) {
    .single-header {
      flex-direction: row;
      align-items: center;
    }

    .single-title {
      font-size: 22px;
    }

    .single-date {
      width: 55px;
      height: 55px;
      font-size: 12px;
    }
  }

  /* css pre post */
  .wrapper-prepost {
    max-width: 800px;
    margin: 10px auto;
    padding: 40px;
    margin-left: 115px;
    position: relative;
  }

  .widget-latest-posts ul {
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
  }

  .widget-latest-posts li {
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #eee;
  }

  .widget-latest-posts li:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
  }

  .post-date {
    text-align: center;
    font-weight: bold;
    color: #555;
    min-width: 50px;
  }

  .post-date .day {
    font-size: 1.5rem;
    line-height: 1;
    display: block;
  }

  .post-date .month-year {
    font-size: 0.8rem;
    line-height: 1;
    display: block;
  }

  .post-date hr {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
    border-top: 2px solid #ccc;
  }

  .post-title h5 {
    margin-bottom: 0;
    font-size: 1rem;
  }

  .post-title h5 a {
    color: #007bff;
    text-decoration: none;
  }

  .post-title h5 a:hover {
    color: #0056b3;
    text-decoration: underline;
  }

  .related-posts-navigation-font {
    font-size: 2rem;
    font-weight: bold;
  }

  /* form comment  */
  #respond.custom-comment-form-card {
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    margin-top: 3rem;
    /* Khoảng cách với nội dung bài viết */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.07);
  }

  /* Định dạng cho tiêu đề "Make a Post" để tạo hiệu ứng TAB */
  #respond.custom-comment-form-card .comment-reply-title {
    font-size: 1rem;
    font-weight: 500;
    color: #495057;
    padding: 0.75rem 1.25rem;
    margin: -1px -1px 0 -1px;
    /* Dịch chuyển để viền trùng nhau */

    /* Viền cho hiệu ứng tab */
    border-bottom: 1px solid #dee2e6;
    /* Đường ngăn cách với body */
    border: 1px solid #dee2e6;

    /* Quan trọng: Bỏ viền dưới của chính nó để nối liền với body */
    border-bottom: none;

    border-radius: 0.25rem 0.25rem 0 0;
    width: auto;
    /* Để tab chỉ rộng bằng nội dung chữ */
    display: inline-block;
    /* Để width: auto có tác dụng */
  }

  /* Phần thân của form */
  #respond.custom-comment-form-card .comment-form {
    padding: 1.25rem;
  }

  /* Ô nhập liệu */
  #respond.custom-comment-form-card textarea#comment {
    border-radius: 0.25rem !important;
  }

  /* Nút gửi bình luận */
  #respond.custom-comment-form-card .form-submit input#submit {
    /* Class Bootstrap đã được gán, đây là tùy chỉnh nhỏ */
    font-weight: normal;
    text-transform: lowercase;
  }

  /* Căn lề cho nút */
  #respond.custom-comment-form-card .form-submit {
    margin-top: 1rem;
    margin-bottom: 0;
    text-align: right;
  }

  /* Xóa bỏ các dòng thông tin thừa của WordPress */
  #respond.custom-comment-form-card .comment-notes,
  #respond.custom-comment-form-card .logged-in-as {
    display: none;
  }
</style>

<!-- Detail post -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="single-wrapper">

      <div class="single-header">
        <h1 class="single-title"><?php the_title(); ?></h1>

        <div class="single-date">
          <div class="date-left">
            <span><?php echo get_the_date('d'); ?></span>
            <span><?php echo get_the_date('m'); ?></span>
          </div>
          <div class="date-right">
            <span><?php echo get_the_date('y'); ?></span>
          </div>
        </div>
      </div>

      <div class="single-content">
        <?php the_content(); ?>
      </div>

    </div>

<?php endwhile;
endif; ?>
<!-- pre - next post  -->
<div class="wrapper-prepost">
  <div class="related-posts-navigation related-posts-navigation-font">
    <div class="widget-latest-posts">
      <?php
      $prev_post = get_previous_post();

      $next_post = get_next_post();

      if (! empty($prev_post) || ! empty($next_post)) :
      ?>
        <ul>
          <?php
          if (! empty($prev_post)) :
          ?>
            <li>
              <div class="d-flex align-items-start">
                <div class="post-date mr-3">
                  <span class="day"><?php echo get_the_date('d', $prev_post->ID); ?></span>
                  <hr>
                  <span class="month-year"><?php echo get_the_date('m-y', $prev_post->ID); ?></span>
                </div>
                <div class="post-title">
                  <h5>
                    <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                      <?php echo esc_html($prev_post->post_title); ?>
                    </a>
                  </h5>
                </div>
              </div>
            </li>
          <?php
          endif;

          if (! empty($next_post)) :
          ?>
            <li>
              <div class="d-flex align-items-start">
                <div class="post-date mr-3">
                  <span class="day"><?php echo get_the_date('d', $next_post->ID); ?></span>
                  <hr>
                  <span class="month-year"><?php echo get_the_date('m-y', $next_post->ID); ?></span>
                </div>
                <div class="post-title">
                  <h5>
                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                      <?php echo esc_html($next_post->post_title); ?>
                    </a>
                  </h5>
                </div>
              </div>
            </li>
          <?php
          endif;
          ?>
        </ul>
      <?php
      endif; // Kết thúc kiểm tra có bài viết hay không
      ?>
    </div>
  </div>
</div>

<!-- comment post -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10">
      <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if (comments_open() || get_comments_number()) {
        comments_template();
      }
      ?>
    </div>
  </div>
</div>

<!-- footer -->
<?php get_footer(); ?>