<?php
/**
 * Description: Teammember
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
				<div class="col-md-12">
					<img src="<?php the_field('image'); ?>" class="img-responsive img-circle">
					<h3><?php the_field('name'); ?></h3>
					<p>
						<?php the_field('title'); ?><br>
						<a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a><br>
						<a href="tel:<?php the_field('phone'); ?>">+45 <?php the_field('phone'); ?></a><br>
						<?php edit_post_link('Rediger', '', ''); ?>
					</p>
				</div>
			</div>
		</div>
	</section>

 <?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>
