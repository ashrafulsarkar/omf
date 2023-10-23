<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OMF
 */

get_header();
?>
	<main>
		<section class="blog_section">
			<div class="container">
				<div class="row">
					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
				<div class="row">
					<div class="col">
						<div class="pagination-part">
							<?php
							omf_pagination();
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php
get_footer();