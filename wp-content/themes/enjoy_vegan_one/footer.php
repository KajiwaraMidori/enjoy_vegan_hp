<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enjoy_vegan_one
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">

		<div class="site-footer-disclaimer">
			<h5>
			DISCLAIMER
			</h5>

			<div class="site-footer-disclaimer-text aligncenter">
				The information that we present here is given to the best of our knowledge, <br>
				but we cannot guarantee the accuracy of the provided information. <br>
				Please try your best to confirm yourself that what you consume meets your requirements.
			</div><!-- .site-footer-disclaimer-text -->
		</div><!-- .site-footer-disclaimer -->

		<div class="site-footer-SNS">
			<div class="site-footer-SNS1">
				<div class="site-footer-SNS-icon">
					<a
						href="<?php echo esc_url( "https://www.facebook.com/enjoy.vegan.japan/" );?>"
						target="_blank"
						rel="facebook link"
						>
						<img
							src="<?php echo esc_url( get_template_directory_uri() );?>/images/6_footer/fb_button.svg"
							alt="jump to our faecebook account!" width="33" height="33"
						/>
					</a>
				</div>

				<div class="site-footer-SNS-icon">
					<a
						href="<?php echo esc_url( "https://www.instagram.com/enjoy.vegan.japan/" );?>"
						target="_blank"
						rel="instagram link"
						>
						<img
							src="<?php echo esc_url( get_template_directory_uri() );?>/images/6_footer/insta_button.svg"
							alt="jump to our instagram account!" width="33" height="33"
						/>
					</a>
				</div>

				<div class="site-footer-SNS-icon">
					<a
						href="<?php echo esc_url( "https://twitter.com/EnjoyVEGANJAPAN" );?>"
						target="_blank"
						rel="twitter link"
						>
						<img
							src="<?php echo esc_url( get_template_directory_uri() );?>/images/6_footer/twitter_button.svg"
							alt="jump to our twitter account!" width="33" height="33"
						/>
					</a>
				</div>

				<div class="site-footer-email">
					<a
						href="mailto: enjoy.vegan.japan@gmail.com?subject=[Contact Enjoy VEGAN JAPAN via Website]&amp;body=Thank you for contacting us!%0d%0aWe will reply to your message within a week.%0d%0a%0d%0aEnjoy VEGAN JAPAN Team"
						rel="email link"
						>
						<img
							src="<?php echo esc_url( get_template_directory_uri() );?>/images/6_footer/mail_button.svg"
							target="_blank"
							alt="send email to enjoy VEGAN JAPAN" width="33" height="33"
						/>
					</a>
				</div><!-- .site-footer-email -->
			</div><!-- .site-footer-SNS1 -->
			<div class="site-footer-copyright aligncenter">
				Copyright &#9426 2018 <?php bloginfo('name'); ?> All Rights Reserved.
			</div><!-- .site-footer-copyright -->
		</div><!-- .site-footer-SNS -->

	</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
