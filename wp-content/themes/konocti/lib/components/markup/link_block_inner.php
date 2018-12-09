<?php
/**
 *
 * Inner Link Block Component
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

function link_block_inner( $content ) {

    ?>
    <div class="row link-block-inner">
        <?php
        foreach ( $content as $i=>$block) {
            $classes = '';

            if ( $i == 0 ) {
                $classes .= 'first ';
            }

            if ( count( $content ) > 4 ) {
                $classes .= 'one-third ';
            }

            else if ( count( $content ) > 1) {
                $classes .= 'one-half';
            }
            render_link_block_inner( $block, $i, $classes );
        }
        ?>
        <div class="clearfix"></div>
    </div>
    <?php
}

function render_link_block_inner( $group, $index, $classes ) {
    ?>

    <div class="link-block-inner__block link-block-inner__block--<?php echo $index; ?> <?php echo $classes; ?>">
        <img src="<?php echo $group['image']; ?>"/>
        <h2 class="link-block-inner__headline"><?php echo $group['headline']; ?></h2>
        <p class="link-block-inner__subheadline"><?php echo $group['sub_headline']; ?></p>
        <?php render_button($group, 'button--secondary'); ?>
    </div>
    <?php
}
