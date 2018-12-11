<?php
/**
 * Footer HTML markup structure
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Ucoast\Konocti;

/**
 * Unregister footer callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_footer_callbacks() {

}

add_filter('genesis_footer_creds_text', __NAMESPACE__ . '\footer_creds_filter');

function footer_creds_filter( $creds ) {
    $creds = '[footer_copyright] Konocti Vista Casino &middot; <a href="#">Responsible Gaming</a> &middot; Website by <a href="https://engelbrechtadvertising.com/" target="_blank">Engelbrecht Advertising</a>';
    return $creds;
}

add_action( 'genesis_before_footer', __NAMESPACE__ . '\above_footer');

function above_footer() {
    ?>
    <div class="above-footer">
        <div class="row row--padding">
            <div class="footer-section">
                <h2>What's Happening</h2>
                <a href="https://www.instagram.com/kvcasino/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/kvcasino" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/KonoctiVistaCasino/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="footer-section">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container_class' => 'genesis-nav-menu' ) ); ?>
            </div>
            <div class="footer-section">
                <h2>Connect</h2>
                <p>
                    Konocti Vista Casino Resort<br/>
                    2755 Mission Rancheria Road<br/>
                    Lakeport, CA 95453<br/>
                    (707) 262-1900<br/>
                </p>
                <p><a href="#">Get Directions</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php
}