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

					// TODO: count number of posts, switch to `show more...` if array longer than 9

			/* Start the Loop */
			while ( have_posts() ){
				the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */?>
					 		<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/1_header/bl_01.svg"
					alt="our story icon" width="20" height="20"
					/>
					<?php 
					echo get_the_title(); 

						get_template_part( 'template-parts/content', get_post_format() );
					}
				/* ページネーションを使用するためコメントアウト
				the_posts_navigation( 
					array(
						'prev_text'           => '&lt; See Previous',
						'next_text'           => 'See More &gt;',
						'screen_reader_text'  => '',
					)
				);
				*/
				?>
				<div class="pagination_setting">
					<?php
					if (function_exists("pagination")) {
						pagination($additional_loop->max_num_pages);
					}
				} else {
					get_template_part( 'template-parts/content', 'none' );

				}
				?>
			</main><!-- #main -->


			<div class="site-subcontents">
				<div class="site-subcontents-icon">
					<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/2_ourstory/story_icon.svg"
					alt="our story icon" width="70" height="70"
					/>
				</div><!-- .site-subcontents-icon -->
				<img
				src="<?php echo esc_url( get_template_directory_uri() );?>/images/border.svg" width="338" height="328"
				/>
				<div class="site-subcontents-story">
					<p class="site-subcontents-text1 ">
						As The 2020 Tokyo Olympic and Paralympic Games approaches, number of foreigners visiting Japan is on the rise. Visitors with dietary restrictions are having difficulties searching for food establishments that accommodate their needs. 
					</p>
					<p class="site-subcontents-text1 ">
						We started "Enjoy VEGAN JAPAN" in an effort to connect vegan visitors with vegan-friendly eateries. There are many wonderful options so we wanted to make sure there is a source with reliable information and mouth-watering photos. 
					</p>
				</div>
				<div class="site-subcontents-story">
					<p class="site-subcontents-text2">		
						We hope your stay in Japan is full of tasty vegan eats!
					</p>
				</div>
			</div><!-- .site-subcontents -->


			<div class="site-subcontents">
				<div class="site-subcontents-icon">
					<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_icon.svg"
					alt="How to order vegan food" width="146" height="146"
					/>
				</div><!-- .site-subcontents-icon -->
				<img
				src="<?php echo esc_url( get_template_directory_uri() );?>/images/border.svg" width="338" height="328"
				/>
				<p class="site-subcontents-text2 aligncenter">
					Please show this screen to the staff to tell your requirements when you ask for vegan menus.
				</p><!-- .subcontents-text -->
				<div class="site-subcontents-orderimg">
					<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_img2.png"
					alt="How to order vegan food" width="400" height="400"
					/>
					<img
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/3_order/order_img1.svg"
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
				<img
				src="<?php echo esc_url( get_template_directory_uri() );?>/images/border.svg" width="338" height="328"
				/>
				<p class="site-subcontents-text2 aligncenter">
					Enjoy shopping in combinis!<br>
					There are some vegan items you can find in the store.
				</p>
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
								alt="sushi wrapped with deep-fried bean curd" width="140" height="140"
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
								alt="salted onigiri" width="120" height="110"
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
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/ingredients_icon.svg"
					alt="Ingredients ENG/JPN dictionary" width="140" height="140"
					/>
				</div><!-- .subcontents-icon -->
				<img
				src="<?php echo esc_url( get_template_directory_uri() );?>/images/border.svg" width="338" height="328"
				/>
				<p class="site-subcontents-text2 aligncenter">
					Tired of looking up Japanese ingredients in Japanese to English dictonary?<br>Here we listed up major ingredients in both English & Japanese.
				</p>

				<div class="site-subcontents-ingredients1">
					<div class="site-subcontents-ingredients2">
						<img
						src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/meat_icon.svg"
						alt="Ingredients -MEAT-" width="310" height="310"
						/>
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/english_icon.svg"
								alt="English" width="110" height="110"
								/>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/japanese_icon.svg"
								alt="Japanese" width="133" height="133"
								/>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									chicken
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									鶏肉/とり肉/チキン
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									pork
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									豚肉/ぶた肉/ポーク
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									beef
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									牛肉/ビーフ
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									chicken broth
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									チキンエキス
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									pork broth
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									ポークエキス
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									beef broth
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									ビーフエキス
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									consommé
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									コンソメ
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									gelatin
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									ゼラチン
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
					</div><!-- ingredients2 -->
					<div class="site-subcontents-ingredients2">
						<img
						src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/seafood_icon.svg"
						alt="Ingredients -SEAFOOD-" width="310" height="310"
						/>
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/english_icon.svg"
								alt="English" width="110" height="110"
								/>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/japanese_icon.svg"
								alt="Japanese" width="133" height="133"
								/>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									bonito broth
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">			
								<div class="site-subcontents-ingredients-jpn2 aligncenter">
									かつおだし/かつお出汁<br>/鰹だし/鰹出汁
								</div>
							</div><!-- ingredients4 -->	
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng2">
									dried bonito shavings
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn2">
									かつおぶし/かつお節/鰹節<br>/鰹ぶし/そうだぶし/宗田節
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									dried small sardines
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									いわし煮干し
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng2">
									dried mackerel shavings
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									さば削りぶし
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									scallop
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									ほたて/ホタテ/帆立
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									salmon
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									さけ/鮭
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									shrimp
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									えび/エビ/海老
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									clams
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									あさり/アサリ
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									fish sauce
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									魚醤
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
					</div><!-- ingredients2 -->	


					<div class="site-subcontents-ingredients2">
						<img
						src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/dairy_icon.svg"
						alt="Ingredients -DAIRY PRODUCTS-" width="310" height="310"
						/>
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/english_icon.svg"
								alt="English" width="110" height="110"
								/>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/japanese_icon.svg"
								alt="Japanese" width="133" height="133"
								/>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									mayonnaise
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									マヨネーズ
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									butter
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									バター
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									milk
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									牛乳/乳/ミルク
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									cheese
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									チーズ
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									egg (quail egg)
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn2">
									たまご/卵/玉子<br>(うずらの卵）
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients2_h">
							<img
							src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/honey_icon.svg"
							alt="Ingredients -HONEY-" width="310" height="310"
							/>
							<div class="site-subcontents-ingredients3">
								<div class="site-subcontents-ingredients4">
									<img
									src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/english_icon.svg"
									alt="English" width="110" height="110"
									/>
								</div><!-- ingredients4 -->
								<div class="site-subcontents-ingredients4">
									<img
									src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/japanese_icon.svg"
									alt="Japanese" width="133" height="133"
									/>
								</div><!-- ingredients4 -->
							</div><!-- ingredients3 -->
							<div class="site-subcontents-ingredients3">
								<div class="site-subcontents-ingredients4">
									<div class="site-subcontents-ingredients-eng">
										honey
									</div>
								</div><!-- ingredients4 -->
								<div class="site-subcontents-ingredients4">
									<div class="site-subcontents-ingredients-jpn2">
										はちみつ/蜂蜜/ハニー
									</div>
								</div><!-- ingredients4 -->
							</div><!-- ingredients3 -->
						</div><!-- ingredients2_h -->
					</div><!-- ingredients2 -->


					<div class="site-subcontents-ingredients2">
						<img
						src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/vegan_icon.svg"
						alt="Ingredients -VEGAN-" width="310" height="310"
						/>
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/english_icon.svg"
								alt="English" width="110" height="110"
								/>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/5_ingredients/japanese_icon.svg"
								alt="Japanese" width="133" height="133"
								/>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									wheat
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									小麦粉
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									soybean
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									大豆
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									kelp broth
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									昆布だし/昆布出汁
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									agar/vegetable gelatin
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									寒天
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									peanuts
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									ピーナッツ
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									soy milk
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									豆乳
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									sugar (refined sugar)
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									砂糖/白砂糖 *
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									brown sugar
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									黒砂糖/黒糖
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									brown sugar syrup
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									黒蜜
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->
						<div class="site-subcontents-ingredients3">
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-eng">
									emulsifier
								</div>
							</div><!-- ingredients4 -->
							<div class="site-subcontents-ingredients4">
								<div class="site-subcontents-ingredients-jpn">
									乳化剤 *
								</div>
							</div><!-- ingredients4 -->
						</div><!-- ingredients3 -->

					</div><!-- ingredients2 -->
				</div><!-- ingredients1 -->
				<div class="site-subcontents-ingredients-warning aligncenter" style="text-align: left">
					* These ingredients may or may not be vegan. 
					They may contain animal-derived ingredients or processed with bone char as part of the manufacturing process. 
					To be sure, please inquire about these ingredients when you come across them.
				</div><!--.site-subcontents-ingredients-warning -->
			</div><!-- .site-subcontents -->

		</div><!-- #primary -->

		<?php
		get_footer();
