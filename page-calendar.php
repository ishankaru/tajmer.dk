<?php
/**
 * Template Name: Template: Comedy Calendar
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>

	<section class="module module-calendar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<?php // Get all posts from Custom Post Type, sort by attribute
						query_posts(array(
						    'post_type' => 'artists',
						    'posts_per_page' => -1,
						    'orderby' => 'menu_order',
						    'order' => 'ASC'
						));
					?>

					<div class="row">
						<div class="col-md-12">

							<h1>Comedy Calender</h1>
							<p>Text goes here</p>
							<hr>
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<tbody>
										<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
											<?php while ( have_rows('artist_calendar') ) : the_row(); ?>

											

									    	<tr>
												<td>
													<?php if( get_field('artist_calendar_image') ): ?>
														<img src="<?php the_field('artist_calendar_image'); ?>" alt="<?php the_sub_field('title'); ?>">
													<?php endif; ?>
												</td>
												<td>
													<?php 
														$dateformatstring = "d. F Y";
														$unixtimestamp = strtotime(get_sub_field('date'));
														echo 	$unixtimestamp;
														echo date_i18n($dateformatstring, $unixtimestamp);
													?>

														<?php $eventdate = new DateTime(get_sub_field('date'));
												$now = new DateTime();

												if($eventdate < $now) {
												    echo 'date is in the past';
												}

												if($eventdate > $now) {
												    echo 'date is in the future';
												} ?>
												</td>
												<td>
													<?php the_sub_field('title'); edit_post_link(' - Rediger event', '', ''); ?>
												</td>
												<td>
													<?php the_sub_field('location'); ?>, <?php the_sub_field('city'); ?>
												</td>
												<td>
													<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>" class="btn btn-block btn-success"><?php the_sub_field('button_text'); ?></a>
												</td>
											</tr>
											<?php endwhile; ?>
										<?php endwhile; endif; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</section>				

	<?php include 'includes/section-footer.php';?>

<?php get_footer(); ?>


