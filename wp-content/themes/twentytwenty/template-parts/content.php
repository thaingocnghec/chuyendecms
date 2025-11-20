<?php
/**
 * Hiển thị bài viết dạng thẻ tin tức (chuẩn mẫu FIT TDC - Categories giữa)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
?>

<article <?php post_class('post-card-wrapper'); ?>>
  <div class="post-card">

    <!-- Ảnh bài viết -->
    <div class="post-thumb">
      <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('large', ['class' => 'post-img']); ?>
        <?php else : ?>
          <img src="https://via.placeholder.com/600x360?text=No+Image" alt="<?php the_title(); ?>" class="post-img" />
        <?php endif; ?>
      </a>
    </div>

    <!-- Nội dung -->
    <div class="post-content">
      
      <!-- Header: ngày tháng + tiêu đề -->
      <div class="post-header">
        <div class="post-date-box">
          <div class="post-day"><?php echo get_the_date('d'); ?></div>
          <div class="post-date-meta">
            <div class="post-month">THÁNG <?php echo get_the_date('m'); ?></div>
            <div class="post-year"><?php echo get_the_date('Y'); ?></div>
          </div>
        </div>

        <div class="post-header-right">
          <h2 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>

          <!-- Danh mục nằm giữa theo chiều cao ô ngày tháng -->
          <div class="post-meta">
            <span class="label">Categories</span>
            <?php
              $categories = get_the_category();
              if ($categories) {
                $links = [];
                foreach ($categories as $cat) {
                  $links[] = '<a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a>';
                }
                echo implode(', ', $links);
              }
            ?>
          </div>
        </div>
      </div>

      <!-- Tóm tắt -->
      <div class="post-excerpt">
        <?php echo wp_trim_words(get_the_excerpt(), 35, '...'); ?>
      </div>
    </div>
  </div>
</article>

<style>
/* ==== Tổng thể ==== */
.post-card-wrapper {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto 36px auto;
  padding: 0 40px;
  box-sizing: border-box;
}

.post-card {
  display: grid;
  grid-template-columns: 5fr 7fr;
  background: #fff;
  border: 1px solid #e5e7eb;
  border-radius: 10px;
  box-shadow: 0 3px 12px rgba(0,0,0,0.05);
  overflow: hidden;
  transition: 0.3s ease;
}
.post-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 22px rgba(0,0,0,0.08);
}

/* ==== Ảnh ==== */
.post-thumb {
  overflow: hidden;
  height: 230px;
}
.post-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}
.post-card:hover .post-img {
  transform: scale(1.05);
}

/* ==== Nội dung ==== */
.post-content {
  padding: 20px 34px 24px 34px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

/* ==== Header ==== */
.post-header {
  display: flex;
  align-items: flex-start;
  margin-bottom: 10px;
  gap: 16px;
}

/* ==== Ô ngày tháng ==== */
.post-date-box {
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  border-right: 1px solid #e5e7eb;
  border-bottom: 1px solid #e5e7eb;
  padding: 6px 12px;
  max-width: 110px;
  margin: 0;
}
.post-day {
  font-size: 2.2rem;
  font-weight: 700;
  color: #1d4ed8;
  line-height: 1;
  margin-right: 8px;
}
.post-date-meta {
  display: flex;
  flex-direction: column;
  justify-content: center;
  line-height: 1.2;
}
.post-month {
  text-transform: uppercase;
  font-size: 0.75rem;
  color: #6b7280;
  font-weight: 600;
}
.post-year {
  font-size: 0.8rem;
  color: #2563eb;
  font-weight: 600;
}

/* ==== Tiêu đề + Categories ==== */
.post-header-right {
  flex: 1;
}

.post-title {
  display: inline-block;
  font-size: 1.25rem;
  font-weight: 700;
  color: #111827;
  margin: 0;
  line-height: 1.3;
  vertical-align: middle;
}
.post-title a {
  color: inherit;
  text-decoration: none;
}
.post-title a:hover {
  color: #1d4ed8;
}

/* ==== Categories ngang hàng, có khoảng cách nhỏ ==== */
.post-meta {
  display: inline-block;
  margin-left: 12px;
  padding-left: 12px;
  border-left: 1px solid #d1d5db;
  font-size: 0.9rem;
  color: #4b5563;
  vertical-align: middle;
}
.post-meta .label {
  font-weight: 600;
  color: #1e3a8a;
  margin-right: 4px;
}
.post-meta a {
  color: #2563eb;
  font-weight: 600;
  text-decoration: none;
}
.post-meta a:hover {
  text-decoration: underline;
}

/* ==== Tóm tắt ==== */
.post-excerpt {
  font-size: 0.95rem;
  color: #374151;
  line-height: 1.6;
  margin-top: 10px;
  max-width: 720px;
}

/* ==== Responsive ==== */
@media (max-width: 992px) {
  .post-card {
    grid-template-columns: 1fr;
  }
  .post-thumb {
    height: 200px;
  }
  .post-content {
    padding: 20px;
  }
}
</style>
