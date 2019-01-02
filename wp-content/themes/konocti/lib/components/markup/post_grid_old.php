<?php
/**
 *
 * Post Grid
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

function post_grid( $options, $type='default' ) {
    if ( $type == 'default' ) {
        $class = '';

        /*$args = array(
            'post_type' => 'post',
        );*/

        $posts = \get_posts(array(
            'posts_per_page'	=> -1,
            'post_type'			=> 'post'
        ));
    }

    elseif ( $type == 'events' ) {
        $class = ' post-grid--events';

        /*$args = array(
            'post_type' => 'event',
        );*/

        $posts = \get_posts(array(
            'posts_per_page'	=> -1,
            'post_type'			=> 'product',
            //'meta_key'			=> 'date',
            //'orderby'	=> 'meta_value_num',
            'order'		=> 'ASC'
        ));
    }

    // The Query
    //$the_query = new \WP_Query( $args );

    // The Loop
    //if ( $the_query->have_posts() ):
    if ( $posts ):
        echo '<div class="row row--padding post-grid' . $class . '">';
        $i = 0;

        foreach( $posts as $post ):
            setup_postdata( $post );

            $dowMap = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
            $moMap = array(' ', 'Jan', 'Feb', 'Mar', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

            $group = get_field( 'event', $post );
            $date_picker = get_field( 'date', $post );
            //d($date_picker);
            $day = $dowMap[substr ($date_picker, -1 )];
            $date_picker = substr( $date_picker, 0, 8 );
            $date = ltrim( substr( $date_picker, -2, 2 ), '0' );
            $month = $moMap[ltrim( substr ($date_picker, -4, 2 ), '0' )];

            ?>

            <div class="<?php if ( $i % 2 == 0 ) { echo 'first '; } ?>one-half post-grid__block">
                <div class="post-grid__date-box">
                    <h6 class="post-grid__month"><?php echo $month; ?></h6>
                    <h4 class="post-grid__date"><?php echo $date; ?></h4>
                    <h6 class="post-grid__day"><?php echo $day; ?></h6>
                </div>
                <img src="<?php echo $group['image']; ?>" />
                <h2><?php echo $group['title']; ?></h2>
                <h4 class="date"><?php echo $group['start'] . ' - ' . $group['end']; ?></h4>
                <?php if ( $group['tickets_available'] == 'yes' ): ?>

                    <a href="<?php echo \get_permalink( $group['ticket'][0] ); ?>" class="button button--primary">Buy Tickets</a>
                <?php else: ?>
                    <a href="#" class="button button--secondary">Details</a>
                <?php endif; ?>
            </div>

            <?php

            $i++;
            wp_reset_postdata();
        endforeach;

        echo '</div>';
        /* Restore original Post Data */
        wp_reset_postdata();
    else:
        ?> <div class="row row--padding post-grid">
        <h2>No upcoming events found.</h2>
    </div>
    <?php
    endif;
}