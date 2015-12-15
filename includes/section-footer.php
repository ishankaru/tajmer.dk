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
				</div>
			</div>
		</div>
	</footer>

	</main>

	<div class="cd-overlay"></div>

	<nav class="cd-nav">
		<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
			<li><a href="#0">Forside</a></li>
			<li class="has-children">
				<a href="#0">Artister</a>
				<ul class="cd-secondary-nav is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="#0">Se alle artister</a></li>
					<li class="has-children">
						<a href="#0">Accessories</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="#0">All Accessories</a></li>
							<li><a href="#0">Glasses</a></li>
							<li><a href="#0">Gloves</a></li>
							<li><a href="#0">Jewellery</a></li>
							<li><a href="#0">Scarves</a></li>
							<li><a href="#0">Wallets</a></li>
							<li><a href="#0">Watches</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#0">Bottoms</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="#0">All Bottoms</a></li>
							<li><a href="#0">Casual Trousers</a></li>
							<li><a href="#0">Leggings</a></li>
							<li><a href="#0">Shorts</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#0">Jackets</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="#0">All Jackets</a></li>
							<li><a href="#0">Blazers</a></li>
							<li><a href="#0">Bomber jackets</a></li>
							<li><a href="#0">Denim Jackets</a></li>
							<li><a href="#0">Duffle Coats</a></li>
							<li><a href="#0">Leather Jackets</a></li>
							<li><a href="#0">Parkas</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#0">Tops</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="#0">All Tops</a></li>
							<li><a href="#0">Cardigans</a></li>
							<li><a href="#0">Coats</a></li>
							<li><a href="#0">Hoodies &amp; Sweatshirts</a></li>
							<li><a href="#0">Jumpers</a></li>
							<li><a href="#0">Polo Shirts</a></li>
							<li><a href="#0">Shirts</a></li>
							<li><a href="#0">Vests</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#0">Booking</a></li>
			<li><a href="#0">Comedykalender</a></li>
			<li class="has-children">
				<a href="#0">Om Tajmer</a>
				<ul class="cd-secondary-nav is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="#0">All Clothing</a></li>
					<li class="has-children">
						<a href="#0">Accessories</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="#0">All Accessories</a></li>
							<li><a href="#0">Glasses</a></li>
							<li><a href="#0">Gloves</a></li>
							<li><a href="#0">Jewellery</a></li>
							<li><a href="#0">Scarves</a></li>
							<li><a href="#0">Wallets</a></li>
							<li><a href="#0">Watches</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#0">Bottoms</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="#0">All Bottoms</a></li>
							<li><a href="#0">Casual Trousers</a></li>
							<li><a href="#0">Leggings</a></li>
							<li><a href="#0">Shorts</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#0">Jackets</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="#0">All Jackets</a></li>
							<li><a href="#0">Blazers</a></li>
							<li><a href="#0">Bomber jackets</a></li>
							<li><a href="#0">Denim Jackets</a></li>
							<li><a href="#0">Duffle Coats</a></li>
							<li><a href="#0">Leather Jackets</a></li>
							<li><a href="#0">Parkas</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#0">Tops</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="#0">All Tops</a></li>
							<li><a href="#0">Cardigans</a></li>
							<li><a href="#0">Coats</a></li>
							<li><a href="#0">Hoodies &amp; Sweatshirts</a></li>
							<li><a href="#0">Jumpers</a></li>
							<li><a href="#0">Polo Shirts</a></li>
							<li><a href="#0">Shirts</a></li>
							<li><a href="#0">Vests</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#0">Kontakt</a></li>
		</ul>
	</nav>

	<div id="cd-search" class="cd-search">
		<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
			<input type="search" placeholder="Søg blandt vores artister..." value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		</form>
	</div>