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
	
	<?php if( get_field('artist_calendar') ): ?>	
	<?php $post_object = get_field('artist'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>

		<section class="module module-calendar single-calendar">
			<div class="container">
				<div class="row">
					<?php include 'includes/section-calendar-single.php';?>
				</div>
			</div>
		</section>
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	<?php endif; ?>
		
		<section class="module module-related">
			<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="h3">Tajmer anbefaler også:</p>
			</div>
						<?php 	
							$posts = get_posts(array(
								'numberposts'	=> 6,
								'post_type'		=> 'shows'
							))
						?>

						<?php if( $posts ) { foreach( $posts as $post ) { setup_postdata( $post ); ?> 
							<div class="col-xs-6 col-sm-4 col-md-2">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_field('artist_calendar_image'); ?>" alt="#" class="img-responsive"></a>
								<a href="<?php the_permalink(); ?>">Se Tourplan</a>
							</div>
						<?php } wp_reset_postdata(); } ?>
					</div></div>
					</section>

 <?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>
