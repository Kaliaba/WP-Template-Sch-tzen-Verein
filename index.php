<?php get_header(); ?>

<div>
		<h2 class="page-title"><?php single_post_title(); ?></h2>
		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>
</div> <!-- /.row -->

<?php get_footer(); ?>
