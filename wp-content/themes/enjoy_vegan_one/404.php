<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package enjoy_vegan_one
 */


get_header(); 
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'enjoy_vegan_one' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Please go back and try again.', 'enjoy_vegan_one' ); ?></p>

					<!--SEARCH FORMやmost used catogories, tagsの削除>
					/* SEARCH FORM削除
						get_search_form();
						/*　最近の投稿削除
						the_widget( 'WP_Widget_Recent_Posts' );
						*/
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php 
						/*　Most used categories　削除
						esc_html_e( 'Most Used Categories', 'enjoy_vegan_one' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php

						/* translators: %1$s: smiley */
						/* Recent Archivesの削除
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'enjoy_vegan_one' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
						*/
						/*　タグクラウンドの削除
						the_widget( 'WP_Widget_Tag_Cloud' );
						*/
					?>
					-->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
