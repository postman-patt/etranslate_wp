<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

<style>

  .front-jumbotron{
    background-image: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/front-jumbotron-orange.png'); ?>);
    padding-bottom:0px;
    min-height:1000px;
    margin-bottom:0px;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    }

  .index-jumbotron{
    padding-bottom:0px;
    min-height:1000px;
    margin-bottom:0px;
    margin-top: 200px;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .tagline .row{
    background-image: url(<?php echo get_theme_mod('tagline_image', get_bloginfo('template_url').'/img/contact-tagline.jpg'); ?>);
    background-position: right center;
    background-repeat: no-repeat;
    background-size: contain;
  }

  .footer-image{
    background-image: linear-gradient(rgba(238,179,48,0.9), rgba(238,179,48,0.9)),  url('<?php bloginfo('template_url'); ?>../img/footer-back.png');
    background-repeat: no-repeat;
    background-position: right top;
  }

</style>

  </head>

<body <?php body_class(); ?>>

    <header>
      <div class="fixed-top">
        <nav class="navbar navbar-light bg-light navbar-expand navbar-expand-lg">
          <div class="container">
              <ul class="top-navbar navbar-nav ml-auto">
                <li class="active">
                  <a class="nav-link" href="#">Contact Us<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Careers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Follow Us</a>
                </li>
              </ul>
          </div>
        </nav>
          <nav class="navbar navbar-expand-lg navbar-light opac pt-sm-2 pt-md-2 pt-lg-2">
            <div class="container align-items-end">
              <div class="main-logo">
                  <a class="navbar-brand py-0 " href="#">
                    <?php
                    if(function_exists('the_custom_logo')) {
                      the_custom_logo();
                    }
                      ?>
                  </a>
                </div>
                <button class="navbar-toggler mb-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                  <span class="navbar-toggler-icon"></span>
                </button>
                  <?php
                  wp_nav_menu( array(
                      'theme_location'    => 'primary',
                      'depth'             => 2,
                      'container'         => 'div',
                      'container_class'   => 'second-navbar collapse navbar-collapse ml-auto',
                      'container_id'      => 'navbarSupportedContent',
                      'menu_class'        => 'nav navbar-nav ml-auto mb-2',
                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'            => new WP_Bootstrap_Navwalker(),
                  ) );
                  ?>
            </div>
          </nav>
      </div>


    </header>
