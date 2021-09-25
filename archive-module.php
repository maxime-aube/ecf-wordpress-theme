<?php get_header(); ?>

<main id="main-content" class="modules">
	<div class="container container-narrow">

        <h1 class="modules-title"><?php post_type_archive_title(); ?></h1>

        <div class="module-desc">
            <p>Développeur web est actuellement l’un des métiers informatiques les plus recherchés. C’est l’occasion d’envisager un projet de reconversion professionnelle pour devenir développeur web.</p>
            <p>La formation développeur web du CEFIM vous apprend à manier les principaux langages de programmation web, les outils et méthodes, appliqués à des projets web concrets.</p>
	    </div>

        <div class="container">

            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <article class="post card">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img']); ?>
                <div class="card-content">
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <p class="card-excerpt"><?php the_excerpt(); ?></p>
                </div>
                <p><a href="<?php the_permalink(); ?>" class="post__link card-link">Lire la suite <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></a></p>
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
    </div>
</main>

<?php get_footer(); ?>





