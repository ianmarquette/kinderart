

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row">
		<div class="columns small-12 medium-3">
			<?php dynamic_sidebar( 'sidebar5' ); ?>
		</div>
		<div class="columns small-12 medium-3">
			<?php dynamic_sidebar( 'sidebar6' ); ?>
		</div>
	</div>
	<div class="row">
		<div class="columns small-12 medium-3">
			<?php dynamic_sidebar( 'sidebar7' ); ?>
		</div>
		<div class="columns small-12 medium-3">
			<?php dynamic_sidebar( 'sidebar8' ); ?>
		</div>
	</div> 
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

		<header class="article-header">

		</header> <!-- end article header -->

		<section class="entry-content" itemprop="articleBody">
			<div class="row">
				<div class="small-12 columns">
					<?php

					if(get_field('contact_entry'))
					{
						echo '<div class="breakout-box">';
						echo get_field('contact_entry');
						echo '</div>';
					}

					?>
				</div>
			</div>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</section> <!-- end article section -->



	</article> <!-- end article -->

<?php endwhile; endif; ?>							