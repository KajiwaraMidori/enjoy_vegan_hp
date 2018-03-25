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
			<h1>
			DISCLAIMER
			</h1>

			<div class="site-footer-disclaimer-text">
				The information that we present here is given to the best of our knowledge 
				<br>
				but we cannot guarantee the accuracy of the provided information. 
				<br>
				Please try your best to confirm yourself that what you consume meets your requirements.
			</div><!-- .site-footer-disclaimer-text -->
		</div><!-- .site-footer-disclaimer -->

		<div class="site-footer-facebook">
			<a 
				href="<?php echo esc_url( "https://www.facebook.com/enjoy.vegan.japan/" );?>"
				rel="facebook link"
				>
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/6_footer/fb_button.png"
					target="_blank"
					alt="jump to our faecebook account!"
				/>
			</a>
		</div><!-- .site-footer-facebook -->

		<div class="site-footer-instagram">
			<a 
				href="<?php echo esc_url( "https://www.instagram.com/enjoy.vegan.japan/" );?>"
				rel="instagram link"
				>
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/6_footer/insta_button.png"
					target="_blank"
					alt="jump to our instagram account!"
				/>
			</a>
		</div><!-- .site-footer-instagram -->

		<div class="site-footer-twitter">
			<a 
				href="<?php echo esc_url( "https://twitter.com/EnjoyVEGANJAPAN" );?>"
				rel="twitter link"
				>
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/6_footer/twitter_button.png"
					target="_blank"
					alt="jump to our twitter account!"
				/>
			</a>
		</div><!-- .site-footer-twitter -->

		<div class="site-footer-email">
			<a 
				href="mailto: enjoy.vegan.japan@gmail.com"
				rel="email link"
				>
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/6_footer/mail_button.png"
					target="_blank"
					alt="send email to enjoy VEGAN JAPAN"
				/>
			</a>
		</div><!-- .site-footer-email -->

		<div class="site-footer-copyright">
			Copyright &#9426 2018 <?php bloginfo('name'); ?> All Rights Reserved.
		</div><!-- .site-footer-copyright -->
		
	</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
