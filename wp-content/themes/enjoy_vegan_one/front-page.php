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
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
