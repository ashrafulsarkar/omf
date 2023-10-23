<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OMF
 */

?>
<?php if ( ! is_front_page() ) : ?>
<section class="single-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-title">
                    <h1 class="post-title"><?php single_post_title(); ?></h1>
                    <span class="post-date"><?php omf_posted_on();?></span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>