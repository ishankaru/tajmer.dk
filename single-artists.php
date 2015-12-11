<?php
/**
 * Description: Artist page
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>

	<section class="module module-header" style="background: url('http://placehold.it/1920x500');">
	</section>
	<section class="module module-artists">
		<div class="container">
			
			<div class="row">
				<div class="col-md-3">
					<img src="http://placehold.it/400x700" alt="<?php the_title(); ?>" class="img-responsive">
				</div>
				<div class="col-md-6">

					<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

					<?php edit_post_link('Rediger side', '<span>', '</span>'); ?>
					<h1><?php the_title(); ?></h1>

				    <?php $cats = get_the_terms(get_the_ID(), 'type'); foreach($cats as $c) { ?> 
				   		<a href="<?php echo get_home_url(); ?>/kategorier/<?php echo $c->slug; ?>" title="Se alle artister i kategorien <?php echo $c->name; ?>"><?php echo $c->name; ?></a>
				    <?php } ?>

				   <?php the_content(); ?>

			    </div>
			    <div class="col-md-3">
			    	<?php gravity_form( 1, false, false, false, '', false ); ?>
			    	
			    </div>
			</div>
			<div class="row">
			<div class="col-md-12">
			<h2>Kalender</h2>
			</div>
				<div class="col-md-12">
					<table class="table table-striped">
						<tbody>
					    	<tr>
								<td><img src="http://placehold.it/150x150" alt="#"></td>
								<td>Date</td>
								<td>Lokation</td>
								<td>Viften, Rødovre</td>
								<td>
									<a href="#" title="#" class="btn btn-success">Køb billetter</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
			<div class="col-md-12">
			<h2>Tajmer anbefaler også...</h2>
			</div>
			<?php $orig_post = $post; global $post; if ( 'artists' == get_post_type() ) {
				$tags = wp_get_post_terms($post->ID, 'type');
				if ($tags) {
					$tag_ids = array();

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
				    'posts_per_page'        => 6,
				    'ignore_sticky_posts'   => 1
					);
					$my_query = new wp_query( $args );

					if( $my_query->have_posts() ) { ?>
					
								<?php $i=1; while( $my_query->have_posts() ) {
								$my_query->the_post(); ?>

										<article class="item col-xs-6 col-sm-4 col-md-4 col-lg-2 <?php $cats = get_the_terms(get_the_ID(), 'type'); foreach($cats as $c) {echo $c->slug.' ';} ?>">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<img src="http://placehold.it/275x275" alt="<?php the_title(); ?>" class="img-responsive">
											<h2 class="h5"><?php the_title(); ?></h2>
										</a>
									</article>

									<?php $i++; ?>
								<?php } ?>
					<?php }
				}
			} $post = $orig_post; wp_reset_query(); ?>

			</div>
		</div>
	</section>
	<?php include 'includes/section-process.php';?>
 <?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>