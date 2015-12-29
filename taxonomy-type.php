<?php
/**
 * Description: Taxonomy: Category - Post type: Artists
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>

 	<?php global $post; $terms = get_the_terms($post->id, 'type'); ?>

	<section class="module module-artists">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php echo $term->name ?></h1>
					<div class="lead"><?php echo term_description( $term_id, $taxonomy ) ?></div>
					<hr>
				</div>
			</div>

			<?php 
				$cat = get_queried_object();
				query_posts('post_type=artists&type='.$cat->slug.'&posts_per_page=-1&orderby=menu_order&order=ASC');
		    ?>

		    <div class="row grid">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php if ($post->menu_order > 0) { ?>
                        <article class="item col-xs-6 col-sm-4 col-md-3 col-lg-2 <?php $cats = get_the_terms(get_the_ID(), 'type'); foreach($cats as $c) {echo $c->slug.' ';} ?>">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php if( get_field('artist_thumbnail') ): ?>
									<div class="thumbnail" style="background-image:url('<?php the_field('artist_thumbnail'); ?>')"></div>
								<?php else: ?>
									<div class="thumbnail" style="background-image:url('http://placehold.it/275x200');"></div>
								<?php endif; ?>
								<h2 class="h5"><?php the_title(); ?></h2>
							</a>
						</article>
                    <?php } ?>
                <?php endwhile; ?>

                <?php while (have_posts()) : the_post(); ?>
                    <?php if ($post->menu_order < 1) { ?>
                        <article class="item col-xs-6 col-sm-4 col-md-3 col-lg-2 <?php $cats = get_the_terms(get_the_ID(), 'type'); foreach($cats as $c) {echo $c->slug.' ';} ?>">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php if( get_field('artist_thumbnail') ): ?>
									<div class="thumbnail" style="background-image:url('<?php the_field('artist_thumbnail'); ?>')"></div>
								<?php else: ?>
									<div class="thumbnail" style="background-image:url('http://placehold.it/275x200');"></div>
								<?php endif; ?>
								<h2 class="h5"><?php the_title(); ?></h2>
							</a>
						</article>
                    <?php } ?>
                <?php endwhile; endif; ?>

		        <?php wp_reset_query(); ?>

			</div>
		</div>
	</section>

	<section class="module module-contact">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <p class="h3"><?php the_field('request_title', options); ?></p>
	          <div class="form">
	            <?php gravity_form( 2, false, false, false, '', false, 10 ); ?>
	          </div>
	        </div>
	      </div>
	    </div>
	</section>

  	<?php include 'includes/section-categories.php';?>
  	<?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>
