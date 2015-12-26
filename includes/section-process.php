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
				<div class="col-sm-6 col-md-5">
					<p class="h2">Referencer</p>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="gallery clients js-flickity" data-flickity-options='{ "prevNextButtons": true, "pageDots": false, "lazyLoad": true, "wrapAround": true }'>
							  <div class="gallery-cell">
							  	<img data-flickity-lazyload="http://tajmer.dk.linux95.unoeuro-server.com/administrator/wp-content/uploads/2015/04/cropped-Logo_udenTBM.jpg">
								<span class="clientlogo">Tajmer Booking & Management</span>
								<span class="testimonial">"Ord kan tryllebinde os, gøre os klogere, eftertænksomme eller få os til at grine." - Tenna Tajmer</span>
							  </div>
							  <div class="gallery-cell">
							  	<img data-flickity-lazyload="http://tajmer.dk.linux95.unoeuro-server.com/administrator/wp-content/uploads/2015/04/cropped-Logo_udenTBM.jpg">
								<span class="clientlogo">Tajmer Booking & Management</span>
								<span class="testimonial">"Ord kan tryllebinde os, gøre os klogere, eftertænksomme eller få os til at grine." - Tenna Tajmer</span>
							  </div>
							  <div class="gallery-cell">
							  	<img data-flickity-lazyload="http://tajmer.dk.linux95.unoeuro-server.com/administrator/wp-content/uploads/2015/04/cropped-Logo_udenTBM.jpg">
								<span class="clientlogo">Tajmer Booking & Management</span>
								<span class="testimonial">"Ord kan tryllebinde os, gøre os klogere, eftertænksomme eller få os til at grine." - Tenna Tajmer</span>
							  </div>
							  <div class="gallery-cell">
							  	<img data-flickity-lazyload="http://tajmer.dk.linux95.unoeuro-server.com/administrator/wp-content/uploads/2015/04/cropped-Logo_udenTBM.jpg">
								<span class="clientlogo">Tajmer Booking & Management</span>
								<span class="testimonial">"Ord kan tryllebinde os, gøre os klogere, eftertænksomme eller få os til at grine." - Tenna Tajmer</span>
							  </div>
							  <div class="gallery-cell">
							  	<img data-flickity-lazyload="http://tajmer.dk.linux95.unoeuro-server.com/administrator/wp-content/uploads/2015/04/cropped-Logo_udenTBM.jpg">
								<span class="clientlogo">Tajmer Booking & Management</span>
								<span class="testimonial">"Ord kan tryllebinde os, gøre os klogere, eftertænksomme eller få os til at grine." - Tenna Tajmer</span>
							  </div>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-offset-1 col-md-6">
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
