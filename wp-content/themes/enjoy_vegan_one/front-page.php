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




			<br>
			<div class="site-subcontents-icon"><!-- .subcontents-icon -->
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/2_ourstory/story_icon.png"
					alt="our story icon"
					/>
				</a>
			</div><!-- .subcontents-icon -->
			<br>
			<div class="site-subcontents-ourstory"><!-- .subcontents-ourstory -->
				With Tokyo Olympic and Paralympic Games being held in 2020, the number of foreign tourists visiting Japan are on the rise. Visitors with dietary restrictions are having a difficult time searching for food establishments that can accommodate their needs. <br>

				We started Enjoy VEGAN JAPAN in an effort to connect vegan visitors with vegan-friendly eateries. There are so many wonderful vegan options in Japan, and we wanted to make sure that there was one website you could turn to, for reliable information and mouth-watering pictures. <br>

				We hope your stay in Japan is full of tasty vegan eats!
			</div><!-- .subcontents-ourstory -->
			<br>
				



			<div class="site-subcontents-icon"><!-- .subcontents-icon -->
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_icon.png"
					alt="How to order vegan food"
					/>
				</a>
			</div><!-- .subcontents-icon -->
			<br>
				Please show this screen to the staff to tell your requirements.
			<br>
			<div class="site-subcontents-orderimg"><!-- .subcontents-orderveganfood -->
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_img2.png"				alt="How to order vegan food"
					/>
				</a>
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_img1.png"
					alt="How to order vegan food"
					/>
				</a>
			</div><!-- .site-subcontents-orderveganfood -->	
			<br>






			<div class="site-subcontents-icon"><!-- .subcontents-icon -->
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/combinis_icon.png"
					alt="Vegan in Combinis"
					/>
				</a>
			</div><!-- .subcontents-icon -->
			<br>
			<div class="site-subcontents-combinis"><!-- .site-subcontents-combinis-food -->
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/food_icon.png"
					alt="Vegan Food in Combinis"
					/>
				</a>
			</div><!-- .site-subcontents-combinis-food -->
			<br>
			<div class="site-subcontents-combinis2"><!-- .site-subcontents-combinis-sweets -->
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/sweets_icon.png"
					alt="Vegan Sweets in Combinis"
					/>
				</a>
			</div><!-- .site-subcontents-combinis-sweets -->
			<br>
			





			<div class="site-subcontents-icon"><!-- .subcontents-icon -->
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/ingredients_icon.png"
					alt="Ingredients ENG/JPN dictionary"
					/>
				</a>	
			</div><!-- .subcontents-icon -->
			<br>
			<div class="site-subcontents-ingredients"><!-- .site-subcontents-ingredients -->
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/meat_icon.png"
					alt="Ingredients -MEAT-"
					/>
				</a>	
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/seafood_icon.png"
					alt="Ingredients -SEAFOOD-"
					/>
				</a>		
				<br>
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/dairy_icon.png"
					alt="Ingredients -DAIRY PRODUCT-"
					/>
				</a>		
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/honey_icon.png"
					alt="Ingredients -HONEY-"
					/>
				</a>	
				<br>
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/vegan_icon.png"
					alt="Ingredients -VEGAN-"
					/>
				</a>
			</div><!-- .site-subcontents-ingredients -->
			<br>
			*<br>
			These ingredients may not be vegan. <br>
			They may contain animal-derived ingredients or processed with bone char as part of the manufacturing process. <br>
			To be sure, please inquire about these ingredients when you come across them.


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
