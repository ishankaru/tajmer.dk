<?php 
/**
 * Description: Calendar for single-artists.php
 *
 * @package Mikkel Tschentscher
 * @subpackage mikkeltschentscher.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?> 


								
<div class="row">
	<div class="col-md-12">
		<h2>Kalender</h2>
	</div>
	<div class="col-md-12">
		<div class="table-responsive container-calendar">
			<table class="table table-striped table-hover">
				<tbody>
					<?php while ( have_rows('artist_calendar') ) : the_row(); ?>

						<?php
							$eventdate = new DateTime(get_sub_field('date'));
							$now = new DateTime();
							if($eventdate > $now) {
						 ?>

				    	<tr>
							<td>
								<?php if( get_field('artist_calendar_image') ): ?>
									<img src="<?php the_field('artist_calendar_image'); ?>" alt="<?php the_sub_field('title'); ?>">
								<?php endif; ?>
							</td>
							<td>
								<?php the_sub_field('date'); ?>
							</td>
							<td>
								<?php the_sub_field('title'); ?>
							</td>
							<td>
								<?php the_sub_field('location'); ?>, <?php the_sub_field('city'); ?>
							</td>
							<td>
								<?php
									$field = get_sub_field_object('status');
									$value = get_sub_field('status');
									$label = $field['choices'][ $value ];
									echo $label; 
								?>

							</td>
							<td>
								<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>" class="btn btn-block btn-success"><?php the_sub_field('button_text'); ?></a>
							</td>
						</tr>

						<?php } ?>

					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
				
