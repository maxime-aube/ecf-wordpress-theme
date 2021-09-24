<?php get_header(); ?>

	<div id="content" class="site-content">

        <main id="primary" class="content-area" role="main">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <article class="post hentry">
                        <header class="entry-header">
                            <h2 class="entry-title"><?php the_title(); ?></h2>
                            <p class="entry-meta">
                                <span class="byline">Posted in <?php the_category(', '); ?>, on <?php the_date(); ?></span>
                            </p><!-- .entry-meta -->
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php }
            } ?>

        </main><!-- #main -->

        <?php get_sidebar(); ?>
    
    </div><!-- #content -->

<?php get_footer(); ?>