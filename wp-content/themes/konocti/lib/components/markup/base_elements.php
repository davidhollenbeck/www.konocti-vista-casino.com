<?php
/**
 *
 * Render Base Elements like buttons, forms, etc.
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

function render_button($group, $class) {
    if ($group['link_url'] && $group['link_text']):
        ?>
        <a class="button <?php echo $class; ?>" href="<?php echo $group['link_url']; ?>" <?php format_link_target($group['link_target']); ?> >
            <?php echo $group['link_text']; ?>
        </a>
    <?php
    endif;

}