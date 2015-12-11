<?php
/**
 * Description: Taxonomy: Category - Post type: Artists
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>

 	<?php global $post; $terms = get_the_terms($post->id, 'type'); ?>

	<section class="module module-artists">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php echo $terms[0]->name; ?></h1>
					<span>(<?php echo $terms[0]->count; ?> Artister)</span>
				</div>
			</div>
			<?php if (have_posts()) : ?>
				<div class="row grid">
					<?php while (have_posts()) : the_post(); { ?>
						<article class="item col-xs-6 col-sm-4 col-md-3 col-lg-2 <?php $cats = get_the_terms(get_the_ID(), 'category'); foreach($cats as $c) {echo $c->slug.' ';} ?>">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<img src="http://placehold.it/275x200" alt="<?php the_title(); ?>" class="img-responsive">
								<h2 class="h5"><?php the_title(); ?></h2>
							</a>
						</article>
					<?php } endwhile; ?>
				</div>	
			<?php else : endif; wp_reset_query(); ?>
		</div>
	</section>


	  <section class="module module module-boxes">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h1>Alle kategorier</h1>
        </div>
      </div>

      <div class="row grid">
        <?php 
          $args = array( 'hide_empty' => 0 );
          $terms = get_terms( 'type', $args );
          if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            $count = count( $terms ); 
            $i = 0;
            $term_list = '<div>';
              foreach ( $terms as $term ) {
                $i++;
                $term_list .= '<div class="col-md-3 item"><a href="' . get_term_link( $term ) . '" class="box" title="' . sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) . '">' . $term->name . '</a></div>';
                if ( $count != $i ) {
                } else {
                  $term_list .= '</div>';
                } 
              }
            echo $term_list;
          }
        ?>
      </div>
    </div>
  </section>

 <?php include 'includes/section-footer.php'; ?>

<?php get_footer(); ?>