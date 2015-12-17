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
 	<?php include 'includes/section-hero.php';?>
	
	<section class="module module-artists">
		<div class="container">
			<div class="row">

				<aside class="col-md-3">
					<a href="#" class="btn btn-info">Se alle artister</a>

					<?php if( get_field('artist_portraits') ): while ( have_rows('artist_portraits') ) : the_row(); ?>
						<img src="<?php the_sub_field('image'); ?>" alt="<?php the_title(); ?>" class="portrait img-responsive">
					<?php endwhile; else: ?>
						<img src="http://placehold.it/400x700" alt="<?php the_title(); ?>" class="portrait img-responsive">
					<?php endif; ?>

					<?php if( get_field('book_as') ): ?>
						<ul class="book-as">
							<?php while ( have_rows('book_as') ) : the_row(); ?>
								<li><i class="fa fa-check"></i><?php the_sub_field('booking_type'); ?></li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>

					<?php if( get_field('artist_videos') ): while ( have_rows('artist_videos') ) : the_row(); ?>
						<div class="embed-responsive embed-responsive-16by9">
						  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php the_sub_field('video_id'); ?>"></iframe>
						</div>
					<?php endwhile; endif; ?>
				</aside>

				<article class="col-md-6">
					<?php include 'includes/section-breadcrumbs.php';?>
					<h1><?php the_title(); ?></h1>
				    
				    <div class="categories">
				    	<?php $cats = get_the_terms(get_the_ID(), 'type'); foreach($cats as $c) { ?> 
				   			<a href="<?php echo get_home_url(); ?>/kategorier/<?php echo $c->slug; ?>" class="category" title="Se alle artister i kategorien <?php echo $c->name; ?>"><?php echo $c->name; ?></a>
				    	<?php } ?>
				    </div>

				    <?php if( get_field('intro') ): ?>
				    	<p class="lead"><?php the_field('intro'); ?></p>
				    <?php endif; ?>

				    <div class="main-content">
				    	<?php the_content(); ?>
				    </div>
				    <?php edit_post_link('Rediger artist', '<p>', '</p>'); ?>

			    </article>

			    <aside class="col-md-3">
			    	<div class="form">
			    		<a href="#" title="#"> <i class="fa fa-phone"></i> +45 46 15 37 00</a>
			    		<?php gravity_form( 1, false, false, false, '', false ); ?>
			    	</div>
			    	<a href="#" class="btn btn-info">Se alle artister</a>
			    	<a href="#" class="btn btn-info">Tilmeld nyhedsbrev</a>
			    </aside>
			</div>
		</div>
	</section>

	<section class="module module-calendar">
		<div class="container">
			<div class="row">
				<?php include 'includes/section-calendar-single.php';?>
			</div>
		</div>
	</section>

	<?php include 'includes/section-related.php';?>	
	<?php include 'includes/section-process.php';?>
	<?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>