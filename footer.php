<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OMF
 */

?>
<?php
$omf_footer_logo = cs_get_option('omf-footer-logo');

$omf_footer_btn_1 = cs_get_option('omf-footer-link-1');
$omf_footer_btn_1_text = isset($omf_footer_btn_1['text'])?$omf_footer_btn_1['text']:'';
$omf_footer_btn_1_url = isset($omf_footer_btn_1['url'])?$omf_footer_btn_1['url']:'';

$omf_footer_btn_2 = cs_get_option('omf-footer-link-2');
$omf_footer_btn_2_text = isset($omf_footer_btn_2['text'])?$omf_footer_btn_2['text']:'';
$omf_footer_btn_2_url = isset($omf_footer_btn_2['url'])?$omf_footer_btn_2['url']:'';
?>
<footer>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3 col-md-3">
				<div class="footer_logo">
					<img src="<?php echo isset($omf_footer_logo['url']) ? $omf_footer_logo['url']:'';?>" alt="<?php echo isset($omf_footer_logo['alt'])? $omf_footer_logo['alt'] : '';?>">
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="footer-link">
					<ul>
						<li><a href="<?php echo $omf_footer_btn_1_url; ?>"><?php echo $omf_footer_btn_1_text; ?></a></li>
						<li><a href="<?php echo $omf_footer_btn_2_url; ?>"><?php echo $omf_footer_btn_2_text; ?></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="social_option">
					<ul>
						<?php $omf_social = cs_get_option('omf-social-icons-list'); ?>
						<?php
						if ($omf_social) {
							for ($i=0; $i < count($omf_social) ; $i++) { ?>
								<li>
									<a href="<?php echo $omf_social[$i]['icon-link'];?>" target="_blank"><i class="<?php echo $omf_social[$i]['icon'];?>"></i></a>
								</li>
						<?php } } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="copyright">© <?php echo cs_get_option('omf-footer-copyright');?></p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
