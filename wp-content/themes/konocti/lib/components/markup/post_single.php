<?php

/**
 *
 * Post Single Functions
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

function do_post_single($group, $type='default', $date_picker='') {
            $class = '';

            if ( $type == 'default' ) {
                $class .= ' post-single-kvc--default';
            }

            elseif ( $type == 'promotion' ) {
                $class .= ' post-single-kvc--promotion';
            }

            elseif ( $type == 'event' ) {
                $class .= ' post-single-kvc--event';
            }

            $dowMap = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
            $moMap = array(' ', 'Jan', 'Feb', 'Mar', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

            $day = $dowMap[substr ($date_picker, -1 )];
            $date_picker = substr( $date_picker, 0, 8 );
            $date = ltrim( substr( $date_picker, -2, 2 ), '0' );
            $month = $moMap[ltrim( substr ($date_picker, -4, 2 ), '0' )];

        ?>
        <div class="post-single-kvc<?php echo $class; ?>">
            <div class="first one-half">
                <h1 class="entry-title"><?php echo $group['title']; ?></h1>
                <img src="<?php echo $group['image']; ?>" />
            </div>
            <div class="one-half">
                <div class="post-single-kvc--long-description"><?php echo $group['long_description']; ?></div>
                <?php if ( $type == 'promotion' ): ?>
                    <a class="button button--primary" href="/event-calendar">View Calendar</a>
                <?php endif; ?>
            </div>
            <?php if ( $type == 'event' ): ?>
                <div class="clearfix"></div>
                <div class="post-single-kvc--event-details">
                    <h2>Event Details:</h2>
                    <p><strong>Date:</strong> <?php echo $day . ', ' . $month . ' ' . $date;?></p>
                    <p><strong>Time:</strong> <?php echo $group['start'] . ' - ' . $group['end']; ?></p>
                    <a class="button button--primary" href="/event-calendar">View Calendar</a>
                </div>
            <?php endif; ?>
        </div>
    <?php
}