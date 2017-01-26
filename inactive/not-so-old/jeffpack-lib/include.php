<?php
/**
 * 
 * Include this file and gain access to everything you need for a plugin via the
 * WpPluginBase class, which extends SettingsHelper, PluginData, PersistArgs 
 * and HelperModule
 * 
 * @package     JeffPack
 * @subpackage  WordPress Classes
 * @author      Jeff Russ
 * @copyright   2016 Jeff Russ
 * @license     GPL-2.0
 */

include_once substr( __FILE__, 0, strpos(__FILE__, "wp-content") ).'wp-admin/includes/file.php';
include_once substr( __FILE__, 0, strpos(__FILE__, "wp-content") ).'wp-admin/includes/plugin.php';
include_once 'jr_php_lib/HelperModule.php';
include_once 'jr_php_lib/PersistArgs.php';
include_once 'jr_wp_lib/WpInfoHash.php';
include_once 'jr_wp_lib/WpSettingsHelper.php';

if ( ! class_exists('JeffpackBase') ) { class WpPluginBase extends WpSettingsHelper {}
	/**
	 * WpPluginBase class serves as a base for creating WordPress Plugins.
	 * 
	 * Include this file and gain access to everything you need for a plugin via the
	 * WpPluginBase class, which extends SettingsHelper, PluginData, PersistArgs 
	 * and HelperModule
	 */
}