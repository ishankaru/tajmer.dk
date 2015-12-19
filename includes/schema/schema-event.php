<?php 
/**
 * Description: Schema markup in JSON+LD format based on documentation from - http://schema.org/Event
 * Debug output with https://developers.google.com/structured-data/testing-tool/
 *
 * @package Tajmer Booking & Management
 * @subpackage tajmer.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?> 

<script type="application/ld+json">

  [ 

    <?php $last = count(get_field('artist_calendar')); $x=1; while ( have_rows('artist_calendar') ) : the_row(); ?>
      {
        "@context" : "http://schema.org",
        "@type" : "Event",
        "name" : "<?php the_sub_field('title'); ?>",
        "startDate" : "<?php $date = DateTime::createFromFormat('Ymd', get_sub_field('date')); echo $date->format('Y-m-d');?>T20:00",
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
      }<?php if($x!=$last) { echo ','; } ?>
    <?php $x++; endwhile; ?>

  ]

</script>