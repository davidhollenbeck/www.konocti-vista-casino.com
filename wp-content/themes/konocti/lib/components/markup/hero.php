<?php
/**
 *
 * Hero
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

function hero( $group, $type='default' ) {
    if ( $type == 'default' ) {
        $class = '';
    }

    elseif ( $type == 'events' ) {
        $class = 'hero--events';
    }

    ?>

        <div class="hero <?php echo $class; ?>" style="background-image:url('<?php echo $group['image']; ?>'); background-position:<?php echo $group['image_position_horizontal']; ?>% <?php echo $group['image_position_vertical']; ?>%;">
            <div class="hero__text-container">
                <h1 class="hero__title"><?php echo $group['title']; ?></h1>
            </div>
        </div>
    <?php
}