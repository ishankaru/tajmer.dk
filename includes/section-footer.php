<?php 
/**
 * Description: Section: Footer
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?>

	<footer class="module module-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="h3"><?php the_field('col-one-title', options); ?></p><br>
					<div class="row">
						<div class="col-md-3">
							<a href="<?php echo get_home_url(); ?>/" title="Tajmer Booking &amp; Management">
								<img src="<?php the_field('vlogo', options); ?>" alt="Tajmer Booking &amp; Management" class="img-responsive">
							</a>
						</div>
						<div class="col-md-9">
							<address>
								<span><strong><?php the_field('name', options); ?></strong></span>
								<span><?php the_field('address', options); ?></span>
								<span><?php the_field('zipcode', options); ?> <?php the_field('city', options); ?></span>
								<span>Tlf. <a href="tel:<?php echo str_replace(' ', '', get_field('telephone', 'option')); ?>" title="Ring og book <?php the_title(); ?> på <?php the_field('telephone', options); ?>">+45 <?php the_field('telephone', options); ?></a></span>
								<span><a href="mailto:<?php the_field('email', options); ?>" title="Send en mail til os"><?php the_field('email', options); ?></a></span>
								<span>CVR: <?php the_field('vat_number', options); ?></span>
							</address>
						</div>
						<div class="col-md-12 subtle">
							<p>Copyright © <?php echo date("Y"); ?> Tajmer Booking &amp; Management<br>
							Design: <a href="http://riddertoft.com/">Riddertoft</a>, Development: <a href="https://mikkeltschentscher.dk" title="Website udviklet af Mikkel Tschentscher">Mikkel Tschentscher</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3">
					<p class="h3"><?php the_field('col-two-title', options); ?></p>
					<p><?php the_field('col-two-description', options); ?></p>
				</div>
				<div class="hidden-md col-lg-2">
					<p class="h3"><?php the_field('col-three-title', options); ?></p>
					<?php if( have_rows('col-three-links', options) ): while ( have_rows('col-three-links', options) ) : the_row(); ?>
					    <a href="<?php the_sub_field('anchor_url'); ?>" title="<?php the_sub_field('anchor_text'); ?>"><?php the_sub_field('anchor_text'); ?></a>
					<?php endwhile; else : endif; ?>
				</div>
				<div class="col-md-4 col-lg-3">
					<p class="h3"><?php the_field('col-four-title', options); ?></p>
					<p>Tilmeld dig vores nyhedsbrev</p>
					<form action="https://tajmer-booking.clients.ubivox.com/handlers/post/" method="post" class="form-inline">
					  	<div class="form-group">
					  		<input type="hidden" name="action" value="subscribe" />
						  	<input type="hidden" name="lists" value="32526" />
						    <input type="text" name="email_address" class="form-control"  id="email_address_id" />
						</div>
					    <input type="submit" value="Send" class="btn btn-success" />
					</form>
				</div>
			</div>
		</div>
	</footer>

	</main>

	<?php include 'section-menu.php'; ?>
