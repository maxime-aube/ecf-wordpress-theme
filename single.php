<?php get_header(); ?>

<main id="main-content" class="post">
	<div class="container container-narrow">
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
      
    <?php the_post_thumbnail('post-thumbnail', ['class' => 'featured-img']); ?>
    <h1><?php the_title(); ?></h1>
    <p class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></p>
    <p><?php the_content(); ?></p>

  <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>