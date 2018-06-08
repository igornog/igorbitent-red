<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>
	</div>
	<!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-blocks container">
			<div class="footer-block-item">
				<div class="contact">
					<h3>Contact Info</h3>
					<p>
						<i class="fa fa-envelope"></i>
						<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
					</p>
					<p>
						<i class="fa fa-phone"></i>
						<a href="tel:5553434567891">778-456-7891</a>
					</p>
					<p>
						<span>
							<i class="fa fa-facebook-square"></i>
						</span>
						<span>
							<i class="fa fa-twitter-square"></i>
						</span>
						<span>
							<i class="fa fa-google-plus-square"></i>
						</span>
					</p>
				</div>
			</div>

			<div class="footer-block-item">
				<div class="business-hours">
					<?php
						get_sidebar();
					?>
				</div>
			</div>


			<div class="footer-block-item">
				<div class="text-logo">
					<a href="http://localhost:3000/inhabitent/" rel="home">
						<img src="http://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-text.svg" alt="Inhabitent logo">
					</a>
				</div>
			</div>
		</div>

		<div class="site-info">
			<div class="container">
				Copyright © 2017 Inhabitent </div>
		</div>
		<!-- .site-info -->
	</footer>

	</div>
	<!-- #page -->

	<?php wp_footer(); ?>

	</body>

	</html>