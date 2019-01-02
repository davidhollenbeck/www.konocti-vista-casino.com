<?php
/**
 * Created by PhpStorm.
 * User: davidhollenbeck
 * Date: 2019-01-01
 * Time: 21:18
 */

namespace Ucoast\Konocti;

add_filter( 'woocommerce_continue_shopping_redirect', 'wc_custom_redirect_continue_shopping' );

function wc_custom_redirect_continue_shopping() {

    return '/entertainment-events/';
}