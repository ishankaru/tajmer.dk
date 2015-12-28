<?php
/**
* Template Name: Template: Contact
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

	<?php include 'includes/section-header.php';?>
	<?php include 'includes/section-hero.php';?>
	
	<section class="module module-standard">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1><img src="http://tajmer.dk.linux95.unoeuro-server.com/administrator/wp-content/uploads/2015/12/primary-icon.png?826ecb&amp;bb2f24" class="img-icon" alt="icon"> Kontakt Tajmer Booking &amp; Management</h1>
				</div>
				<div class="col-md-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2262.6017435396557!2d12.176714815918919!3d55.452175880474016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652f1ad50dcae11%3A0x826b9ebd6f720de5!2zU8O4bmRyZSBBbGxlIDE3LCA0NjAwIEvDuGdl!5e0!3m2!1sda!2sdk!4v1451325963623" width="600" height="350" allowfullscreen></iframe>
				</div>
				<div class="col-md-6">
					<div class="contact-box">
						<h2>Tajmer Booking &amp; Management</h2>
						<span class="address">Søndre Allé 17</span>
						<span class="city">4600 Køge</span>
						<span class="vat">CVR-nr.2915 34 50</span>
						<span class="phone">Tlf. +45 4615 37 00</span>
						<span class="mail">Mail: tajmer@tajmer.dk</span>
						<span class="facebook">Tajmer på Facebook</span>
					</div>
				</div>				
			</div>
		</div>
	</section>
	
 	<section class="module module-contact">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <p class="h3"><?php the_field('request_title', options); ?></p>
	          <div class="form">
	            <?php gravity_form( 2, false, false, false, '', false, 10 ); ?>
	          </div>
	        </div>
	      </div>
	    </div>
	</section>
	
	<section class="module module-standard">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 	
						$posts = get_posts(array(
							'post_type'	=> 'team',
							'numberposts'	=> -1
						))
					?>

					<?php if( $posts ) { foreach( $posts as $post ) { setup_postdata( $post ); ?> 
						<div class="col-xs-3 teammember">
							<img src="<?php the_field('image'); ?>" class="img-responsive img-circle">
							<h3><?php the_field('name'); ?></h3>
							<p>
								<?php the_field('title'); ?><br>
								<a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a><br>
								<a href="tel:<?php the_field('phone'); ?>">+45 <?php the_field('phone'); ?></a><br>
								<?php edit_post_link('Rediger', '', ''); ?>
							</p>
						</div>
					<?php } wp_reset_postdata(); } ?>
				</div>
			</div>
		</div>
	</section>
	
 <?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>
