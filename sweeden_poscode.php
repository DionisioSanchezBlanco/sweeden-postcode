<?php
add_action( 'wp_footer', 'webtoffee_checkout_shipping_filter_it_states' );
   
function webtoffee_checkout_shipping_filter_it_states() {
   if ( ! is_checkout() ) {
      return;
   }
   ?>
      
   <script>
   jQuery(document).ready(function($) {
 
      $(document.body).on('country_to_state_changed', function() {
 
         var $shipping_country = $('#billing_country');
		  
		  if ($shipping_country.val() == 'SE'){
			  $( 'input[name="billing_postcode"]' ).attr('placeholder', 'e.g. 741 47');
		  } else{
			  $( 'input[name="billing_postcode"]' ).attr('placeholder', '');
		  }
 
      });
 
   });  
   </script>
       
   <?php
}
