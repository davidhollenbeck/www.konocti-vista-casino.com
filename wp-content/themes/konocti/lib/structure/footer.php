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
add_action( 'genesis_before_footer', __NAMESPACE__ . '\above_footer');

function footer_creds_filter( $creds ) {
    $creds = '[footer_copyright] Konocti Vista Casino &middot; <a href="#">Responsible Gaming</a> &middot; Website by <a href="https://engelbrechtadvertising.com/" target="_blank">Engelbrecht Advertising</a>';
    return $creds;
}

function above_footer() {
    ?>
    <div class="above-footer">
        <div class="row row--padding">
            <div class="mailing-list">
                <h3>Subscribe To Our Mailing List</h3>
                <p>Sign up for email alerts to stay current with the latest research, insights and more from our expert consultants.</p>
            </div>
            <div class="above-footer-right">
                <div class="contact-info">
                    <p>(212) 997-1100</p>
                    <p>99 Park Avenue, 6th Floor</p>
                    <p>New York, NY 10016</p>
                </div>
                <div class="footer-menu-1">
                    <?php footer_nav_1(); ?>
                </div>
                <div class="footer-menu-2">
                    <?php footer_nav_2(); ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php
}