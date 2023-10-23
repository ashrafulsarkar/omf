<?php
/**
 * OMF Theme Theme Custom function
 *
 * @package OMF
 */

// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {
    $prefix = 'omf_csf';

    CSF::createOptions( $prefix, array(
        'framework_title'         => 'OMF Options <small>by <a href="mailto:ashrafulsarkar47@gmail.com">Ashraful Sarkar Naiem</a></small>',
        'framework_class'         => '',
        'menu_title'              => 'OMF Options',
        'menu_slug'               => 'omf-option',
        'menu_type'               => 'submenu',
        'menu_parent'             => 'themes.php',
        'menu_capability'         => 'manage_options',

        'show_search'             => false,
        'show_reset_all'          => true,
        'show_reset_section'      => true,
        'show_footer'             => false,
        'show_all_options'        => false,
        'show_form_warning'       => true,
        'sticky_header'           => true,
        'save_defaults'           => true,
        'ajax_save'               => true,
        'admin_bar_menu_icon'     => '',
        'admin_bar_menu_priority' => 80,
        'footer_text'             => '',
        'footer_after'            => '',
        'footer_credit'           => '',
        'transient_time'          => 0,
        'contextual_help'         => array(),
        'contextual_help_sidebar' => '',
        'enqueue_webfont'         => true,
        'async_webfont'           => false,
        'output_css'              => true,
        'nav'                     => 'normal',
        'theme'                   => 'dark',
        'class'                   => '',
        'defaults'                => array(),
    ) );

    require_once OMF_ROOT . '/inc/csf_customize/admin/header.php';
    require_once OMF_ROOT . '/inc/csf_customize/admin/color.php';
    require_once OMF_ROOT . '/inc/csf_customize/admin/footer.php';
    require_once OMF_ROOT . '/inc/csf_customize/admin/backup.php';
}