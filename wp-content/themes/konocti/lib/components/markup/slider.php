<?php
/**
 *
 * KVC Home Page Slider
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

function slider( $slides ) {
    ?>
    <div class="slider">
        <?php
        foreach ( $slides as $i=>$slide ) {
            render_slide( $slide, $i, count($slides) );
        }
        ?>
        <div class="slider__swoosh" style="background-image:url('/wp-content/themes/<?php echo CHILD_TEXT_DOMAIN; ?>/assets/images/swoosh.png');">

        </div>
        <img src="/wp-content/themes/<?php echo CHILD_TEXT_DOMAIN; ?>/assets/images/logo-trans.png" class="slider__logo" />
    </div>
    <?php
}

function render_slide( $group, $index, $count ) {
    ?>
    <div class="slide slide--<?php echo $index; ?>" style="background-image:url('<?php echo $group['image']; ?>');">
        <div class="slider__overlay"></div>
        <div class="slide__text-container">
            <div class="wrap">
                <h1 class="slide__headline"><?php echo $group['headline']; ?></h1>
                <p class="subheadline slide__subheadline"><?php echo $group['sub_headline']; ?></p>
                <?php render_button($group, 'button--secondary'); ?>
            </div>
        </div>
        <div class="slider__pagination">
            <?php
            for ($x = 0; $x < $count; $x++) {
                ?>
                <div><span class="slider__pagination__dot<?php if ($index == $x) { echo ' active'; }?>" id="slider-dot-<?php echo $x +1; ?>"></span></div>
                <?php
            }
            ?>
            <p class="slider__pagination__count">
                <?php echo $index + 1; ?>/<?php echo $count; ?>
            </p>
        </div>
    </div>
    <?php
}