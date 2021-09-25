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

        <!-- on s'occupera de la pagination si y'a le temps -->
        
        <!-- <nav class="pagination">
            <ul class="pagination-list">
                <li class="pagination-item">
                    <a href="#" class="pagination-link" aria-label="Précédent">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="screen-reader-text">Précédent</span>
                    </a>
                </li>
                <li class="pagination-item current">
                    <a href="#" class="pagination-link">1</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link">2</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link">3</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link" aria-label="Suivant">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="screen-reader-text">Suivant</span>
                    </a>
                </li>
            </ul>
        </nav> -->
    </div>
</main>

<?php get_footer(); ?>