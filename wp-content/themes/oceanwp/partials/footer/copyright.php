<?php
/**
 * The default template for displaying the footer copyright
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get copyright text
$copy = get_theme_mod( 'ocean_footer_copyright_text', 'Copyright - OceanWP Theme by Nick' );
$copy = oceanwp_tm_translation( 'ocean_footer_copyright_text', $copy );

// Get footer menu location and apply filters for child theming
$menu_location = 'footer_menu';
$menu_location = apply_filters( 'ocean_footer_menu_location', $menu_location);

// Visibility
$visibility = get_theme_mod( 'ocean_bottom_footer_visibility', 'all-devices' );

// Inner classes
$wrap_classes = array( 'clr' );
if ( ! has_nav_menu( $menu_location ) ) {
	$wrap_classes[] = 'no-footer-nav';
}
if ( 'all-devices' != $visibility ) {
	$wrap_classes[] = $visibility;
}
$wrap_classes = implode( ' ', $wrap_classes ); ?>

<?php do_action( 'ocean_before_footer_bottom' ); ?>

<div id="footer-bottom" class="<?php echo esc_attr( $wrap_classes ); ?>">

	<?php do_action( 'ocean_before_footer_bottom_inner' ); ?>

	<div id="footer-bottom-inner" class="container clr" style="display: flex;flex-direction: row;align-items: center;">

		<?php
		// Display footer bottom menu if location is defined
		if ( has_nav_menu( $menu_location ) ) : ?>

			<div id="footer-bottom-menu" class="navigation clr">
				<?php
				// Display footer menu
				wp_nav_menu( array(
					'theme_location' => $menu_location,
					'sort_column'    => 'menu_order',
					'fallback_cb'    => false,
				) ); ?>

			</div><!-- #footer-bottom-menu -->

		<?php endif; ?>

		<?php
		// Display copyright info
		if ( $copy ) : ?>
		
			<div id="copyright" class="clr" role="contentinfo" style="text-align: left;">
				<div id="media_image-2" class="footer-widget widget_media_image clr"><img width="200" height="120" src="http://localhost/caso/wp-content/uploads/2020/04/logo_transparent_r-300x120.png" class="image wp-image-52  attachment-medium size-medium wp-post-image" alt="" style="max-width: 100%; height: auto;" srcset="http://localhost/caso/wp-content/uploads/2020/04/logo_transparent_r-300x120.png 300w, http://localhost/caso/wp-content/uploads/2020/04/logo_transparent_r-768x307.png 768w, http://localhost/caso/wp-content/uploads/2020/04/logo_transparent_r-600x240.png 600w, http://localhost/caso/wp-content/uploads/2020/04/logo_transparent_r.png 1000w" sizes="(max-width: 300px) 100vw, 300px">
				</div>		
			</div>

			<div id="copyright" class="clr" role="contentinfo" style="text-align: right;">
				<?php echo wp_kses_post( do_shortcode( $copy ) ); ?>
			</div><!-- #copyright -->
					

		<?php endif; ?>

	</div><!-- #footer-bottom-inner -->

	<?php do_action( 'ocean_after_footer_bottom_inner' ); ?>

</div><!-- #footer-bottom -->

<?php do_action( 'ocean_after_footer_bottom' ); ?>