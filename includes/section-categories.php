<?php 
/**
 * Description: Display All Custom Taxanomy terms
 *
 * @package Mikkel Tschentscher
 * @subpackage mikkeltschentscher.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?> 

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