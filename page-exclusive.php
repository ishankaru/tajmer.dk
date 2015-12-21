<?php
/**
 * Template Name: Template: Exclusive Artists
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>

  <section class="module module-artists">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <h2><?php the_title();?></h2>
          <div class="lead"><?php the_content();?></div>
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
