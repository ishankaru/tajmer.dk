<?php
/**
 * Description: 404 template
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 	<?php include 'includes/section-header.php'; ?>

		<section class="module module-404">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php the_field('page_content', options); ?> 
					</div>
				</div>
			</div>
		</section>
	
	<?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>