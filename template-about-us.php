<?php /*

Template Name: About Us

*/ ?>

<?php get_header(); ?>

<!-- Jumbotron -->
    <section class="main">
      <?php if ( has_post_thumbnail() ): ?>
<?php
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
?>
      <div class="index-jumbotron jumbotron jumbotron-fluid d-flex align-items-end" style="background-image:linear-gradient(rgba(255,255,255,1), rgba(0,0,0,0.5)), url('<?php echo $image[0]; ?>');">
<?php endif; ?>
        <div class="container">
          <h1 class="page-heading display-4"><?php echo get_the_title(); ?></h1>
        </div>
      </div>
    </section>

<!-- Body Section -->
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : (the_post()); ?>
        <section class="content">
              <div class="content-block">
                <?php the_content(); ?>
              </div>
          <?php endwhile; ?>
          <?php else: ?>
            <p><?php __('No Posts Found') ?></p>
          <?php endif; ?>
        </section>

</body>

<?php get_footer(); ?>
