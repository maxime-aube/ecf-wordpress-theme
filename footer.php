    <?php wp_footer(); ?>

    <footer class="main-footer">
		<div class="container">
			<address>
				<strong>Développeur Web et Web Mobile</strong><br>
				CEFIM<br>
				32 Avenue Marcel Dassault<br>
				37200 Tours<br>
				T : <a href="tel:0247402680">02 47 40 26 80</a>
			</address>
            <nav class="footer-nav">
                <?php wp_nav_menu([
                    'theme_location' => 'mentions',
                    'container' => 'ul',
                    'menu_class' => 'menu'
                ]); ?>
            </nav>
            <nav class="social-nav">
                <?php wp_nav_menu([
                    'theme_location' => 'social',
                    'container' => 'ul',
                    'menu_class' => 'menu'
                ]); ?>
            </nav>
		</div>
	</footer>

</body>
</html>