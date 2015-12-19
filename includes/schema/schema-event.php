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

  <?php while ( have_rows('artist_calendar') ) : the_row(); ?>

    {
      "@context": "http://schema.org",
      "@type": "ComedyEvent",
      "location": {
        "@type": "MusicVenue",
        "name": "Chicago Symphony Center",
        "address": "220 S. Michigan Ave, Chicago, Illinois, USA"
      },
      "name": "Shostakovich Leningrad",
      "offers": {
        "@type": "Offer",
        "url": "/examples/ticket/12341234",
        "price": "40",
        "priceCurrency": "USD",
        "availability": "http://schema.org/InStock"
      },
      "performer": [
        {
          "@type": "ComedyEvent",
          "name": "<?php the_title(); ?>"
        },
        {
          "@type": "Person",
          "image": "<?php the_field('artist_thumbnail'); ?>",
          "name": "<?php the_title(); ?>"
        }
      ],
      "startDate": "2014-05-23T20:00",
      "workPerformed": [
        {
          "@type": "CreativeWork",
          "name": "Britten Four Sea Interludes and Passacaglia from Peter Grimes",
          "sameAs": "http://en.wikipedia.org/wiki/Peter_Grimes"
        }
      ]
    }

  <?php endwhile; ?>

</script>