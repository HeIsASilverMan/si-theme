<?php
get_header();
$_is_prose = in_array( 'si-prose-page', get_body_class(), true );
?>
<?php if ( $_is_prose ) : ?><div class="entry-content"><?php endif; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if ( $_is_prose ) : ?><h1 class="entry-title"><?php the_title(); ?></h1><?php endif; ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
<?php if ( $_is_prose ) : ?></div><?php endif; ?>
<?php get_footer(); ?>
