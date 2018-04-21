<?php
/**
 * The top-level homepage file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package enjoy_vegan_one
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
				if ( have_posts() ){
					if ( is_home() && ! is_front_page() ){
						?>
							<header>
								<h1 class="page-title screen-reader-text">
									<?php single_post_title(); ?>
								</h1>
							</header>
						<?php
					}

					/* Start the Loop */
					while ( have_posts() ){
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					}

					the_posts_navigation();

				} else {

					get_template_part( 'template-parts/content', 'none' );

				}
			?>
		</main><!-- #main -->

		
		<div class="site-subcontents">
			<div class="site-subcontents-icon">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/2_ourstory/story_icon.png"
					alt="our story icon" width="70" height="70"
				/>
			</div><!-- .subcontents-icon -->
			<p class="site-subcontents-text aligncenter">
				<!-- あとでborder導入 -->
				With Tokyo Olympic and Paralympic Games being held in 2020, the number of foreign tourists visiting Japan are on the rise. Visitors with dietary restrictions are having a difficult time searching for food establishments that can accommodate their needs. <br><br> <!-- あとでCSSいじって1行空ける -->
				We started Enjoy VEGAN JAPAN in an effort to connect vegan visitors with vegan-friendly eateries. There are so many wonderful vegan options in Japan, and we wanted to make sure that there was one website you could turn to, for reliable information and mouth-watering pictures. <br><br>　<!-- あとでCSSいじって1行空ける -->
				We hope your stay in Japan is full of tasty vegan eats!<br>
				<!-- あとでborder導入 -->
			</p><!-- .subcontents-text -->
		</div><!-- .site-subcontents -->


		<div class="site-subcontents">
			<div class="site-subcontents-icon">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_icon.png"
					alt="How to order vegan food" width="146" height="146"
				/>
			</div><!-- .subcontents-icon -->
			<p class="site-subcontents-text aligncenter">
				Please show this screen to the staff to tell your requirements.
			</p><!-- .subcontents-text -->
			<div class="site-subcontents-orderimg"><!-- .subcontents-orderveganfood -->
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_img2.png"				
					alt="How to order vegan food" width="400" height="400"
				/>
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_img1.png"
					alt="How to order vegan food" width="470" height="470"
				/>
			</div><!-- .site-subcontents-orderveganfood -->
		</div><!-- .site-subcontents -->


		<div class="site-subcontents">
			<div class="site-subcontents-icon">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/combinis_icon.png"
					alt="Vegan in Combinis" width="147" height="147"
				/>
			</div><!-- .subcontents-icon -->
			<div class="site-subcontents-combinis">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/food_icon.png"
					alt="Vegan Food in Combinis" width="230" height="230"
				/>
			</div><!-- .site-subcontents-combinis-food -->
			<div class="site-subcontents-combinis">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/sweets_icon.png"
					alt="Vegan Sweets in Combinis" width="275" height="275"
				/>
			</div><!-- .site-subcontents-combinis-sweets -->
		</div><!-- .site-subcontents -->


		<div class="site-subcontents">
			<div class="site-subcontents-icon">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/ingredients_icon.png"
					alt="Ingredients ENG/JPN dictionary" width="140" height="140"
				/>
			</div><!-- .subcontents-icon -->
			<div class="site-subcontents-ingredients">
				<div　class="site-subcontents-ingredients-label">
					<img
						src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/meat_icon.png"
						alt="Ingredients -MEAT-" width="310" height="310"
					/>
					<img
						src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/seafood_icon.png"
						alt="Ingredients -SEAFOOD-" width="310" height="310"
					/>
				</div>
				<div　class="site-subcontents-ingredients-label">
					<img
						src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/dairy_icon.png"
						alt="Ingredients -DAIRY PRODUCT-" width="310" height="310"
					/>
					<img
						src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/honey_icon.png"
						alt="Ingredients -HONEY-" width="310" height="310"
					/>
				</div>
				<div　class="site-subcontents-ingredients-label">
					<img
						src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/vegan_icon.png"
						alt="Ingredients -VEGAN-" width="310" height="310"
						/>
				</div>
			</div><!-- .site-subcontents-ingredients -->
			<div class="site-subcontents-ingredients-warning aligncenter">
				*These ingredients may not be vegan. <br>
				They may contain animal-derived ingredients or processed with bone char as part of the manufacturing process. <br>
				To be sure, please inquire about these ingredients when you come across them.
			</div><!--.site-subcontents-ingredients-warning -->
		</div><!-- .site-subcontents -->

	</div><!-- #primary -->

<?php
get_footer();
