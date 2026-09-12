<?php get_header(); ?>

<?php asa_breadcrumb( array(), get_the_title() ); ?>

<section class="hero has-margin">
  <div class="hero-inner narrow">
    <span class="hero-eyebrow"><?php bloginfo( 'name' ); ?></span>
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="section">
  <div class="wrap entry-content">
    <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
    ?>
  </div>
</section>

<?php get_footer(); ?>
