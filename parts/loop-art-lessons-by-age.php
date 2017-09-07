
<header class="article-header">	
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- LinkUnitTop -->
<ins class="adsbygoogle"
    style="display:inline-block;width:728px;height:15px"
    data-ad-client="ca-pub-2958710770602891"
    data-ad-slot="8326288317"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!--tribal-->
<script type="text/javascript"><!--
	e9 = new Object();
	e9.size = "728x90,970x250";
	//--></script>
	<script type="text/javascript" src="http://tags.expo9.exponential.com/tags/KinderArt/KinderArt/tags.js"></script>

	<!--endtribal-->
	<div class="breadcrumb">
		<?php the_category(', ') ?>
	</div>
	<h1 class="entry-title page-title" itemprop="headline"><?php the_title(); ?></h1>
</header> <!-- end article header -->

<div class="row">



	<?php
	$args = array(
		'orderby' => 'name',
		'parent' => 36
		);
	$categories = get_categories( $args );
	foreach ( $categories as $category ) {
		echo '<div class="large-6 medium-6 columns" data-equalizer-watch>';
		echo '<div class="panel" data-equalizer-watch>';
		echo '<article>';
		echo '<section class="featured-image category-image" itemprop="articleBody">';

		echo '<a href="' . get_category_link( $category->term_id ) . '">';
		if (function_exists('get_wp_term_image'))
		{
    $meta_image = get_wp_term_image($category->term_id); //It will give category/term image url 
}

echo '<img src="' . $meta_image . '" class="attachment-category-thumb wp-post-image" />'; // category/term image url
echo '</a>';
echo '<header class="article-summary-terms">';
echo '<h5><a href="' . get_category_link( $category->term_id ) . '">'. $category->name . '</a></h5>';
echo '<p>' . $category->description . '</p>';
echo '</header>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '</article>';
}
?>
<?php wp_reset_postdata(); ?>



<section class="featured-image category-image" itemprop="articleBody">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>
</section> <!-- end article section -->


</div>


<?php if ($posts = 0) : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>
