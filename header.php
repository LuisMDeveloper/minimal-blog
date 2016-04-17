<?php
/**
 * ********************************************************************************************************************
 * header.php
 * Created by Luis Manuel Ramirez Vargas.
 * Date: 17/04/2016
 * Time: 10:15 AM
 *
 * The theme header.
 * ********************************************************************************************************************
 */
?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- Favicon & Apple touch icon -->
    <?php
        $favicon = IMAGES . '/icons/favicon.ico';
        $touchicon = IMAGES . '/icons/apple-touch-icon.png';
    ?>

    <link rel="shortcut icon" href="<?php echo $favicon; ?>">
    <link rel="apple-touch-icon" href="<?php echo $touchicon; ?>" sizes="180x180">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 10]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]--><!-- HEADER -->

<header class="container">
    <div class="row page-header">
        <div class="col-md-6">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <?php
                wp_nav_menu(array(
                    'menu_class'        => 'main-menu pull-right',
                    'theme-location'    => 'main-menu',
                    'container'         => false
                ));
            ?>
        </div>
    </div>
</header>