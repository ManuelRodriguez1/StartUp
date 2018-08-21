<?php
/*
Template Name: Página Home2
*/

 get_header(); ?>
<main class="wrap">
    <?php dynamic_sidebar( 'Home2' ); ?>
  <section class="content-area content-thin">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
        <!-- <header>
          <h2><?php// the_title(); ?></h2>
          By: <?php //the_author(); ?>
          <h3>PAGe</h3>
        </header> -->
        <?php the_content(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Y los post!!!</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>