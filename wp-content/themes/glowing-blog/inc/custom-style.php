<?php
/**
 * Custom Style
 */
function glowing_blog_header_text_style() {

	$site_title_font       = get_theme_mod( 'glowing_blog_site_title_font', '' );
	$site_description_font = get_theme_mod( 'glowing_blog_site_description_font', '' );
	$header_font           = get_theme_mod( 'glowing_blog_header_font', '' );
	$body_font             = get_theme_mod( 'glowing_blog_body_font', '' );

	?>
	<style type="text/css">

		/* Site title and tagline color css */
		.site-title a{
			color: #<?php echo esc_attr( get_header_textcolor() ); ?>;
		}
		.site-description {
			color: <?php echo esc_attr( get_theme_mod( 'glowing_blog_header_tagline', '#000000' ) ); ?>;
		}
		/* End Site title and tagline color css */

		/* color css */
		:root {
			--header-text-color: #<?php echo esc_attr( get_header_textcolor() ); ?>;
		}

		/* Primay color css */

		/*Typography CSS*/

		<?php if ( ! empty( $site_title_font ) ) : ?>

			:root {
				--font-site-title: <?php echo esc_attr( str_replace( '+', ' ', $site_title_font ) ); ?>, serif;
			}

		<?php endif; ?>

		<?php if ( ! empty( $site_description_font ) ) : ?>

			:root {
				--font-tagline: <?php echo esc_attr( str_replace( '+', ' ', $site_description_font ) ); ?>, serif;
			}

		<?php endif; ?>

		<?php if ( ! empty( $header_font ) ) : ?>

			:root {
				--font-head: <?php echo esc_attr( str_replace( '+', ' ', $header_font ) ); ?>, serif;
			}

		<?php endif; ?>

		<?php if ( ! empty( $body_font ) ) : ?>

			:root {
				--font-body: -apple-system, BlinkMacSystemFont, <?php echo esc_attr( str_replace( '+', ' ', $body_font ) ); ?> , Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
			}

		<?php endif; ?>

		/*End Typography CSS*/

		<?php if ( 'loadmore' === get_theme_mod( 'glowing_blog_pagination_type', 'loadmore' ) ) : ?>
		nav.navigation.pagination {
			display: none;
		}
	<?php endif; ?>

</style>

<?php
}
add_action( 'wp_head', 'glowing_blog_header_text_style' );
