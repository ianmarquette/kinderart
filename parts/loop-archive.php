<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('columns small-12 medium-4'); ?> role="article">			
						
		<section class="entry-content" itemprop="articleBody">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('category-thumb', array( 'class' => 'category-thumb' )); ?></a>
			<?php the_content('<button class="tiny">Read more...</button>'); ?>
		</section> <!-- end article section -->
		<div class="article-summary-terms">
			<h5><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h5>
			<p><?php echo get_the_term_list( $post->ID, 'age', 'Ages: ', ', ', '' ); ?> </p>
			<p><?php echo get_the_term_list( $post->ID, 'grade', 'Grades: ', ', ', '' ); ?> </p>
			<p><?php echo get_the_term_list( $post->ID, 'level', 'Levels: ', ', ', '' ); ?> </p>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
		</div> <!-- end article summary-terms -->
							
		<footer class="article-footer">
	
		</footer> <!-- end article footer -->				    						
	</article> <!-- end article -->

<?php endwhile; ?>	
</div>
		<?php 
	$rows = get_field('category_recommended_books');
				if($rows)
				{
                                        echo '<div class="product__block">' ;
					echo '<h5>Recommended Books/Products:</h5>';
					foreach($rows as $row)
					{
						echo '<div class="product-entry">'.$row['book_entry'].'</div>';
					}

				}

				?>
			
<?php joints_page_navi(); ?>

<?php else : ?>
	<?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>