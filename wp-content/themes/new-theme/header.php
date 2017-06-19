<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>

  <header>
    <div class="head">
      <a href="<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a> </br> <strong>  ( use : bloginfo("name");)  </strong>
      <p><?php bloginfo("description"); ?> </br> <strong>  ( use : bloginfo('description');)  </strong></p>
    </div>

    <!-- Menu -->
    <div class="menu">
          <?php
            $args = array('theme_location' => 'main_menu');
            wp_nav_menu($args);
           ?>
          </br>  <strong>  ( use : wp_nav_menu();)  </strong>
    </div>
    <!-- end menu -->

  </header>
