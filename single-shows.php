<?php
/**
 * Description: Show
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>
 
	<section class="module module-standard">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="<?php the_field(cover_image); ?>" title="<?php the_title(); ?>" class="img-responsive">
				</div>
				<div class="col-md-7">
					<?php include 'includes/section-breadcrumbs.php';?>
					<?php the_content(); ?>
					<?php edit_post_link('Rediger show', '<p>', '</p>'); ?>
				</div>
			</div>
		</div>
	</section>

 <?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>
