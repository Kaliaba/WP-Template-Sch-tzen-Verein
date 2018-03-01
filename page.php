<?php get_header(); ?>
<h2 class="page-title"><?php the_title(); ?></h2>
<div class="page-content">
  <?php
  while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/page/content', 'page' );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

  endwhile; // End of the loop.
  ?>

</div><!-- /.page-content -->
<?php get_footer(); ?>
