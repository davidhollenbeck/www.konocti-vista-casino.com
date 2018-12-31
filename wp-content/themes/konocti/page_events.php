<?php
/**
 *
 * Events Page
 *
 * Template Name: Events
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_events_page', 1);

function load_events_page() {
    hero( get_field('hero') );
    post_grid( get_field( 'post_grid'), 'events' );
}



// Run the Genesis loop.
genesis();