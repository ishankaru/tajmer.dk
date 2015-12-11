<?php
/**
 * Description: Search page
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

				<div class="col-md-12 filters">
					<?php if (have_posts()) : ?>
					<div <?php post_class(); ?>>
						<div class="title">
							<h1><?php _e('Search Results', 'tajmer'); ?></h1>
						</div>
					</div>

					<?php while (have_posts()) : the_post(); ?>
								<article class="item col-xs-6 col-sm-4 col-md-3 col-lg-2 <?php $cats = get_the_terms(get_the_ID(), 'category'); foreach($cats as $c) {echo $c->slug.' ';} ?>">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<img src="http://placehold.it/275x200" alt="<?php the_title(); ?>" class="img-responsive">
										<h2 class="h5"><?php the_title(); ?></h2>
									</a>
								</article>
					<?php endwhile; ?>
					
					<?php else : ?>
						
					<?php endif; ?>
			    </div>
			</div>
		</div>
	</section>

 <?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>