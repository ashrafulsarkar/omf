<?php
/**
 * OMF Theme footer option
 *
 * @package OMF
 */
CSF::createSection( $prefix, array(
    'id'     => 'omf_footer',
    'title'  => 'Footer',
    'icon'   => 'fa fa-home',
    'fields' => array(
        array(
            'id'      => 'omf-footer-logo',
            'type'    => 'media',
            'title'   => 'Footer Logo',
            'url'     => false,
            'library' => 'image',
        ),
        array(
            'id'       => 'omf-footer-link-1',
            'type'     => 'link',
            'title'    => 'Impressum Link',
            'default'  => array(
              'url'    => '#',
              'text'   => 'Impressum',
            ),
        ),
        array(
            'id'       => 'omf-footer-link-2',
            'type'     => 'link',
            'title'    => 'Dateschutz Link',
            'default'  => array(
              'url'    => '#',
              'text'   => 'Dateschutz',
            ),
        ),
        array(
            'id'                     => 'omf-social-icons-list',
            'type'                   => 'group',
            'title'                  => 'Add Social Icon',
            'accordion_title_prefix' => 'Social Icon:',
            'fields'                 => array(
                array(
                    'id'      => 'icon',
                    'type'    => 'icon',
                    'title'   => 'Social Icon',
                    'default' => 'fab fa-facebook-f',
                ),
                array(
                    'id'      => 'icon-link',
                    'type'    => 'text',
                    'title'   => 'Profile Url',
                    'default' => '#',
                ),
            ),
        ),
        array(
            'id'       => 'omf-footer-copyright',
            'type'     => 'text',
            'title'    => 'Copyright Text',
            'default'  => '2023 OMF. ALL RIGHTS RESERVED',
        ),
    ),
) );