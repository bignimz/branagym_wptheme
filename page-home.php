<?php 

/*
* Template Name: Home Page.
*
* 
*/

get_header();
?>
<?php echo get_template_part('template-parts/hero-slider'); ?>
<div class="container py-5 home-main">
    <?php while(have_posts()) : the_post(); ?>
    <h2><?php echo the_title(); ?></h2>
    <p><?php echo the_content(); ?></p>
    <?php endwhile; ?>
    
</div>


<?php get_footer(); ?>