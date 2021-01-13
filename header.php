<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Animate JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
</head>
<body>
  <!-- - - - - - - - - - - - - - - -  Header - - - - - - - - - - - - - - - -->
  <header>
    <div class="container">
      <div class="column">
        <div class="row">
          <a href="<?php echo esc_url(home_url()); ?>" class="logo">WEBCON</a>
          <div class="list">
            <?php
            $args = array(
                'theme_location' => 'primary'
            );
            ?>
            <?php wp_nav_menu(); ?>
          <!--  <ul>
              <li><a class="active" href="index.html">Naslovna</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="blog.html">Radionica</a></li>
              <li><a href="blog.html">Snimci radionica</a></li>
              <li><a href="blog.html">Kontakt</a></li>
            </ul>
          -->
          </div>
        </div>
