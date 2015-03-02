<?php
/*
Plugin Name: Playbuzz oEmbed
Description: Adds oEmbed support for Playbuzz.com
Version: 1.2
Author: Rami Yushuvaev
Author URI: http://GenerateWP.com/
Text Domain: playbuzz-oembed
Domain Path: /languages
License: GPL2+
*/

function playbuzz_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www\.)?playbuzz.com/.*#i', 'https://www.playbuzz.com/api/oembed/', true );

}

add_action( 'init', 'playbuzz_oembed_provider' );
