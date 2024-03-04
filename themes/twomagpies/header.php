<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      <?php 
        if(!is_home()) {
          wp_title(''); 
          echo ' | ';
        }
      ?>
      <?php echo get_bloginfo('name'); ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php get_bloginfo('description'); ?>">

    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/images/tlf.jpg">
    <?php wp_head(); ?>

    <link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_directory'); ?>/images/tlf.jpg" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('template_directory'); ?>/images/tlf.jpg" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('template_directory'); ?>/images/tlf.jpg" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_bloginfo('template_directory'); ?>/images/tlf.jpg" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="logo-top">TWO MAGPIES</div>
                <div class="logo-bottom">Village Café</div>
            </a>
            <div class="d-flex">
                <a class="contact-button" href="tel:07585 998667">
                    <i class="fa-solid fa-phone"></i>
                </a>
            </div>
        </div>
    </nav>