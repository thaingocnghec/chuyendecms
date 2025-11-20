<?php get_header(); ?>

<!-- Link CSS riêng cho trang single -->
<div class="container-wrapper container-fluid my-5 single-content-post ">
  <div class="row">

    <!-- SIDEBAR TRÁI (CATEGORIES) -->
    <aside class="col-lg-3 col-md-4 mb-4">
      <div class="sidebar-widget categories-box">
        <h5>Categories</h5>
        <ul>
          <?php
          $categories = get_categories();
          foreach ($categories as $cat) :
          ?>
          <li><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </aside>

    <!-- NỘI DUNG CHÍNH -->
    <main class="col-lg-6 col-md-8 mb-4">
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

      <!-- BÀI VIẾT TRƯỚC / SAU -->
      <div class="wrapper-prepost">
        <div class="related-posts-navigation">
          <div class="widget-latest-posts">
            <ul>
              <?php
              $prev_post = get_previous_post();
              $next_post = get_next_post();
              if ($prev_post) :
              ?>
              <li>
                <div class="d-flex align-items-start">
                  <div class="post-date mr-3">
                    <span class="day"><?php echo get_the_date('d', $prev_post->ID); ?></span>
                    <hr>
                    <span class="month-year"><?php echo get_the_date('m-y', $prev_post->ID); ?></span>
                  </div>
                  <div class="post-title">
                    <h5><a
                        href="<?php echo get_permalink($prev_post->ID); ?>"><?php echo esc_html($prev_post->post_title); ?></a>
                    </h5>
                  </div>
                </div>
              </li>
              <?php endif; ?>

              <?php if ($next_post) : ?>
              <li>
                <div class="d-flex align-items-start">
                  <div class="post-date mr-3">
                    <span class="day"><?php echo get_the_date('d', $next_post->ID); ?></span>
                    <hr>
                    <span class="month-year"><?php echo get_the_date('m-y', $next_post->ID); ?></span>
                  </div>
                  <div class="post-title">
                    <h5><a
                        href="<?php echo get_permalink($next_post->ID); ?>"><?php echo esc_html($next_post->post_title); ?></a>
                    </h5>
                  </div>
                </div>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>

      <!-- COMMENT -->
      <div class="comments-section mt-5">
        <?php
        if (comments_open() || get_comments_number()) {
          comments_template();
        }
        ?>
      </div>
    </main>

    <!-- SIDEBAR PHẢI (RECENT POSTS CUSTOM STYLE) -->
    <aside class="col-lg-3 col-md-12 mt-4 mt-lg-0">
      <div class="recent-news-box p-4 rounded">
        <div class="list-group list-group-flush">
          <?php
          $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3,
            'post_status' => 'publish'
          ));
          if (! empty($recent_posts)) :
            foreach ($recent_posts as $post) :
              $date_day   = get_the_date('d', $post['ID']);
              $date_month = get_the_date('m', $post['ID']);
              $date_year  = get_the_date('y', $post['ID']);
          ?>
          <div class="list-group-item bg-transparent border-0 px-0 py-2">
            <div class="row no-gutters align-items-center">
              <!-- Cột trái: Date -->
              <div class="col-3 text-center">
                <div class="date-block py-2">
                  <div class="row no-gutters align-items-center">
                    <!-- Cột trái: ngày & tháng -->
                    <div class="col-6 d-flex flex-column align-items-center">
                      <div class="h4 day font-weight-bold"><?php echo $date_day; ?></div>
                      <div class="h4 month small"><?php echo $date_month; ?></div>
                    </div>
                    <!-- Cột phải: năm -->
                    <div class="col-6 d-flex align-items-center justify-content-left">
                      <div class="h3 year text-white-50"><?php echo $date_year; ?></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Cột phải: Title -->
              <div class="col-9">
                <a href="<?php echo get_permalink($post['ID']); ?>" class="h2 recent-link d-block text-white">
                  <?php echo esc_html($post['post_title']); ?>
                </a>
              </div>
            </div>
          </div>
          <?php endforeach;
          endif; ?>
        </div>

        <!-- Xem tất cả -->
        <div class="text-center mt-3 border-top pt-2" style="font-size: 2rem;">
          <a href="<?php echo esc_url( home_url('/') ); ?>"
            class="btn-view-all-news text-uppercase font-weight-bold text-white small">
            Xem tất cả tin tức
          </a>
        </div>
      </div>
    </aside>

  </div>


</div>

<?php get_footer(); ?>