<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="main-header shadow-sm bg-white mw-100">
    <div class="container-fluid"">
      <nav class=" navbar navbar-expand-lg navbar-light py-2">

      <!-- LOGO / SITE TITLE -->
      <a class=" navbar-brand font-weight-bold text-dark title-lg" style="font-size: 2rem;"
        href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a>

      <!-- Nút mở menu trên mobile -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- FORM SEARCH -->
      <form role="search" method="get" class="form-inline my-2 my-lg-0 mr-3" action="<?php echo home_url('/'); ?>">
        <input class="form-control form-control-sm mr-2" type="search" name="s" placeholder="Search"
          aria-label="Search">
        <button class="btn btn-outline-secondary btn-sm" type="submit">Submit</button>
      </form>
      <!-- MENU CHÍNH -->
      <div class="collapse navbar-collapse text-md " id="navbarMenu">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'navbar-nav mx-auto',
          'fallback_cb' => '__return_false',
          'depth' => 2,
          'menu_class' => 'navbar-nav mx-auto',
        ]);
        ?>



        <!-- ICONS -->
        <ul class="navbar-nav align-items-center">
          <li class="nav-item mr-3">
            <a href="<?php echo home_url('/?s=search something.....here'); ?>" class="nav-link text-dark"
              title="Search">
              <i class="fas fa-search"></i>
              <span class="d-none d-lg-inline ml-1">Search</span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <?php if (is_user_logged_in()): ?>
            <?php $current_user = wp_get_current_user(); ?>
            <a href="#" class="nav-link dropdown-toggle text-dark" data-toggle="dropdown">
              <i class="fas fa-user-circle"></i>
              <span class="d-none d-lg-inline ml-1"><?php echo esc_html($current_user->display_name); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?php echo admin_url(); ?>" class="dropdown-item">Dashboard</a>
              <a href="<?php echo wp_logout_url(home_url()); ?>" class="dropdown-item text-danger">Logout</a>
            </div>
            <?php else: ?>
            <a href="<?php echo wp_login_url(); ?>" class="nav-link text-dark">
              <i class="fas fa-user-circle"></i>
              <span class="d-none d-lg-inline ml-1">Account</span>
            </a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
      </nav>
    </div>
  </header>