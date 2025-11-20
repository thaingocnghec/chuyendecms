<?php

/**
 * Template for displaying single Pages
 * (Hiển thị nội dung của các trang - Giới thiệu, Liên hệ, Chính sách, ...)
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_Custom
 */
get_header();
?>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="page-wrapper">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-white px-0 mb-4">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>

        <!-- Tiêu đề -->
        <h1 class="page-title text-center"><?php the_title(); ?></h1>
        <!-- Ảnh đại diện -->
        <?php if (has_post_thumbnail()) : ?>
        <div class="page-thumbnail text-center mb-4">
          <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
        </div>
        <?php endif; ?>


        <!-- Nội dung -->
        <div class="page-content mt-4">
          <?php the_content(); ?>
        </div>

        <?php endwhile;
        else : ?>
        <p>Không tìm thấy nội dung nào phù hợp.</p>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>