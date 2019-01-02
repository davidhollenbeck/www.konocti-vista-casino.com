<?php
/**
 * Created by PhpStorm.
 * User: davidhollenbeck
 * Date: 2019-01-01
 * Time: 21:18
 */

namespace Ucoast\Konocti;


add_action('genesis_before_entry_content', __NAMESPACE__ . '\load_promotion', 10);
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

function load_promotion() {
    do_post_single( get_field('event' ), \get_post_type(), get_field('date' ));
}

genesis();