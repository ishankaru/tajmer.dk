<?php
/**
 * Description: On Demand Archive
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>
 
	<section class="module module-products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><img src="http://tajmer.dk.linux95.unoeuro-server.com/administrator/wp-content/uploads/2015/12/primary-icon.png" class="img-icon" alt="#"> Shows</h1>
					<div class="row">
						<?php 	
							$posts = get_posts(array(
								'numberposts'	=> -1,
								'post_type'		=> 'ondemand'
							))
						?>

						<?php if( $posts ) { foreach( $posts as $post ) { setup_postdata( $post ); ?> 
							<div class="col-md-3">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_field('cover_image'); ?>" alt="#" class="img-responsive"></a>
								<a href="<?php the_permalink(); ?>">Se mere</a>
							</div>
						<?php } wp_reset_postdata(); } ?>
					</div>
				</div>			
			</div>
		</div>
	</section>

 <?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>
