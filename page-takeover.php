<?php 
/**
 * Plugin Name:       Page Takeover
 * Plugin URI:        https://wordpress.org/plugins/page-takeover
 * Description:       Create a full-screen overlay without a developer. Promote your content and offers in a full-screen popup.
 * Version:           1.1.6
 * Author:            WPKube
 * Author URI:        https://wpkube.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       page-takeover
 * Domain Path:       /languages
 */

// called directly, abort
if ( ! defined( 'WPINC' ) ) {
	die;
}

// constants
define( 'PAGE_TAKEOVER_VERSION', '1.1.6' );
define( 'PAGE_TAKEOVER_URL', plugin_dir_url( __FILE__ ) );
define( 'PAGE_TAKEOVER_BASENAME', plugin_basename( __FILE__ ) );
define( 'PAGE_TAKEOVER_DIR_NAME', dirname( plugin_basename( __FILE__ ) ) );
define( 'PAGE_TAKEOVER_ABS', dirname(__FILE__) );
define( 'PAGE_TAKOVER_OPTION_PREFIX', 'page_takeover_' );

// includes
include PAGE_TAKEOVER_ABS . '/includes/general.php';
include PAGE_TAKEOVER_ABS . '/includes/admin.php';
