<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<div id="main" class="small-12 medium-12 large-8 columns first" role="main" data-equalizer>


			<!--google-->

			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- WP_Leader_Responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2958710770602891"
     data-ad-slot="1931807094"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

				<!--end google-->
<div class="row">
	<header>
		<h1 class="page-title small-12 columns"><?php the_archive_title();?></h1>
		<p><?php the_archive_description();?></p>
	</header>
</div>
<div class="row">
	<!-- To see additional archive styles, visit the /parts directory -->
	<?php if (is_category( 'Art Lessons By Medium' )){
		get_template_part( 'parts/loop', 'art-lessons-by-medium' );
	} else if (is_category( 'Holiday Crafts &amp; Special Days' )) {
		get_template_part( 'parts/loop', 'art-lessons-seasonal' );
	} else {
		get_template_part( 'parts/loop', 'archive-grid' ); 

		}
	?>
</div>

</div> <!-- end #main -->

<?php get_sidebar(); ?>


</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>