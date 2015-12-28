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
						get_sub_field('button_text'),
						get_sub_field('status'),
						get_field('arist_calendar_image'));
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
					<?php $i = 0; foreach($calendar as $k => $v): $i++; ?>
					    <tr class="<?php echo $v[5] ?>">
												<td>
													<img src="<?php echo $v[6] ?>" alt="<?php echo $v[0] ?>">
												</td>
												<td>
													<?php 
														$dateformatstring = "d. F Y";
														$unixtimestamp = $k;
														echo date_i18n($dateformatstring, $unixtimestamp);
													?>
												</td>
												<td>
													<?php echo $v[0]; ?>
												</td>
												<td>
													<?php echo $v[1] ?>, <?php echo $v[2]; ?>
												</td>
												<td>
													<?php if ($v[5] == "sold_out") { ?>
														Udsolgt
													<?php } else { ?>
														Ledige Billetter
													<?php } ?>
												</td>
												<td>
													<?php if ($v[5] == "sold_out") { ?>
														<span class="btn btn-block btn-success" disabled><?php  echo $v[4]; ?></a>
													<?php } else { ?>
														<a href="<?php echo $v[3]; ?>" title="<?php  echo $v[0];; ?>" class="btn btn-block btn-success"><?php  echo $v[4]; ?></a>
													<?php } ?>
												</td>
											</tr>
					<?php if($i==10) break; endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>		

<?php wp_reset_query(); ?>
