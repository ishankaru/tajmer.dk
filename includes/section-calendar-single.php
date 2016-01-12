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
		<?php while ( have_rows('artist_calendar') ) : the_row(); ?>

	<?php
							$eventdate = new DateTime(get_sub_field('date'));
							$now = new DateTime();
							if($eventdate > $now) {
						 ?>

		<div class="row row-calendar <?php the_sub_field('status'); ?>">
			<div class="col-md-12">
				
			<div class="row event">
			<div class="col-xs-3 col-sm-1">
				<?php if( get_field('artist_calendar_image') ): ?>
									<img src="<?php the_field('artist_calendar_image'); ?>" alt="<?php the_sub_field('title'); ?>" class="img-responsive">
								<?php endif; ?>
			</div>

			<div class="col-xs-9 col-sm-11">
				<div class="row">
					<div class="col-xs-12 col-sm-2 date">
						<?php 
									$dateformatstring = " d. F Y";
									$unixtimestamp = strtotime(get_sub_field('date'));
									echo date_i18n($dateformatstring, $unixtimestamp);
								?>
					</div>
					<div class="col-xs-12 col-sm-3 name">
						<?php the_sub_field('title'); ?>
					</div>
					<div class="col-xs-12 col-sm-3 location">
						<?php the_sub_field('location'); ?>, <?php the_sub_field('city'); ?>
					</div>	
					<div class="col-xs-12 col-sm-2 status">
						<?php
									$field = get_sub_field_object('status');
									$value = get_sub_field('status');
									$label = $field['choices'][ $value ];
									echo $label; 
								?>
					</div>
					<div class="col-xs-12 col-sm-2">
						<?php if(get_sub_field('status') == "sold_out") { ?>
    									<span class="btn btn-block btn-success" disabled="disabled"><?php the_sub_field('button_text'); ?></span>
    								<?php } else { ?>
    									<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>" class="btn btn-block btn-success"><?php the_sub_field('button_text'); ?></a>
    								<?php } ?>	
					</div>
				</div>
			</div>
			
		</div>
			</div>

		</div><?php } ?>

	<?php endwhile; ?>
	</div>
</div>
				
