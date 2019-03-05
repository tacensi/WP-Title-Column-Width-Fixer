<?php
/**
 * Plugin Name: WP Column Fixer
 * Plugin URI:  https://github.com/tacensi/wp-title-column-width-fixer
 * Description: Fix Yoast SEO plugin f*cking up the column widths
 * Version:     20190303
 * Author:      tacensi
 * Author URI:  https://tacensi.com/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


add_action( 'admin_head', function () {
	echo '<style>
		#title {
			width: 35%;
		}
		</style>';
} );
