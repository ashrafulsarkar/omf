<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OMF
 */

?>
<div class="col-lg-4 col-md-6 sm-post-part">
	<article id="post-<?php the_ID(); ?>" <?php post_class(['sm_post']); ?>>
		<div class="post_content">
			<?php omf_post_thumbnail(); ?>
			<div class="post_details">
				<div class="post-top">
					<?php if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							omf_posted_on();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
					<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

					<div class="post-content">
						<?php echo omf_custom_excerpts(20); ?>
					</div>
				</div>
			</div>
		</div><!-- .entry-header -->
		<div class="post-bottom">
			<a href="<?php the_permalink(); ?>"><?php _e('Read more', 'omf');?></a>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>