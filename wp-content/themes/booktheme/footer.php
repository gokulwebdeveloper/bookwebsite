
		<section class="contact-sec" id="contact">
			<div class="container">
				<div class="heading">
					<h6>CONTACT DETAILS</h6>
					<h5>Fill out the form below</h5>
				</div>
				<!-- pod item  -->
				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="18c74f5" title="Contact form 1"]'); ?>

				</div>

				
			</div>
		</section>

		<?php wp_footer(); ?>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>	
	</body>
	
</html>