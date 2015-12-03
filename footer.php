<?php
/**
 * Test_theme template for displaying the footer
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */
?>
<footer class="main-footer">
	<div class="container" id="footer-container">
		<div class="copyright">
			<a href="">Charity</a> &copy; 2015 • <a href="">Privacy Policy</a>
		</div>
	</div>
</footer>

				<!--<ul class="footer-widgets"><?php
					if ( function_exists( 'dynamic_sidebar' ) ) :
						dynamic_sidebar( 'footer-sidebar' );
					endif; ?>-->
				</ul>

			</div>
		<?php wp_footer(); ?>
	</body>
</html>