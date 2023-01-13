<?php get_header();
get_template_part( '/template-part/breadcrumb' ); ?>
		<?php if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				the_content();
			}
		} ?>
<?php get_footer() ?>
