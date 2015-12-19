<?php 
/**
 * Description: Schema Markup For Artist Events
 *
 * @package Mikkel Tschentscher
 * @subpackage mikkeltschentscher.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?> 

<script type="application/ld+json">

  [ 

    <?php while ( have_rows('artist_calendar') ) : the_row(); ?>

      {
        "@context" : "http://schema.org",
        "@type" : "ComedyEvent",
        "name" : "<?php the_sub_field('title'); ?>",
        "startDate" : "2015-01-25T20:00",
        "location": {
          "@type": "Place",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "<?php the_sub_field('city'); ?>",
            "postalCode": "<?php the_sub_field('zipcode'); ?>",
            "streetAddress": "<?php the_sub_field('address'); ?>"
          },
          "name": "<?php the_sub_field('location'); ?>"
        },
        "image": [
          "<?php the_field('artist_calendar_image'); ?>"
        ],
        "performer": [
          {
            "@type": "Person",
            "image": "<?php the_field('artist_thumbnail'); ?>",
            "name": "<?php the_title(); ?>"
          }
        ],
        "offers" : {
          "@type" : "Offer",
          "price": "<?php the_sub_field('price'); ?>",
          "priceCurrency": "DKK",
          "url" : "<?php the_sub_field('url'); ?>"
        }
      },

    <?php endwhile; ?>
  ]

</script>