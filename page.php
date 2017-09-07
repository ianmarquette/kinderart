<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<div id="main" class="large-8 medium-8 columns" role="main" data-equalizer>

			<?php
			if(is_page('Contact')){

				get_template_part( 'parts/loop', 'contact' ); 

			} else if (is_page('Submissions')){

				get_template_part( 'parts/loop', 'submissions' ); 

			} else if (is_page('art-lessons-by-medium')){

				get_template_part( 'parts/loop', 'art-lessons-by-medium' ); 

			} else if (is_page('Art Lessons By Grade')){

				get_template_part( 'parts/loop', 'art-lessons-by-grade' ); 

			} else if ( is_front_page() ) {
    
    			get_template_part( 'parts/loop', 'home' ); 

			} else {

				get_template_part( 'parts/loop', 'page' ); 

			} 
			?>

		</div> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>