<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

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
					

<!--breadcrumb-->
<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
<!--endbreadcrumb-->
				</div>
				<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
			</header> <!-- end article header -->

			<section class="entry-content" itemprop="articleBody">
				<?php the_post_thumbnail('full'); ?>
				<div class="share-block clearfix">
					<h5>Share This Lesson</h5>
					<div class="icon-bar clearfix">
						<a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" class="item icon__twitter" title="Click to share this post on Twitter" target="blank">
							Twitter
						</a>
						<a href="https://pinterest.com/pin/create/bookmarklet/?url=<?php the_permalink(); ?>&description=<?php the_title(); ?>" class="item icon__pinterest" title="Click to share this post on Pinterest" target="blank">
							Pinterest
						</a>
						<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" class="item icon__facebook" title="Click to share this post on Facebook" target="blank">
							Facebook
						</a>
						<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"  class="item icon__google-plus" title="Click to share this post on Google Plus" target="blank">
							Google +
						</a>

<a href="javascript:window.print()"  class="item icon__print" title="Click to print this post">
							Print
						</a>
					</div>
				</div>
				<div class="article-info">
					<div class="article-info__field">
						Level: <span><?php echo get_the_term_list( $post->ID, 'level', ' ', ', ', '' ); ?></span>

					</div>
					<div class="article-info__field">
						Grade: <span><?php echo get_the_term_list( $post->ID, 'grade', ' ', ', ', '' ); ?></span>
					</div>
					<div class="article-info__field">
                                                Age: <span><?php echo get_the_term_list( $post->ID, 'age', ' ', ', ', '' ); ?></span>
					</div>
					<div class="article-info__field">
						Written by:
						<?php

						if(get_field('author'))
						{
							echo '<span>' . get_field('author') . '</span>';
						}

						?>
					</div>
				</div>
				<div class="entry-content__ad-block">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- WP_In_Content_Medium -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-2958710770602891"
     data-ad-slot="9315473092"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>



				</div>
				
				<?php

				if(get_field('summary'))
				{
					echo '<h3>Summary:</h3>';
					echo '<p>' . get_field('summary') . '</p>';
				}

				?>
				<?php

				if(get_field('optional_content_title'))
				{
					echo '<h3>' . get_field('optional_content_title') . '</h3>';
				}

				?>
				<?php

				if(get_field('optional_content_area'))
				{
					echo '<p>' . get_field('optional_content_area') . '</p>';
				}

				?>
				<?php

				if(get_field('objectives'))
				{
					echo '<h3>Objectives:</h3>';
					echo '<p>' . get_field('objectives') . '</p>';
				}

				?>
				<?php

				if(get_field('what_you_need'))
				{
					echo '<h3>What You Need:</h3>';
					echo '<p>' . get_field('what_you_need') . '</p>';
				}

				?>
				<?php

				if(get_field('what_you_do'))
				{
					echo '<h3>What You Do:</h3>';
					echo '<p>' . get_field('what_you_do') . '</p>';
				}

				?>
                                <?php the_content() ?>
				<?php 

				$rows = get_field('recommended_booksproducts');
				if($rows)
				{
                                        echo '<div class="product__block">' ;
					echo '<h3>Recommended Books/Products:</h3>';
					foreach($rows as $row)
					{
						echo '<div class="product-entry">' . $row['recommended_bookproduct_entry'].'</div>';
					}

				}

				?>

			</section> <!-- end article section -->
<h3 class="related-title">MORE TO DISCOVER:</h3>
<h5>❖ Similar Categories: <?php the_category(', ') ?></h5>
<h5>❖ <a href="https://kinderart.com/art-lessons-by-medium/">Click HERE for Even MORE Art Lesson Plans</a></h5><br />
			<footer class="article-footer">
				<p class="tags clearfix"><?php the_tags('<span class="tags-title">' . __('Tags', 'jointstheme') . '</span> ', ''); ?></p>	</footer> <!-- end article footer -->

			</article> <!-- end article -->


			<!--adcodehere-->
<center><script type="text/javascript" language="javascript" src="//c.amazon-adsystem.com/aax2/getads.js"></script>
<script type="text/javascript" language="javascript">
  //<![CDATA[
    aax_getad_mpb({
      "slot_uuid":"35f30735-b7ff-49e7-8c6d-2255dc41a018"
    });
  //]]>
</script>
</center>
<!--endadcodehere-->

				<h4 class="related-title">You Might Also Like</h4>
				<ul class="related-posts row">
					
				

<?php
//for use in the loop, list 4 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>4,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>

<li class="related-posts__item columns small-12 medium-6 large-3">
<a href="<?php the_permalink() ?>"><?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail('related-posts', array("class" => "alignleft post_thumbnail")); } ?></a>
						<a class="related-posts__text-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>

<?php
endwhile;
}
wp_reset_query();
}
?>