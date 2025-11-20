<?php get_header(); ?>

<div class="container-fluid single-content-post mt-5 mb-5 search-page container-wrapper">
  <!-- Search header -->



  <div class="row">
    <!-- trang noi bat -->
    <aside class="col-md-3 mb-4">
      <div class="card featured-posts mb-4 border-0">
        <div class=" card-header bg-white font-weight-bold text-primary border-0" style="font-size: 2rem;">
          Trang nổi bật
        </div>
        <div class="card-body">
          <?php
          // ✅ Query để lấy các PAGE thay vì POST
          $featured_pages = new WP_Query(array(
            'post_type'      => 'page',      // chỉ lấy trang
            'posts_per_page' => 5,           // số lượng trang hiển thị
            'orderby'        => 'menu_order', // sắp xếp theo thứ tự menu
            'order'          => 'ASC'
          ));

          if ($featured_pages->have_posts()) :
            while ($featured_pages->have_posts()) : $featured_pages->the_post(); ?>
          <div class="featured-item mb-4">
            <a href="<?php the_permalink(); ?>" class="featured-thumb d-block mb-2">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
              <?php else : ?>
              <img src="https://via.placeholder.com/600x400?text=No+Image" class="img-fluid rounded"
                alt="<?php the_title(); ?>">
              <?php endif; ?>
            </a>

            <p class="featured-excerpt mb-1">
              <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
            </p>
          </div>
          <?php
            endwhile;
            wp_reset_postdata();
          else :
            echo '<p>Chưa có trang nào được tạo.</p>';
          endif;
          ?>
        </div>
      </div>
    </aside>

    <main class="col-md-6 mb-4">

      <div class="search-results bg-white shadow-sm p-3 rounded text-center ">
        <!-- ket qua tim kiem -->
        <?php if (have_posts()) : ?>
        <h2 class="font-weight-bold ">
          <span class="text-danger">Search:</span> "<?php echo get_search_query(); ?>"
        </h2>
        <?php while (have_posts()) : the_post(); ?>

        <div class="search-item row no-gutters align-items-center mb-4 pb-3 border-bottom">
          <!-- Thumbnail -->
          <div class="col-md-4">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium', ['class' => 'img-fluid rounded']); ?>
              <?php else : ?>
              <img src="https://via.placeholder.com/300x200" class="img-fluid rounded" alt="No image">
              <?php endif; ?>
            </a>
          </div>

          <!-- Date -->
          <div class="col-md-2 text-center date-block">
            <div class="date-inner bg-light rounded py-3">
              <h4 class="mb-0 font-weight-bold text-secondary"><?php echo get_the_date('d'); ?></h4>
              <small class="text-uppercase text-muted">Tháng <?php echo get_the_date('m'); ?></small>
            </div>
          </div>

          <!-- Post Info -->
          <div class="col-md-6 pl-3">
            <h6 class="font-weight-bold">
              <a href="<?php the_permalink(); ?>" class="text-primary">
                <?php the_title(); ?>
              </a>
            </h6>
            <p class="text-secondary small mb-0">
              <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
        <div class="pagination">
          <?php the_posts_pagination(); ?>
        </div>
        <?php else : ?>

        <!-- Không có kết quả -->
        <div class="not-found my-5">
          <h2 class="font-weight-bold">
            <span class="text-danger">Search:</span> "<?php echo get_search_query(); ?>"
            </h4>
            <p class="text-muted">
              We could not find any results for your search. You can give it<br>
              another try through the search form below.
            </p>
        </div>

        <!-- Form tìm kiếm -->
        <div class="search-form-wrapper py-5">
          <div class="container ">
            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="search-form">
              <div class="input-group input-group-lg mx-auto shadow-sm" style="max-width:600px;">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white border-right-0">
                    <i class="fa fa-search text-muted"></i>
                  </span>
                </div>
                <input type="search" class="form-control border-left-0" placeholder="Search topics or keywords" value=""
                  name="s">
                <div class="input-group-append">
                  <button class="btn btn-success px-4" type="submit">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <?php endif; ?>
      </div>


    </main>

    <aside class="col-md-3 mb-4">
      <!-- comment -->
      <div class="comment-widget p-3 shadow-sm bg-white rounded">
        <h2 class="mb-3 font-weight-bold text-primary border-bottom pb-2">Bình luận mới nhất</h2>
        <?php
        $recent_comments = get_comments(array(
          'number' => 3,
          'status' => 'approve',
        ));
        if ($recent_comments) :
          foreach ($recent_comments as $comment) : ?>
        <div class="comment-item mb-3">
          <strong><?php echo $comment->comment_author; ?></strong>
          <p class="mb-1 text-secondary small"><?php echo wp_trim_words($comment->comment_content, 15, '...'); ?></p>
          <a href="<?php echo get_comment_link($comment); ?>" class="small text-primary">Xem bài viết</a>
        </div>
        <?php endforeach;
        else : ?>
        <p>Chưa có bình luận nào.</p>
        <?php endif; ?>
      </div>
    </aside>
  </div>


  <!-- lastest news -->
  <div class="row">
    <section class="latest-news my-5 px-4">
      <h3 class="mb-4 font-weight-bold">Latest News</h3>
      <div class="timeline">
        <?php
        $latest_posts = new WP_Query(['posts_per_page' => 3]);
        if ($latest_posts->have_posts()):
          while ($latest_posts->have_posts()): $latest_posts->the_post(); ?>
        <div class="timeline-item row no-gutters mb-4">
          <div class="col-auto pr-3 text-center position-relative">
            <div class="timeline-dot"></div>
          </div>
          <div class="col">
            <div class="timeline-content">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
                <span class="news-date"><?php echo get_the_date('j F, Y'); ?></span>
              </div>
              <p class="mb-0"><?php echo wp_trim_words(get_the_excerpt(), 80, '...'); ?></p>
            </div>
          </div>
        </div>
        <?php endwhile;
          wp_reset_postdata();
        endif; ?>
      </div>
    </section>
  </div>
</div>

<?php get_footer(); ?>