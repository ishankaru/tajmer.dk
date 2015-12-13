<?php 
    query_posts(array( 
        'post_type' => 'Artists',
        'showposts' => 500
    ) );  
?>
<table class="table table-striped">
	<tbody>
		<?php while (have_posts()) : the_post(); $caldata = get_field('artist_calendar'); if ($caldata) { foreach ( $caldata as $calinfo ): ?>
		    <tr>
		        <td><img src="http://placehold.it/150x150" alt="#"></td>
		        <td><?php $date_ymd = $calinfo[date]; $date = DateTime::createFromFormat('Ymd', $date_ymd); echo $date->format('d. M Y'); ?></td>
		        <td><?php echo $calinfo[title]; ?></td>
		        <td><?php echo $calinfo[location]; ?></td>
		        <td><?php echo $calinfo[city]; ?></td>
				<td><a href="#" title="#" class="btn btn-success">Køb billetter</a></td>
		    </tr>
	    <?php endforeach; } endwhile;?>
	</tbody>
</table>