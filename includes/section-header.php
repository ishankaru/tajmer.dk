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
	<a class="cd-logo" href="<?php echo get_home_url(); ?>/" title="Tajmer Booking &amp; Management">
		<img src="<?php the_field('hlogo',options); ?>" alt="Tajmer Booking &amp; Management">
	</a>
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

<main class="cd-main-content">