<?php
/**
 * Template Name: Template: Frontpage
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>

 	<?php include 'includes/section-slideshow.php';?>

	<section class="module module-boxes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row xs-gutter">
						<div class="col-sm-6 col-md-3">
							<a href="#" title="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-one.png" alt="#">
								<h2>Book en <strong>komiker</strong></h2>
								<p>Hos Tajmer Booking & Management har vi nogle af Danmarks bedste og mest talentfulde komikere. </p>
							</a>
						</div>
						<div class="col-sm-6 col-md-3">
							<a href="#" title="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-one.png" alt="#">
								<h2>Book en <strong>foredragsholder</strong></h2>
								<p>Vi har håndplukket en lang række mennesker, der kan noget helt særligt med ord.</p>
							</a>
						</div>
						<div class="col-sm-6 col-md-3">
							<a href="#" title="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-one.png" alt="#">
								<h2>Book en <strong>konferencier</strong></h2>
								<p>Hos Tajmer Booking & Management har vi nogle af Danmarks bedste og mest talentfulde komikere. </p>
							</a>
						</div>
						<div class="col-sm-6 col-md-3">
							<a href="#" title="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-one.png" alt="#">
								<h2>Book et <strong>koncertnavn</strong></h2>
								<p>Hos Tajmer Booking & Management har vi nogle af Danmarks bedste og mest talentfulde komikere. </p>
							</a>
						</div>												
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="module module-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="h3">Send en uforpligtende forespørgsel eller ring og få en snak på 4615 3700</p>
					<div class="form">
						<?php gravity_form( 2, false, false, false, '', false, 10 ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="module module-calendar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="h1">Comedy kalenderen</h2>
					<p class="lead">Her kan du følge med i artister når de bevæger sig rundt omkring i landet</p>
					<?php include 'includes/section-calendar.php';?>
					<a href="#" title="#" class="lead more">Se den fulde comedy kalender</a>
				</div>
			</div>
		</div>
	</section>

	<section class="module module-products">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="h1">Aktuelle shows</h2>
					<div class="row">
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h2 class="h1 text-right">On Demand</h2>
					<div class="row">
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
						<div class="col-md-4">
							<a href="#" title="#"><img src="http://placehold.it/250x350" alt="#" class="img-responsive"></a>
							<a href="#" title="#">Se Tourplan</a>
							<a href="#" title="#">Køb billetter</a>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

	<section class="module module-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="h3">Send en uforpligtende forespørgsel eller ring og få en snak på 4615 3700</p>
					<div class="form">
						<?php gravity_form( 2, false, false, false, '', false, 20 ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="module module-information">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="#" title="#"><img src="http://placehold.it/150x150" alt="#" class="img-responsive"></a>
					<a href="#" title="#"><h2>Konferenciers / Værter</h2></a>
					<p>Rollen som konferencier / vært kræver et særligt talent: Konferencieren er den person, der binder en begivenhed sammen – det være sig en festaften, en konference, en festivalscene eller noget helt fjerde.</p>
					<a href="#" title="#">Læs mere</a>
				</div>
				<div class="col-md-3">
					<a href="#" title="#"><img src="http://placehold.it/150x150" alt="#" class="img-responsive"></a>
					<a href="#" title="#"><h2>Konferenciers / Værter</h2></a>
					<p>Rollen som konferencier / vært kræver et særligt talent: Konferencieren er den person, der binder en begivenhed sammen – det være sig en festaften, en konference, en festivalscene eller noget helt fjerde.</p>
					<a href="#" title="#">Læs mere</a>
				</div>
				<div class="col-md-3">
					<a href="#" title="#"><img src="http://placehold.it/150x150" alt="#" class="img-responsive"></a>
					<a href="#" title="#"><h2>Konferenciers / Værter</h2></a>
					<p>Rollen som konferencier / vært kræver et særligt talent: Konferencieren er den person, der binder en begivenhed sammen – det være sig en festaften, en konference, en festivalscene eller noget helt fjerde.</p>
					<a href="#" title="#">Læs mere</a>
				</div>
				<div class="col-md-3">
					<a href="#" title="#"><img src="http://placehold.it/150x150" alt="#" class="img-responsive"></a>
					<a href="#" title="#"><h2>Konferenciers / Værter</h2></a>
					<p>Rollen som konferencier / vært kræver et særligt talent: Konferencieren er den person, der binder en begivenhed sammen – det være sig en festaften, en konference, en festivalscene eller noget helt fjerde.</p>
					<a href="#" title="#">Læs mere</a>
				</div>													
			</div>
		</div>
	</section>


	<section class="module module-process">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Referencer</h3>
					<div class="row">
						<div class="col-md-3">
							<img src="http://placehold.it/150x50" alt="#" class="img-responsive">
						</div>
						<div class="col-md-3">
							<img src="http://placehold.it/150x50" alt="#" class="img-responsive">
						</div>
						<div class="col-md-3">
							<img src="http://placehold.it/150x50" alt="#" class="img-responsive">
						</div>
						<div class="col-md-3">
							<img src="http://placehold.it/150x50" alt="#" class="img-responsive">
						</div>
						<div class="col-md-3">
							<img src="http://placehold.it/150x50" alt="#" class="img-responsive">
						</div>
						<div class="col-md-3">
							<img src="http://placehold.it/150x50" alt="#" class="img-responsive">
						</div>
						<div class="col-md-3">
							<img src="http://placehold.it/150x50" alt="#" class="img-responsive">
						</div>
						<div class="col-md-3">
							<img src="http://placehold.it/150x50" alt="#" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h3>Sådan foregår en forespørgsel og booking hos Tajmer</h3>
					<ul>
						<li>Mei suavitate cotidieque an, diceret dissentiet at sea. Ei nemore omnium dissentiunt  Mei suavitate cotidieque an</li>
						<li>Mei suavitate cotidieque an, diceret dissentiet at sea. Ei nemore omnium dissentiunt  Mei suavitate cotidieque an</li>
						<li>Mei suavitate cotidieque an, diceret dissentiet at sea. Ei nemore omnium dissentiunt  Mei suavitate cotidieque an</li>
						<li>Mei suavitate cotidieque an, diceret dissentiet at sea. Ei nemore omnium dissentiunt  Mei suavitate cotidieque an</li>
					</ul>
				</div>													
			</div>
		</div>
	</section>	

	<section class="module module-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="h3">Send en uforpligtende forespørgsel eller ring og få en snak på 4615 3700</p>
					<div class="form">
						<?php gravity_form( 2, false, false, false, '', false, 30 ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="module module-categories">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 
			          $args = array( 'hide_empty' => 0 );
			          $terms = get_terms( 'type', $args );
			          if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
			            $count = count( $terms ); 
			            $i = 0;
			            $term_list = '';
			              foreach ( $terms as $term ) {
			                $i++;
			                $term_list .= '<a href="' . get_term_link( $term ) . '" title="Se alle artister i kategorien ' . $term->name . '">' . $term->name . '</a>  /  ';
			                if ( $count != $i ) {
			                } else {
			                  $term_list .= '';
			                } 
			              }
			            echo $term_list;
			          }
			        ?>			
				</div>
			</div>
		</div>
	</section>	
	
	<section class="module module-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Facebook</h2>
				</div>
				<div class="col-md-6">
					<h2>Om Tajmer</h2>
					<img src="http://placehold.it/150x150" alt="#" class="img-responsive">
					<p class="lead">I mere end 40 år har Tajmer Booking & Management markeret sig som landets største og mest eksklusive bureau indenfor dette område.</p>
					<p class="lead">Med mange af landets populæreste kunstnere i vores management kan vi garantere vores kunder den hurtigste og mest effektive betjening, som desuden hviler på professionel ekspertise og erfaring.</p>
				</div>				
			</div>
		</div>
	</section>
	<?php include 'includes/section-footer.php';?>

<?php get_footer(); ?>