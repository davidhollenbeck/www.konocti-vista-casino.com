<?php
/**
 *
 * Content Block for Konocti Vista Casino
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

function parallax_block( $group ) {
    ?>

    <div class="row row--full-width parallax-block" style="background-image:url('<?php echo $group['image']; ?>');">
        <div class="content-block__inner">
            <?php load_parallax_copy($group); ?>
        </div>
    </div>
    <?php
}

function load_parallax_copy($group) {
    ?>
    <div class="parallax-text-inner">
        <h1><?php echo $group['headline']; ?></h1>
        <p><?php echo $group['text'] ; ?></p>
        <?php render_button($group, 'button--primary'); ?>
    </div>
    <?php
}
