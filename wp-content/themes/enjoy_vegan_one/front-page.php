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
			</div><!-- .site-subcontents-icon -->
			<p class="site-subcontents-text aligncenter">
				<!-- あとでborder導入 -->
				With Tokyo Olympic and Paralympic Games being held in 2020, the number of foreign tourists visiting Japan are on the rise. Visitors with dietary restrictions are having a difficult time searching for food establishments that can accommodate their needs. <br><br> <!-- あとでCSSいじって1行空ける -->
				We started Enjoy VEGAN JAPAN in an effort to connect vegan visitors with vegan-friendly eateries. There are so many wonderful vegan options in Japan, and we wanted to make sure that there was one website you could turn to, for reliable information and mouth-watering pictures. <br><br>　<!-- あとでCSSいじって1行空ける -->
				We hope your stay in Japan is full of tasty vegan eats!<br>
				<!-- あとでborder導入 -->
			</p><!-- .site-subcontents-text -->
		</div><!-- .site-subcontents -->


		<div class="site-subcontents">
			<div class="site-subcontents-icon">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_icon.png"
					alt="How to order vegan food" width="146" height="146"
				/>
			</div><!-- .site-subcontents-icon -->
			<p class="site-subcontents-text aligncenter">
				Please show this screen to the staff to tell your requirements.
			</p><!-- .subcontents-text -->
			<div class="site-subcontents-orderimg">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_img2.png"				
					alt="How to order vegan food" width="400" height="400"
				/>
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_img1.png"
					alt="How to order vegan food" width="470" height="470"
				/>
			</div><!-- .site-subcontents-orderimg -->
		</div><!-- .site-subcontents -->


		<div class="site-subcontents">
			<div class="site-subcontents-icon">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/combinis_icon.svg"
					alt="Vegan in Combinis" width="147" height="147"
				/>
			</div><!-- .site-subcontents-icon -->
			<div class="site-subcontents-combinis">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/food_icon.svg"
					alt="Vegan Food in Combinis" width="230" height="230"
				/>
			</div><!-- .site-subcontents-combinis-food -->

			<div class="site-subcontents-combini-food">
				<div class="site-subcontents-combini-food1">
					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/ume.svg"
								alt="plum onigiri" width="126" height="121"
							/>
						</div><!-- plum onigiri -->
						<div class="site-subcontents-combini-eng">
							<p class="aligncenter">plum onigiri</p>
						</div><!-- plum onigiri -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">梅おにぎり（紀州南高梅）</p>
						</div><!-- plum onigiri -->
					</div><!-- plum onigiri -->

					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/edamame.svg"
								alt="edamame" width="100" height="117"
							/>
						</div><!-- edamame -->
						<div class="site-subcontents-combini-eng">
							<p class="aligncenter">edamame/green soybeans</p>
						</div><!-- edamame -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">枝豆</p>
						</div><!-- edamame -->
					</div><!-- edamame -->

					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/inari.svg"
								alt="sushi wrapped with deep-fried bean curd" width="180" height="180"
							/>
						</div><!-- inari sushi -->
						<div class="site-subcontents-combini-eng">
							<p class="aligncenter">sushi wrapped with<br> deep-fried bean curd</p>
						</div><!-- inari sushi -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">いなり寿司</p>
						</div><!-- inari sushi -->
					</div><!-- inaris sushi  -->
				</div><!-- food line 1 -->

				<div class="site-subcontents-combini-food1">
					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/onigiri.svg"
								alt="salted onigiri" width="138" height="128"
							/>
						</div><!-- onigiri -->
						<div class="site-subcontents-combini-eng">
							<p class="aligncenter">salted onigiri</p>
						</div><!-- onigiri -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">塩むすび</p>
						</div><!-- onigiri -->
					</div><!-- onigiri -->

					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/sekihan.svg"
								alt="salted onigiri" width="140" height="130"
							/>
						</div><!-- sekihan -->
						<div class="site-subcontents-combini-eng">
							<p class="aligncenter">glutinous rice and <br>red beans onigiri</p>
						</div><!-- sekihan -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">赤飯おこわ</p>
						</div><!-- sekihan -->
					</div><!-- sekihan -->
				</div><!-- food line 2 -->
			</div><!-- food items -->

			<div class="site-subcontents-combinis">
				<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/sweets_icon.svg"
					alt="Vegan Sweets in Combinis" width="275" height="275"
				/>
			</div><!-- .site-subcontents-combinis-sweets -->

			<div class="site-subcontents-combini-food">
				<div class="site-subcontents-combini-food1">
					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/anmitsu.png"
								alt="assortd beans, agar jelly and fruits in syrup" width="150" height="150"
							/>
						</div><!-- anmitsu -->
						<div class="site-subcontents-combini-eng">
							<p class="aligncener">assorted beans, agar jelly<br>and fruits in syrup</p>
						</div><!-- anmitsu -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">あんみつ</p>
						</div><!-- anmitsu -->
					</div><!-- anmitsu -->

					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/amaguri.svg"
								alt="sweet roasted chestnuts" width="160" height="125"
							/>
						</div><!-- amaguri -->
						<div class="site-subcontents-combini-eng">
							<p class="aligncenter">sweet roaseted chestnuts</p>
						</div><!-- amaguri -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">甘栗</p>
						</div><!-- amaguri -->
					</div><!-- amaguri -->

					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/mitarashi.svg"
								alt="rice dumpling with sweet soy glaze" width="190" height="80"
							/>
						</div><!-- mitarashi -->
						<div class="site-subcontents-combini-eng">
							<p class="aligncenter">rice dumpling with <br>sweet soy glaze</p>
						</div><!-- mitarashi -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">みたらし団子/串だんご（たれ）</p>
						</div><!-- mitarashi -->
					</div><!-- mitarashi -->
				</div><!-- sweets line1 -->

				<div class="site-subcontents-combini-food1">
					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/anko.svg"
								alt="rice dumpling with sweet red beans paste" width="190" height="190"
							/>
						</div><!-- andango -->						<div class="site-subcontents-combini-eng">
							<p class="aligncenter">rice dumpling with<br>sweet red beans paste</p>
						</div><!-- andango -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">串だんご（あん）</p>
						</div><!-- andango -->
					</div><!-- andango -->

					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/jelly.png"
								alt="agar jelly " width="190" height="125"
							/>
						</div><!-- jelly -->
						<div class="site-subcontents-combini-eng">
							<p class="aligncenter">agar jelly</p>
						</div><!-- jelly -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">寒天ゼリー</p>
						</div><!-- jelly -->
					</div><!-- jelly -->

					<div class="site-subcontents-combini-item">
						<div class="site-subcontents-combini-img">
							<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/4_combinis/youkan.svg"
								alt="jellied sweet red beans paste " width="200" height="200"
							/>
						</div><!-- youkan -->
						<div class="site-subcontents-combini-eng">
							<p class="aligncenter">jellied sweet red<br>beans pasete</p>
						</div><!-- youkan -->
						<div class="site-subcontents-combini-jpn">
							<p class="aligncenter small">ようかん（小倉・練）</p>
						</div><!-- youkan -->
					</div><!-- youkan -->
				</div><!-- sweets line 2 -->
			</div><!-- sweets items -->
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
