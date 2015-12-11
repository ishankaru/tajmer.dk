<?php
/**
 * Description: 404 template
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 	<?php include 'includes/section-header.php'; ?>

		<div class="module">
			<div class="row">
				<div class="col-md-7">
					<h1>Fejl 404: Siden blev ikke fundet</h1>
					<p class="lead">Den side, du leder efter, er ikke tilgængelig af én af følgende årsager:</p>
					<ul>
						<li>Linket til denne side er muligvis forkert eller forældet.</li>
						<li>Du har muligvis føjet en side til dine foretrukne sider, og siden er senere blevet flyttet.</li>
					</ul> 
					<a href="<?php echo get_home_url(); ?>" title="Tilbage til startsiden" class="btn btn-default">Gå tilbage til startsiden</a>

				</div>
			</div>
		</div>
	
	<?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>