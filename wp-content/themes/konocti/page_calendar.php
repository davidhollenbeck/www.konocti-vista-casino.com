<?php
/**
 *
 * Calendar
 *
 * Template Name: Calendar
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_calendar_page', 1);

function load_calendar_page() {
    ?>
        <div id="calendarContainer"></div>
        <div id="organizerContainer"></div>
    <?php
}

// Run the Genesis loop.
genesis();