<?php 
/**
 * Description: Slideshow
 *
 * @package Mikkel Tschentscher
 * @subpackage mikkeltschentscher.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?> 

<?php if( get_field('slideshow') ): ?> 
	<section class="module module-slideshow">
		<div class="gallery gallery-main js-flickity" data-flickity-options='{ "lazyLoad": true, "pageDots": false, "wrapAround": true, "prevNextButtons": false, "cellAlign": left}'>
		  	<?php while ( have_rows('slideshow') ) : the_row(); ?>
			  	<a href="<?php the_sub_field('slide_url'); ?>" title="<?php the_sub_field('slide_title'); ?>" class="gallery-cell">
			  		<figure style="background-image: url('<?php the_sub_field('primary_image'); ?>');">
			  			
			  		</figure>
			  		<figcaption <?php if( get_sub_field('colorscheme') ) { ?>class="dark"<?php } ?>>
			  			<?php if( get_sub_field('slide_title') ): ?>
			  				<span class="artist"><?php the_sub_field('slide_title'); ?></span>
			  			<?php endif; ?>
			  			<?php if( get_sub_field('slide_subtitle') ): ?>
			  				<span class="categories"><?php the_sub_field('slide_subtitle'); ?></span>
			  			<?php endif; ?>
			  			<?php if( get_sub_field('slide_button') ): ?>
			  				<span class="btn btn-lg btn-success"><?php the_sub_field('slide_button'); ?></span>
			  			<?php endif; ?>
			  		</figcaption>
			  	</a>
			<?php endwhile; ?>
		</div>

		<div class="gallery gallery-nav js-flickity" data-flickity-options='{ "asNavFor": ".gallery-main", "contain": true, "pageDots": false,  "autoPlay": 3500, "pauseAutoPlayOnHover": false, "wrapAround": true, "cellAlign": left}'>
			<?php while ( have_rows('slideshow') ) : the_row(); ?>
				<div class="gallery-cell">
					<figure class="gallery-cell-image" style="background-image:url('<?php the_sub_field('thumbnail_image'); ?>');"></figure>
					<figcaption>
						<?php the_sub_field('thumbnail_title'); ?>
					</figcaption>
				</div>
			<?php endwhile; ?>															
		</div>
	</section>
<?php endif; ?>				  		  			  			  		  		  		  		  
