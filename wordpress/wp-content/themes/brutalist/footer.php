<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brutalist
 */

?>

	 <div id="animatedModal">
            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
            <div class="close-animatedModal"> 
              CLOSE MODAL
            </div>
            
            <div class="modal-content">
                  <!--Your modal content goes here-->
            </div>
          </div>


	<footer>       
          <p>Created with <i class="fa fa-heart" aria-hidden="true"></i>
 by <a href="" target="_blank" class="author">Liliana Brissos</a></p>
        </footer>
	


</div><!-- #page -->



<?php wp_footer(); ?>

<script>
          jQuery(document).ready(function($) {
            $("#nav-modal").animatedModal();
            new WOW().init();
            $(".post-preview").hover(function() {
            $(this).find("img").toggleClass("featured reset-pos");
            });

            $(function() {
  $('#post-container.odd .col-md-5').addClass('pull-right');
  $('#post-container.odd .col-md-7').addClass('pull-left');
});
          });

        </script>

</body>
</html>
