<?php
/*
Plugin Name: Playbuzz oEmbed
Plugin URI:  https://wordpress.org/plugins/playbuzz-oembed/
Description: Embed playful content from Playbuzz.com into your WordPress site
Version:     1.3
Author:      Rami Yushuvaev
Author URI:  http://GenerateWP.com/
Text Domain: playbuzz-oembed
Domain Path: /languages
*/



/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * Playbuzz oEmbed
 */
function playbuzz_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www\.)?playbuzz.com/.*#i', 'https://www.playbuzz.com/api/oembed/', true );

}
add_action( 'init', 'playbuzz_oembed_provider' );
