<?php
/**
 * Template Name: Template: Frontpage
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>

 	<?php include 'includes/section-slideshow.php';?>

	<section class="module module-boxes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row xs-gutter">
					<?php if( get_field('primary_boxes') ): while ( have_rows('primary_boxes') ) : the_row(); ?>
							<div class="col-sm-6 col-md-3">
								<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>">
									<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">
									<h2><?php the_sub_field('title'); ?></h2>
									<p><?php the_sub_field('description'); ?></p>
								</a>
							</div>
					<?php endwhile; endif; ?>											
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="module module-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="h3"><?php the_field('request_title', options); ?></p>
					<div class="form">
						<?php gravity_form( 2, false, false, false, '', false, 10 ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="module module-calendar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="h1"><img src="http://tajmer.dk.linux95.unoeuro-server.com/administrator/wp-content/uploads/2015/12/primary-icon.png" class="img-icon" alt="#"> <?php the_field('calendar_title'); ?></h2>
					<p class="lead"><?php the_field('calender_intro'); ?></p>
					<?php include 'includes/section-calendar.php';?>
					<a href="<?php the_field('calendar_url'); ?>" title="<?php the_field('calender_subtitle'); ?>" class="lead more"><?php the_field('calender_subtitle'); ?></a>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="module module-products">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2><?php the_field('shows_title'); ?></h2>
					<div class="row">
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h2 class="text-right"><?php the_field('on_demand_title'); ?></h2>
					<div class="row">
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>
	
	<section class="module module-information">
		<div class="container">
			<div class="row">
				<?php if( get_field('secondary_boxes') ): while ( have_rows('secondary_boxes') ) : the_row(); ?>
					<div class="col-md-3">
						<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>">
							<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" class="img-responsive">
						</a>
						<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>">
							<h2><?php the_sub_field('title'); ?></h2>
						</a>
						<p><?php the_sub_field('description'); ?></p>
						<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>">Læs mere</a>
					</div>
				<?php endwhile; endif; ?>											
			</div>
		</div>
	</section>

	<?php include 'includes/section-process.php';?>
		
	<section class="module module-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="h3"><?php the_field('request_title', options); ?></p>
					<div class="form">
						<?php gravity_form( 2, false, false, false, '', false, 30 ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="module module-categories">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 
			          $args = array( 'hide_empty' => 0 );
			          $terms = get_terms( 'type', $args );
			          if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
			            $count = count( $terms ); 
			            $i = 0;
			            $term_list = '';
			              foreach ( $terms as $term ) {
			                $i++;
			                $term_list .= '<a href="' . get_term_link( $term ) . '" title="Se alle artister i kategorien ' . $term->name . '">' . $term->name . '</a>  /  ';
			                if ( $count != $i ) {
			                } else {
			                  $term_list .= '';
			                } 
			              }
			            echo $term_list;
			          }
			        ?>			
				</div>
			</div>
		</div>
	</section>	
	
	<section class="module module-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Følg Tajmer på Facebook</h2>
					<div class="fb-page" 
						 data-href="https://www.facebook.com/TajmerBooking/"
						 data-tabs="timeline, messages, events"
						 data-width="500"
						 data-height="450"
						 data-small-header="false"
						 data-adapt-container-width="true"
						 data-hide-cover="false" 
						 data-show-facepile="true">
						 <div class="fb-xfbml-parse-ignore">
						 	<blockquote cite="https://www.facebook.com/TajmerBooking/">
						 		<a href="https://www.facebook.com/TajmerBooking/">Tajmer Booking &amp; Management</a>
						 	</blockquote>
						 </div>
					</div>
				</div>
				<div class="col-md-6">
					<h2><?php the_field('about_section'); ?></h2>
					<img src="<?php the_field('about_image'); ?>" alt="#" class="img-responsive">
					<div class="lead">
						<?php the_field('about_description'); ?>
					</div>
				</div>				
			</div>
		</div>
	</section>

	<?php include 'includes/section-footer.php';?>

<?php get_footer(); ?>
