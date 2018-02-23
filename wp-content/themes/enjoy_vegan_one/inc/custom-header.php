<?php
	/**
	 * Sample implementation of the Custom Header feature
	 *
	 * You can add an optional custom header image to header.php like so ...
	 *
		<?php the_header_image_tag(); ?>
	 *
	 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
	 *
	 * @package enjoy_vegan_one
	 */


	/**
	 * Set up the WordPress core custom header feature.
	 *
	 * @uses enjoy_vegan_one_header_style()
	 */
	function enjoy_vegan_one_custom_header_setup() {
		add_theme_support( 'custom-header', apply_filters( 'enjoy_vegan_one_custom_header_args', array(
			'default-image'          => get_template_directory_uri() . '/images/1_header/japan_map.png',
			'default-text-color'     => '000000',
			'width'                  => 1000,
			'height'                 => 250,
			'flex-height'            => true,
			'wp-head-callback'       => 'enjoy_vegan_one_header_style',
			'admin-preview-callback' => 'enjoy_vegan_one_admin_header_image'
		) ) );
	}
	add_action( 'after_setup_theme', 'enjoy_vegan_one_custom_header_setup' );


	if( ! function_exists( 'enjoy_vegan_one_header_style' ) ){
		/**
		 * Styles the header image and text displayed on the blog.
		 *
		 * @see enjoy_vegan_one_custom_header_setup().
		 */

	  function enjoy_vegan_one_header_style() {
		  if ( get_header_image() ) {
		 	?>
		 		<style type="text/css">
		 			.site-header {
		 				background-image: url(<?php echo get_header_image(); ?>);
		 			}
		 		</style>
		 	<?php
			}
		}
	}
?>
