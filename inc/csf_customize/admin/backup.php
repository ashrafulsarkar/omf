<?php
/**
 * OMF Theme page option
 *
 * @package OMF
 */
CSF::createSection( $prefix, array(
    'id'     => 'omf_backup',
    'title'  => 'Backup Option',
    'icon'   => 'fas fa-download',
    'fields' => array(
        array(
            'type' => 'backup',
        ),
    ),
) );
