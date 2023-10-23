<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OMF
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php omf_post_thumbnail(); ?>

	<div class="page-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'omf' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->