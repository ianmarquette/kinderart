<div id="sidebar1" class="sidebar large-3 columns show-for-large-up" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>


		<?php dynamic_sidebar( 'sidebar1' ); ?>

		<!-- <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
			<h5 class="text-center">Tags</h5>
			<div class="widget-block clearfix">
				<?php wp_tag_cloud( 'smallest=10&largest=10' ); ?>
			</div>

		<?php endif; ?> -->

	








<!--google-->	

<!--end google-->
<br />
<!--amazon-->
<script type="text/javascript" language="javascript" src="//c.amazon-adsystem.com/aax2/getads.js"></script>
<script type="text/javascript" language="javascript">
  //<![CDATA[
    aax_getad_mpb({
      "slot_uuid":"f7f41afb-4575-4177-99ea-6bad8d9f02b4"
    });
  //]]>
</script>
<!--end amazon-->
<br /><br />
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<em><a href="http://kinderart.com/a-note-about-advertising/">A note about the ads you see on KinderArt.com.</a></em
<br /><br /><br />

<!--facebook-->
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkinderartcom%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
<!--end facebook-->

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


		<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->

		<div class="alert help">
			<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
		</div>

	<?php endif; ?>

</div>
