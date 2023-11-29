<?php

/**
 * Plugin Name: [Prefix] Test
 * Description: Plugin description here
 * Author:      Author
 * Author URI:  https://uri.example.com
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Version:     0.1.0
 * 
 * @package     prefix-test
 */
define('User_PLUGIN_FILE', __FILE__);
define('User_PLUGIN_PATH', untrailingslashit(plugin_dir_path(User_PLUGIN_FILE)));
define('User_PLUGIN_URL', untrailingslashit(plugins_url('/', User_PLUGIN_FILE)));

defined('ABSPATH') || exit;


require_once User_PLUGIN_PATH . '/includes/MainTestIncludes.php';

if (file_exists(User_PLUGIN_PATH . '/vendor/autoload.php')) {
    require_once User_PLUGIN_PATH . '/vendor/autoload.php';
}

if (class_exists('MainTestIncludes')) {
    function User()
    {
        return MainTestIncludes::getInstance();
    }
    //activation
    register_activation_hook(User_PLUGIN_FILE, array(User(), 'activate'));
    //deactivation
    register_deactivation_hook(User_PLUGIN_FILE, array(User(), 'deactivate'));
}
