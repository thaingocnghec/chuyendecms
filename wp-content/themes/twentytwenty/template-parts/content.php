<div class="container">
  <article id="post-<?php the_ID(); ?>" <?php post_class('news-card-v3 shadow-sm mb-4'); ?>>

    <!-- LEFT: Thumbnail -->
    <div class="news-thumb">
      <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
        <?php else: ?>
        <img class="img-fluid" src="https://via.placeholder.com/800x450?text=No+Image"
          alt="<?php the_title_attribute(); ?>">
        <?php endif; ?>
      </a>
    </div>

    <!-- RIGHT: Content (2 rows) -->
    <div class="news-right">

      <!-- ROW 1: date badge + title + categories -->
      <div class="nr-row1 d-flex">
        <div class="date-badge">
          <div class="day h3"><?php echo get_the_date('d'); ?></div>
          <div class="month h3">THÁNG <?php echo get_the_date('m'); ?></div>
          <div class="year text-primary h3"><?php echo get_the_date('Y'); ?></div>
        </div>

        <div class="nr-head ">
          <a href="<?php the_permalink(); ?>" class="news-title-link">
            <h2 class="news-title text-secondary"><?php the_title(); ?></h2>
          </a>
          <div class="news-meta ">
            <strong class="text-secondary" style="font-size: small;">Categories</strong> <strong class="text-primary"
              style="font-size: small;"><?php the_category(', '); ?></strong>
          </div>
        </div>
      </div>

      <!-- ROW 2: excerpt -->
      <div class="nr-row2">
        <p class="news-excerpt mb-0" style="font-size: medium;">
          <?php echo wp_trim_words(get_the_excerpt(), 50, '…'); ?>
        </p>
      </div>

    </div>
  </article>

</div>