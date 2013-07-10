<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen">
    <style>
        body 
        {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
        .navbar-form
        {
            padding-top: 3px;
            padding-right: 10px;
        }
    </style>
    <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/lightbox/css/lightbox.css" rel="stylesheet">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/lightbox/js/jquery-1.7.2.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/lightbox/js/lightbox.js"></script>

    <?php wp_head(); ?>
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <a class="brand" href="/"><?php bloginfo('name'); ?> | <?php bloginfo('description') ?> </a>
         <?php wp_nav_menu( array(
              'container' => false,
              'menu_class' => 'nav',
              'depth' => -1
              )); ?>
        <?php get_search_form(); ?>
      </div>
    </div>         
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span9">