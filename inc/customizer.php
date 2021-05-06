<?php
function wpb_customize_register($wp_customize){
  // Showcase Section
    $wp_customize->add_section('jumbotron', array(
      'title' => __('Showcase', 'etranslate'),
      'descrption' => sprintf(__('Options for showcase', 'etranslate')),
      'priority' => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default' => get_bloginfo('template_directory').'/img/front-jumbotron-orange.png',
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label' => __('Showcase Image', 'etranslate'),
      'section' => 'jumbotron',
      'settings' => 'showcase_image',
      'priority' => 5
    )));

    $wp_customize->add_setting('showcase_heading', array(
      'default' => _x('Business Globalisation and Translation Experts', 'etranslate'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label' => __('Heading', 'etranslate'),
      'section' => 'jumbotron',
      'priority' => 1
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default' => _x('Empowering organizations with technologies and solutions to secure linguistically and culturally diverse customers.', 'etranslate'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label' => __('Heading', 'etranslate'),
      'section' => 'jumbotron',
      'priority' => 2
    ));
    $wp_customize->add_setting('btn_url', array(
      'default' => _x('http://etranslate.biz', 'etranslate'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label' => __('Button URL', 'etranslate'),
      'section' => 'jumbotron',
      'priority' => 3
    ));
    $wp_customize->add_setting('btn_text', array(
      'default' => _x('Get a Quote', 'etranslate'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label' => __('Button Text', 'etranslate'),
      'section' => 'jumbotron',
      'priority' => 4
    ));
    $wp_customize->add_setting('btn_url2', array(
      'default' => _x('http://etranslate.biz', 'etranslate'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url2', array(
      'label' => __('Button URL 2', 'etranslate'),
      'section' => 'jumbotron',
      'priority' => 3
    ));
    $wp_customize->add_setting('btn_text2', array(
      'default' => _x('Learn More', 'etranslate'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text2', array(
      'label' => __('Button Text 2', 'etranslate'),
      'section' => 'jumbotron',
      'priority' => 4
    ));

    //Tagline Image

    $wp_customize->add_setting('tagline-image', array(
      'default' => get_bloginfo('template_directory').'/img/contact-tagline.jpg',
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'tagline-image', array(
      'label' => __('Tagline Image', 'etranslate'),
      'section' => 'jumbotron',
      'settings' => 'tagline-image',
      'priority' => 6
    )));


}
add_action('customize_register', 'wpb_customize_register');
