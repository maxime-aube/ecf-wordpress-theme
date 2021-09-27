<?php get_header(); ?>

<main id="main-content" class="last-news">
	<div class="container">

        <h1 class="section-title"><?php post_type_archive_title(); ?></h1>

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <article class="post card">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img']); ?>
            <div class="card-content">
                <p class="card-date"><?php the_time( get_option( 'date_format' ) ); ?></p>
                <h2 class="card-title"><?php the_title(); ?></h2>
                <p class="card-excerpt"><?php the_excerpt(); ?></p>
            </div>
            <a href="<?php the_permalink(); ?>" class="post__link card-link">Lire la suite <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
        </article>

        <?php endwhile; endif; ?>

    </div>
</main>

<?php get_footer(); ?>