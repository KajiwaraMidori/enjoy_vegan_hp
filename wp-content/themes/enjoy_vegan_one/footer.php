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

				<!-- Paypal Donation Button -->
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_donations" />
					<input type="hidden" name="business" value="mido.diver825aow@gmail.com" />
					<input type="hidden" name="currency_code" value="JPY" />
					<input type="hidden" name="amount" value="1000" />
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
					<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
				</form>

		</footer><!-- #colophon -->

		<div class="site-footer-copyright aligncenter">
							
			<!-- SECTIGOのLOGO表示-->
				<script type="text/javascript"> //<![CDATA[ 
				var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
				document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
				//]]>
			</script>
			
			<script language="JavaScript" type="text/javascript">
				TrustLogo("https://enjoyveganjapan.com/wp-content/themes/enjoy_vegan_one/images/6_footer/positivessl_trust_seal_sm_124x32.png", "CL1", "none");
			</script>
			<a  href="https://www.positivessl.com/" id="comodoTL">Positive SSL</a>

			Copyright &#9426 2019 <?php bloginfo('name'); ?> All Rights Reserved.
		</div><!-- .site-footer-copyright -->

	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
