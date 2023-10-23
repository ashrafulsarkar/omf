<?php
/**
 * OMF Theme Style script
 *
 * @package OMF
 */

function omf_scripts() {
	/**=======================
	 * Google Fonts
	 * Fonts Name: Poppins
	 =========================*/
	 wp_enqueue_style( 'omf-google-fonts', '//fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap', false );

	/**=======================
	 * Theme Default Style
	 =======================*/
	wp_enqueue_style( 'omf-style', get_stylesheet_uri(), [], OMF_VERSION );

	/**==================
	 * Main Style
	 ==================*/
	
	wp_enqueue_style( 'bootstrap-grid', OMF_ROOT_CSS . '/bootstrap-grid.min.css' );
	wp_enqueue_style( 'fontawesome', OMF_ROOT_CSS . '/fontawesome.min.css' );
	wp_enqueue_style( 'omf-main-style', OMF_ROOT_CSS . '/style.css', [], OMF_VERSION );
	wp_enqueue_style( 'omf-responsive', OMF_ROOT_CSS . '/responsive.css' , [], OMF_VERSION );



	/**==================
	 * Main Script
	 ==================*/
	$omf_scrolltop = cs_get_option('omf-scrolltop');
	$smf_data = [
		'active' => false
	];
	if ($omf_scrolltop) {
		wp_enqueue_script( 'jquery.scrollUp', OMF_ROOT_JS . '/jquery.scrollUp.min.js', ['jquery'], '2.4.1', true );
		$smf_data = [
			'active' => true
		];
	}

	wp_enqueue_script( 'omf-script', OMF_ROOT_JS . '/main.js', ['jquery'], OMF_VERSION, true );
	wp_localize_script( 'omf-script', 'omf_scrolltop', $smf_data );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'omf_scripts' );