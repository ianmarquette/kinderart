<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

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
				<h1 class="page-title"><?php the_title(); ?></h1>

			</header> <!-- end article header -->

			<section class="entry-content" itemprop="articleBody">
				<div class="row">
					<div class="small-12 medium-6 columns">
						<?php the_content(); ?>
						<?php

						if(get_field('contact_entry'))
						{
							echo '<div class="breakout-box">';
							echo get_field('contact_entry');
							echo '</div>';
						}

						?>
					</div>
					<div class="small-12 medium-6 columns">
			<?php echo do_shortcode('[contact-form-7 id="145" title="Submissions Form"]'); ?>
					</div>
				</div>
				<?php wp_link_pages(); ?>
			</section> <!-- end article section -->



		</article> <!-- end article -->

	<?php endwhile; endif; ?>							