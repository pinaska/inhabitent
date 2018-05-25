<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<div class="footer-widget container">
				
				
				<div class="contact footer-widget-item">
				<h4>Contact</h4>
				<p><i class="fa fa-envelope fa-fw" aria-hidden="true"></i><a href="mailto:info@inhabitent.com" target="_blank"> info@inhabitent.com</a></p>
						<p><i class="fa fa-phone fa-fw" aria-hidden="true"></i><a href="tel:+17784567891" target="_blank"> 778-456-7891</a></p>
						<p>
							<span><i class="fab fa-facebook-square" aria-hidden="true"></i></span>
							<span><i class="fab fa-twitter-square" aria-hidden="true"></i></span>
							<span><i class="fab fa-google-plus-square" aria-hidden="true"></i></span>
						</p>
				
				</div><!--end of contact-->

				<div class="business-hours footer-widget-item">
					<h4>Business Hours</h4>
						<p><span class="bold">Monday-Friday:</span> 9am to 5pm</p>
						<p><span class="bold">Saturday:</span> 10am to 2pm</p>
						<p><span class="bold">Sunday:</span> Closed</p>
				
				</div><!--end of business-hours-->
				
				
				
				<div class="footer-logo footer-widget-item">
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inhabitent-logo-text.svg" alt="Inhabitent logo"/></a>
				</div><!--end of footer-logo-->
				</div><!--end of footer widget area-->
				
				<div class="footer-copyright">
				<a href="<?php echo esc_url( '#' ); ?>"><?php printf( esc_html( 'Copyright &#169; 2017 Inhabitent' ), 'WordPress' ); ?></a>
				</div><!--footer-copyright-->
				

				
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
