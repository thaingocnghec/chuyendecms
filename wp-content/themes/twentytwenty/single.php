<?php
/**
 * Custom Single Post Template (No Image - Clean News Style)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */

get_header();
?>

<style>
/* ===============================
   SINGLE POST PAGE - CLEAN STYLE
   =============================== */
.single-layout {
    background-color: #f5f4f1;
    padding: 70px 0;
    font-family: "Segoe UI", sans-serif;
}

/* Card tổng */
.post-box {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
    padding: 40px;
}

/* ===============================
   BÀI VIẾT CHÍNH (Không có ảnh)
   =============================== */
.news-card {
    background: #fdfcf9;
    border-radius: 14px;
    border: 1px solid rgba(0,0,0,0.07);
    box-shadow: 0 15px 35px rgba(0,0,0,0.06);
    padding: 36px 40px;
    margin-bottom: 40px;
    position: relative;
}

/* Ô ngày tròn vàng */
.news-card .date-circle {
    position: absolute;
    top: 28px;
    right: 40px;
    background: linear-gradient(145deg, #ffde59 0%, #f9cf2f 100%);
    width: 72px;
    height: 72px;
    border-radius: 50%;
    color: #3a2c10;
    font-weight: 700;
    text-align: center;
    line-height: 1.05;
    box-shadow: 0 8px 18px rgba(255, 193, 7, 0.35);
    border: 3px solid #fff7d1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.news-card .date-circle .day {
    font-size: 22px;
}
.news-card .date-circle .month {
    font-size: 13px;
    margin-top: 4px;
    letter-spacing: 0.04em;
}
.news-card .date-circle .year {
    font-size: 12px;
    margin-top: 2px;
    letter-spacing: 0.08em;
}

/* Tiêu đề */
.news-card h1 {
    font-size: 26px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 18px;
    padding-right: 110px;
}

/* Meta */
.news-card .meta {
    font-size: 13px;
    color: #8c8c8c;
    margin-bottom: 18px;
    letter-spacing: 0.02em;
}

/* Nội dung */
.news-card .text {
    font-size: 16px;
    color: #3a3a3a;
    line-height: 1.9;
}
.news-card .text p {
    margin-bottom: 16px;
}
.news-card .text p:first-of-type {
    font-style: italic;
    color: #6b6b6b;
}
.news-card .text em {
    color: #666;
}

/* Nguồn */
.news-card .source {
    text-align: right;
    font-style: italic;
    color: #6f6f6f;
    font-size: 14px;
    margin-top: 20px;
}

/* ===============================
   SIDEBAR TRÁI - GIỐNG MẪU TRÀN VIỀN
   =============================== */
.sidebar-left {
    background: repeating-linear-gradient(
        45deg,
        #f9f9f9,
        #f9f9f9 6px,
        #f7f7f7 6px,
        #f7f7f7 12px
    ); /* nền caro sáng */
    border-radius: 10px;
    border: 1px solid #eaeaea;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    padding: 20px;
    font-family: "Segoe UI", sans-serif;
}

/* Tiêu đề */
.sidebar-left h5 {
    font-weight: 700;
    font-size: 20px;
    margin-bottom: 10px;
    color: #222;
    border-bottom: 2px dotted #d8d8d8;
    padding-bottom: 4px;
}

/* Ô trang trí mảnh dưới tiêu đề */
.sidebar-left::after {
    content: "";
    display: block;
    height: 10px;
    background: repeating-linear-gradient(
        45deg,
        #fafafa,
        #fafafa 5px,
        #f5f5f5 5px,
        #f5f5f5 10px
    );
    border-radius: 4px;
    margin: 8px 0 15px 0;
}

/* Danh sách danh mục – TRÀN VIỀN */
.sidebar-left ul {
    list-style: none;
    margin: 0;
    padding: 0;
    background: transparent;
    border: none;
}

/* Từng mục danh mục */
.sidebar-left ul li {
    position: relative;
    padding: 10px 0 10px 26px;
    border-bottom: 1px solid #e0e0e0;
}
.sidebar-left ul li:last-child {
    border-bottom: none;
}

/* Dấu chấm vàng */
.sidebar-left ul li::before {
    content: "•";
    position: absolute;
    left: 8px;
    top: 8px;
    font-size: 22px;
    color: #ffc107;
    line-height: 1;
}

/* Liên kết danh mục */
.sidebar-left ul li a {
    color: #1a73e8;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s ease;
}
.sidebar-left ul li a:hover {
    color: #0d47a1;
    text-decoration: underline;
}

/* ===============================
   SIDEBAR PHẢI (RECENT POSTS - GIỐNG MẪU)
   =============================== */
.sidebar-right {
  background: #45c2cb;
  border-radius: 10px;
  color: #fff;
  padding: 0;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  overflow: hidden;
  font-family: "Segoe UI", sans-serif;
}

/* Danh sách bài viết */
.sidebar-right .recent-posts {
  padding: 22px 25px; /* tăng padding để cao hơn */
}

/* Mỗi dòng bài viết */
.sidebar-right .recent-item {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  border-bottom: 1px solid rgba(255,255,255,0.3);
  padding: 14px 0; /* tăng chiều cao mỗi dòng */
  gap: 20px; /* đều giữa ngày và tiêu đề */
}
.sidebar-right .recent-item:last-child {
  border-bottom: none;
}

/* Ô ngày tháng */
.sidebar-right .recent-date {
  width: 50px; /* rộng hơn để đều */
  text-align: center;
  font-weight: 600;
  line-height: 1.2;
  color: #fff;
  flex-shrink: 0;
}
.sidebar-right .recent-date .day {
  font-size: 17px;
  font-weight: bold;
  display: block;
}
.sidebar-right .recent-date .month {
  font-size: 12px;
  opacity: 0.95;
  display: block;
  margin-top: 3px;
}

/* Tiêu đề bài viết */
.sidebar-right a {
  color: #fff;
  font-weight: 500;
  text-decoration: none;
  font-size: 0.92rem;
  line-height: 1.4;
  transition: color 0.2s;
}
.sidebar-right a:hover {
  color: #ffe97f;
  text-decoration: underline;
}

/* Dòng “Xem tất cả tin tức” */
.sidebar-right .view-all {
  background: rgba(255,255,255,0.15);
  text-align: center;
  padding: 14px 0; /* cao hơn để đều */
  font-weight: 700;
  font-size: 0.9rem;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  color: #fff;
  border-top: 1px solid rgba(255,255,255,0.25);
  transition: background 0.25s;
}
.sidebar-right .view-all:hover {
  background: rgba(255,255,255,0.25);
}

/* ===============================
   PREV / NEXT POSTS
   =============================== */
.custom-prev-next {
    margin-top: 50px;
    padding-top: 32px;
    border-top: 1px solid #e3e3e3;
}
.prev-next-item {
    display: flex;
    align-items: flex-start;
    gap: 22px;
    margin-bottom: 26px;
}
.prev-next-item:last-child {
    margin-bottom: 0;
}
.prev-next-date {
    position: relative;
    padding-left: 22px;
    padding-right: 12px;
    display: flex;
    align-items: center;
    gap: 18px;
    color: #444;
    font-weight: 600;
    letter-spacing: 0.08em;
}
.prev-next-date::before,
.prev-next-date::after {
    content: '';
    position: absolute;
    left: 8px;
    width: 1px;
    background: #d8d8d8;
}
.prev-next-date::before {
    top: -20px;
    height: 18px;
}
.prev-next-date::after {
    bottom: -20px;
    height: 18px;
}
.prev-next-date .date-stack {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 13px;
    color: #1f2933;
}
.prev-next-date .date-stack span {
    line-height: 1;
}
.prev-next-date .date-stack .day {
    position: relative;
    display: block;
    padding-bottom: 10px;
}
.prev-next-date .date-stack .day::after {
    content: '/';
    position: absolute;
    bottom: -7px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 11px;
    color: #9ca3af;
}
.prev-next-date .date-stack .month {
    display: block;
    margin-top: 6px;
}
.prev-next-date .year {
    font-size: 13px;
    color: #9ca3af;
}
.prev-next-title {
    text-decoration: none;
    font-size: 16px;
    color: #1f1f1f;
    font-weight: 500;
    transition: color 0.2s ease;
}
.prev-next-title:hover {
    color: #2563eb;
    text-decoration: none;
}

@media (max-width: 576px) {
    .prev-next-item {
        flex-direction: column;
        gap: 12px;
    }
    .prev-next-date {
        padding-left: 18px;
    }
}

/* ===============================
   COMMENT SECTION
   =============================== */
.comment-section {
    margin-top: 60px;
    padding-top: 30px;
    border-top: 1px solid #eee;
}
.comment-section h3 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
}
</style>

<section class="single-layout">
    <div class="container">
        <div class="row gy-4">

            <!-- SIDEBAR TRÁI -->
            <div class="col-md-3">
                <div class="sidebar-left">
                    <h5>Categories</h5>
                    <?php if (is_active_sidebar('sidebar-1')) : ?>
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    <?php else : ?>
                        <p class="text-muted">No categories available.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- NỘI DUNG CHÍNH -->
            <div class="col-md-6">
                <div class="post-box">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php 
                            $day   = get_the_date('d');
                            $month = get_the_date('m');
                            $year  = get_the_date('y');
                        ?>

                        <div class="news-card">
                            <div class="date-circle">
                                <div class="day"><?php echo esc_html($day); ?></div>
                                <div class="month"><?php echo esc_html($month); ?></div>
                                    <div class="year">'<?php echo esc_html($year); ?></div>
                            </div>

                            <h1><?php the_title(); ?></h1>
                            <div class="meta">
                                Đăng ngày: <?php echo get_the_date('d/m/Y'); ?> | 
                                Tác giả: <?php the_author(); ?>
                            </div>

                            <div class="text">
                                <?php the_content(); ?>
                            </div>

                            <div class="source">(Theo <?php echo get_bloginfo('name'); ?>)</div>
                        </div>

                        <!-- PREV / NEXT POSTS -->
                        <div class="custom-prev-next">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            <?php if ($prev_post): ?>
                                <div class="prev-next-item">
                                    <div class="prev-next-date">
                                        <span class="date-stack">
                                            <span class="day"><?php echo get_the_date('d', $prev_post); ?></span>
                                            <span class="month"><?php echo get_the_date('m', $prev_post); ?></span>
                                        </span>
                                        <span class="year">'<?php echo get_the_date('y', $prev_post); ?></span>
                                    </div>
                                    <a href="<?php echo get_permalink($prev_post); ?>" class="prev-next-title">
                                        <?php echo get_the_title($prev_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php if ($next_post): ?>
                                <div class="prev-next-item">
                                    <div class="prev-next-date">
                                        <span class="date-stack">
                                            <span class="day"><?php echo get_the_date('d', $next_post); ?></span>
                                            <span class="month"><?php echo get_the_date('m', $next_post); ?></span>
                                        </span>
                                        <span class="year">'<?php echo get_the_date('y', $next_post); ?></span>
                                    </div>
                                    <a href="<?php echo get_permalink($next_post); ?>" class="prev-next-title">
                                        <?php echo get_the_title($next_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- COMMENT SECTION -->
                        <div class="comment-section">
                            <?php comments_template(); ?>
                        </div>

                    <?php endwhile; endif; ?>
                </div>
            </div>

          <!-- SIDEBAR PHẢI -->
<div class="col-md-3">
  <div class="sidebar-right">
    <div class="recent-posts">
      <?php
      $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 3,
        'post_status' => 'publish'
      ));
      if (!empty($recent_posts)) :
        foreach ($recent_posts as $post) : ?>
          <div class="recent-item">
            <div class="recent-date">
              <div class="day"><?php echo get_the_date('d', $post['ID']); ?></div>
              <div class="month"><?php echo get_the_date('m', $post['ID']); ?></div>
            </div>
            <a href="<?php echo get_permalink($post['ID']); ?>">
              <?php echo esc_html($post['post_title']); ?>
            </a>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <p>Chưa có bài viết nào.</p>
      <?php endif; ?>
    </div>

    <div class="view-all">
      <a href="<?php echo get_category_link(get_cat_ID('Tin tức')); ?>" style="color: inherit; text-decoration: none;">
  Xem tất cả tin tức
</a>

    </div>
  </div>
</div>


        </div>
    </div>
</section>

<?php get_footer(); ?>
