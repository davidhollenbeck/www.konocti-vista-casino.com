<?php
/**
 *
 * JSON of Calendar Data
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Konocti;

header( 'Content-type: application/json' );

// WP_Query arguments
$args = array (

    'post_type'              => array('promotion', 'event'),
    'post_status'            => 'publish',

);

// The Query

$raw_data[] = array();

$loop = new \WP_Query( $args );

//the loop
while ( $loop->have_posts() ) : $loop->the_post();

    if( get_post_type() == 'promotion') {
        $group = get_field('promotion');
    }

    else if( get_post_type() == 'event') {
        $group = get_field('event');
    }

    // create an array if there is more than one result

    if( $group['status'] == 'active' ) {

        $date_picker = $group['date'];
        $day = ltrim( substr( $date_picker, -2, 2 ), '0' );
        $month = ltrim( substr ($date_picker, -4, 2 ), '0' );
        $year = substr($date_picker, 0, 4);

        $raw_data[] = array(
            'title' => $group['title'],
            'day' => $day,
            'month' => $month,
            'year' => $year,
            'start' => $group['start'],
            'end' => $group['end']
        );
    }

endwhile;

wp_reset_query();

function format_events($events) {
    $data = array(

    );

    foreach ($events as $event) {

        if ( array_key_exists ( $event['year'], $data) ) {
            if ( array_key_exists( $event['month'], $data[$event['year']] ) ) {
                // add to existing day array
                if ( array_key_exists( $event['day'], $data[$event['year']][$event['month']] )) {
                    $data[$event['year']][$event['month']][$event['day']][] =

                        array(
                            'startTime' => $event['start'],
                            'endTime'   => $event['end'],
                            'text'      => $event['title']

                        );
                }
                // create a new array for day
                else {
                    $data[$event['year']][$event['month']][$event['day']] =
                        array (
                            array (
                                'startTime' => $event['start'],
                                'endTime'   => $event['end'],
                                'text'      => $event['title']
                            )
                        );
                }
            }
            // create a new array for month, day
            else {
                $data[$event['year']][$event['month']] =
                    array (
                        $event['day'] =>
                            array(
                                array (
                                    'startTime' => $event['start'],
                                    'endTime'   => $event['end'],
                                    'text'      => $event['title']
                                )
                            )
                    );
            }
        }
        // create a new array for year, month, day
        else {
            $data[$event['year']] = array( $event['month'] =>
                array(
                    $event['day'] =>
                        array(
                            array (
                                'startTime' => $event['start'],
                                'endTime'   => $event['end'],
                                'text'      => $event['title']
                            )
                        )
                )
            );
        }
    }

    return $data;
}

// output
echo json_encode( format_events( $raw_data ) );