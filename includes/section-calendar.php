<?php
	query_posts(array(
	    'post_type' => array(
	        'Artists'
	    ),
	    'showposts' => 500,
	    'orderby' => 'meta_value_num',
	    'order' => 'ASC'
	));

	$all_posts = array();
	while (have_posts()) {
	    the_post();
	    
	    $date_fields = get_field('artist_calendar');
	    
	    if (is_array($date_fields)) {
	        foreach ($date_fields as $date_field) {
	            
	            $date = intval($date_field['date']);
	            $all_posts[$date][] = get_the_ID();
	        }
	    }
	}
	ksort($all_posts);
?>


<table class="table table-striped">
	<tbody>
		<?php
			foreach ($all_posts as $posts): ?>
			        <?php 
			        	$calid = $posts[0];
			        	$allcal = get_field( "artist_calendar", $calid ); 
			        	foreach( $allcal as $caldata ): ?>
			        		<tr>
			        			<td><img src="http://placehold.it/150x150" alt="#"></td>
							<td><?php 
								$fixdate = DateTime::createFromFormat('Ymd', $caldata[date]);									
								echo $fixdate->format('d. M Y'); ?>
							</td>
							<td><?php echo $caldata[location]; ?></td>
							<td><?php echo $caldata[city]; ?></td>
							<td>
								<a href="<?php echo $caldata[url]; ?>" title="#" class="btn btn-success">Køb billetter</a>
							</td>
			        				
			        		</tr>
			        <?php 
			        	endforeach;
			        ?>
		<?php 
			endforeach;
			wp_reset_query();
		?>
	</tbody>
</table>
