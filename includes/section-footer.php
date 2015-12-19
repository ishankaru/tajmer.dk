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
					<p class="h3"><?php the_field('col-one-title', options); ?></p>
					<div class="row">
						<div class="col-md-3">
							<a href="#" title="#">
								<img src="<?php the_field('vlogo', options); ?>" alt="#" class="img-responsive">
							</a>
						</div>
						<div class="col-md-9">
							<address>
								<span><strong>Tajmer Booking &amp; Management</strong></span>
								<span>Søndre Allé 17</span>
								<span>DK-4600 Køge</span>
								<span>Tlf. <a href="#" title="#">+45 46 15 37 00</a></span>
								<span><a href="#" title="#">tajmer@tajmer.dk</a></span>
							</address>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<p class="h3"><?php the_field('col-two-title', options); ?></p>
					<p><?php the_field('col-two-description', options); ?></p>
				</div>
				<div class="col-md-2">
					<p class="h3"><?php the_field('col-three-title', options); ?></p>
					<?php if( have_rows('col-three-links', options) ): while ( have_rows('col-three-links', options) ) : the_row(); ?>
					    <a href="<?php the_sub_field('anchor_url'); ?>" title="<?php the_sub_field('anchor_text'); ?>"><?php the_sub_field('anchor_text'); ?></a>
					<?php endwhile; else : endif; ?>
				</div>
				<div class="col-md-3">
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