<?php get_header(); ?>

	<div id="content" class="site-content">

        <main id="primary" class="content-area" role="main">

            <?php if (have_posts(  )) {
                while ( have_posts(  )) {
                    the_post(); ?>
                    <article class="post hentry">
                        <header class="entry-header">
                            <h2 class="entry-title"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                            <p class="entry-meta">
                                <span class="byline">Posted in <?php the_category(', ') ?>, on <?php echo get_the_date(); ?></span>
                            </p><!-- .entry-meta -->
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php } ?>
                <nav class="navigation posts-navigation" role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                        <div class="nav-previous">
                            <?php next_posts_link('<span data-icon="ei-arrow-left"></span>
                                <span>Older post</span>'); ?>
                        </div> 
                        <div class="nav-next">
                            <?php previous_posts_link('<span>Newer post</span>
                                <span data-icon="ei-arrow-right"></span>'); ?>
                        </div>
                    </div>  
                </nav>   
            <?php } ?>

        </main><!-- #main -->

        <?php get_sidebar(); ?>
    
    </div><!-- #content -->

	<?php get_footer(); ?>