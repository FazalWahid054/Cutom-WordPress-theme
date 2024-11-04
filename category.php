 <?php get_header(); ?>
<main>
    <h2>Category Page</h2>
<?php while(have_posts()){
the_post(); 


?>


<h1> <?php the_title(); ?> </a> </h1>
<div><?php the_post_thumbnail('medium'); ?> </div>
<div><?php the_excerpt(); ?></div>
<div><?php echo the_date(); ?> </div>
<a href="<?php the_permalink(); ?>">Read More </a>
<?php 

} ?>
</main>
<?php get_footer(); ?>
