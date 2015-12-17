<?php 
/**
 * Description: Global Menu
 *
 * @package Mikkel Tschentscher
 * @subpackage mikkeltschentscher.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?> 


<div class="cd-overlay"></div>

	<nav class="cd-nav">
		<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
			<li><a href="<?php echo get_home_url(); ?>/">Forside</a></li>
			<li>
			<li class="has-children">
				<a href="#0">Find artist</a>
					<ul class="cd-secondary-nav is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="/artister/">Se alle artister</a></li>
					<li class="has-children">
						<a href="#0">Underholdning</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Menu Item</a></li>
							<li class="see-all"><a href="#0">Menu Item</a></li>
							<li><a href="#0">Stand-up / Comedy</a></li>
							<li><a href="#0">Foredragsholder</a></li>
							<li><a href="#0">Konferencier / værter</a></li>
							<li><a href="#0">Entertainment / Musical</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#0">Musik</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Menu Item</a></li>
							<li class="see-all"><a href="#0">Menu Item</a></li>
							<li><a href="#0">Solister</a></li>
							<li><a href="#0">Koncertnavne</a></li>
							<li><a href="#0">Bands</a></li>
							<li><a href="#0">DJs</a></li>
							<li><a href="#0">Jazz/Lounge</a></li>
							<li><a href="#0">Kirkekoncert</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#0"></a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Menu Item</a></li>
							<li class="see-all"><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#0">Menu Item</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Menu Item</a></li>
							<li class="see-all"><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
							<li><a href="#0">Menu Item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="<?php echo get_home_url(); ?>/om-tajmer/">Om Tajmer</a></li>
			<li><a href="<?php echo get_home_url(); ?>/forespoergsel/">Booking</a></li>
			<li><a href="<?php echo get_home_url(); ?>/comedy-kalender/">Comedykalender</a></li>
			<li><a href="<?php echo get_home_url(); ?>/kontakt/">Kontakt</a></li>
		</ul>
	</nav>

	<div id="cd-search" class="cd-search">
		<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
			<input type="search" placeholder="Søg artist..." value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		</form>
	</div>