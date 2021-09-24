<footer id="colophon" class="site-footer" >

        <?php dynamic_sidebar( 'footer-sidebar' ); ?>

        <div class="footer-wrapper" role="contentinfo">
            
            <div class="site-info">
                <a href="https://wordpress.org">Proudly Powered by WordPress</a>
                <span class="sep"> | </span>
                Theme: Carbon by <a href="https://moi.fr" rel="designer">Moi</a>
            </div><!-- .site-info -->

            <?php wp_nav_menu(array(
                'theme_location' => 'social',
                'container' => '',
                'menu_class' => 'social-icons'
            )); ?>

        </div><!-- .footer-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>