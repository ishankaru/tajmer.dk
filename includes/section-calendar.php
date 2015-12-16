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
	/* Get all posts in custom post type */
    query_posts(array( 
        'post_type' => 'Artists',
        'showposts' => 500
    ));  
?>

<div class="table-responsive">
	<table class="table table-striped">
		<tbody>
			<?php while (have_posts()) : the_post(); $caldata = get_field('artist_calendar'); if ($caldata) { $i = 0; foreach ( $caldata as $calinfo ): if (++$i == 11) /* Limit view to 8 */ break;?>
			    <tr>
			        <td>
			        	<a href="<?php echo $calinfo[url]; ?>" title="<?php echo $calinfo[title]; ?>">
			        		<img src="<?php the_field('artist_calendar_image'); ?>" alt="<?php echo $calinfo[title]; ?>">
			        	</a>
			        </td>
			        <td>
			        	<?php 
			        		$date_ymd = $calinfo[date]; 
			        		$date = DateTime::createFromFormat('Ymd', $date_ymd); 
			        		echo $date->format('d. M Y'); 
			        	?>
			        </td>
			        <td>
			        	<?php echo $calinfo[title]; ?>
			        </td>
			        <td>
			        	<?php echo $calinfo[location]; ?>, <?php echo $calinfo[city]; ?>
			        </td>		        
					<td>
						<a href="<?php echo $calinfo[url]; ?>" title="<?php echo $calinfo[title]; ?>" class="btn btn-block btn-success">
							<?php echo $calinfo[button_text]; ?>
						</a>
					</td>
			    </tr>
		    <?php endforeach; } endwhile;?>
		</tbody>
	</table>
</div>