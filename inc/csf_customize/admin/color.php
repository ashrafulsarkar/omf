<?php
/**
 * OMF Theme page option
 *
 * @package OMF
 */
CSF::createSection( $prefix, array(
    'id'     => 'omf_site_color',
    'title'  => 'Color Settings',
    'icon'   => 'fas fa-eye-dropper',
    'fields' => array(
        array(
            'id'          => 'omf-neutral-black',
            'type'        => 'color',
            'title'       => 'Neutral Black',
            'default'     => '#000B07',
        ),
        array(
            'id'          => 'omf-neutral-white',
            'type'        => 'color',
            'title'       => 'Neutral White',
            'default'     => '#FAFCFF',
        ),
        array(
            'id'          => 'omf-accent-blue',
            'type'        => 'color',
            'title'       => 'Accent Blue',
            'default'     => '#00519B',
        ),
        array(
            'id'          => 'omf-accent-light-blue',
            'type'        => 'color',
            'title'       => 'Accent Light Blue',
            'default'     => '#DCEAF8',
        ),
        array(
            'id'        => 'omf-grayscale',
            'type'      => 'color_group',
            'title'     => 'Grayscale',
            'options'   => array(
              'grey-90' => 'Grey 90',
              'grey-50' => 'Grey 50',
              'grey-20' => 'Grey 20',
            ),
            'default'   => array(
              'grey-90' => '#515E6A',
              'grey-50' => '#EBECF0',
              'grey-20' => '#F3F4F6',
            )
        ),
    ),
) );