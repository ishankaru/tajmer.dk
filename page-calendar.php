<?php
/**
 * Template Name: Template: Comedy Calendar
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 <?php include 'includes/section-header.php';?>
<?php $args = array(
    'post_type' => 'artists',
    'posts_per_page' => -1
);

$query = new WP_Query( $args );
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
   the_field('date');// whatever you want to use from $post
endwhile; endif;
?>
<?php include 'includes/section-footer.php';?>

<?php get_footer(); ?>


