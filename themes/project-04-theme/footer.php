<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="siteFooter" role="contentinfo">
				<div class="siteInfo">
					
					<div class="footerContact">
					<h4>Contact Info</h4>
						<p>
							<i class="fas fa-envelope"></i><a href="info@inhabitent.com">info@inhabitent.com</a>
						</p>	
						<p>
							<i class="fas fa-phone"></i><a href="tel: 778-456-7891">778-456-7891</a>
						</p>
						<p>
							<i class="fab fa-facebook-square"></i>  
							<i class="fab fa-twitter-square"></i>  
							<i class="fab fa-google-plus-square"></i>
						</p>
					</div>

					<div class="footerHours">
					<h4>Business Hours</h4>
						<div>
							<p><span class="footerBold">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="footerBold">Saturday:</span> 10am to 2pm</p>
							<p><span class="footerBold">Sunday:</span> Closed</p>
						</div>
					</div>
					
					<div class="footerLogo">
						<img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-text.svg"/>
					</div>
					
				</div><!-- .site-info -->
				<p class="footerCopy">Copyright &copy 2019 Inhabitent</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
