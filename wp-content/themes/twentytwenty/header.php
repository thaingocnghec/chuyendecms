<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php
  wp_body_open();
  ?>

  <header class="site-header py-2 border-bottom">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand font-weight-bold">
        Demo
      </a>
      <!-- Search form (desktop) -->
      <form role="search" method="get" class="d-none d-md-block mr-3" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="search" class="form-control" placeholder="Search..." name="s" value="<?php the_search_query(); ?>">
      </form>
      <!-- Desktop Menu -->
      <nav class="d-none d-md-block flex-grow-1 text-center">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'nav justify-content-center',
        ]);
        ?>
      </nav>

      <!-- Search icon + account icon -->
      <div class="header-icons d-flex align-items-center">



        <!-- Search icon (mobile) -->
        <button class="btn d-md-none mr-2">
          <i class="fa fa-search"></i>
        </button>

        <!-- Account -->
        <a href="<?php echo esc_url(home_url('/my-account')); ?>" class="btn">
          <i class="fa fa-user"></i>
          <?php if (is_user_logged_in()) : // Nếu người dùng đã đăng nhập 
          ?>

            <li class="nav-item dropdown">
              <a class="nav-link nav-icon-item dropdown-toggle" href="#" id="accountDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-lg"></i>
                <span class="nav-icon-text">Account</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
                <a class="dropdown-item" href="<?php echo get_edit_user_link(); ?>">Hồ sơ</a>
                <a class="dropdown-item" href="<?php echo admin_url(); ?>">Bảng điều khiển</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo wp_logout_url(get_permalink()); ?>">Đăng xuất</a>
              </div>
            </li>

          <?php else: // Nếu người dùng CHƯA đăng nhập 
          ?>

            <li class="nav-item">
              <a class="nav-link nav-icon-item" href="<?php echo wp_login_url(get_permalink()); ?>">
                <i class="fas fa-sign-in-alt fa-lg"></i> <?php // Icon đăng nhập 
                                                          ?>
                <span class="nav-icon-text">Login</span>
              </a>
            </li>

          <?php endif; // Kết thúc câu lệnh điều kiện 
          ?>
        </a>

        <!-- Mobile Toggle -->
        <button class="btn d-md-none ml-2" data-toggle="collapse" data-target="#mobileMenu">
          <i class="fa fa-bars"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div class="collapse d-md-none" id="mobileMenu">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'nav flex-column p-3',
      ]);
      ?>
    </div>
  </header>


  <?php
  // Output the menu modal.
  get_template_part('template-parts/modal-menu');
