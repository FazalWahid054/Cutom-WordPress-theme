 <?php

 get_header();

 ?>
<main>
    <h2> <?php the_title(); ?> </h2>
    <?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail('medium'); ?>
        </div>
    <?php endif; ?>
    <?php the_content(); ?>
    
</main>

<?php get_footer(); ?>
