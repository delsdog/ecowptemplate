<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage econex
 */
?>


	<footer id="footer" class="png" role="contentinfo">

		<img alt="" src="inc/images/rounded_MCS-NAPIT.png" />
		<img alt="" src="inc/images/rounded_Real.png" />
	  	<img alt="" src="inc/images/rounded_DeLonghi.png" />
	  	<img alt="" src="inc/images/rounded_REFCOM.png" />
	  	<img alt="" src="inc/images/rounded_Trust-Mark.png" />
	    <p>
	    <?php
	    // add in a current year copyright
	    $copyright = "Eco Power UK &copy; ";
	    $thisYear = date('Y');
	    $copyright .= $thisYear;
	    echo $copyright;
	    ?>
		<br/><a href="mailto:info@eco-poweruk.com">info@eco-poweruk.com</a> 
		<br/>Phone: 01530 814559
		</p> 
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>