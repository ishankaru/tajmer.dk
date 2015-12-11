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

<header>
	<nav>
		<img src="<?php the_field('hlogo',options); ?>">
	</nav>
	<div class="subnav">
		<div class="pull-left">
			<?php include 'section-searchform.php';?>
		</div>
		<div class="pull-right">
			Ring til os eller send en forespørgsel på en af vores artister +45 46 15 37 00
		</div>
	</div>
</header>