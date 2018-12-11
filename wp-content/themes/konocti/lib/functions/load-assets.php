<?php
/**
 * Asset loader handler.
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Ucoast\Konocti;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue Scripts and Styles.
 *
 * @since 1.0.2
 *
 * @return void
 */
function enqueue_assets() {

	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts', '//use.typekit.net/wkj6hef.css', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );
    wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fa', '//use.fontawesome.com/releases/v5.5.0/css/fontawesome.css', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fa-brands', '//use.fontawesome.com/releases/v5.5.0/css/brands.css', array(), CHILD_THEME_VERSION );

	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-responsive-menu', CHILD_URL . '/assets/js/responsive-menu.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

	$localized_script_args = array(
		'mainMenu' => __( 'Menu', CHILD_TEXT_DOMAIN ),
		'subMenu'  => __( 'Menu', CHILD_TEXT_DOMAIN ),
	);
	wp_localize_script( CHILD_TEXT_DOMAIN . '-responsive-menu', 'developersL10n', $localized_script_args );
}