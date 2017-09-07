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

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

	<div id="main" class="large-8 medium-12 columns first" role="main" data-equalizer>
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
			<h1 class="archive-title"><span><?php _e("Grade:", "jointstheme"); ?></span> <?php single_cat_title(); ?></h1>
<p><?php the_archive_description();?></p>
			<div class="row">
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
									echo '<p>' . get_field('summary') . '</p>';
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
			</div>

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

		<?php else : ?>

			<?php get_template_part( 'parts/content', 'missing' ); ?>

		<?php endif; ?>

	</div> <!-- end #main --