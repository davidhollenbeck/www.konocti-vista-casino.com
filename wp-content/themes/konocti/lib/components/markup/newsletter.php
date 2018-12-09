<?php
/**
 *
 * Newsletter Signup Widget
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

function newsletter($group) {
    ?>
        <div class="row newsletter" style="background-image:url('<?php echo $group['image']; ?>');">
            <div class="text-inner">
                <div class="overlay"></div>
                <h2><?php echo $group['headline']; ?></h2>
                <p class="subtitle"><?php echo $group['subheadline']; ?></p>
                <?php echo do_shortcode( $group['contact_form_shortcode'] ); ?>
            </div>
        </div>
    <?php   
}