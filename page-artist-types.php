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

  <section class="module module module-artists">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <h2>Udvalgte artister</h2>

          <?php
            query_posts(array(
                'post_type' => array(
                    'Artists'
                ),
                'showposts' => 12,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            ));
          ?>

          <?php if (have_posts()) : ?>
            <div class="row">
              <?php while (have_posts()) : the_post(); { ?>
                <article class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php if( get_field('artist_thumbnail') ): ?>
                    <div class="thumbnail" style="background-image:url('<?php the_field('artist_thumbnail'); ?>')"></div>
                  <?php else: ?>
                    <div class="thumbnail" style="background-image:url('http://placehold.it/275x200');"></div>
                  <?php endif; ?>
                    <h2 class="h5"><?php the_title(); ?></h2>
                  </a>
                </article>
              <?php } endwhile; ?>
            </div>  
          <?php else : endif; wp_reset_query(); ?>

        </div>
      </div>
    </div>
  </section>
      
  <?php include 'includes/section-footer.php';?>

<?php get_footer(); ?>


