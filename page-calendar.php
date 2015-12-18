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
<?php $sortedArray = array(); ?>
					<?php // Get all posts from Custom Post Type, sort by attribute
						query_posts(array(
						    'post_type' => 'artists',
						    'posts_per_page' => -1,
						    'orderby' => 'menu_order',
						    'order' => 'ASC'
						));
					?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
											<?php while ( have_rows('artist_calendar') ) : the_row(); ?>

									<?php	$sortedArray[strtotime(get_sub_field('date'))] = array(get_field('artist_calendar_image'),get_sub_field('title'),get_sub_field('location'),get_sub_field('city'),get_sub_field('url'),get_sub_field('button_text')); ?>	
		<?php endwhile; ?>
										<?php endwhile;  endif; ?>	

<?php ksort($sortedArray); ?>										
					<div class="row">
						<div class="col-md-12">

							<h1>Comedy Calender</h1>
							<p>Text goes here</p>
							<hr>
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<tbody>
										<?php foreach($sortedArray as $k => $v): ?>

									    	<tr>
												<td>
													
														<img src="<?php echo $v[0] ?>" alt="<?php echo $v[1] ?>">
												
												</td>
												<td>
													<?php 
														$dateformatstring = "d. F Y";
														$unixtimestamp = $k;
														echo 	$unixtimestamp;
														echo date_i18n($dateformatstring, $unixtimestamp);
													?>

														<?php $eventdate = new DateTime($k);
												$now = new DateTime();
												if($eventdate < $now) {
												    echo 'date is in the past';
												}
												if($eventdate > $now) {
												    echo 'date is in the future';
												} ?>
												</td>
												<td>
													<?php echo $v[1] edit_post_link(' - Rediger event', '', ''); ?>
												</td>
												<td>
													<?php echo $v[2] ?>, <?php echo $v[3]; ?>
												</td>
												<td>
													<a href="<?php echo $v[4]; ?>" title="<?php  echo $v[1];; ?>" class="btn btn-block btn-success"><?php  echo $v[5]; ?></a>
												</td>
											</tr>
										<?php endforeach;?>
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
