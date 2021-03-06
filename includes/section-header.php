<?php 
/**
 * Description: Section: Header
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?>

<header class="cd-main-header">
	<a class="cd-logo" href="<?php echo get_home_url(); ?>/" title="Tajmer Booking &amp; Management"></a>
	<ul class="cd-header-buttons">
		<li>
			<a class="cd-search-trigger" title="Søg blandt vores artister">
				<span></span>
			</a>
		</li>
		<li>
			<a class="cd-nav-trigger" title="Åben menu">
				<span></span>
			</a>
		</li>
	</ul> 
</header>

<section class="module module-subnav">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-5">
				<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
					<label><i class="fa fa-search"></i></label>
					<input type="search" placeholder="Søg artist..." value="" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
				</form>
			</div>
			<div class="col-md-8 col-lg-7 text-right">
				<span>Ring til os eller <a href="<?php echo get_home_url(); ?>/forespoergsel/" title="Send en forespørgsel">send en forespørgsel</a> på en af vores artister <a href="tel:<?php echo str_replace(' ', '', get_field('telephone', 'option')); ?>" title="Ring og book <?php the_title(); ?> på <?php the_field('telephone', options); ?>"> <i class="fa fa-phone"></i> +45 <?php the_field('telephone', options); ?></a></span>
			</div>
		</div>
	</div>
</section>

<main class="cd-main-content">
