<?php 
/*
Template Name: Home
*/
get_header(); ?>

<main>
    <h2>Welcome to My Custom Theme!</h2>

    <?php 
    // Custom query for the Custom Post Type
    $args = array(
        'post_type' => 'News', 
        'post_status' => 'publish',
        'posts_per_page' => 5, 
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <div class="custom-post">
                <h3><?php the_title(); ?></h3>
                <div><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        <?php endwhile;
        wp_reset_postdata(); 
    else : ?>
        <p>No news found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
