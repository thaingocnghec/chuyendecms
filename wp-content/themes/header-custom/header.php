<?php

/**
 * Custom Header for header-custom theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header-custom">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <a class="logo-text" href="<?php echo home_url(); ?>">Nhom I</a>
      <!-- Search form (desktop) -->


      <form role="search" method="get" class="search-form d-flex" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="search" class="search-field form-control" placeholder="Search…"
          value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit btn btn-default">Submit</button>
      </form>
      <!-- Desktop Menu -->
      <nav class="main-menu d-none d-md-block">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_class'     => 'nav',
          'container'      => false,
        ));
        ?>
      </nav>



      <!-- Icons -->
      <div class="header-icons d-flex align-items-center">
        <a href="<?php echo esc_url(home_url('/?s=')); ?>" class="icon"><i class="fa-solid fa-ellipsis"></i>
        </a>

        <a href="<?php echo esc_url(home_url('/?s=')); ?>" class="icon"><i class="fa fa-search"></i>
        </a>
        <a class="icon"><i class="fa fa-user"></i>


        </a>
      </div>

      <!-- Mobile toggle -->
      <button class="mobile-toggle d-md-none"><i class="fa fa-bars"></i></button>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div class="mobile-menu d-md-none">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class'     => 'mobile-nav',
        'container'      => false,
      ));
      ?>
    </div>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const toggle = document.querySelector('.mobile-toggle');
      const mobileMenu = document.querySelector('.mobile-menu');
      toggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('open');
      });
    });
  </script>

  <?php wp_footer(); ?>
</body>

</html>