<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package OMF
 */

get_header();
?>
	<main>
		<?php get_template_part( 'template-parts/single_hero' );?>
		<section class="single_post_content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'single' );
						endwhile;
						?>
					</div>
				</div>
			</div>
		</section>
		<?php get_template_part( 'template-parts/social-share' );?>
	</main><!-- #main -->
<?php
get_footer();