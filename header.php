<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- Links to our Style.css file -->
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

  <!--
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script src-"custom.js"></script>
-->
<body>
<div class="header-wrapper">
  <div class="row">
      <div class="ten columns">
        <?php dynamic_sidebar('header-one'); ?>
      </div>
    </div>
<!--
  <div id="social">
    <ul>
      <li><a href="https://www.linkedin.com/in/rebeccaashleychilders" target="_blank"><img src="images/linkedin.png" width="24" height="24" alt="linkedin" title="linkedin"/></a></li>
      <li><a href="https://www.facebook.com/ashley.childers2" target="_blank"><img src="images/facebook.png" width="24" height="24" alt="facebook" title="facebook"/></a></li>
      <li><a href="https://www.instagram.com/ashleyccohen/" target="_blank"><img src="images/instagram.png" width="24" height="24" alt="instagram" title="instagram"/></a></li>
    </ul>
  </div> -->
  <header class="container">
    <?php if ( get_header_image() ) : ?>
    <div class="site-header">
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a></h1>
    </div>
<?php endif; ?>
      <div class="row">
          <div class="tweleve columns">
            <div class="blank-menu-header">
            <?php
              wp_nav_menu(array(
                  'sort_column' => 'menu_order',
                  'container_class' => 'blank-menu-header'
              ));
              ?>
            </div>
          </div>
          </div>
      </header>
    </div>
  </div>
    <div class="container">
