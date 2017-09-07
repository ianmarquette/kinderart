<div class="row">

	<?php
	$args = array(
		'orderby' => 'name',
		'parent' => 12
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






</div>


<?php if ($posts = 0) : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>
