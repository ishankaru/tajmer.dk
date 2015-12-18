<?php 
/**
 * Description: Calender View
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?>

	<?php 	

		$calendar = array(); 

		query_posts(array(
		    'post_type' => 'artists',
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
							get_sub_field('button_text'));
					}
				endwhile; 
			endwhile; 
		endif;
	?>	

	<div class="row">
		<?php ksort($calendar); ?>								
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tbody>
						<?php foreach(array_slice($calendar, 0, 3) as $k => $v): ?>
						    	<tr>
								<td>
									<img src="<?php the_field('artist_calendar_image'); ?>" alt="<?php echo $v[1] ?>">
								</td>
								<td>
									<?php 
										$dateformatstring = "d. F Y";
										$unixtimestamp = $k;
										echo date_i18n($dateformatstring, $unixtimestamp);
									?>
								</td>
								<td>
									<?php echo $v[1]; edit_post_link(' - Rediger event', '', ''); ?>
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

<?php wp_reset_query(); ?>