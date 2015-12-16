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
					<hr>
				</div>

				<div class="col-md-12 filters">
					<?php $categories = get_terms('type'); if ($categories) { ?>				     
						<div id="filters" class="button-group">  
							<button title="Vis alle artister"class="btn btn-sm btn-info is-checked" data-filter="*">Vis alle artister</button>
					        <?php foreach($categories as $cat) { ?>
					        	<button title="Vis kun kategorien: <?php echo $cat->name; ?>" class="btn btn-sm btn-info" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></button>
					        <?php } ?>
					    </div>
				    <?php } ?>
				    <hr>
			    </div>

				<div class="col-md-12">

					<?php // Get all posts from Custom Post Type, sort by attribute
					    query_posts(array(
					        'post_type' => 'artists',
					        'posts_per_page' => -1,
					        'orderby' => 'menu_order',
					        'order' => 'ASC'
					    ));
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
			</div>
		</div>
	</section>

	<section class="module module-contact">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <p class="h3">Send en uforpligtende forespørgsel eller ring og få en snak på 4615 3700</p>
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