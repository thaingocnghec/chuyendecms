<?php

/**
 * File template search result
 */

get_header(); // Gọi file header.php
?>

<div class="container search-results-container py-5">

  <?php if (have_posts()) : ?>

  <header class="page-header text-center mb-5">
    <h1 class="page-title">
      <?php
        /* translators: %s: search query. */
        printf(esc_html__('Search Results for: %s', 'your-theme-domain'), '<span class="search-query">"' . get_search_query() . '"</span>');
        ?>
    </h1>
  </header><?php
              while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', 'excerpt');
              ?>

  <?php
              endwhile;

              the_posts_navigation(); // Hiển thị phân trang (Next/Previous)
    ?>

  <?php else : ?>

  <div class="no-results-message text-center mb-5">
    <h2>
      <span class="text-danger">Search:</span>
      <span class="search-query">"<?php echo esc_html(get_search_query()); ?>"</span>
    </h2>
    <p class="lead text-muted">
      <?php esc_html_e('We could not find any results for your search. You can give it another try through the search form below.', 'your-theme-domain'); ?>
    </p>
  </div>

  <div class="search-form-page">
    <?php
      get_search_form();
      ?>
  </div>


  <?php endif; ?>

</div><?php
      get_footer();