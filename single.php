<?php
get_header(); 

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        
        <div><?php the_post_thumbnail('medium'); ?></div>

        <div><?php the_content(); ?></div>
        
        <div><?php echo get_the_date(); ?></div>

        <div class="comment-section">
            <h2> Leave a comment </h2> 
            <?php comments_template(); ?>
           
        </div>

    <?php endwhile; 
else :
    echo '<p>No content found.</p>'; 
endif;

get_footer(); 
?>
