<?php get_header(); ?>

<div id="content">


	<div id="inner-content" class="row">

		<div id="main" class="large-12 medium-12 columns" role="main" >

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="columns small-12 medium-6 large-4">
						<?php dynamic_sidebar( 'sidebar5' ); ?>
					</div>
					<div class="columns small-12 medium-6 large-4">
						<?php dynamic_sidebar( 'sidebar6' ); ?>
					</div>
					<div class="columns small-12 medium-6 large-4">
						<?php dynamic_sidebar( 'sidebar7' ); ?>
					</div>
					<div class="columns small-12 medium-6 large-4">
						<?php dynamic_sidebar( 'sidebar8' ); ?>
					</div>
					<div class="columns small-12 medium-6 large-4">
						<?php dynamic_sidebar( 'sidebar9' ); ?>
					</div>
					<div class="columns small-12 medium-6 large-4">
						<?php dynamic_sidebar( 'sidebar10' ); ?>
					</div>
					<div class="columns small-12 medium-6 large-4">
						<?php dynamic_sidebar( 'sidebar11' ); ?>
					</div>
					<div class="columns small-12 medium-6 large-4">
						<?php dynamic_sidebar( 'sidebar12' ); ?>
					</div>
					<div class="columns small-12 medium-6 large-4">
						<?php dynamic_sidebar( 'sidebar13' ); ?>
					</div>
				</div>
				<div class="row" data-equalizer>
					<div class="columns small-12 medium-4">
						<a href="<?php echo get_permalink(156); ?>" class="link-block--blue" data-equalizer-watch>
							<h5>Art Lessons by Discipline</h5>
							<p>Painting, Drawing, Printmaking, Sculpture</p>
						</a>
					</div>
					<div class="columns small-12 medium-4">
						<a href="<?php echo get_permalink(147); ?>" class="link-block--purple" data-equalizer-watch>
							<h5>Art Lessons by Grade</h5>
							<p>PreK to High School (View by age too!)</p>
						</a>
					</div>
					<div class="columns small-12 medium-4">
						<a href="<?php echo get_category_link(12); ?>" class="link-block--pink" data-equalizer-watch>
							<h5>Special Days &amp; Seasons</h5>
							<p>Holiday Crafts</p>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="columns small-12 medium-6">
						<h2>Welcome to KinderArt</h2>
						<div class="row">
							<div class="columns small-6">
								<?php

								if(get_field('profile_photo_001'))
								{
									echo '<img src="' . get_field('profile_photo_001') . '" class="profile-photo" />';
								}

								?>
							</div>
							<div class="columns small-6">
								<?php

								if(get_field('profile_photo_002'))
								{
									echo '<img src="' . get_field('profile_photo_002') . '" class="profile-photo" />';
								}

								?>
							</div>
						</div>
						<?php the_content(); ?>
					</div>
					<div class="columns small-12 medium-6">
						<!-->

						<div align="center" style="width: 300px; margin-top: 10px;">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- WP_FrontPage -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2958710770602891"
     data-ad-slot="9550975496"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- End WP_FrontPage -->	<br /><br />	
<a href="https://kinderart.com/submissions/"><img src="https://kinderart.com/wp-content/uploads/share_lesson_plans2.jpg" border="0" alt="Share Your Lesson Plans on KinderArt.com" /></a>
				



						</div>
						</div>
					</div>
				</div>

			<?php endwhile; endif; ?>	
			<div class="row" align="center">
				<br/>
				
<!--place ad here-->

<!--end place ad here-->


							
			</div>
		</div> <!-- end #main -->


	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>