<?php get_header(); ?>

<main id="main-content" class="students">
	<div class="container">
        <h1 class="section-title"><?php post_type_archive_title(); ?></h1>

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <article class="post student">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'student-img']); ?>
            <h2 class="student-name"><?php the_title(); ?></h2>
            <a href="<?php the_permalink(); ?>" class="post__link student-link">En savoir plus</a>
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