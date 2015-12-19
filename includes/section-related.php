<?php 
/**
 * Description: Related artists
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?>

<section class="module module-related">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Tajmer anbefaler også</h2>
			</div>	
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="gallery gallery-main js-flickity" data-flickity-options='{ "contain": true, "lazyLoad": 6, "pageDots": false, "wrapAround": true, "prevNextButtons": true}'>
					<?php $orig_post = $post; global $post; if ( 'artists' == get_post_type() ) {
						$tags = wp_get_post_terms($post->ID, 'type');
						if ($tags) { $tag_ids = array();
							foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
							$args=array(
								'tax_query' => array(
						        array(
						            'taxonomy'  => 'type',
						            'terms'     => $tag_ids,
						            'operator'  => 'IN'
						        )
						    ),
								'orderby' => 'rand',
							    'post__not_in'          => array( $post->ID ),
							    'posts_per_page'        => 18,
							    'ignore_sticky_posts'   => 1
							);
							$my_query = new wp_query( $args );
							if( $my_query->have_posts() ) { 
								$i=1; while( $my_query->have_posts() ) {
								$my_query->the_post(); ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="gallery-cell">
											<?php if( get_field('artist_thumbnail') ): ?>
												<div class="thumbnail" style="background-image:url('<?php the_field('artist_thumbnail'); ?>')"></div>
											<?php else: ?>
												<div class="thumbnail" style="background-image:url('http://placehold.it/275x200');"></div>
											<?php endif; ?>
											<h2 class="h5"><?php the_title(); ?></h2>
										</a>
									<?php $i++; ?>
								<?php } ?>
							<?php }
						}
					} $post = $orig_post; wp_reset_query(); ?>
				</div>	
			</div>
		</div>
	</div>
	
</section>