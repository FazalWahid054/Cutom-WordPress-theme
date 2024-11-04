<?php 
/*
Template Name: About
*/
get_header();
?>


<?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail('medium'); ?>
        </div>
    <?php endif; 
    
the_content(); 
get_footer();
?>