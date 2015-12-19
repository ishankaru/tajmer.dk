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
					<div class="col-md-12">
						<h1>Søgeresultater</h1>
						<hr>
					</div>
				</div>
				
				<?php if (have_posts()) : ?>
					<div class="row grid">
						<?php while (have_posts()) : the_post(); ?>
						
							<article class="item col-xs-6 col-sm-4 col-md-3 col-lg-2 <?php $cats = get_the_terms(get_the_ID(), 'category'); foreach($cats as $c) {echo $c->slug.' ';} ?>">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php if( get_field('artist_thumbnail') ): ?>
										<div class="thumbnail" style="background-image:url('<?php the_field('artist_thumbnail'); ?>')"></div>
									<?php else: ?>
										<div class="thumbnail" style="background-image:url('http://placehold.it/275x200');"></div>
									<?php endif; ?>
									<h2 class="h5"><?php the_title(); ?></h2>
								</a>
							</article>

						<?php endwhile; else : ?>

							<h2>Din søgning gav 0 resultater.</h2>
							<p class="lead">Vær sikker på at du har skrevet artistens navn rigtigt. Hvis det ikke kommer frem, så er du velkommen til at sende os en mail eller ringe til os på <a href="tel:<?php echo str_replace(' ', '', get_field('telephone', 'option')); ?>" title="Kontakt Tajmer på <?php the_field('telephone', options); ?>">+45 <?php the_field('telephone', options); ?></a>. Så finder vi en løsning</p>
					</div>
				<?php endif; ?>
				
			</div>
		</section>		

	<?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>