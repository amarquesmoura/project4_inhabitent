<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-grid-container">
					<div class="contact-info">
						<h3>Contact Info</h3>
						<p><i class="fas fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
						<p><i class="fas fa-phone"></i><a href="tel:7784567891">778-456-7891</a></p>
						<p>
							<span><i class="fab fa-facebook-square"></i></span>
							<span><i class="fab fa-twitter-square"></i></span>
							<span><i class="fab fa-google-plus-square"></i></span>
						</p>
					</div>
					<div class="business-hours">
						<h3>Business Hours</h3>
						<p><span class="bold">Monday-Friday:</span> 9am to 5pm</p>
						<p><span class="bold">Saturday:</span> 10am to 2pm</p>
						<p><span class="bold">Sunday:</span> Closed</p>
					</div>
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="logo-text" src="<?php echo get_template_directory_uri().'/images/inhabitent-logo-text.svg'?>" />
						</a>
						</div>
				</div>
				<div class="site-info">
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
					
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
