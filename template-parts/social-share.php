<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OMF
 */

?>
<section class="social_share_options">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-share">
                    <p><?php _e('Share:', 'omf');?></p>
                    <ul>
                        <li><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a></li>

                        <li><a href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in"></i></a></li>

                        <li><a title="<?php the_title(); ?>" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-twitter"></i></a></li>

                        <li><a title="<?php the_title(); ?>" href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>" rel="noopener noreferrer"><i class="fa-solid fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>