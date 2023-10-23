<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OMF
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php
$omf_neutral_black = cs_get_option( 'omf-neutral-black', '#000B07' );
$omf_neutral_white = cs_get_option( 'omf-primary-white', '#FAFCFF' );
$omf_accent_blue = cs_get_option( 'omf-accent-blue', '#00519B' );
$omf_accent_light_blue = cs_get_option( 'omf-accent-light-blue', '#DCEAF8' );
$omf_grayscale = cs_get_option( 'omf-grayscale' );
$omf_gray_90 = $omf_grayscale[ "grey-90" ];
$omf_gray_50 = $omf_grayscale[ "grey-50" ];
$omf_gray_20 = $omf_grayscale[ "grey-20" ];
?>
	<style>
		:root {
			--site_primary_black: <?php echo $omf_neutral_black; ?>;
			--site_primary_white: <?php echo $omf_neutral_white; ?>;
			--site_accent_blue: <?php echo $omf_accent_blue; ?>;
			--site_accent_light_blue: <?php echo $omf_accent_light_blue; ?>;
			--site_gray_90: <?php echo $omf_gray_90; ?>;
			--site_gray_50: <?php echo $omf_gray_50; ?>;
			--site_gray_20: <?php echo $omf_gray_20; ?>;
		}
	</style>

	<?php wp_head();?>
</head>

<body <?php body_class();?>>
	<?php wp_body_open();?>
	<?php
	$omf_logo = cs_get_option( 'omf-header-logo' );
	$omf_logo_url = isset( $omf_logo[ 'url' ] ) ? $omf_logo[ 'url' ] : '';

	$omf_header_btn_beraten_lassen = cs_get_option( 'omf-header-btn-beraten-lassen' );
	$omf_header_btn_beraten_lassen_text = isset( $omf_header_btn_beraten_lassen[ 'text' ] ) ? $omf_header_btn_beraten_lassen[ 'text' ] : '';
	$omf_header_btn_beraten_lassen_url = isset( $omf_header_btn_beraten_lassen[ 'url' ] ) ? $omf_header_btn_beraten_lassen[ 'url' ] : '';

	$omf_header_sticky = cs_get_option( 'omf-header-sticky' );
	$omf_header_sticky_class = '';
	if ( $omf_header_sticky ) {
		$omf_header_sticky_class = 'header-sticky';
	}

	?>
	<header class="<?php echo $omf_header_sticky_class; ?>">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-4 col-sm-4 col-8">
					<?php if ( !empty( $omf_logo_url ) ) {?>
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img class="menu_logo" src="<?php echo $omf_logo_url; ?>" alt="logo">
							</a>
						</div>
					<?php } else {?>
						<div class="site-branding">
							<a href="<?php echo home_url(); ?>">
								<h2><?php echo bloginfo( 'name' ) ?></h2>
							</a>
						</div>
					<?php } ?>
				</div>
				<div class="col-lg-9 col-md-8 col-sm-8 col-4">
					<div class="primary-menu">
						<nav class="d-none d-lg-block">
							<?php
							wp_nav_menu( array(
								'theme_location' => "main_menu",
								'container'      => "ul",
							) );
							?>
						</nav>
						<div class="menu-btn">
							<a class="btn d-none d-sm-block" href="<?php echo $omf_header_btn_beraten_lassen_url ?>"><?php echo $omf_header_btn_beraten_lassen_text; ?></a>
						</div>
						<div class="mobile_btn d-block d-lg-none">
							<i class="fa-solid fa-bars mobile_nav_btn"></i>
							<i class="fa-solid fa-xmark mobile_nav_btn d-none"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile-menu d-block d-lg-none">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="primary-menu">
							<nav>
								<?php
								wp_nav_menu( array(
									'theme_location' => "main_menu",
									'container'      => "ul",
								) );
								?>
							</nav>
							<div class="menu-btn d-block d-sm-none">
								<a class="btn" href="<?php echo $omf_header_btn_beraten_lassen_url ?>"><?php echo $omf_header_btn_beraten_lassen_text; ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->