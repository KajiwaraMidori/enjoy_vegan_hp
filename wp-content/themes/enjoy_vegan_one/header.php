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

	<?php 
	wp_enqueue_script('jquery');
	wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e( 'Skip to content', 'enjoy_vegan_one' ); ?>
		</a>

		<header id="masthead" class="site-header">	
			<?php
				/* 常にヘッダー表示
				if ( is_front_page() && is_home() ){
					*/
					?>

					<a	href="<?php echo esc_url( home_url( '/' ) );?>" rel="home">
					<img
					class="topImg"
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/1_header/main_img_pc.jpg"
					alt=""
					/>

					<script type="text/javascript">
						jQuery(function($){			
							var width = $(window).width();
							if( width < 813 ){
								$(".topImg").each(function(){
									$(this).attr("src", $(this).attr("src").replace("_pc","_sp"));
								})
							}
						});
					</script>
				</a>


					<?php
						/* }　
						/*↑常にヘッダー表示する場合はコメントアウト*/
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
