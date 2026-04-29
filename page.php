<?php get_header(); ?>
<div class="entry-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ( in_array( 'si-prose-page', get_body_class() ) ) : ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php endif; ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
