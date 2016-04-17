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

/**
 * ********************************************************************************************************************
 * GET POST META
 * ********************************************************************************************************************
 */
if (!function_exists('minimal_post_meta')) {
    function minimal_post_meta() {
        if( get_post_type() === 'post') {
            $author_url = esc_url( get_author_posts_url( get_the_author_meta('ID') ) );
            echo '<ul class="list-inline">';
            echo '    <li>';
            echo '        <span class="glyphicon glyphicon-user"></span> <a href="'.$author_url.'">'.get_the_author().'</a>';
            echo '    </li>';
            echo '    <li>';
            echo '        <span class="glyphicon glyphicon-calendar"></span> <a href="#">'.__('Posted on','minimal').' '.get_the_date().'</a>';
            echo '    </li>';
            echo '    <li>';
            echo '        <span class="glyphicon glyphicon-folder-open"></span> <a href="#">Uncategorized</a>';
            echo '    </li>';
            echo '    <li>';
            echo '        <span class="glyphicon glyphicon-tags"></span> <a href="#">boat, lake</a>';
            echo '    </li>';
            echo '</ul>';
        }
    }
}

/**
 * ********************************************************************************************************************
 * GET NUMBERED PAGINATION
 * ********************************************************************************************************************
 */
if (!function_exists('minimal_numbered_pagination')) {
    function minimal_numbered_pagination() {
        $args = array(
            'prev_next' => false,
            'type'      => 'array'
        );
        $pagination = paginate_links($args);
        echo '<nav>';
        if (is_array($pagination)) {
            echo '<ul class="pagination">';
            foreach ($pagination as $page) {
                if(strpos($page,'current')) {
                    echo '<li class="active"><a href="#">'.$page.'</a></li>';
                } else {
                    echo '<li>'.$page.'</li>';
                }
            }
            echo '</ul>';
        }
        echo '</nav>';
    }
}

/**
 * ********************************************************************************************************************
 * REGISTER WIDGET AREAS
 * ********************************************************************************************************************
 */
if (!function_exists('minimal_widget_init')) {
    function minimal_widget_init() {
        if (!function_exists('register_sidebar')) {
            register_sidebar(array(
                'name'  => __('Main Widget Area', 'minimal'),
                'id'    => 'main-sidebar',
                'description'  => __('Appears in the blog pages.', 'minimal'),
                'before_widget' => '<section id="%1$s" class="box %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h4><small>',
                'after_title' => '</small></h4>'
            ));
        }
    }

    add_action('widgets_init', 'minimal_widget_init');
}

?>

