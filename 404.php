<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package OMF
 */

get_header();
?>

	<main>
		<section class="error-404 not-found">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="not-found-content">
							<h1 class="not-found-404"><?php esc_html_e( '404', 'omf' ); ?></h1>
							<h3 class="not-found-title"><?php esc_html_e( 'Die von Ihnen angeforderte Seite konnte nicht gefunden werden', 'omf' ); ?></h3>
							<a class="btn" href="<?php echo site_url('/');?>"><?php _e('Zurück zur Startseite','omf');?></a>
						</div><!-- .page-content -->
					</div>
				</div>
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->
<?php
get_footer();