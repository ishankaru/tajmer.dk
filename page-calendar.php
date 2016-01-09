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
					
	
					<div class="row">
													
						<div class="col-md-12">

							<h2 class="h1"><img src="http://tajmer.dk.linux95.unoeuro-server.com/administrator/wp-content/uploads/2015/12/primary-icon.png?826ecb" class="img-icon" alt="#"> <?php the_field('title'); ?></h2>
							<p class="lead"><?php the_field('intro'); ?></p>

							<hr>

							<?php 	
								wp_reset_query(); 
								$calendar = array(); 

								query_posts(array(
								    'post_type' => array( 'artists', 'shows' ),
								    'posts_per_page' => -1
								));
							
								if (have_posts()) : 
								 	while (have_posts()) : the_post(); 
										while ( have_rows('artist_calendar') ) : the_row(); 

											$eventdate = new DateTime(get_sub_field('date'));
											$now = new DateTime();
											if($eventdate > $now) {
												$calendar[strtotime(get_sub_field('date'))] = array(
													get_sub_field('title'),
													get_sub_field('location'),
													get_sub_field('city'),
													get_sub_field('url'),
													get_sub_field('button_text'),
													get_sub_field('status'),
													get_field('artist_calendar_image'));
											}
										endwhile; 
									endwhile; 
								endif;

								ksort($calendar); 
							?>	

							<?php foreach($calendar as $k => $v): ?>
		<div class="row row-calendar <?php echo $v[5] ?>">
			<div class="col-md-12 event">
				
			<div class="row">
			<div class="col-xs-3 col-sm-1">
				<img src="<?php echo $v[6] ?>" alt="<?php echo $v[0] ?>" class="img-responsive">
			</div>

			<div class="col-xs-9 col-sm-8">
				<div class="row">
					<div class="col-xs-12">
						<?php 
							$dateformatstring = "d. F Y";
							$unixtimestamp = $k;
							echo date_i18n($dateformatstring, $unixtimestamp);
						?>
					</div>
					<div class="col-xs-12">
						<?php echo $v[0]; ?>
					</div>
					<div class="col-xs-12">
						<?php echo $v[1] ?>, <?php echo $v[2]; ?>
					</div>	
					<div class="col-xs-12">
						<?php if ($v[5] == "sold_out") { ?>
							Udsolgt
						<?php } else { ?>
							Ledige Billetter
						<?php } ?>
					</div>						
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-3">
				<?php if ($v[5] == "sold_out") { ?>
					<span class="btn btn-block btn-success" disabled><?php  echo $v[4]; ?></a>
				<?php } else { ?>
					<a href="<?php echo $v[3]; ?>" title="<?php  echo $v[0];; ?>" class="btn btn-block btn-success"><?php  echo $v[4]; ?></a>
				<?php } ?>
			</div></div>
			</div>

		</div>
	<?php endforeach;?>
							
						</div>
					</div>						
				</div>
			</div>
		</div>
	</section>				

	<?php include 'includes/section-footer.php';?>

<?php get_footer(); ?>
