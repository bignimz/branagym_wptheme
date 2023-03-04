<?php 

/*
* Template Name: Classes Page.
*
* @package branaeaglesgym
*/

get_header();
?>

<!-- Slider -->

<div class="page-header">
    <?php echo get_template_part('template-parts/header-image'); ?>
</div>

<div class="container py-5">
    <?php while(have_posts()) : the_post(); ?>
    <div class="" style="margin-top: 50px">
        <h2><?php echo the_title(); ?></h2>
        <p><?php echo the_content(); ?></p>
    </div>
    <?php endwhile; ?>
    <?php get_template_part('template-parts/hero-slider.php'); ?>
</div>

<?php get_footer(); ?>