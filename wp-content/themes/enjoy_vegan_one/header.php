<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enjoy_vegan_one
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link
	href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,700"
	rel="stylesheet"
	>
	<link
	rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous"
	>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e( 'Skip to content', 'enjoy_vegan_one' ); ?>
		</a>

		<header id="masthead" class="site-header">	
				<?php
				/*　常にヘッダー表示
				if ( is_front_page() && is_home() ){
					*/
				?>
				
					<img
					class="site-header-image"
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/1_header/vegan_dish.jpg"
					alt=""
					/>

					<?php
					/*	次回リリース時に実装
					<div class="site-header-map-city site-header-map-tokyo">
						<a
							href="<?php echo esc_url(get_category_link( get_cat_ID( "tokyo" ))); ?>"
							rel="search in Tokyo"
							>
							<img
								class="site-header-map-tag"
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/1_header/hashtag_s.svg"
							/>
							<label class="site-header-map-city-text" style="font-style: bold">Tokyo</label>
						</a>
					</div>
					<div class="site-header-map-city site-header-map-kyoto">
						<a
							href="<?php echo esc_url(get_category_link( get_cat_ID( "kyoto" ))); ?>"
							rel="search in Kyoto"
							>
							<img
								class="site-header-map-tag"
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/1_header/hashtag_s.svg"
							/>
							<label class="site-header-map-city-text">Kyoto</label>
						</a>
					</div>
					*/　
					?>
					<?php 
					/*　　一時的にコメントアウト
					<h1 class="site-header-logo">
						<a
							href="<?php echo esc_url( home_url( '/' ) );?>"
							rel="home"
							>
							<!-- <?php the_custom_logo(); ?> -->
							<!-- <?php bloginfo( 'name' ); ?> -->
							<img class="aligncenter"
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/1_header/evj_logo.svg"
								alt="Enjoy Vegan Japan logo" width="1050" height="1050"
							/>
						</a>
					
					<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ){
					?>
					<div class="site-header-description">
						<?php echo $description; /* WPCS: xss ok. */ 
						?>
					</div>
				</h1>
					<?php
						/* }　　一時的にコメントアウト
					?>
					
				<?php 
				/* 常にヘッダー表示
				} else {
				?>
				<h1 class="site-header-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); 	?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
				<?php
				}
				*/
				?>

				<!-- Navigation不要
				<nav
					id="site-navigation"
					class="navbar main-navigation navbar-default navbar-fixed-top topnav"
					role="navigation"" 
				>

				<button
					class="menu-toggle"
					aria-controls="primary-menu"
					aria-expanded="false"
				 	>
					<?php /* esc_html_e( 'Menu', 'enjoy_vegan_one' ); ?>
				</button>

				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					*/
				?>
			</nav> <!#site-navigation -->
		</header><!-- #masthead -->

	<div id="content" class="site-content">
