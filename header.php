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
  <header class="container">
    <div class="row">
        <div class="four columns">
              <h1><a href="<?php $url = home_url('/');echo $url;?>"
                  <?php bloginfo('name'); ?>
              </a></h1>
        </div>
          <div class="eight columns">
            <?php
              wp_nav_menu(array(
                  'sort_column' => 'menu_order',
                  'container_class' => 'blank-menu-header'
              ));
              ?>
            </div>
      </header>
    </div>
    <div class="container">
