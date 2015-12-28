<?php
/**
* Template Name: Template: Contact
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
				<div class="col-md-12">
					<?php 	
						$posts = get_posts(array(
							'post_type'	=> 'team',
							'numberposts'	=> -1
						))
					?>

					<?php if( $posts ) { foreach( $posts as $post ) { setup_postdata( $post ); ?> 
						<div class="col-xs-3 teammember">
							<img src="<?php the_field('image'); ?>" class="img-responsive img-circle">
							<h3><?php the_field('name'); ?></h3>
							<p>
								<?php the_field('title'); ?><br>
								<a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a><br>
								<a href="tel:<?php the_field('phone'); ?>">+45 <?php the_field('phone'); ?></a><br>
								<?php edit_post_link('Rediger medarbejder', '', ''); ?>
							</p>
						</div>
					<?php } wp_reset_postdata(); } ?>
				</div>
			</div>
		</div>
	</section>

 <?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>
