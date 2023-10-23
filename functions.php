<?php
/**
 * OMF functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OMF
 */

/**=======================================
 * THEME VERSION CONTROL
=======================================*/
if ('localhost' == $_SERVER['HTTP_HOST']) {
    define( 'OMF_VERSION', time() );
}else{
    define( 'OMF_VERSION', wp_get_theme()->get( 'Version' ) );
}

/**=======================================
 * DEFINE FILE FOLDER ROOT
=======================================*/
define( 'OMF_ROOT', get_template_directory() );
define( 'OMF_ROOT_URI', get_template_directory_uri() );
define( 'OMF_ROOT_CSS', OMF_ROOT_URI . '/assets/css' );
define( 'OMF_ROOT_JS', OMF_ROOT_URI . '/assets/js' );
define( 'OMF_ROOT_FONTS', OMF_ROOT_URI . '/assets/fonts' );
define( 'OMF_ROOT_PLUGINS', OMF_ROOT_URI . '/plugins' );

/**======================================
 * ADD THEME AFTER SETUP FUNCTIONALITY
=======================================*/
if ( file_exists( OMF_ROOT . '/inc/setup.php' ) ) {
    require_once OMF_ROOT . '/inc/setup.php';
}

/**==============================
 * Enqueue scripts and styles.
===============================*/
if ( file_exists( OMF_ROOT . '/inc/scripts.php' ) ) {
    require_once OMF_ROOT . '/inc/scripts.php';
}

/**======================================
 * Codestar framework.
======================================*/
if ( file_exists( OMF_ROOT . '/inc/csf/codestar-framework.php' ) ) {
    require_once OMF_ROOT . '/inc/csf/codestar-framework.php';
}

/**======================================
 * Codestar framework Custom Option.
======================================*/
if ( file_exists( OMF_ROOT . '/inc/csf_customize/codestar.php' ) ) {
    require_once OMF_ROOT . '/inc/csf_customize/codestar.php';
}

/**======================================
 * Custom Functions.
======================================*/
if ( file_exists( OMF_ROOT . '/inc/custom-functions.php' ) ) {
    require_once OMF_ROOT . '/inc/custom-functions.php';
}

/**==============================================================
 * TGM plugin installer.
==============================================================*/
if ( file_exists( OMF_ROOT . '/inc/installer.php' ) ) {
    require_once OMF_ROOT . '/inc/installer.php';
}

/**============================
 * Customizer additions.
============================*/
if ( file_exists( OMF_ROOT . '/inc/customizer.php' ) ) {
    require_once OMF_ROOT . '/inc/customizer.php';
}

/**=====================================
 * Load Jetpack compatibility file.
=====================================*/
if ( defined( 'JETPACK__VERSION' ) ) {
    require OMF_ROOT . '/inc/jetpack.php';
}