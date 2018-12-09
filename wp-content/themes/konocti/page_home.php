<?php

/**
 * Konocti Vista Casino
 *
 * This file adds the home page to the Konocti Vista Casino Theme.
 *
 * Template Name: Home
 *
 * @package     Ucoast\Konocti
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 */

namespace Ucoast\Konocti;

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_loop', __NAMESPACE__ . '\load_home_page', 1);

function load_home_page() {

    home__do_slider();
    home__do_content_blocks();
    home__do_parallax_block();
    home__do_link_block();
    home__do_newsletter();

}

function home__do_slider() {
    $content = get_field('slides');
    slider( $content );
}

function home__do_content_blocks() {
    $content = get_field('home_content_repeater');
    content_blocks($content);
}

function home__do_parallax_block() {
    $content = get_field('home_parallax');
    parallax_block($content);
}

function home__do_link_block() {
    $content = get_field('home_link_block_inner');
    link_block_inner($content);
}

function home__do_newsletter() {
    $content = get_field('newsletter');
    newsletter($content);
}

// Next steps: add widgetized area to recent_articles.php, add link block sections







// Run the Genesis loop.
genesis();
