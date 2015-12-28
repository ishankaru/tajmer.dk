<?php 
/**
 * Description: Process Section
 *
 * @package Mikkel Tschentscher
 * @subpackage mikkeltschentscher.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?> 


<section class="module module-process">
		<div class="container">
			<div class="row">
				<div class="hidden-sm col-md-5">
					<p class="h2"><?php the_field('client_title'); ?></p>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="gallery clients js-flickity" data-flickity-options='{ "prevNextButtons": true, "pageDots": false, "lazyLoad": true, "wrapAround": true }'>
								<?php while ( have_rows('clients_list') ) : the_row(); ?>
							  		<div class="gallery-cell">
									  	<img data-flickity-lazyload="<?php the_sub_field('logo'); ?>">
										<span class="clientlogo"><?php the_sub_field('client_name'); ?></span>
										<?php if( get_sub_field('testimonial') ): ?>
											<span class="testimonial"><?php the_sub_field('testimonial'); ?></span>
										<?php endif; ?>
									  </div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-offset-1 col-md-6">
					<p class="h2"><?php the_field('process_title', options); ?></p>
					<hr>
					<ul class="fa-ul">
						<li>
							<i class="fa-li fa fa-envelope-o"></i>
							<span><?php the_field('process_one', options); ?></span>
						</li>
						<li>
							<i class="fa-li fa fa-comments-o"></i>
							<span><?php the_field('process_two', options); ?></span>
						</li>
						<li>
							<i class="fa-li fa fa-file-text-o"></i>
							<span><?php the_field('process_three', options); ?></span>
						</li>
						<li>
							<i class="fa-li fa fa-thumbs-o-up"></i>
							<span><?php the_field('process_four', options); ?></span>
						</li>
					</ul> 
				</div>													
			</div>
		</div>
	</section>
