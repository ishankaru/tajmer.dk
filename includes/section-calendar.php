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


<?php // Get all posts from Custom Post Type, sort by attribute
	query_posts(array(
	    'post_type' => 'artists',
	    'posts_per_page' => -1,
	    'orderby' => 'menu_order',
	    'order' => 'ASC'
	));
?>

<div class="col-md-12">
	<div class="table-responsive container-calendar">
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
							<?php the_sub_field('date'); ?>
						</td>
						<td>
							<?php the_sub_field('title'); ?>
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
<?php wp_reset_query(); ?>