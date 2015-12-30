<?php
/**
 * Template Name: Template: Artist Types
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>

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
                $term_list .= '<div class="col-md-3 item"><a href="' . get_term_link( $term ) . '" class="box">' . $term->name . '</a></div>';
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

  <section class="module module-artists">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <h2>Eksklusive artister</h2>
          <hr>
          
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
							
							
          <div class="row grid">
            <?php if( $posts ) { foreach( $posts as $post ) { setup_postdata( $post ); ?> 
                <article class="item col-xs-6 col-sm-4 col-md-3 col-lg-2">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php if( get_field('artist_thumbnail') ): ?>
                    <div class="thumbnail" style="background-image:url('<?php the_field('artist_thumbnail'); ?>')"></div>
                  <?php else: ?>
                    <div class="thumbnail" style="background-image:url('http://placehold.it/275x200');"></div>
                  <?php endif; ?>
                    <h2 class="h5"><?php the_title(); ?></h2>
                  </a>
                </article>
                <?php } wp_reset_postdata(); } ?>
              </div>

        </div>
      </div>
    </div>
  </section>
      
  <?php include 'includes/section-footer.php';?>

<?php get_footer(); ?>


