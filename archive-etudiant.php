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
        
    </div>
</main>

<?php get_footer(); ?>