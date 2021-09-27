<?php get_header(); ?>

<main id="main-content">

	<section class="home-hero inverted">
		<div class="container">
			<div class="hero-content">
				<h1 class="hero-title">Bienvenue sur le site de la promotion DWWM2019-2</h1>
				<a href="<?php echo get_post_type_archive_link('etudiant'); ?>" class="hero-link">Rencontrez nos étudiants</a>
			</div>
		</div>
	</section>

	<!-- Section Actualités -->
<?php
$args = array(
    // 'post_type' => 'blog',
    'category_name' => 'actualite',
    'posts_per_page' => 3,
);

$my_query = new WP_Query( $args );

?>
	<section class="last-news">
		<div class="container">
			<h2 class="section-title">Les dernières actualités</h2>
	<?php
	if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
		
		?><article class="card">
			<?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img']); ?>
			<div class="card-content">
				<p class="card-date"><?php the_time( get_option( 'date_format' ) ); ?></p>
				<h2 class="card-title"><?php the_title(); ?></h2>
				<p class="card-excerpt"><?php the_excerpt(); ?></p>
			</div>
			<a href="<?php the_permalink(); ?>" class="card-link">Lire la suite <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/img/icon-arrow-right.svg" alt="left arrow" aria-hidden="true"></a>
		</article>

	<?php endwhile; endif;
	wp_reset_postdata(); ?>
		</div>
	</section>

	<!-- Section Étudiants -->
	<?php
$args = array(
    'post_type' => 'etudiant',
    'posts_per_page' => 4,
);

$my_query = new WP_Query( $args );

?>
	<section class="students inverted">
		<div class="container">
			<h2 class="section-title">Rencontrez les étudiants</h2>
	<?php
	if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
		
		?><article class="student">
			<?php the_post_thumbnail('post-thumbnail', ['class' => 'student-img']); ?>
			<h2 class="student-name"><?php the_title(); ?></h2>
			<a href="<?php the_permalink(); ?>" class="student-link">En savoir plus</a>
		</article>

	<?php endwhile; endif;
	wp_reset_postdata(); ?>
		</div>
	</section>

	<!-- Section Modules de formation -->
	<?php
$args = array(
    'post_type' => 'module',
    'posts_per_page' => 3,
);

$my_query = new WP_Query( $args );

?>
	<section class="modules">
		<div class="container">
			<h2 class="section-title">Les modules de la formation</h2>
	<?php
	if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
		
		?><article class="card">
			<?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img']); ?>
			<div class="card-content">
				<h2 class="card-title"><?php the_title(); ?></h2>
				<p class="card-excerpt"><?php the_excerpt(); ?></p>
			</div>
			<a href="<?php the_permalink(); ?>" class="card-link">Lire la suite <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/img/icon-arrow-right.svg" alt="left arrow" aria-hidden="true"></a>
		</article>

	<?php endwhile; endif;
	wp_reset_postdata(); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
