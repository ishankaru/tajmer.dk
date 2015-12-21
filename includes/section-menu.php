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
						</ul>
					</li>

					<?php 	
						$posts = get_posts(array(
							'numberposts'	=> -1,
							'post_type'		=> 'artists',
							'meta_query' => array(
								array(
									'key' => 'exclusive',
									'value' => '1',
									'compare' => '=='
								)
							)
						))
					?>

					<li class="has-children">
						<a href="/eksklusive-artister/">Eksklusive artister</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Tilbage</a></li>
							<li class="see-all"><a href="/eksklusive-artister/">Se alle eksklusive artister</a></li>
						
							<?php if( $posts ) { foreach( $posts as $post ) { setup_postdata( $post ); ?> 
								<li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
							<?php } wp_reset_postdata(); } ?>
						</ul>
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
			<input type="search" class="ac-input" placeholder="Søg artist..." value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			<div class="ajax-drop"></div>
		</form>
	</div>
