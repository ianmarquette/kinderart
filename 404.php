<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<div id="main" class="large-8 medium-8 columns" role="main">

			<article id="content-not-found">

				<header class="article-header">
					<a href="https://kinderart.com"><img src="https://kinderart.com/wp-content/uploads/404picture-e1502023919596.jpg"></a><!--<h1>Page Not Found</h1>-->
				</header> <!-- end article header -->

				<section class="entry-content">
<br /><br />
					<p>It looks like the page you are looking for has been moved.

Perhaps you can return back to our <a href="https://kinderart.com">homepage</a> and see if you can find what you are looking for. Or, you can try using the search form below.
<br /><br />
<script>
  (function() {
    var cx = '006620646411491084757:slg7oxodwzc';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>

<h3>More Options</h3>
▶<a href="http://kinderart.com/art-lessons-by-grade/">Art Lessons by Age or Grade</a><br />
▶<a href="http://kinderart.com/art-lessons-by-medium/">Art Lessons by Theme/Discipline</a><br />
<br />
▶<a href="https://kinderart.com/category/art-lessons/architecture/">Architecture Lessons</a><br />
▶<a href="https://kinderart.com/category/art-lessons/artbook/">The Art Book</a><br />
▶<a href="https://kinderart.com/category/art-lessons/arthistory/">Art History Lessons</a><br />
▶<a href="https://kinderart.com/category/art-lessons/bulletin/">Bulletin Board Ideas</a><br />
▶<a href="https://kinderart.com/category/art-lessons/crafts/">Crafts</a><br />
▶<a href="https://kinderart.com/category/art-lessons/drama/">Drama Lessons</a> <br />
▶<a href="https://kinderart.com/category/art-lessons/drawing/">Drawing Lessons</a><br />
▶<a href="https://kinderart.com/category/art-lessons/multic/">Multicultural Art Ideas</a><br />
▶<a href="https://kinderart.com/category/art-lessons/music/">Music and Musical Instruments</a><br />
▶<a href="https://kinderart.com/category/art-lessons/painting/">Painting Lessons</a><br />
▶<a href="https://kinderart.com/category/art-lessons/printmaking/">Printmaking Lessons</a><br />
▶<a href="https://kinderart.com/category/art-lessons/recycle/">Recycling Crafts</a><br />
▶<a href="https://kinderart.com/category/art-lessons/sculpture/">Sculpture Lessons</a><br />
▶<a href="https://kinderart.com/category/art-lessons/s-t-e-m/">STEM Ideas</a><br />
▶<a href="https://kinderart.com/category/art-lessons/textiles/">Textiles Lessons</a><br />
▶<a href="https://kinderart.com/category/art-lessons/seasons/">Holiday Crafts and Special Days</a><br /><br />
▶<a href="https://kinderart.com/category/blog/">The KinderArt Blog</><br />
▶<a href="https://kinderart.com/category/kindercolor/">Colouring Pages</a><br />

<br /><br />
					
					<h5>What Else Can I Do?</h5>
<p>You could try looking at our <a href="http://kinderart.com/start-here/">Start Here</a> page, or you could visit our homepage. Click <a href="<?php echo home_url(); ?>">HERE</a> to go there now.</p>
					<p>Alternatively, here are our latest updates...</p>

					<ul>
						<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 4, 'format' => 'custom', 'before' => '<li>', 'after' => '</li>' ) ); ?>
					</ul>
					<!--<p>Or, you can search our site:</p>-->
				</section> <!-- end article section -->

				<!--<section class="search">
					<p><?php get_search_form(); ?></p>
				</section>--> <!-- end search section -->

			</article> <!-- end article -->

		</div> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>