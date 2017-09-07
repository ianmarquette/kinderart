<div id="sidebar1" class="sidebar large-3 columns show-for-large-up" role="complementary">




		<script type="text/javascript"><!--
			google_ad_client = "ca-pub-2958710770602891";
			/* Top 160x600 */
			google_ad_slot = "0579542152";
			google_ad_width = 160;
			google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<?php

// check if the repeater field has rows of data
if( have_rows('affiliate_ad_entry') ):

 	// loop through the rows of data
	while ( have_rows('affiliate_ad_entry') ) : the_row();

        // display a sub field value
echo '<div class="affiliate-ad-block">';
the_sub_field('affiliate_ad_field');
echo '</div>';

endwhile;

else :

    // no rows found

	endif;

?>

<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->

	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
	</div>

<?php endif; ?>

</div>