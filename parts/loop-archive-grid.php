<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="large-6 medium-6 columns">
			<div class="panel" data-equalizer-watch>

				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

					<section class="featured-image category-image" itemprop="articleBody">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>
					</section> <!-- end article section -->

					<header class="article-summary-terms">
						<h5 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>



	<?php

						if(get_field('summary'))
						{
							echo '<p class="category-desc">' . get_field('summary') . '</p>';
						}

						?>
						<p><?php echo get_the_term_list( $post->ID, 'age', 'Ages: ', ', ', '' ); ?> </p>
						<p><?php echo get_the_term_list( $post->ID, 'grade', 'Grades: ', ', ', '' ); ?> </p>
						<p><?php echo get_the_term_list( $post->ID, 'level', 'Levels: ', ', ', '' ); ?> </p>
					</header> <!-- end article header -->	

				</article> <!-- end article -->
			</div>
		</div>
	<?php endwhile; ?>



<?php if (function_exists('joints_page_navi')) { ?>
<?php joints_page_navi(); ?>
<?php } else { ?>
<nav class="wp-prev-next">
	<ul class="clearfix">
		<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
		<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
	</ul>
</nav>
<?php } ?>
<br>
<?php 

// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  


?>
<?php

						
							echo '<p>' . get_field('category_recommended_books', $taxonomy . '_' . $term_id) . '</p>';
						
?>

<?php else : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>