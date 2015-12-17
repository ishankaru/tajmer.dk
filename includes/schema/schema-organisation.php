<?php 
/**
 * Description: Global Schema Markup for Organisation
 *
 * @package Mikkel Tschentscher
 * @subpackage mikkeltschentscher.dk
 * @since Version 2.0
 * @author Mikkel Tschentscher
 */
?> 

<script type="application/ld+json">
	{ "@context": "http://schema.org",
	  "@type" : "Organization",
	  "url" : "http://www.tajmer.dk",
	  "logo": "<?php the_field('hlogo',options); ?>",
	  "sameAs": ["https://www.facebook.com/TajmerBooking",
				 "https://www.linkedin.com/company/tajmer-booking-&-management"],
	  "contactPoint": {
		  "@type" : "ContactPoint",
		  "telephone" : "#",
		  "contactType" : "sales"
	  }
	}
</script>