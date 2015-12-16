<?php
/**
 * Description: Single Campaign
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>
	
	<section class="module module-campaign" style="background-image: url('<?php the_field('background_image'); ?>');">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php the_content(); edit_post_link('Rediger kampagne', '<p>', '</p>'); ?>
				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>