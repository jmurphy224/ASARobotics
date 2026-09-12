<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="topbar-inner">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="brand-mark">ASA</div>
      <div class="brand-name">All Saints Robotics<span>FLL Explore · FLL Challenge · FTC</span></div>
    </a>
    <nav class="primary-nav" aria-label="Primary">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'container'      => false,
        'items_wrap'     => '<ul>%3$s</ul>',
        'fallback_cb'    => false,
      ) );
      ?>
      <a href="<?php echo esc_url( home_url( '/join/' ) ); ?>" class="nav-cta">Join a Team</a>
    </nav>
  </div>
</header>
