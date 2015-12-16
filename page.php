<?php
/**
 * Description: Standard Page
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

	<?php include 'includes/section-header.php';?>
	<?php include 'includes/section-hero.php';?>
 
	<section class="module module-standard">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php the_content(); edit_post_link('Rediger side', '<p>', '</p>'); ?>
				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/section-process.php';?>
	<?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>