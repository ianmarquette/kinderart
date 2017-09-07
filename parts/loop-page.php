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
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('full', array( 'class' => 'page-main-image' ));
				}
$get_description = get_post(get_post_thumbnail_id())->post_excerpt;
  if(!empty($get_description)){//If description is not empty show the div
  echo '<span class="wp-caption">' . $get_description . '</span>';
  }
				//echo '<span class="wp-caption">'.get_post(get_post_thumbnail_id())-//>post_excerpt . '</span>'; ?> 

			</header> <!-- end article header -->

			<section class="entry-content" itemprop="articleBody">
				
				<?php the_content(); ?>
			<?php wp_link_pages(); ?>
			</section> <!-- end article section -->



		</article> <!-- end article -->

	<?php endwhile; endif; ?>							