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
		<img
			src="<?php echo esc_url( get_template_directory_uri() );?>/images/6_footer/footer_logo.svg"
			alt="" width="73" height="73"
		/>
		<footer id="colophon" class="site-footer">
			<div class="site-footer-SNS">
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
				</div><!-- .site-footer-SNS-icon -->
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
				</div><!-- .site-footer-SNS-icon -->
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
				</div><!-- .site-footer-SNS-icon -->
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
			</div><!-- .site-footer-SNS -->


			<div class="site-footer-disclaimer-text aligncenter" style="text-align: center;">
				DISCLAIMER: Information presented above are given to the best of our knowledge but accuracy cannot be guaranteed. 
				Please confirm what is to be consumed meets your requirements.
			</div><!-- .site-footer-disclaimer-text -->
		</footer><!-- #colophon -->

		<div class="site-footer-copyright aligncenter">
			Copyright &#9426 2018 <?php bloginfo('name'); ?> All Rights Reserved.
		</div><!-- .site-footer-copyright -->

	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
