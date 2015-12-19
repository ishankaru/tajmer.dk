<?php 
/**
 * Description: Breadcrumbs
 *
 * @package Mikkel Tschentscher
 * @subpackage mikkeltschentscher.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?> 

<?php
	if (function_exists('yoast_breadcrumb')) {
	    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
	}
?>