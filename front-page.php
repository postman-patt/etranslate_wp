<?php get_header(); ?>

<!-- Jumbotron -->

<section class="main">
  <!--Bulletin and Quick Updates-->

  <div class="update-area">
      <?php if(is_active_sidebar('message')) : ?>
        <?php dynamic_sidebar('message'); ?>
      <?php endif; ?>
  </div>

  <div class="front-jumbotron jumbotron jumbotron-fluid d-flex align-items-center pb-5">
    <div class="container">
      <h1 class="display-4"><strong><?php echo get_theme_mod('showcase_heading', 'Business Globalisation and Translation Experts');  ?></strong></h1>
      <p><?php echo get_theme_mod('showcase_text', 'Empowering organizations with technologies and solutions to secure linguistically and culturally diverse customers.');  ?></p>
      <button class="btn btn-dark my-2" type="submit" href="<?php echo get_theme_mod('btn_url', 'https://etranslate.biz');  ?>"><?php echo get_theme_mod('btn_text', 'Get a Quote');  ?></button>
      <button class="btn btn-dark my-2" type="submit" ref="<?php echo get_theme_mod('btn_url2', 'https://etranslate.biz');  ?>"><?php echo get_theme_mod('btn_text2', 'Learn More');  ?></button>
    </div>
  </div>
</section>

<!-- Body Section -->
<section class="boxes">
  <div class="container">
    <div class="row">
        <div class="col-md-4 my-3">
              <?php if(is_active_sidebar('box1')) : ?>
                <?php dynamic_sidebar('box1'); ?>
              <?php endif; ?>
        </div>
        <div class="col-md-4 my-3">
              <?php if(is_active_sidebar('box2')) : ?>
                <?php dynamic_sidebar('box2'); ?>
              <?php endif; ?>
        </div>
        <div class="col-md-4 my-3">
              <?php if(is_active_sidebar('box3')) : ?>
                <?php dynamic_sidebar('box3'); ?>
              <?php endif; ?>
        </div>
    </div>
  </div>
</section>

<!-- Tagline -->

<section class="tagline">
  <div class="container">
    <div class="row py-5 align-items-end">
      <div class="col-sm-6 col-lg-6 col-md-6">
          <p>
            <?php
            $post_id = 169;
            $queried_post = get_post($post_id);
            echo $queried_post->post_content;
            ?>
          </p>
      </div>
      <div class="col-sm-3 col-lg-3 col-md-3">
        <button class="btn btn-dark" type="submit">Get a Quote</button>
      </div>
    </div>
  </div>
</section>

<section class="tagline2">
  <div class="container">
    <div class="row py-5 d-flex align-items-center">
      <div class="col-sm-4 col-lg-4 col-md-4 d-flex justify-content-center">
        <?php
        $post_ID= 174;
        $post_url=  get_permalink($post_ID);
        $queried_post = get_post($post_ID);
        ?>
        <img src="<?php
        if (has_post_thumbnail($post_ID)) {
           echo get_the_post_thumbnail($post_ID,'medium');
        }
        ?>"
      </div>
      <div class="col-sm-7 col-lg-7 col-md-7 mt-5">
        <p>
          <?php
          $post_id = 174;
          $queried_post = get_post($post_id);
          echo $queried_post->post_content;
          ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Client Gallery-->

<section class="client-showcase">
  <div class="container">
    <?php if(is_active_sidebar('clients')) : ?>
      <?php dynamic_sidebar('clients'); ?>
    <?php endif; ?>
  </div>
</section>


</body>

<?php get_footer(); ?>
