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
				<div class="col-md-12">
					<p class="h2"><?php the_field('process_title', options); ?></p>
					<hr>
					<div class="row">
						<div class="col-md-3">
							<i class="fa-li fa fa-envelope-o"></i>
							<span><?php the_field('process_one', options); ?></span>
						</div>
						<div class="col-md-3">
							<i class="fa-li fa fa-comments-o"></i>
							<span><?php the_field('process_two', options); ?></span>
						</div>
						<div class="col-md-3">
							<i class="fa-li fa fa-file-text-o"></i>
							<span><?php the_field('process_three', options); ?></span>
						</div>
						<div class="col-md-3">
							<i class="fa-li fa fa-thumbs-o-up"></i>
							<span><?php the_field('process_four', options); ?></span>
						</div>
					</div>	
				</div>													
			</div>
		</div>
	</section>
