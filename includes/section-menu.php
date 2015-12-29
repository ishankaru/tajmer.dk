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
			<li class="has-children">
				<a href="#0">Find artist</a>
				<ul class="cd-secondary-nav is-hidden">
					<li class="go-back"><a href="#0">Tilbage</a></li>
					<li class="see-all"><a href="/artister/">Se alle artister</a></li>
					<li class="has-children">
						<a href="/kategorier/stand-up/">Underholdning</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Tilbage</a></li>
							<li class="see-all"><a href="/kategorier/stand-up/">Se al underholdning</a></li>
							<li><a href="/kategorier/stand-up/">Stand-up / Comedy</a></li>
							<li><a href="/kategorier/foredrag/">Foredragsholder</a></li>
							<li><a href="/kategorier/konfrenciers-vaerter/">Konferencier / værter</a></li>
							<li><a href="/kategorier/entertainment/">Entertainment / Musical</a></li>
							<li><a href="/kategorier/">Se alle kategorier</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="/kategorier/koncertnavne/">Musik</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Tilbage</a></li>
							<li class="see-all"><a href="/kategorier/koncertnavne/">Se al musik</a></li>
							<li><a href="/kategorier/sangere-solister/">Solister</a></li>
							<li><a href="/kategorier/koncertnavne/">Koncertnavne</a></li>
							<li><a href="/kategorier/bands/">Bands</a></li>
							<li><a href="/kategorier/djs/">DJs</a></li>
							<li><a href="/kategorier/jazzlounge/">Jazz/Lounge</a></li>
							<li><a href="/kategorier/klassisk_kirkekoncert/">Kirkekoncert</a></li>
							<li><a href="/kategorier/">Se alle kategorier</a></li>
						</ul>
					</li>
					<li>
						<a href="/eksklusive-artister/">Eksklusive artister</a>
						<p class="visible-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="/kategorier/klassisk_kirkekoncert/" class="visible-lg">Se eksklusive arister</a></li>
					</li>
					<li>
						<a href="/forespoergsel/">Book en specifik artist</a>
						<p class="visible-lg">Beskriv dit arrangement og oplys gerne navn på den ønskede artist - enten på mail eller på telefon +45 46 15 37 00</p>
						<a href="/forespoergsel/" class="visible-lg">Forspørg på artist her</a></li>
					</li>
				</ul>
			</li>
			<li><a href="<?php echo get_home_url(); ?>/om-tajmer/">Om Tajmer</a></li>
			<li><a href="<?php echo get_home_url(); ?>/forespoergsel/">Booking</a></li>
			<li><a href="<?php echo get_home_url(); ?>/comedy-kalender/">Comedykalender</a></li>
			<li><a href="<?php echo get_home_url(); ?>/kontakt/">Kontakt</a></li>
			<li><a href="https://www.facebook.com/TajmerBooking/?fref=ts" target="_blank" title="#" class="menu-icon"><i class="fa fa-facebook"></i></a></li>
			<li><a href="/nyhedsbrev/" class="menu-icon"><i class="fa fa-envelope"></i></a></li>
		</ul>
	</nav>

	<div id="cd-search" class="cd-search">
		<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
			<input type="search" placeholder="Søg artist..." value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

		</form>
	</div>
