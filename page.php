<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OMF
 */

get_header();
?>
	<main>
		<section class="page_content">
			<div class="container">
				<div class="sm-hero">
					<div class="row">
						<div class="col">
							<div class="site-title">
								<h1 class="page-title"><?php single_post_title(); ?></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile; // End of the loop.
					?>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
<?php
get_footer();