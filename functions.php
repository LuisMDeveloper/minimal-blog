<?php
/**
 * ********************************************************************************************************************
 * functions.php
 * Created by Luis Manuel Ramirez Vargas.
 * Date: 17/04/2016
 * Time: 10:15 AM
 *
 * The theme's functions.
 * ********************************************************************************************************************
 */

/**
 * ********************************************************************************************************************
 * CONSTANTS
 * ********************************************************************************************************************
 */
define('THEMEROOT', get_stylesheet_directory_uri() );
define('IMAGES', THEMEROOT . '/img' );
define('JS', THEMEROOT . '/js' );

/**
 * ********************************************************************************************************************
 * THEME SETUP
 * ********************************************************************************************************************
 */
if (!function_exists('minimal_theme_setup')) {
    function minimal_theme_setup() {
        /* Make the theme available for translation */
        $lang_dir = THEMEROOT . '/languages';
        load_theme_textdomain('minimal', $lang_dir);

        /* Add support for automatic feed links */
        add_theme_support('automatic-feed-links');

        /* Add support for post thumbnails */
        add_theme_support('post-thumbnails');

        /* Register nav menus */
        register_nav_menus(array(
            'main-menu' => __('Main Menu', 'minimal')

        ));
    }

    add_action('after_setup_theme', 'minimal_theme_setup');
}



?>

