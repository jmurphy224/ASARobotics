<?php
/**
 * Fallback template. In normal use, front-page.php and the page-{slug}.php
 * templates handle every page on this site, so this rarely renders — it's
 * here because WordPress requires every theme to have an index.php.
 */
get_header();
?>
<section class="section wrap">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <h1><?php the_title(); ?></h1>
      <div class="entry-content"><?php the_content(); ?></div>
    </article>
  <?php endwhile; else : ?>
    <p>Nothing found.</p>
  <?php endif; ?>
</section>
<?php get_footer(); ?>
