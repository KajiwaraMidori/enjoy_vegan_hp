<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package enjoy_vegan_one
 */

if ( ! function_exists( 'enjoy_vegan_one_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function enjoy_vegan_one_entry_footer() {
		// Hide category and tag text for pages.
		
		if (!function_exists('hash_icon')){
			function hash_icon() {
				?>
					<img
							src="<?php echo esc_url( get_template_directory_uri() );?>/images/7_search/hashtag_m.svg"
							alt="" width="18" height="18"
							/>
				<?php
			}
		}
		if (!function_exists('pin_icon')){
			function pin_icon() {
				?>
					<img
							src="<?php echo esc_url( get_template_directory_uri() );?>/images/7_search/marker_m.svg"
							alt="" width="20" height="20"
							/>
				<?php
			}
		}
		// function tag_icon() {
		//
		// }

		if ( 'post' === get_post_type() ) {
			$categories_list = get_the_category_list( esc_html__( ', ', 'enjoy_vegan_one' ) );
			if ( $categories_list ) {
				printf(
					'<span class="cat-links">' .
					hash_icon() .
					esc_html__( ' %1$s', 'enjoy_vegan_one' ) .
					' </span>',
					$categories_list
				); // WPCS: XSS OK.
			}
		?>
		<br>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'enjoy_vegan_one' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				// TODO: add hashtag icon and styling here.
				// <imgsrc="/images/1_header/h_tokyo_button.png"alt=""/>' etcetc
				printf(
					'<span class="tags-links">' .
					pin_icon() .
					esc_html__( ' %1$s', 'enjoy_vegan_one' ) .
					' </span>',
					$tags_list
				); // WPCS: XSS OK.
			}
		}

		// NOTE: remove commenting for now.
		// if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		// 	echo '<span class="comments-link">';
		// 	comments_popup_link(
		// 		sprintf(
		// 			wp_kses(
		// 				/* translators: %s: post title */
		// 				__( 'Leave a Comment<span class="screen-reader-text"> on %s</span> ', 'enjoy_vegan_one' ),
		// 				array(
		// 					'span' => array(
		// 						'class' => array(),
		// 					),
		// 				)
		// 			),
		// 			get_the_title()
		// 		)
		// 	);
		// 	echo '</span>';
		// }

		//edit_post_link(
		//	sprintf(
		//		wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
		//			__( '(edit) <span class="screen-reader-text">%s</span>', 'enjoy_vegan_one' ),
		//			array(
		//				'span' => array(
		//					'class' => array(),
		//				),
		//			)
		//		),
		//		get_the_title()
		//	),
		//	'<span class="edit-link">',
		//	'</span>'
		//);
	}
endif;

if ( ! function_exists( 'enjoy_vegan_one_post_thumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 */
function enjoy_vegan_one_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
		?>
	</a>

	<?php endif; // End is_singular().
}
endif;
