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