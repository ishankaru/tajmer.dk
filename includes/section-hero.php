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
	<section class="module module-hero <?php if( get_field('colorscheme') ) { ?>dark<?php } ?>" style="background-image:url('<?php the_field('hero_image');?>');">
		  	<figcaption>
		  		<span class="artist"><?php the_field('artist_title');?></span>
		  		<span class="categories"><?php the_field('artist_subtitle');?></span>
		  	</figcaption>
	</section>	
<?php endif; ?>