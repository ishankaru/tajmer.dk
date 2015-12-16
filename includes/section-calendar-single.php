<?php if( get_field('artist_calendar') ): ?>									
				<div class="row">
					<div class="col-md-12">
						<h2>Kalender</h2>
					</div>
					<div class="col-md-12">
						<table class="table table-striped">
							<tbody>
								<?php while ( have_rows('artist_calendar') ) : the_row(); ?>
						    	<tr>
									<td><img src="<?php the_field('artist_calendar_image'); ?>" alt="<?php the_sub_field('title'); ?>"></td>
									<td><?php the_sub_field('date'); ?></td>
									<td><?php the_sub_field('title'); ?></td>
									<td><?php the_sub_field('location'); ?>, <?php the_sub_field('city'); ?></td>
									<td><a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>" class="btn btn-block btn-success"><?php the_sub_field('button_text'); ?></a></td>
								</tr>
							<?php endwhile; ?>
							</tbody>
						</table>
					</div>
					<div class="col-md-12">
						<a href="#" class="lead more">Se den fulde kalender her</a>
					</div>
				</div>
			<?php endif; ?>		