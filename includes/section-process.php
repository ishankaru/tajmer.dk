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
				<div class="col-md-5">
					<p class="h2">Referencer</p>
					<div class="row">
						<div class="col-md-12">
							<div class="gallery clients js-flickity" data-flickity-options='{ "prevNextButtons": false, "pageDots": false }'>
							  <div class="gallery-cell">1</div>
							  <div class="gallery-cell">2</div>
							  <div class="gallery-cell">3</div>
							  <div class="gallery-cell">4</div>
							  <div class="gallery-cell">5</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-md-offset-1 col-md-6">
					<p class="h2"><?php the_field('process_title', options); ?></p>
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
