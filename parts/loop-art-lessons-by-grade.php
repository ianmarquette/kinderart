<header class="article-header">	
	
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
	<div class="breadcrumb">
		<?php the_category(', ') ?>
	</div>
	<h1 class="entry-title page-title" itemprop="headline"><?php the_title(); ?></h1>
</header> <!-- end article header -->

<div class="row">
<?php
//list terms in a given taxonomy
$taxonomy = 'grade';
$tax_terms = get_terms($taxonomy);
?>
<?php
foreach ($tax_terms as $tax_term) {
	echo '<div class="large-6 medium-6 columns" data-equalizer-watch>';
		echo '<div class="panel" data-equalizer-watch>';
		echo '<article>';
		echo '<section class="featured-image category-image" itemprop="articleBody">';

		if (function_exists('get_wp_term_image'))
		{
    $meta_image = get_wp_term_image($tax_term->term_id); //It will give category/term image url 
}
echo '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>';
echo '<img src="' . $meta_image . '" class="attachment-category-thumb wp-post-image" />';
echo '</a>';

echo '<header class="article-summary-terms">';
echo '<h5><a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '">'. $tax_term->name . '</a></h5>';
echo '<p>' . $tax_term->description . '</p>';
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
