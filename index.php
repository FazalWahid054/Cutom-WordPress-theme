<?php get_header(); ?>
<div class="content-wrapper">
    <main>
        <h2>Blog Page</h2>
        <?php while(have_posts()) {
            the_post(); 
        ?>
            <h1><?php the_title(); ?></h1>
            <div><?php the_post_thumbnail('medium'); ?></div>
            <div><?php the_excerpt(); ?></div>
            <div><?php echo get_the_date(); ?></div>
            <a href="<?php the_permalink(); ?>">Read More</a>
        <?php 
        } 
        ?>
    </main>
    
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
