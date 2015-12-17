<?php 
/**
 * Description: Hero Image Section
 *
 * @package Mikkel Tschentscher
 * @subpackage mikkeltschentscher.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?> 


<?php if( get_field('hero_image') ): ?>
	<section class="module module-hero" style="background-image:url('<?php the_field('hero_image');?>');">
	  	<?php if( get_field('artist_title') ): ?>
		  	<figcaption>
		  		<span class="artist"><?php the_field('artist_title');?></span>
		  		<span class="categories"><?php the_field('artist_subtitle');?></span>
		  	</figcaption>
		<?php endif; ?>
	</section>	
<?php endif; ?>