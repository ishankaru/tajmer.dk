<?php
/**
 * Description: Artist Archive
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>

	<section class="module module-artists">
		<div class="container">
			<div class="row">

			<div class="col-md-12">
				<h1>Book artist indenfor</h1>
			</div>
				<div class="col-md-12 filters">
					<?php $categories = get_terms('type'); if ($categories) { ?>				     
						<div id="filters" class="button-group">  
							<button title="Vis alle artister"class="btn btn-sm btn-info is-checked" data-filter="*">Vis alle</button>
					        <?php foreach($categories as $cat) { ?>
					        	<button title="Vis kun kategorien: <?php echo $cat->name; ?>" class="btn btn-sm btn-info" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></button>
					        <?php } ?>
					    </div>
				    <?php } ?>
			    </div>

				<div class="col-md-12">

					<?php
						query_posts(array(
						    'post_type' => array(
						        'Artists'
						    ),
						    'showposts' => 500
						));
					?>
					<?php if (have_posts()) : ?>
						<div class="row grid">
							<?php while (have_posts()) : the_post(); { ?>
								<article class="item col-xs-6 col-sm-4 col-md-3 col-lg-2 <?php $cats = get_the_terms(get_the_ID(), 'type'); foreach($cats as $c) {echo $c->slug.' ';} ?>">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<img src="http://placehold.it/275x200" alt="<?php the_title(); ?>" class="img-responsive">
										<h2 class="h5"><?php the_title(); ?></h2>
									</a>
								</article>
							<?php } endwhile; ?>
						</div>	
					<?php else : endif; wp_reset_query(); ?>

				</div>
			</div>
		</div>
	</section>

 <?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>