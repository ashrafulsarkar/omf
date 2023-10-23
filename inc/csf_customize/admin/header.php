<?php
/**
 * OMF Theme header option
 *
 * @package OMF
 */
CSF::createSection( $prefix, array(
    'id'     => 'omf_header',
    'title'  => 'Header',
    'icon'   => 'fas fa-home',
    'fields' => array(
        array(
            'id'       => 'omf-header-logo',
            'type'     => 'media',
            'title'    => 'Header Logo',
            'subtitle' => esc_html__( '(105x57)px', 'omf' ),
            'url'      => false,
            'library'  => 'image',
        ),
        array(
            'id'       => 'omf-header-btn-beraten-lassen',
            'type'     => 'link',
            'title'    => 'Beraten lassen Button',
            'default'  => array(
              'url'    => '#',
              'text'   => 'Beraten lassen',
            ),
        ),
        array(
            'id'      => 'omf-header-sticky',
            'type'    => 'switcher',
            'title'   => 'Header Sticky',
            'default' => true,
        ),
        array(
            'id'      => 'omf-scrolltop',
            'type'    => 'switcher',
            'title'   => 'Scroll Top',
            'default' => false,
        ),
    ),
) );
